var SV=window.SV||{};SV.ElasticSearchEssentials=SV.ElasticSearchEssentials||{};
(function(e,k,l,m){XF.QuickSearch=XF.extend(XF.QuickSearch,{__backup:{init:"svESS_init"},options:e.extend({},XF.QuickSearch.prototype.options,{single:!1,multiple:",",acurl:"",minLength:2,jsonContainer:"results",autosubmit:!1,isAutoComplete:!0,searchEndpoint:null,autocompleteFilter:null,timeout:200,displayTemplate:"{{{icon}}}{{{text}}}"}),loadTimer:null,loadVal:"",results:null,input:null,$form:null,constraintLookup:{},$constraints:null,init:function(){this.svESS_init();this.options.isAutoComplete&&
(this.searchEndpoint=XF.canonicalizeUrl("index.php?search/search&autocomplete=1"));if(this.searchEndpoint)if(this.input=this.$target.find('[name="keywords"]'),this.input.length||(this.input=e('[name="keywords"]')),this.input.length)if(this.$target.is("form")?this.$form=this.$target:this.$form=this.input.closest("form"),this.$form.length){var a=this.$target.find('[name="search_type"]');a.length||(a=e('[name="search_type"]'));if(a.length&&(a=a.val())&&this.options.autocompleteFilter&&-1===this.options.autocompleteFilter.indexOf(a)){console.error("search type ("+
a+") excluded from auto-complete");return}if(this.options.autocompleteFilter){this.$constraints=this.$target.find('select[name="constraints"]');var b=this.options.autocompleteFilter,c=this.constraintLookup;a=this.$constraints.find("option");a.each(function(a,f){f=e(f);var d=null;a=f.val();if(f.data("suggestOptout"))c[a]=!1;else{if(0!==a.length){try{d=JSON.parse(a)}catch(g){c[a]=!1;return}if(d&&"search_type"in d&&(f=d.search_type)&&-1===b.indexOf(f)){c[a]=!1;return}}c[a]=!0}});a.length||(this.constraintLookup=
null)}this.results=new SV.ElasticSearchEssentials.AutoCompleteResults({input:this.input,form:this.$form,onInsert:XF.proxy(this,"addValue"),displayTemplate:this.options.displayTemplate});this.input.attr("autocomplete","off").on({keydown:XF.proxy(this,"keydown"),keyup:XF.proxy(this,"keyup"),blur:XF.proxy(this,"blur"),paste:function(){setTimeout(XF.proxy(this,"paste"),0)}});this.$form.submit(XF.proxy(this,"hideResultsContainer"))}else console.error("Unable to find target form.");else console.error("Unable to find keywords input.");
else console.error("No valid endpoint provided.")},canTriggerAutoComplete:function(){if(this.constraintLookup&&this.$constraints){var a=this.$constraints.val();return void 0===a||!!this.constraintLookup[a]}return!0},paste:function(a){this.canTriggerAutoComplete()&&this.input.trigger("keydown")},keydown:function(a){if(this.results.isVisible()&&this.canTriggerAutoComplete()){var b=this.results,c=function(){a.preventDefault();a.stopPropagation();return!1};switch(a.which){case 40:return b.selectResult(1),
c();case 38:return b.selectResult(-1),c();case 27:return this.hideResultsContainer(),c();case 13:return b.insertSelectedResult()?c():!0}}},keyup:function(a){if(this.canTriggerAutoComplete()){if(this.results.isVisible())switch(a.which){case 13:this.hideResultsContainer();return;case 40:case 38:case 16:case 17:case 18:case 97:case 35:case 103:case 36:case 37:case 39:case 20:return}this.loadTimer&&clearTimeout(this.loadTimer);this.loadTimer=setTimeout(XF.proxy(this,"load"),this.options.timeout)}},blur:function(a){clearTimeout(this.loadTimer);
setTimeout(XF.proxy(this,"hideResults"),this.options.timeout+50);setTimeout(XF.proxy(this,"hideResultsContainer"),this.options.timeout+50);this.xhr&&(this.xhr.abort(),this.xhr=!1)},load:function(){var a=this.loadVal;this.loadTimer&&clearTimeout(this.loadTimer);this.loadVal=this.getPartialValue();""===this.loadVal?this.hideResultsContainer():this.loadVal===a||this.loadVal.length<this.options.minLength||(this.xhr&&this.xhr.abort(),this.xhr=XF.ajax("get",this.searchEndpoint,this.$form.serializeJSON(),
XF.proxy(this,"showResults"),{global:!1,error:!1}))},hideResultsContainer:function(){this.results.hideResultsContainer()},showResults:function(a){this.xhr&&(this.xhr=!1);this.results.showResults(this.getPartialValue(),a[this.options.jsonContainer],this.input)},addValue:function(a){a=a.attr("data-content-url");"string"===typeof a?XF.redirect(a):console.error("Invalid link provided: "+a)},getPartialValue:function(){var a=this.input.val();return e.trim(a)}});SV.ElasticSearchEssentials.AutoCompleteResults=
XF.create({selectedResult:null,$results:!1,$resultsContainer:null,$resultsCloser:!1,$scrollWatchers:null,resultsVisible:!1,resizeBound:!1,options:{},__construct:function(a){this.options=e.extend({input:null,form:null,onInsert:null,clickAttacher:null,searchResultsContainerClass:"searc-acs",displayTemplate:"{{{icon}}}{{{text}}}"},a)},isVisible:function(){return this.resultsVisible},createContainer:function(a,b){a=void 0===a?this.options.form:a;b=void 0===b?this.options.input:b;if(!this.$resultsContainer){var c=
b.parent().xfUniqueId();null===c&&(c=b.parent().xfUniqueId());this.$resultsContainer=e("<div />").css({display:"none",width:"100%",position:"relative"}).addClass(this.options.searchResultsContainerClass).attr("data-input-parent-selector","#"+c);c=!0;if(a.hasClass("menu-content")){var d=b.parent();d.hasClass("inputGroup")&&(d=b.parent().parent());c=!1;this.$resultsContainer.addClass("menu-row").insertAfter(d)}else a.hasClass("uix_searchForm")?(c=!1,d=b.closest(".uix_searchBar").find(".uix_searchDropdown__menu > form.menu-content"),
this.$resultsContainer.addClass("menu-row").prependTo(d)):a.parent().hasClass("focus-wrap-search")?(c=!1,d=a.find(".focus-search-menu"),this.$resultsContainer.addClass("menu-row").prependTo(d)):"svESE_searchBlock"===a.attr("data-widget-definition")&&(d=b.parent(),d.hasClass("inputGroup")||(c=!1,this.$resultsContainer.addClass("block-row").insertAfter(d)));c&&this.$resultsContainer.css({position:"absolute",display:"none",width:this.getContainerWidth(a,b)}).appendTo(l.body);if(!this.resizeBound)e(k).onPassive("resize",
XF.proxy(this,"hideResultsContainer"));a=e('<a class="quickSearch-ResultCloser" role="button" tabindex="0" aria-label="'+XF.phrase("close")+'"></a>').css({float:"right"}).appendTo(this.$resultsContainer).on({click:XF.proxy(this,"hideContainer")});XF.setRelativeZIndex(this.$resultsContainer,b,1);XF.setRelativeZIndex(a,this.$resultsContainer,1);this.resultsVisible=!1}},showContainer:function(a,b){if(!0!==this.resultsVisible)if(a=void 0===a?this.options.form:a,b=void 0===b?this.options.input:b,this.$resultsContainer){var c=
b.attr("data-apply-sv-ese-style-patches");if("true"===c||void 0===c){c=!0;if(a.hasClass("menu-content")){c=!1;var d=b.parent();d.hasClass("inputGroup")&&(d=b.parent().parent());this.$resultsContainer.attr("data-original-padding-top",XF.htmlspecialchars(this.$resultsContainer.css("padding-top"))).css({paddingTop:0});d.attr("data-original-padding-bottom",XF.htmlspecialchars(d.css("padding-bottom"))).css({paddingBottom:0})}else a.hasClass("uix_searchForm")?(c=!1,d=b.closest(".uix_searchBar"),d.find(".p-navgroup-link:visible").length&&
d.find(".uix_search--settings > i").trigger("click")):a.parent().hasClass("focus-wrap-search")?(c=!1,this.$resultsContainer.attr("data-original-padding",XF.htmlspecialchars(this.$resultsContainer.css("padding"))).css({padding:0}),this.$results.attr("data-original-box-shadow",XF.htmlspecialchars(this.$results.css("box-shadow"))).attr("data-original-margin-top",XF.htmlspecialchars(this.$results.css("margin-top"))).css({boxShadow:"none",marginTop:-1})):"svESE_searchBlock"===a.attr("data-widget-definition")&&
(d=b.parent(),d.hasClass("inputGroup")||(c=!1,this.$resultsContainer.attr("data-original-padding-top",XF.htmlspecialchars(this.$resultsContainer.css("padding-top"))).css({paddingTop:0}),d.attr("data-original-padding-bottom",XF.htmlspecialchars(this.$resultsContainer.css("padding-bottom"))).css({paddingBottom:0}),this.$results.attr("data-original-margin-top",XF.htmlspecialchars(this.$results.css("margin-top"))).css({marginTop:-1})));if(c){this.$resultsContainer.css({top:"",left:"",right:"",bottom:"",
width:this.getContainerWidth(a,b)});var f=this.$resultsContainer,h=function(){var a=b.offset(),c={top:a.top+b.outerHeight(),left:a.left};XF.isRtl()&&(c.right=e("html").width()-a.left-b.outerWidth(),c.left="auto");return c};this.stopScrollWatching();(a=b.parents().filter(function(){switch(e(this).css("overflow-x")){case "scroll":case "auto":return!0;default:return!1}}))&&a.length&&(a.on("scroll.autocomplete",function(){f.css(h())}),this.$scrollWatchers=a);this.$resultsContainer.css(h())}}this.$resultsContainer.show();
this.resultsVisible=!0}else console.error("Results container does not exist.")},hideContainer:function(a,b,c){if(!1!==this.resultsVisible)if(b=void 0===b?this.options.form:b,c=void 0===c?this.options.input:c,this.$resultsContainer){a=c.attr("data-apply-sv-ese-style-patches");if("true"===a||void 0===a)if(b.hasClass("menu-content")){var d=c.parent();d.hasClass("inputGroup")&&(d=c.parent().parent());b=this.$resultsContainer.attr("data-original-padding-top");a=d.attr("data-original-padding-bottom");if(void 0===
b||void 0===a){console.error("Original padding information missing.");return}this.$resultsContainer.css({paddingTop:b}).removeAttr("data-original-padding-top");d.css({paddingBottom:a}).removeAttr("data-original-padding-bottom")}else if(b.hasClass("uix_searchForm"))c=c.closest(".uix_searchBar"),c.find(".p-navgroup-link:visible").length&&c.find(".uix_search--settings > i").trigger("click");else if(b.parent().hasClass("focus-wrap-search")){b=this.$resultsContainer.attr("data-original-padding");if(void 0===
b){console.error("Original padding information missing.");return}a=this.$results.attr("data-original-box-shadow");if(void 0===a){console.error("Original box-shadow information missing.");return}c=this.$results.attr("data-original-margin-top");if(void 0===c){console.error("Original margin information missing");return}this.$resultsContainer.css({padding:b}).removeAttr("data-original-padding");this.$results.css({boxShadow:a,marginTop:c}).removeAttr("data-original-box-shadow")}else if("svESE_searchBlock"===
b.attr("data-widget-definition")){if(d=c.parent(),!d.hasClass("inputGroup")){b=this.$resultsContainer.attr("data-original-padding-top");a=d.attr("data-original-padding-bottom");if(void 0===b||void 0===a){console.error("Original padding information missing.");return}c=this.$results.attr("data-original-margin-top");if(void 0===c){console.error("Original margin information missing");return}this.$resultsContainer.css({paddingTop:b}).removeAttr("data-original-padding-top");d.css({paddingBottom:a}).removeAttr("data-original-padding-bottom");
this.$results.css({marginTop:c}).removeAttr("data-original-margin-top")}}else this.$resultsContainer.css({width:this.getContainerWidth(b,c)});this.$results.empty();this.$resultsContainer.hide();this.resultsVisible=!1}else console.error("Results container does not exist.")},hideResultsContainer:function(a,b,c){this.$results&&this.$results.empty();this.hideContainer(a,b,c);this.stopScrollWatching()},getContainerWidth:function(a,b){a=this.$resultsContainer.attr("data-input-parent-selector");if(void 0===
a)return b.outerWidth();a=e(a);return a.length?a.hasClass("inputGroup")?a.width():a.hasClass("xb-search--field")?a.parent().width():b.outerWidth():b.width()},stopScrollWatching:function(){this.$scrollWatchers&&(this.$scrollWatchers.off("scroll.autocomplete"),this.$scrollWatchers=null)},showResults:function(a,b,c){var d;if(b&&b.length){var f=this.options.form;this.$resultsContainer?this.hideContainer(null,f,c):this.createContainer(f,c);this.$results?this.$results.empty():this.$results=e("<ul />").css({width:"100%"}).addClass("autoCompleteList svESE--autoComplete").attr("role",
"listbox").appendTo(this.$resultsContainer);for(d in b)if(b.hasOwnProperty(d)){a=b[d];var h=e("<li />").css("cursor","pointer").attr("unselectable","on").attr("role","option").mouseenter(XF.proxy(this,"resultMouseEnter"));this.options.clickAttacher?this.options.clickAttacher(h,XF.proxy(this,"resultClick")):h.click(XF.proxy(this,"resultClick"));var g={icon:"",text:"",url:""};if("object"!==typeof a){console.error("Invalid result provided.");return}if("undefined"===typeof a.contentUrl){console.error("Missing content URL");
return}g.url=XF.htmlspecialchars(a.contentUrl);g.text=XF.htmlspecialchars(a.text);"undefined"!==typeof a.icon?g.icon=e('<img class="autoCompleteList-icon" />').attr("src",XF.htmlspecialchars(a.icon)):"undefined"!==typeof a.iconHtml&&(g.icon=e('<span class="autoCompleteList-icon" />').html(a.iconHtml));g.icon&&(g.icon=g.icon[0].outerHTML);h.attr("data-content-url",g.url);h.html(Mustache.render(this.options.displayTemplate,g)).appendTo(this.$results)}this.$results.children().length?(this.selectResult(null,
!0),this.showContainer(f,c)):this.hideResultsContainer()}else this.hideResultsContainer()},resultClick:function(a){a.stopPropagation();this.insertResult(e(a.currentTarget));this.hideResultsContainer()},resultMouseEnter:function(a){this.selectResult(e(a.currentTarget).index(),!0)},selectResult:function(a,b){if(this.$results){var c=this.$results.children(),d=this.selectedResult=b?a:null===this.selectedResult?0<a?0:c.length-1:this.selectedResult+a;c.each(function(a){a===d?e(this).addClass("is-selected"):
e(this).removeClass("is-selected")});if(0>d||d>=c.length)this.selectedResult=-1}},insertSelectedResult:function(){var a,b=!1;if(!this.resultsVisible)return!1;null!==this.selectedResult&&0<=this.selectedResult&&(a=this.$results.children().get(this.selectedResult))&&(this.insertResult(e(a)),b=!0);this.hideResultsContainer();return b},insertResult:function(a){if(this.options.onInsert)this.options.onInsert(a)}});XF.Element.register("ese-autocomplete","XF.QuickSearch")})(jQuery,window,document);