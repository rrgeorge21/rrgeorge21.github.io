var $jscomp=$jscomp||{};$jscomp.scope={};$jscomp.findInternal=function(b,h,c){b instanceof String&&(b=String(b));for(var e=b.length,a=0;a<e;a++){var k=b[a];if(h.call(c,k,a,b))return{i:a,v:k}}return{i:-1,v:void 0}};$jscomp.ASSUME_ES5=!1;$jscomp.ASSUME_NO_NATIVE_MAP=!1;$jscomp.ASSUME_NO_NATIVE_SET=!1;$jscomp.defineProperty=$jscomp.ASSUME_ES5||"function"==typeof Object.defineProperties?Object.defineProperty:function(b,h,c){b!=Array.prototype&&b!=Object.prototype&&(b[h]=c.value)};
$jscomp.getGlobal=function(b){return"undefined"!=typeof window&&window===b?b:"undefined"!=typeof global&&null!=global?global:b};$jscomp.global=$jscomp.getGlobal(this);$jscomp.polyfill=function(b,h,c,e){if(h){c=$jscomp.global;b=b.split(".");for(e=0;e<b.length-1;e++){var a=b[e];a in c||(c[a]={});c=c[a]}b=b[b.length-1];e=c[b];h=h(e);h!=e&&null!=h&&$jscomp.defineProperty(c,b,{configurable:!0,writable:!0,value:h})}};
$jscomp.polyfill("Array.prototype.find",function(b){return b?b:function(b,c){return $jscomp.findInternal(this,b,c).v}},"es6","es3");var SV=window.SV||{};SV.ElasticSearchEssentials=SV.ElasticSearchEssentials||{};
(function(b,h,c,e){XF.QuickSearch=XF.extend(XF.QuickSearch,{__backup:{init:"svESS_init",options:"svESS_options"},options:{single:!1,multiple:",",acurl:"",minLength:2,jsonContainer:"results",autosubmit:!1,isAutoComplete:!0,searchEndpoint:null,autocompleteFilter:null,timeout:200},loadTimer:null,loadVal:"",results:null,input:null,$form:null,constraintLookup:{},$constraints:null,init:function(){this.options=b.extend(this.svESS_options,this.options);this.svESS_init();this.options.isAutoComplete&&(this.searchEndpoint=
XF.canonicalizeUrl("index.php?search/search&autocomplete=1"));if(this.searchEndpoint)if(this.input=this.$target.find('[name="keywords"]'),this.input.length||(this.input=b('[name="keywords"]')),this.input.length)if(this.$target.is("form")?this.$form=this.$target:this.$form=this.input.closest("form"),this.$form.length){var a=this.$target.find('[name="search_type"]');a.length||(a=b('[name="search_type"]'));if(a.length&&(a=a.val())&&this.options.autocompleteFilter&&-1===this.options.autocompleteFilter.indexOf(a)){console.log("search type ("+
a+") excluded from auto-complete");return}if(this.options.autocompleteFilter){this.$constraints=this.$target.find('select[name="constraints"]');var k=this.options.autocompleteFilter,f=this.constraintLookup;a=this.$constraints.find("option");a.each(function(a,c){c=b(c);var d=null;a=c.val();if(c.data("suggestOptout"))f[a]=!1;else{if(0!==a.length){try{d=JSON.parse(a)}catch(g){f[a]=!1;return}if(d&&"search_type"in d&&(c=d.search_type)&&-1===k.indexOf(c)){f[a]=!1;return}}f[a]=!0}});a.length||(this.constraintLookup=
null)}this.results=new SV.ElasticSearchEssentials.AutoCompleteResults({input:this.input,onInsert:XF.proxy(this,"addValue")});this.input.attr("autocomplete","off").on({keydown:XF.proxy(this,"keydown"),keyup:XF.proxy(this,"keyup"),paste:function(){setTimeout(XF.proxy(this,"paste"),0)}});this.$form.submit(XF.proxy(this,"hideResults"))}else console.log("Unable to find target form.");else console.log("Unable to find keywords input.");else console.error("No valid endpoint provided.")},canTriggerAutoComplete:function(){if(this.constraintLookup&&
this.$constraints){var a=this.$constraints.val();return void 0===a||!!this.constraintLookup[a]}return!0},paste:function(a){this.canTriggerAutoComplete()&&this.input.trigger("keydown")},keydown:function(a){if(this.results.isVisible()&&this.canTriggerAutoComplete()){var b=this.results,c=function(){a.preventDefault();a.stopPropagation();return!1};switch(a.which){case 40:return b.selectResult(1),c();case 38:return b.selectResult(-1),c();case 27:return this.hideResults(),c();case 13:return b.insertSelectedResult()?
c():!0}}},keyup:function(a){if(this.canTriggerAutoComplete()){if(this.results.isVisible())switch(a.which){case 13:this.hideResults();return;case 40:case 38:case 16:case 17:case 18:case 97:case 35:case 103:case 36:case 37:case 39:case 20:return}this.loadTimer&&clearTimeout(this.loadTimer);this.loadTimer=setTimeout(XF.proxy(this,"load"),this.options.timeout)}},blur:function(a){clearTimeout(this.loadTimer);setTimeout(XF.proxy(this,"hideResults"),this.options.timeout+50);this.xhr&&(this.xhr.abort(),this.xhr=
!1)},load:function(){var a=this.loadVal;this.loadTimer&&clearTimeout(this.loadTimer);this.loadVal=this.getPartialValue();""===this.loadVal?this.hideResults():this.loadVal===a||this.loadVal.length<this.options.minLength||(this.xhr&&this.xhr.abort(),this.xhr=XF.ajax("get",this.searchEndpoint,this.$form.serializeJSON(),XF.proxy(this,"showResults"),{global:!1,error:!1}))},hideResults:function(){this.results.hideResults()},showResults:function(a){this.xhr&&(this.xhr=!1);this.results.showResults(this.getPartialValue(),
a[this.options.jsonContainer],this.input)},addValue:function(a){a=a.attr("data-content-url");"string"===typeof a?XF.redirect(a):console.error("Invalid link provided: "+a)},getPartialValue:function(){var a=this.input.val();return b.trim(a)}});SV.ElasticSearchEssentials.AutoCompleteResults=XF.create({selectedResult:null,$results:!1,$searchRowToHide:null,$resultsCloser:!1,$scrollWatchers:null,resultsVisible:!1,resizeBound:!1,options:{},__construct:function(a){this.options=b.extend({input:null,onInsert:null,
clickAttacher:null},a)},isVisible:function(){return this.resultsVisible},hideResults:function(){this.resultsVisible=!1;this.$results&&this.$results.hide();this.$resultsCloser&&this.$resultsCloser.hide();this.$searchRowToHide&&this.$searchRowToHide.hide();this.stopScrollWatching()},stopScrollWatching:function(){this.$scrollWatchers&&(this.$scrollWatchers.off("scroll.autocomplete"),this.$scrollWatchers=null)},showResults:function(a,c,f,e){var k;if(c&&c.length){this.resultsVisible=!1;if(this.$results)this.$searchRowToHide&&
this.$searchRowToHide.hide(),this.$results.hide().empty(),this.$resultsCloser.hide().empty();else{var d=b(".uix_searchDropdown__menu--active");var g=b(".focus-wrap-search .focus-search-menu");var l=f.parent();l.is("li")?(l.after('<li style="display:none;"><div class="searc-acs" style="position: relative;"></div></li>'),this.$searchRowToHide=l.next(),d=this.$searchRowToHide.find(".searc-acs")):(d.length?(d.find(".menu-content").prepend('<div class="menu-row searc-acs" style="display:none; position: relative;"></div>'),
d=d.find(".searc-acs")):!g.is(":hidden")&&g.length?(g.prepend('<div class="menu-row" style="display:none"/>'),d=g.find(".menu-row").first()):(b('[data-xf-init="quick-search"] > h3 + div.menu-row').append('<div class="searc-acs" style="display:none; position: relative;"></div>'),d=b('[data-xf-init="quick-search"]').find(".searc-acs")),this.$searchRowToHide=d);this.$results=b("<ul />").css({display:"none"}).addClass("autoCompleteList svESE--autoComplete").attr("role","listbox").appendTo(d);this.$resultsCloser=
b('<a class="quickSearch-ResultCloser" role="button" tabindex="0" aria-label="'+XF.phrase("close")+'"></a>').css({position:"absolute",display:"none"}).appendTo(d).on({keydown:XF.proxy(this,"keydownCloser"),keyup:XF.proxy(this,"keyupCloser"),click:XF.proxy(this,"hideResults")});XF.setRelativeZIndex(this.$results,f,1);XF.setRelativeZIndex(this.$resultsCloser,this.$results,1)}a=new RegExp("("+XF.regexQuote(a)+")","i");for(k in c)c.hasOwnProperty(k)&&(d=c[k],g=b("<li />").css("cursor","pointer").attr("unselectable",
"on").attr("role","option").mouseenter(XF.proxy(this,"resultMouseEnter")),this.options.clickAttacher?this.options.clickAttacher(g,XF.proxy(this,"resultClick")):g.click(XF.proxy(this,"resultClick")),"string"==typeof d?g.html(XF.htmlspecialchars(d).replace(a,"<strong>$1</strong>")).data("autocomplete",d):(g.attr("data-content-url",d.contentUrl),g.html(XF.htmlspecialchars(d.text).replace(a,"<strong>$1</strong>")).data("autocomplete",d.text),"undefined"!==typeof d.icon?g.prepend(b('<img class="autoCompleteList-icon" />').attr("src",
d.icon)):"undefined"!==typeof d.iconHtml&&g.prepend(b('<span class="autoCompleteList-icon" />').html(d.iconHtml))),g.appendTo(this.$results));if(this.$results.children().length){this.selectResult(null,!0);if(!this.resizeBound)b(h).onPassive("resize",XF.proxy(this,"hideResults"));var n=this.$results,p=this.$resultsCloser,m=function(a){b.isFunction(a)&&(a=a(n,f));if(!a){var c=f.offset();a={top:-12,right:0};XF.isRtl()&&(a.right=b("html").width()-c.left-f.outerWidth(),a.left="auto")}return a};this.stopScrollWatching();
(c=f.parents().filter(function(){switch(b(this).css("overflow-x")){case "scroll":case "auto":return!0;default:return!1}}))&&c.length&&(c.on("scroll.autocomplete",function(){p.css(m(e))}),this.$scrollWatchers=c);this.$searchRowToHide&&this.$searchRowToHide.show();this.$results.show();this.$resultsCloser.css(m(e)).show();this.resultsVisible=!0}else this.hideResults()}else this.hideResults()},keydownCloser:function(a){var b=function(){a.preventDefault();a.stopPropagation();return!1};switch(a.which){case 38:return this.selectResult(null),
this.options.input&&this.options.input.focus(),this.hideResults(),b();case 9:case 40:return this.selectResult(1),this.options.input&&this.options.input.focus(),b()}},keyupCloser:function(a){switch(a.which){case 27:case 13:return this.selectResult(null),this.options.input&&this.options.input.focus(),this.hideResults(),a.preventDefault(),a.stopPropagation(),!1}},resultClick:function(a){a.stopPropagation();this.insertResult(b(a.currentTarget));this.hideResults()},resultMouseEnter:function(a){this.selectResult(b(a.currentTarget).index(),
!0)},selectResult:function(a,c){if(this.$results){var f=this.$results.children(),e=this.selectedResult=c?a:null===this.selectedResult?0<a?0:f.length-1:this.selectedResult+a;f.each(function(a){a===e?b(this).addClass("is-selected"):b(this).removeClass("is-selected")});if(0>e||e>=f.length)this.selectedResult=-1}},insertSelectedResult:function(){var a,c=!1;if(!this.resultsVisible)return!1;null!==this.selectedResult&&0<=this.selectedResult&&(a=this.$results.children().get(this.selectedResult))&&(this.insertResult(b(a)),
c=!0);this.hideResults();return c},insertResult:function(a){if(this.options.onInsert)this.options.onInsert(a)}});XF.Element.register("ese-autocomplete","XF.QuickSearch")})(jQuery,window,document);