var isCompatible=function(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;};var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/load.php","apiScript":"/api.php"},"common":{"loadScript":"https://slot1-images.wikia.nocookie.net/__load/-/","apiScript":"/api.php"}});mw.loader.register([["site",1584356400,[],"site"],["noscript",1202225400,[],"noscript"],["startup",1584376200,[],"startup"],["user",1202225400,[],"user"],["user.groups",1202225400,[],"user"],["user.options",1584376200,[],"private"],["user.cssprefs",1584376200,["mediawiki.user"],"private"],["user.tokens",1202225400,[],"private"],["filepage",1202225400],["mediawiki.language.data",1584046800,["mediawiki.language.init"]],["skins.monobook",1584372600,[],null,"common"],["jquery",1584372600,[],null,"common"],["jquery.appear",1584372600,[],null,"common"],["jquery.arrowSteps",1584372600,[],null,"common"],[
"jquery.async",1584372600,[],null,"common"],["jquery.autoEllipsis",1584372600,["jquery.highlightText"],null,"common"],["jquery.byteLength",1584372600,[],null,"common"],["jquery.byteLimit",1584372600,["jquery.byteLength"],null,"common"],["jquery.checkboxShiftClick",1584372600,[],null,"common"],["jquery.client",1584372600,[],null,"common"],["jquery.collapsibleTabs",1584372600,[],null,"common"],["jquery.color",1584372600,["jquery.colorUtil"],null,"common"],["jquery.colorUtil",1584372600,[],null,"common"],["jquery.cookie",1584372600,[],null,"common"],["jquery.delayedBind",1584372600,[],null,"common"],["jquery.expandableField",1584372600,["jquery.delayedBind"],null,"common"],["jquery.farbtastic",1584372600,["jquery.colorUtil"],null,"common"],["jquery.footHovzer",1584372600,[],null,"common"],["jquery.form",1584372600,[],null,"common"],["jquery.getAttrs",1584372600,[],null,"common"],["jquery.highlightText",1584372600,[],null,"common"],["jquery.hoverIntent",1584372600,[],null,"common"],[
"jquery.json",1584372600,[],null,"common"],["jquery.localize",1584372600,[],null,"common"],["jquery.makeCollapsible",1584372600,[],null,"common"],["jquery.messageBox",1584372600,[],null,"common"],["jquery.mockjax",1584372600,[],null,"common"],["jquery.mw-jump",1584372600,[],null,"common"],["jquery.mwExtension",1584372600,[],null,"common"],["jquery.placeholder",1584372600,[],null,"common"],["jquery.qunit",1584372600,[],null,"common"],["jquery.qunit.completenessTest",1584372600,["jquery.qunit"],null,"common"],["jquery.spinner",1584372600,[],null,"common"],["jquery.suggestions",1584372600,["jquery.autoEllipsis"],null,"common"],["jquery.tabIndex",1584372600,[],null,"common"],["jquery.tablesorter",1584372600,["jquery.mwExtension"],null,"common"],["jquery.textSelection",1584372600,[],null,"common"],["jquery.validate",1584372600,[],null,"common"],["jquery.xmldom",1584372600,[],null,"common"],["jquery.tipsy",1584372600,[],null,"common"],["jquery.ui.core",1584372600,["jquery"],"jquery.ui",
"common"],["jquery.ui.widget",1584372600,[],"jquery.ui","common"],["jquery.ui.mouse",1584372600,["jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.position",1584372600,[],"jquery.ui","common"],["jquery.ui.draggable",1584372600,["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.droppable",1584372600,["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"],"jquery.ui","common"],["jquery.ui.resizable",1584372600,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.selectable",1584372600,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.sortable",1584372600,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.accordion",1584372600,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.autocomplete",1584372600,["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui","common"],[
"jquery.ui.button",1584372600,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.datepicker",1584372600,["jquery.ui.core"],"jquery.ui","common"],["jquery.ui.dialog",1584372600,["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui","common"],["jquery.ui.progressbar",1584372600,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.slider",1584372600,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.tabs",1584372600,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.effects.core",1584372600,["jquery"],"jquery.ui","common"],["jquery.effects.blind",1584372600,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.bounce",1584372600,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.clip",1584372600,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.drop",1584372600,[
"jquery.effects.core"],"jquery.ui","common"],["jquery.effects.explode",1584372600,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.fade",1584372600,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.fold",1584372600,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.highlight",1584372600,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.pulsate",1584372600,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.scale",1584372600,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.shake",1584372600,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.slide",1584372600,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.transfer",1584372600,["jquery.effects.core"],"jquery.ui","common"],["mediawiki",1584372600,[],null,"common"],["mediawiki.api",1584372600,["mediawiki.util"],null,"common"],["mediawiki.api.category",1584372600,["mediawiki.api","mediawiki.Title"],null,"common"],["mediawiki.api.edit",
1584372600,["mediawiki.api","mediawiki.Title"],null,"common"],["mediawiki.api.parse",1584372600,["mediawiki.api"],null,"common"],["mediawiki.api.titleblacklist",1584372600,["mediawiki.api","mediawiki.Title"],null,"common"],["mediawiki.api.watch",1584372600,["mediawiki.api","mediawiki.user"],null,"common"],["mediawiki.debug",1584372600,["jquery.footHovzer"],null,"common"],["mediawiki.debug.init",1584372600,["mediawiki.debug"],null,"common"],["mediawiki.feedback",1584372600,["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"],null,"common"],["mediawiki.htmlform",1584372600,[],null,"common"],["mediawiki.Title",1584372600,["jquery.byteLength","mediawiki.util"],null,"common"],["mediawiki.Uri",1584372600,[],null,"common"],["mediawiki.user",1584372600,["jquery.cookie"],null,"common"],["mediawiki.util",1584372600,["jquery.client","jquery.cookie","jquery.messageBox","jquery.mwExtension"],null,"common"],["mediawiki.action.edit",1584372600,["jquery.textSelection",
"jquery.byteLimit"],null,"common"],["mediawiki.action.view.redirect",1584372600,["jquery.client"],null,"common"],["mediawiki.action.history",1584372600,["jquery.ui.button"],"mediawiki.action.history","common"],["mediawiki.action.history.diff",1584372600,[],"mediawiki.action.history","common",["sass"]],["mediawiki.action.view.dblClickEdit",1584372600,["mediawiki.util","mediawiki.page.startup"],null,"common"],["mediawiki.action.view.metadata",1584372600,[],null,"common"],["mediawiki.action.view.rightClickEdit",1584372600,[],null,"common"],["mediawiki.action.watch.ajax",1584372600,["mediawiki.api.watch","mediawiki.util"],null,"common"],["mediawiki.language",1584372600,["mediawiki.language.data","mediawiki.cldr"],null,"common"],["mediawiki.cldr",1584372600,["mediawiki.libs.pluralruleparser"],null,"common"],["mediawiki.libs.pluralruleparser",1584372600,[],null,"common"],["mediawiki.language.init",1584372600,[],null,"common"],["mediawiki.jqueryMsg",1584372600,["mediawiki.util",
"mediawiki.language"],null,"common"],["mediawiki.language.months",1584372600,["mediawiki.language"],null,"common"],["mediawiki.language.names",1578595500,["mediawiki.language.init"]],["mediawiki.libs.jpegmeta",1584372600,[],null,"common"],["mediawiki.page.ready",1584372600,["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.mw-jump","mediawiki.util"],null,"common"],["mediawiki.page.startup",1584372600,["jquery.client","mediawiki.util"],null,"common"],["mediawiki.special",1584372600,[],null,"common"],["mediawiki.special.block",1584372600,["mediawiki.util"],null,"common"],["mediawiki.special.changeemail",1584372600,["mediawiki.util"],null,"common"],["mediawiki.special.changeslist",1584372600,["jquery.makeCollapsible"],null,"common"],["mediawiki.special.movePage",1584372600,["jquery.byteLimit"],null,"common"],["mediawiki.special.preferences",1584372600,[],null,"common"],["mediawiki.special.recentchanges",1584372600,["mediawiki.special"],null,"common"],["mediawiki.special.search"
,1584372600,[],null,"common"],["mediawiki.special.undelete",1584372600,[],null,"common"],["mediawiki.special.upload",1584372600,["mediawiki.libs.jpegmeta","mediawiki.util"],null,"common"],["mediawiki.special.javaScriptTest",1584372600,["jquery.qunit"],null,"common"],["test.sinonjs",1584372600,[],null,"common"],["mediawiki.tests.qunit.testrunner",1584376200,["jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready","test.sinonjs"],null,"common"],["mediawiki.legacy.ajax",1584372600,["mediawiki.util","mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.commonPrint",1584372600,[],null,"common"],["mediawiki.legacy.config",1584372600,["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.IEFixes",1584372600,["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.mwsuggest",1584372600,["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.preview",1584372600,["mediawiki.legacy.wikibits"],null,"common"],[
"mediawiki.legacy.protect",1584372600,["mediawiki.legacy.wikibits","jquery.byteLimit"],null,"common"],["mediawiki.legacy.shared",1584372600,[],null,"common"],["mediawiki.legacy.upload",1584372600,["jquery.spinner","mediawiki.util"],null,"common"],["mediawiki.legacy.wikibits",1584372600,["mediawiki.util","wikia.importScript"],null,"common"],["mediawiki.legacy.wikiprintable",1584372600,[],null,"common"],["amd",1584372600,[],null,"common"],["amd.shared",1202225400,["wikia.cache","wikia.cookies","wikia.document","wikia.geo","wikia.fbLocale","wikia.loader","wikia.location","wikia.log","wikia.mw","wikia.nirvana","wikia.querystring","wikia.history","wikia.throbber","wikia.thumbnailer","wikia.tracker","wikia.window","wikia.abTest","underscore"],null,"common"],["wikia.window",1584372600,["amd"],null,"common"],["wikia.cache",1584372600,["amd","wikia.window"],null,"common"],["wikia.document",1584372600,["amd","wikia.window"],null,"common"],["wikia.location",1584372600,["amd","wikia.window"],null,
"common"],["wikia.nirvana",1584372600,["amd"],null,"common"],["wikia.mw",1584372600,["amd","wikia.window"],null,"common"],["wikia.fbLocale",1584372600,["wikia.geo"],null,"common"],["wikia.loader",1584372600,["amd","wikia.window","wikia.mw","wikia.nirvana","wikia.fbLocale"],null,"common"],["wikia.querystring",1584372600,["amd","wikia.window"],null,"common"],["wikia.history",1584372600,["amd","wikia.window"],null,"common"],["wikia.cookies",1584372600,["amd","wikia.window"],null,"common"],["wikia.log",1584372600,["amd","wikia.querystring","wikia.cookies"],null,"common"],["wikia.abTest",1584372600,["amd","wikia.window"],null,"common"],["wikia.thumbnailer",1584372600,["amd"],null,"common"],["wikia.geo",1584372600,["amd","wikia.cookies","wikia.querystring"],null,"common"],["wikia.tracker",1584372600,["amd","wikia.window","wikia.log","wikia.tracker.stub"],null,"common"],["wikia.tracker.stub",1584372600,["amd","wikia.window"],null,"common"],["wikia.throbber",1584372600,["amd"],null,"common"],[
"underscore",1584372600,["amd"],null,"common"],["wikia.aim",1584372600,["amd"],null,"common"],["wikia.uniqueId",1584372600,["amd"],null,"common"],["wikia.modernizr",1584376200,["amd","modernizr"],null,"common"],["wikia.mustache",1584372600,["amd"],null,"common"],["wikia.underscore",1584372600,["amd","wikia.window"],null,"common"],["wikia.stickyElement",1584372600,["amd","wikia.window","wikia.document","wikia.underscore"],null,"common"],["wikia.jquery.ui",1584372600,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse","jquery.ui.position","jquery.ui.draggable","jquery.ui.droppable","jquery.ui.sortable","jquery.ui.autocomplete","jquery.ui.slider","jquery.ui.tabs","jquery.ui.datepicker"],"jquery.ui","common"],["jquery.mustache",1584372600,["wikia.mustache"],null,"common"],["jquery.autocomplete",1584372600,[],null,"common"],["jquery.dataTables",1584372600,[],null,"common"],["jquery.timeago",1584372600,[],null,"common"],["wikia.yui",1584372600,[],"yui","common"],["wikia.importScript",
1584372600,[],null,"common"],["wikia.article.edit",1584372600,["wikia.tracker"],null,"common"],["jquery.uls.data",1584372600],["jquery.i18n",1584372600,["mediawiki.libs.pluralruleparser"]],["ext.math.mathjax",1584372600,[],"ext.math.mathjax"],["ext.math.mathjax.enabler",1584372600],["ext.wikia.TimeAgoMessaging",1584372600,["jquery.timeago","mediawiki.jqueryMsg"]],["ext.designSystem",1202225400],["ext.bannerNotifications",1202225400],["ext.quickTools",1584372600,["mediawiki.user","mediawiki.util"]],["ext.createUserPage",1584372600,["mediawiki.user","mediawiki.util"]],["ext.quickAdopt",1584372600,["mediawiki.util","ext.createUserPage"]],["ext.wikia.authPreferences",1584372600],["ext.wikia.facebookTags",1584372600,[],null,"common"],["ext.wikia.multiLookup",1584372600],["ext.wikia.ListGlobalUsers",1584372600],["ext.geshi.local",1202225400],["ext.siteWideMessages.anon",1584372600],["ext.scribunto",1584372600],["ext.scribunto.edit",1584372600,["ext.scribunto","mediawiki.api"]],[
"ext.wikia.InfoboxBuilder",1584372600,[],null,"local",["sass"]],["ext.categoryTree",1584372600],["ext.categoryTree.css",1584372600],["ext.checkUser",1584372600,["mediawiki.util"]],["ext.cite",1584372600,["jquery.tooltip"]],["jquery.tooltip",1584372600],["ext.wikia.ajaxpoll",1584372600,[],null,"local",["sass"]],["ext.wikia.WMU",1584372600,["wikia.yui","jquery.aim"]],["ext.wikia.LinkSuggest",1584372600,["jquery.ui.autocomplete"]],["ext.wikia.ListUsers",1584372600,["jquery.ui.autocomplete","jquery.dataTables"],null,"local",["sass"]],["ext.abuseFilter",1584372600],["ext.abuseFilter.edit",1584372600,["jquery.textSelection","jquery.spinner"]],["ext.abuseFilter.tools",1584372600,["jquery.spinner"]],["ext.abuseFilter.examine",1584372600],["ext.tabber",1584372600],["ext.nuke",1584372600],["ext.userLogin",1202225400],["ext.UserProfilePage.Lightbox",1584372600,["mediawiki.jqueryMsg"],null,"local",["sass"]],["ext.renameuser.modal",1584372600,["mediawiki.util"]],["ext.Chat2.ChatBanModal",1584372600
],["ext.Chat2.ChatWidget",1202225400],["ext.Chat2.ChatBanList",1584372600,["jquery.dataTables","wikia.nirvana"],null,"local",["sass"]],["ext.Chat2",1202225400,["mediawiki.jqueryMsg"]],["ext.AdminDashboard",1202225400],["wikia.ext.abtesting",1562320800,[],null,"common"],["wikia.ext.abt3sting",1562320800,[],null,"common"],["wikia.ext.abtest",1584372600],["wikia.ext.abtesting.edit.styles",1584372600,[],null,"local",["sass"]],["wikia.ext.abtesting.edit",1584372600],["oojs",1584372600],["oojs-ui",1584372600,["oojs","oojs-ui.styles"]],["oojs-ui.styles",1584372600],["jquery.visibleText",1584372600],["Base64.js",1584372600],["easy-deflate.core",1584372600,["Base64.js"]],["easy-deflate.deflate",1584372600,["easy-deflate.core"]],["unicodejs",1584372600],["unicodejs.wordbreak",1202225400,["unicodejs"]],["papaparse",1584372600],["rangefix",1584372600],["ext.visualEditor.viewPageTarget.init",1584372600,["jquery.client","mediawiki.page.startup","mediawiki.Title","mediawiki.Uri","mediawiki.util",
"user.options","ext.visualEditor.track"]],["ext.visualEditor.viewPageTarget.noscript",1584372600],["ext.visualEditor.viewPageTarget",1584372600,["ext.visualEditor.base","ext.visualEditor.mediawiki","ext.visualEditor.core.desktop","jquery.placeholder","mediawiki.feedback","mediawiki.jqueryMsg","mediawiki.util"]],["ext.visualEditor.mobileViewTarget",1584372600,["ext.visualEditor.base","ext.visualEditor.mediawiki.mobile","ext.visualEditor.core.mobile","ext.visualEditor.mwimage.core"]],["ext.visualEditor.ve",1584372600],["ext.visualEditor.track",1584372600,["ext.visualEditor.ve"]],["ext.visualEditor.base",1584372600,["oojs","oojs-ui","unicodejs","rangefix","ext.visualEditor.ve"]],["ext.visualEditor.mediawiki",1584372600,["jquery.visibleText","jquery.byteLength","jquery.client","mediawiki.api","mediawiki.language","mediawiki.Title","mediawiki.Uri","mediawiki.user","mediawiki.util","easy-deflate.deflate","user.options","user.tokens","ext.visualEditor.base","ext.visualEditor.track"]],[
"ext.visualEditor.mediawiki.mobile",1584372600,["ext.visualEditor.mediawiki","ext.visualEditor.core.mobile"]],["ext.visualEditor.standalone",1584372600,["ext.visualEditor.base","jquery.i18n"]],["ext.visualEditor.data",1584372600,["ext.visualEditor.base"]],["ext.visualEditor.core",1584372600,["unicodejs","papaparse","jquery.uls.data","ext.visualEditor.base"]],["ext.visualEditor.core.desktop",1584372600,["ext.visualEditor.core"]],["ext.visualEditor.core.mobile",1584372600,["ext.visualEditor.core"]],["ext.visualEditor.mwcore",1584372600,["ext.visualEditor.core","mediawiki.Title","mediawiki.action.history.diff","mediawiki.user","mediawiki.util","mediawiki.jqueryMsg","jquery.autoEllipsis","jquery.byteLimit"]],["ext.visualEditor.mwformatting",1584372600,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwimage.core",1584372600,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwimage",1584372600,["ext.visualEditor.mwimage.core"]],["ext.visualEditor.mwlink",1584372600,["ext.visualEditor.mwcore"]]
,["ext.visualEditor.mwmeta",1584372600,["ext.visualEditor.mwcore","ext.visualEditor.mwlink"]],["ext.visualEditor.mwreference.core",1584372600,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwreference",1584372600,["ext.visualEditor.mwreference.core","ext.visualEditor.mwtransclusion"]],["ext.visualEditor.mwtransclusion.core",1584372600,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwtransclusion",1584372600,["ext.visualEditor.mwtransclusion.core","mediawiki.jqueryMsg","mediawiki.language"]],["ext.visualEditor.language",1584372600,["ext.visualEditor.core","mediawiki.language.names"]],["ext.visualEditor.mwalienextension",1584372600,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwgallery",1584372600,["ext.visualEditor.mwcore"]],["ext.visualEditor.experimental",1202225400,["ext.visualEditor.language","ext.visualEditor.mwalienextension"]],["ext.visualEditor.wikia.viewPageTarget.init",1584372600,["jquery.client","jquery.byteLength","mediawiki.Title","mediawiki.Uri","mediawiki.util",
"user.options","ext.visualEditor.track"]],["ext.visualEditor.wikia.oasisViewPageTarget",1584372600,["ext.visualEditor.viewPageTarget"]],["ext.visualEditor.wikia.core",1584372600,["ext.visualEditor.core.desktop","ext.visualEditor.mwimage","ext.visualEditor.mwmeta"]],["ext.closeMyAccount",1584372600,[],null,"local",["sass"]],["ext.TwitterTag",1584372600],["ext.wikia.VKTag",1584372600],["ext.ArticleVideo.jw",1584372600],["ext.fandomComMigration",1202225400],["ext.wikiaOrgMigration",1202225400],["ext.wikia.CategoryPage3.categoryLayoutSelector.scripts",1584372600],["ext.wikia.AffiliateService",1584372600,[],null,"local",["sass"]],["ext.hydralytics.styles",1584372600,[],null,"local",["sass"]],["ext.hydralytics.scripts",1584372600,["mediawiki.language"]],["ext.maps.common",1584372600,[],"ext.maps"],["ext.maps.coord",1584372600,[],"ext.maps"],["ext.maps.resizable",1202225400,["jquery.ui.resizable"],"ext.maps"],["mapeditor",1584372600,["ext.maps.common","jquery.ui.autocomplete",
"jquery.ui.slider","jquery.ui.dialog"],"ext.maps"],["ext.maps.services",1584372600,["ext.maps.common","ext.maps.coord"],"ext.maps"],["ext.maps.googlemaps3",1584372600,["ext.maps.common"],"ext.maps"],["ext.maps.gm3.markercluster",1584372600,[],"ext.maps"],["ext.maps.gm3.markerwithlabel",1584372600,[],"ext.maps"],["ext.maps.gm3.geoxml",1584372600,[],"ext.maps/geoxml3"],["ext.maps.gm3.earth",1584372600,[],"ext.maps"],["ext.maps.openlayers",1584372600,["ext.maps.common"],"ext.maps"],["ext.maps.leaflet",1584372600,["ext.maps.common"],"ext.maps"],["ext.maps.leaflet.fullscreen",1584372600,["ext.maps.leaflet"],"ext.maps"],["ext.maps.leaflet.markercluster",1584372600,["ext.maps.leaflet"],"ext.maps"],["ext.maps.leaflet.providers",1584372600,["ext.maps.leaflet"],"ext.maps"]]);mw.config.set({"wgLoadScript":"/load.php","debug":!1,"skin":"oasis","stylepath":"https://slot1-images.wikia.nocookie.net/__cb1584373202159/common/skins","wgUrlProtocols":
"\\/\\/|ftp\\:\\/\\/|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|svn\\:\\/\\/|telnet\\:\\/\\/|worldwind\\:\\/\\/|xmpp\\:","wgArticlePath":"/wiki/$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgVariantArticlePath":!1,"wgActionPaths":{},"wgServer":"https://vsbattles.fandom.com","wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.19.24","wgEnableAPI":!0,"wgEnableWriteAPI":!0,"wgDefaultDateFormat":"mdy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgMainPageTitle":"VS Battles Wiki","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"VS Battles Wiki","5":"VS Battles Wiki talk","6":"File","7":"File talk","8":"MediaWiki","9":
"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk","110":"Forum","111":"Forum talk","500":"User blog","501":"User blog comment","502":"Blog","503":"Blog talk","828":"Module","829":"Module talk","1200":"Message Wall","1201":"Thread","1202":"Message Wall Greeting","2000":"Board","2001":"Board Thread","2002":"Topic"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"vs_battles_wiki":4,"vs_battles_wiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"forum":110,"forum_talk":111,"user_blog":500,"user_blog_comment":501,"blog":502,"blog_talk":503,"module":828,"module_talk":829,"message_wall":1200,"thread":1201,"message_wall_greeting":1202,"board":2000,"board_thread":2001,"topic":2002,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgSiteName":"VS Battles Wiki","wgFileExtensions":[
"png","gif","jpg","jpeg","ico","pdf","svg","odt","ods","odp","odg","odc","odf","odi","odm","ogg","ogv","oga"],"wgDBname":"vsbattles","wgFileCanRotate":!0,"wgAvailableSkins":{"oasis":"Oasis","wikiamobile":"WikiaMobile"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"wikicities","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$\x26\'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgSassParams":{"background-dynamic":"false","background-image":"https://slot1-images.wikia.nocookie.net/__cb1462545172/common/skins/oasis/images/themes/pattern_steel.png","background-image-height":"28","background-image-width":"30","color-body":"#012d59","color-body-middle":"#012d59","color-buttons":"#006cb0","color-community-header":"#006cb0","color-header":"#002266","color-links":"#151b8d","color-page":"#d4e6f7","oasisTypography":1,"page-opacity":"94","widthType":0,"wordmark-font":"garton"},"wgFandomBaseDomain":"fandom.com","wgWikiaOrgBaseDomain":
"wikia.org","wgWikiaBaseDomainRegex":"((wikia\\.(com|org)|fandom\\.com)|(wikia|fandom)-dev\\.(com|us|pl))","wgServicesExternalDomain":"https://services.fandom.com/","wgRecommendedVideoABTestPlaylist":"","wgJSMessagesCB":"1584373202159.6155726.0","wgVisualEditorConfig":{"disableForAnons":!1,"preferenceModules":{"visualeditor-enable-experimental":"ext.visualEditor.experimental","visualeditor-enable-language":"ext.visualEditor.language"},"namespaces":[0,2,14,4],"pluginModules":["ext.visualEditor.wikia.core"],"defaultUserOptions":{"betatempdisable":0,"enable":1,"defaultthumbsize":180,"visualeditor-enable-experimental":0,"visualeditor-enable-language":0},"blacklist":{"msie":null,"android":[["\x3c",3]],"firefox":[["\x3c=",14]],"opera":[["\x3c",12]],"blackberry":null,"silk":null},"skins":["oasis"],"tabPosition":"before","tabMessages":{"edit":null,"editsource":"visualeditor-ca-classiceditor","create":null,"createsource":"visualeditor-ca-classiceditor","editlocaldescriptionsource":
"visualeditor-ca-editlocaldescriptionsource","createlocaldescriptionsource":"visualeditor-ca-createlocaldescriptionsource","editsection":null,"editsectionsource":"visualeditor-ca-editsource-section","editappendix":null,"editsourceappendix":null,"createappendix":null,"createsourceappendix":null,"editsectionappendix":null,"editsectionsourceappendix":null},"showBetaWelcome":!1,"enableTocWidget":!1},"wgCommunityPageDisableTopContributors":!1});mw.loader.state({"jquery":"ready"});window.preMwLdrSt&&mw.loader.state(window.preMwLdrSt);if(window.preMwLdrStA){for(var i=0;i<window.preMwLdrStA.length;i++)mw.loader.state(window.preMwLdrStA[i]);};};if(isCompatible()){document.write("\x3cscript src=\"https://slot1-images.wikia.nocookie.net/__load/-/debug%3Dfalse%26lang%3Den%26only%3Dscripts%26skin%3Doasis%26version%3D1584373202159-20200316T153000Z/jquery,mediawiki\"\x3e\x3c/script\x3e");}delete isCompatible;;

/* cache key: vsbattles:resourceloader:filter:minify-js:7:e48fcbf9aaff53fe68d25b96c1e86e9c */