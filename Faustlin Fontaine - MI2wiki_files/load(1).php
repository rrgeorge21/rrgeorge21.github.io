window.mwPerformance=(window.performance&&performance.mark)?performance:{mark:function(){}};window.mwNow=(function(){var perf=window.performance,navStart=perf&&perf.timing&&perf.timing.navigationStart;return navStart&&typeof perf.now==='function'?function(){return navStart+perf.now();}:function(){return Date.now();};}());window.isCompatible=function(str){var ua=str||navigator.userAgent;return!!((function(){'use strict';return!this&&!!Function.prototype.bind&&!!window.JSON;}())&&'querySelector'in document&&'localStorage'in window&&'addEventListener'in window&&!(ua.match(/webOS\/1\.[0-4]|SymbianOS|Series60|NetFront|Opera Mini|S40OviBrowser|MeeGo|Android.+Glass|^Mozilla\/5\.0 .+ Gecko\/$|googleweblight/)||ua.match(/PlayStation/i)));};(function(){var NORLQ,script;if(!isCompatible()){document.documentElement.className=document.documentElement.className.replace(/(^|\s)client-js(\s|$)/,'$1client-nojs$2');NORLQ=window.NORLQ||[];while(NORLQ.length){NORLQ.shift()();}window.NORLQ={push:function(
fn){fn();}};window.RLQ={push:function(){}};return;}function startUp(){mw.config=new mw.Map(true);mw.loader.addSource({"local":"/mi2/wiki/load.php"});mw.loader.register([["site","0qeugux",[1]],["site.styles","0t3f18b",[],"site"],["noscript","132vrtk",[],"noscript"],["filepage","0w78y0v"],["user.groups","12u0vsl",[5]],["user","017xfqn",[6],"user"],["user.styles","1rxpcgx",[],"user"],["user.defaults","0qo270u"],["user.options","0bhc5ha",[7],"private"],["user.tokens","1smm7b7",[],"private"],["mediawiki.language.data","14i3h1c",[176]],["mediawiki.skinning.elements","1fvdj8y"],["mediawiki.skinning.content","1rrf39u"],["mediawiki.skinning.interface","1meo9ve"],["mediawiki.skinning.content.parsoid","02h10wr"],["mediawiki.skinning.content.externallinks","0ka0lpe"],["jquery.accessKeyLabel","0esjdo7",[25,133]],["jquery.appear","16i7czq"],["jquery.async","0uuqao0"],["jquery.autoEllipsis","124ryo1",[37]],["jquery.badge","1br12z8",[173]],["jquery.byteLength","1s1ui6h"],["jquery.byteLimit","1x8xsq5",
[21]],["jquery.checkboxShiftClick","0rnlz9k"],["jquery.chosen","07kwfye"],["jquery.client","0nmz6sj"],["jquery.color","0ifmvag",[27]],["jquery.colorUtil","16513in"],["jquery.confirmable","1p3wlrc",[177]],["jquery.cookie","109j7xp"],["jquery.expandableField","0zi6oid"],["jquery.farbtastic","0g7b910",[27]],["jquery.footHovzer","1vrbdyh"],["jquery.form","1ozf1v0"],["jquery.fullscreen","19w57w0"],["jquery.getAttrs","0m2eoyn"],["jquery.hidpi","1pgjzsl"],["jquery.highlightText","0jylkyl",[133]],["jquery.hoverIntent","18ez9ok"],["jquery.i18n","1qkio2t",[175]],["jquery.localize","1d4a8nb"],["jquery.makeCollapsible","0fkivz3"],["jquery.mockjax","1mt9hkv"],["jquery.mw-jump","067nl6l"],["jquery.placeholder","032306t"],["jquery.qunit","1gju8rh"],["jquery.spinner","0ndkng8"],["jquery.jStorage","1ghobi8"],["jquery.suggestions","1yuueu3",[37]],["jquery.tabIndex","02axqmq"],["jquery.tablesorter","1rjyfc0",[133,178]],["jquery.textSelection","12y3p4s",[25]],["jquery.throttle-debounce","16bp4fd"],[
"jquery.xmldom","1ygrn5i"],["jquery.tipsy","0n1aefd"],["jquery.ui.core","1jghkav",[56],"jquery.ui"],["jquery.ui.core.styles","1nfhcgk",[],"jquery.ui"],["jquery.ui.accordion","1h89o4l",[55,75],"jquery.ui"],["jquery.ui.autocomplete","15vm4zc",[64],"jquery.ui"],["jquery.ui.button","0eba0oa",[55,75],"jquery.ui"],["jquery.ui.datepicker","1r586gq",[55],"jquery.ui"],["jquery.ui.dialog","18yq212",[59,62,66,68],"jquery.ui"],["jquery.ui.draggable","14hzuyt",[55,65],"jquery.ui"],["jquery.ui.droppable","11phpeo",[62],"jquery.ui"],["jquery.ui.menu","184xzkj",[55,66,75],"jquery.ui"],["jquery.ui.mouse","0c058ql",[75],"jquery.ui"],["jquery.ui.position","177dygy",[],"jquery.ui"],["jquery.ui.progressbar","0g10i01",[55,75],"jquery.ui"],["jquery.ui.resizable","1t21e15",[55,65],"jquery.ui"],["jquery.ui.selectable","1wxyetn",[55,65],"jquery.ui"],["jquery.ui.slider","09i8lj7",[55,65],"jquery.ui"],["jquery.ui.sortable","1o2qwqj",[55,65],"jquery.ui"],["jquery.ui.spinner","0pvh2eb",[59],"jquery.ui"],[
"jquery.ui.tabs","10e0ujw",[55,75],"jquery.ui"],["jquery.ui.tooltip","1cv3te4",[55,66,75],"jquery.ui"],["jquery.ui.widget","1x9u0o7",[],"jquery.ui"],["jquery.effects.core","1tgcago",[],"jquery.ui"],["jquery.effects.blind","0qejyhx",[76],"jquery.ui"],["jquery.effects.bounce","0ybtlwr",[76],"jquery.ui"],["jquery.effects.clip","170otne",[76],"jquery.ui"],["jquery.effects.drop","0u1ch5q",[76],"jquery.ui"],["jquery.effects.explode","0rup6lv",[76],"jquery.ui"],["jquery.effects.fade","0u7qsf3",[76],"jquery.ui"],["jquery.effects.fold","1jftonf",[76],"jquery.ui"],["jquery.effects.highlight","1c0fhur",[76],"jquery.ui"],["jquery.effects.pulsate","16ek2k7",[76],"jquery.ui"],["jquery.effects.scale","16u1tjb",[76],"jquery.ui"],["jquery.effects.shake","0unsfwo",[76],"jquery.ui"],["jquery.effects.slide","0mehxp3",[76],"jquery.ui"],["jquery.effects.transfer","17fjttv",[76],"jquery.ui"],["json","12u0vsl"],["moment","1dufywb",[173]],["mediawiki.apihelp","0jlqyfg"],["mediawiki.template","1szev2o"],[
"mediawiki.template.mustache","08mt4d8",[93]],["mediawiki.template.regexp","1b73xpk",[93]],["mediawiki.apipretty","0coq12u"],["mediawiki.api","1f6vvj9",[150,9]],["mediawiki.api.category","0a16vl7",[138,97]],["mediawiki.api.edit","12yx9g1",[138,148]],["mediawiki.api.login","0mavqy5",[97]],["mediawiki.api.options","0icefxj",[97]],["mediawiki.api.parse","0n7ibpx",[97]],["mediawiki.api.upload","10o7scp",[99]],["mediawiki.api.user","1jelorp",[97]],["mediawiki.api.watch","1u3d762",[97]],["mediawiki.api.messages","0ulvdm5",[97]],["mediawiki.api.rollback","18li5qn",[97]],["mediawiki.content.json","0vsfolg"],["mediawiki.confirmCloseWindow","0wpoc00"],["mediawiki.debug","052pbde",[32]],["mediawiki.diff.styles","0zpm7co"],["mediawiki.feedback","1sv1lul",[138,127,273]],["mediawiki.feedlink","17t8zid"],["mediawiki.filewarning","14e6stj",[269]],["mediawiki.ForeignApi","1l2odff",[116]],["mediawiki.ForeignApi.core","12hxnvz",[97,265]],["mediawiki.helplink","0k9gn1r"],["mediawiki.hidpi","1ddzca3",[36],
null,null,"return'srcset'in new Image();"],["mediawiki.hlist","0lmuw5k"],["mediawiki.htmlform","12af4sz",[22,133]],["mediawiki.htmlform.checker","1jv69im",[52]],["mediawiki.htmlform.ooui","13q9fa2",[269]],["mediawiki.htmlform.styles","0oo9eu4"],["mediawiki.htmlform.ooui.styles","1oosycn"],["mediawiki.icon","1dpecs0"],["mediawiki.inspect","1wvz274",[21,133]],["mediawiki.messagePoster","1d6cm1i",[115]],["mediawiki.messagePoster.wikitext","0o7gsrj",[99,127]],["mediawiki.notification","0gdhvj1",[150]],["mediawiki.notify","0ax3rwt"],["mediawiki.notification.convertmessagebox","0k8umtk",[129]],["mediawiki.notification.convertmessagebox.styles","0d06zrl"],["mediawiki.RegExp","1o3a41h"],["mediawiki.pager.tablePager","17a7j27"],["mediawiki.searchSuggest","0acmhtv",[35,48,97]],["mediawiki.sectionAnchor","1cmiuc8"],["mediawiki.storage","0ukym00"],["mediawiki.Title","0r4x8wh",[21,150]],["mediawiki.Upload","053upqh",[103]],["mediawiki.ForeignUpload","03n7esr",[115,139]],[
"mediawiki.ForeignStructuredUpload.config","0msydx9"],["mediawiki.ForeignStructuredUpload","19l0y10",[141,140]],["mediawiki.Upload.Dialog","10de9r0",[144]],["mediawiki.Upload.BookletLayout","1olph4h",[139,177,262,91,271,273]],["mediawiki.ForeignStructuredUpload.BookletLayout","00owngf",[142,144,106,181,254,249]],["mediawiki.toc","146v113",[154]],["mediawiki.Uri","1q3hxra",[150,95]],["mediawiki.user","0aaq3un",[104,137,8]],["mediawiki.userSuggest","0d527nc",[48,97]],["mediawiki.util","0153wcw",[16,130]],["mediawiki.viewport","1q8grdi"],["mediawiki.checkboxtoggle","0o3d2zc"],["mediawiki.checkboxtoggle.styles","0s06w2q"],["mediawiki.cookie","0vbbblb",[29]],["mediawiki.toolbar","1ps9uw6",[51]],["mediawiki.experiments","0acbsqs"],["mediawiki.action.edit","1bm8mv3",[51,158,97,251]],["mediawiki.action.edit.styles","1784kjr"],["mediawiki.action.edit.collapsibleFooter","0pugbtu",[41,125,137]],["mediawiki.action.edit.preview","1japkkw",[33,46,51,97,111,177,269]],["mediawiki.action.history",
"0uxezev"],["mediawiki.action.history.styles","0xqb42h"],["mediawiki.action.history.diff","0zpm7co"],["mediawiki.action.view.dblClickEdit","1mvzmlm",[150,8]],["mediawiki.action.view.metadata","1qn4xyy"],["mediawiki.action.view.categoryPage.styles","1vwhr2c"],["mediawiki.action.view.postEdit","014g3n5",[177,129]],["mediawiki.action.view.redirect","11r1y8y",[25]],["mediawiki.action.view.redirectPage","0w31k0s"],["mediawiki.action.view.rightClickEdit","0r01g32"],["mediawiki.action.edit.editWarning","14pv7er",[51,109,177]],["mediawiki.action.view.filepage","1czh93u"],["mediawiki.language","12c9p58",[174,10]],["mediawiki.cldr","1ex8wkq",[175]],["mediawiki.libs.pluralruleparser","16a0g4k"],["mediawiki.language.init","167s0vz"],["mediawiki.jqueryMsg","0gpodk8",[173,150,8]],["mediawiki.language.months","1klkrxo",[173]],["mediawiki.language.names","02wxp1n",[176]],["mediawiki.language.specialCharacters","0qem0v5",[173]],["mediawiki.libs.jpegmeta","058t8gp"],["mediawiki.page.gallery","1kni9qy",[
52,183]],["mediawiki.page.gallery.styles","1i01vs0"],["mediawiki.page.gallery.slideshow","1jldjii",[138,97,271,286]],["mediawiki.page.ready","1w8zowj",[16,23,43]],["mediawiki.page.startup","1lu8vjc"],["mediawiki.page.patrol.ajax","1jqeqfm",[46,138,97]],["mediawiki.page.watch.ajax","1p6vkch",[138,105,177,186]],["mediawiki.page.rollback","1pjl2k6",[46,107]],["mediawiki.page.image.pagination","02u9lly",[46,150]],["mediawiki.rcfilters.filters.base.styles","1dyfus8"],["mediawiki.rcfilters.highlightCircles.seenunseen.styles","11hmfm9"],["mediawiki.rcfilters.filters.dm","04x1aqb",[21,147,101,148,265]],["mediawiki.rcfilters.filters.ui","1r8cc11",[41,193,268,280,282,284,286]],["mediawiki.special","1pa52x8"],["mediawiki.special.apisandbox.styles","0ox2bk4"],["mediawiki.special.apisandbox","0v2cns7",[41,97,177,252,268]],["mediawiki.special.block","0q6iqtw",[120,150]],["mediawiki.special.changecredentials.js","1mk8ei7",[97,122]],["mediawiki.special.changeslist","1rqnco1"],[
"mediawiki.special.changeslist.enhanced","04dqa9g"],["mediawiki.special.changeslist.legend","04wab74"],["mediawiki.special.changeslist.legend.js","12q02kn",[41,154]],["mediawiki.special.changeslist.visitedstatus","1onqecs"],["mediawiki.special.comparepages.styles","0nlik2p"],["mediawiki.special.contributions","0dy8jla",[177,249]],["mediawiki.special.edittags","0gnrpp8",[24]],["mediawiki.special.edittags.styles","0nnpxem"],["mediawiki.special.import","0awrr3h"],["mediawiki.special.movePage","1lbb42l",[247,251]],["mediawiki.special.movePage.styles","14i71ma"],["mediawiki.special.pageLanguage","0p2tiek",[269]],["mediawiki.special.pagesWithProp","0tpvow3"],["mediawiki.special.preferences","0ru2l24",[109,173,131]],["mediawiki.special.preferences.styles","1gat803"],["mediawiki.special.recentchanges","0vhos81"],["mediawiki.special.search","0m6tkm3",[260]],["mediawiki.special.search.commonsInterwikiWidget","1tuov14",[147,97,177]],["mediawiki.special.search.interwikiwidget.styles","0tnqzub"],[
"mediawiki.special.search.styles","1rel19s"],["mediawiki.special.undelete","0i5y5rv"],["mediawiki.special.unwatchedPages","1u7said",[138,105]],["mediawiki.special.upload","0p8z283",[46,138,97,109,177,181,224,93]],["mediawiki.special.upload.styles","0sf921o"],["mediawiki.special.userlogin.common.styles","1cn7wkv"],["mediawiki.special.userlogin.login.styles","0n3824k"],["mediawiki.special.userlogin.signup.js","0t6l9bp",[97,121,177]],["mediawiki.special.userlogin.signup.styles","0a3cuf7"],["mediawiki.special.userrights","0rzjfrr",[131]],["mediawiki.special.watchlist","1usl0hx",[138,105,177,269]],["mediawiki.special.watchlist.styles","0aw6kyj"],["mediawiki.special.version","1fqz90s"],["mediawiki.legacy.config","0wqx0bq"],["mediawiki.legacy.commonPrint","05exioz"],["mediawiki.legacy.protect","1uvodp9",[22]],["mediawiki.legacy.shared","07lgjhi"],["mediawiki.legacy.oldshared","1qj4aoj"],["mediawiki.legacy.wikibits","0k971lk"],["mediawiki.ui","1a1efho"],["mediawiki.ui.checkbox","13dijc9"],[
"mediawiki.ui.radio","11uz16p"],["mediawiki.ui.anchor","19e5ufu"],["mediawiki.ui.button","18hsc4b"],["mediawiki.ui.input","0y523gc"],["mediawiki.ui.icon","0q2lnq2"],["mediawiki.ui.text","1jcv3gj"],["mediawiki.widgets","1bqeg03",[22,37,138,97,248,271]],["mediawiki.widgets.styles","12qclka"],["mediawiki.widgets.DateInputWidget","1btytvx",[250,91,271]],["mediawiki.widgets.DateInputWidget.styles","1upl83f"],["mediawiki.widgets.visibleByteLimit","1kw6gqc",[22,269]],["mediawiki.widgets.datetime","1jz8ops",[269,287,288]],["mediawiki.widgets.CategorySelector","12u0vsl",[254]],["mediawiki.widgets.CategoryMultiselectWidget","0wg0tog",[115,138,271]],["mediawiki.widgets.SelectWithInputWidget","0g4h2jn",[256,271]],["mediawiki.widgets.SelectWithInputWidget.styles","0vc6uv0"],["mediawiki.widgets.MediaSearch","047egxj",[115,138,271]],["mediawiki.widgets.UserInputWidget","1epbcgx",[97,271]],["mediawiki.widgets.UsersMultiselectWidget","06nv93w",[97,271]],["mediawiki.widgets.SearchInputWidget","1j82ytt",
[135,247]],["mediawiki.widgets.SearchInputWidget.styles","15ma0ke"],["mediawiki.widgets.StashedFileWidget","08uv8i8",[97,269]],["es5-shim","12u0vsl"],["dom-level2-shim","12u0vsl"],["oojs","0bv7aaf"],["mediawiki.router","1ndjhbw",[267]],["oojs-router","09d9vxe",[265]],["oojs-ui","12u0vsl",[272,271,273]],["oojs-ui-core","16b2zfu",[173,265,270,277,278,283,274,275]],["oojs-ui-core.styles","1mdua9l"],["oojs-ui-widgets","0k8wmt8",[269,279,287,288]],["oojs-ui-toolbars","0f89uc2",[269,288]],["oojs-ui-windows","0z5bxqu",[269,288]],["oojs-ui.styles.indicators","1bwn1mq"],["oojs-ui.styles.textures","0gpshvr"],["oojs-ui.styles.icons-accessibility","1h14j0e"],["oojs-ui.styles.icons-alerts","1u2734g"],["oojs-ui.styles.icons-content","0fwpapt"],["oojs-ui.styles.icons-editing-advanced","1hs9n47"],["oojs-ui.styles.icons-editing-core","0assivq"],["oojs-ui.styles.icons-editing-list","1ds42sy"],["oojs-ui.styles.icons-editing-styling","00csnax"],["oojs-ui.styles.icons-interactions","01yrktt"],[
"oojs-ui.styles.icons-layout","0hc50gy"],["oojs-ui.styles.icons-location","13fpbox"],["oojs-ui.styles.icons-media","0z6yrbr"],["oojs-ui.styles.icons-moderation","00b1c92"],["oojs-ui.styles.icons-movement","0cg0lw9"],["oojs-ui.styles.icons-user","04symcr"],["oojs-ui.styles.icons-wikimedia","1hzcsnj"],["ext.confirmEdit.editPreview.ipwhitelist.styles","058xi4j"],["skins.cologneblue","0qreweq"],["skins.modern","1mrtn9i"],["skins.monobook.styles","037y3r0"],["skins.vector.styles","0vyda7l"],["skins.vector.styles.experimental.print","17x6dq6"],["skins.vector.styles.responsive","102ts0q"],["skins.vector.js","0sdoe3y",[49,52]],["ext.Tabber","11l2fk7"]]);;mw.config.set({"wgLoadScript":"/mi2/wiki/load.php","debug":!1,"skin":"monobook","stylepath":"/mi2/wiki/skins","wgUrlProtocols":
"bitcoin\\:|ftp\\:\\/\\/|ftps\\:\\/\\/|geo\\:|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|magnet\\:|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|redis\\:\\/\\/|sftp\\:\\/\\/|sip\\:|sips\\:|sms\\:|ssh\\:\\/\\/|svn\\:\\/\\/|tel\\:|telnet\\:\\/\\/|urn\\:|worldwind\\:\\/\\/|xmpp\\:|\\/\\/","wgArticlePath":"/mi2/wiki/index.php/$1","wgScriptPath":"/mi2/wiki","wgScriptExtension":".php","wgScript":"/mi2/wiki/index.php","wgSearchType":null,"wgVariantArticlePath":!1,"wgActionPaths":{},"wgServer":"http://gubaba.org","wgServerName":"gubaba.org","wgUserLanguage":"en","wgContentLanguage":"en","wgTranslateNumerals":!0,"wgVersion":"1.30.0","wgEnableAPI":!0,"wgEnableWriteAPI":!0,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"MI2wiki","5":"MI2wiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":
"Help talk","14":"Category","15":"Category talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"mi2wiki":4,"mi2wiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgContentNamespaces":[0],"wgSiteName":"MI2wiki","wgDBname":"mi2wiki","wgExtraSignatureNamespaces":[],"wgAvailableSkins":{"cologneblue":"CologneBlue","modern":"Modern","monobook":"MonoBook","vector":"Vector","fallback":"Fallback","apioutput":"ApiOutput"},"wgExtensionAssetsPath":"/mi2/wiki/extensions","wgCookiePrefix":"mi2wiki","wgCookieDomain":"","wgCookiePath":"/","wgCookieExpiration":2592000,"wgResourceLoaderMaxQueryLength":2000,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$&'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgIllegalFileChars":":/\\\\","wgResourceLoaderStorageVersion":1,
"wgResourceLoaderStorageEnabled":!0,"wgForeignUploadTargets":["local"],"wgEnableUploads":!0});var RLQ=window.RLQ||[];while(RLQ.length){RLQ.shift()();}window.RLQ={push:function(fn){fn();}};window.NORLQ={push:function(){}};}window.mediaWikiLoadStart=mwNow();mwPerformance.mark('mwLoadStart');script=document.createElement('script');script.src="/mi2/wiki/load.php?debug=false&lang=en&modules=jquery%2Cmediawiki&only=scripts&skin=monobook&version=0jg9nw0";script.onload=script.onreadystatechange=function(){if(!script.readyState||/loaded|complete/.test(script.readyState)){script.onload=script.onreadystatechange=null;script=null;startUp();}};document.getElementsByTagName('head')[0].appendChild(script);}());