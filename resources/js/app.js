import './bootstrap';
/* maximenu ck js */
!function(C){var t=function(e,s){var w={fxtransition:"linear",fxduration:500,menuID:"maximenuck",testoverflow:"0",orientation:"horizontal",behavior:"mouseover",opentype:"open",direction:"normal",directionoffset1:"30",directionoffset2:"30",dureeIn:0,dureeOut:500,ismobile:!1,menuposition:"0",showactivesubitems:"0",topfixedeffect:"1",topfixedoffset:"",clickclose:"0",effecttype:"dropdown",closeclickoutside:"0"};if(!(this instanceof t))return new t(e,s);var a=window.maximenucks||[];if(!(-1<a.indexOf(e))){a.push(e),window.maximenucks=a;s=C.extend(w,s);var y=C(e);return y.each(function(e){var s=w.fxtransition,a=w.fxduration,t=w.dureeOut,n=w.dureeIn,i=w.orientation,o=w.behavior,u=w.opentype,c=w.fxdirection,l=w.directionoffset1,d=w.directionoffset2,m=w.showactivesubitems,r=w.testoverflow,p=w.effecttype,h=new Array;if(!function(){els="pushdown"==p?(C("li.maximenuck.level1",y).each(function(e,a){C(a).hasClass("parent")||C(a).mouseenter(function(){C("li.maximenuck.level1.parent",y).each(function(e,s){s=C(s),C(a).prop("class")!=s.prop("class")&&(s.submenu=C("> .maxipushdownck > .floatck",y).eq(e),k(s))})})}),C("li.maximenuck.level1.parent",y)):C("li.maximenuck.parent",y);els.each(function(e,a){if((a=C(a)).hasClass("nodropdown"))return!0;a.hasClass("level1")&&a.data("level",1),C("li.maximenuck.parent",a).each(function(e,s){C(s).data("level",a.data("level")+1)}),"pushdown"==p?(a.submenu=C("> .maxipushdownck > .floatck",y).eq(e),a.submenu.find("> .maxidrop-main").css("width","inherit").css("overflow","hidden"),a.submenu.hover(function(){a.addClass("hover")},function(){a.removeClass("hover")})):(a.submenu=C("> .floatck",a),a.submenu.css("position","absolute"),a.addClass("maximenuckanimation")),a.submenuHeight=a.submenu.height(),a.submenuWidth=a.submenu.width(),"noeffect"==u||"open"==u||"slide"==u?a.submenu.css("display","none"):(a.submenu.css("display","block"),a.submenu.hide()),("1"==m&&a.hasClass("active")||a.hasClass("openck"))&&(a.hasClass("fullwidth")?(a.submenu.css("display","block"),"horizontal"==i&&a.submenu.css("left","0")):a.submenu.css("display","block"),a.submenu.css("max-height",""),a.submenu.show()),"inverse"==c&&a.hasClass("level1")&&"horizontal"==i&&a.submenu.css("bottom",l+"px"),"inverse"==c&&a.hasClass("level1")&&"vertical"==i&&a.submenu.css("right",l+"px"),"inverse"!=c||a.hasClass("level1")||"vertical"!=i||a.submenu.css("right",d+"px");var s=a.hasClass("showonclick")?a.hasClass("clickclose")?"showonclickclose":"click":a.hasClass("clickclose")?"clickclose":o;"showonclickclose"==s?(C("> a.maximenuck,> span.separator,> span.nav-header",a).click(function(e){e.preventDefault(),"1"==r&&g(a),C("li.maximenuck",C(a)).removeClass("clickedck").removeClass("openck"),C(a).removeClass("clickedck").removeClass("openck"),k(a),C("li.maximenuck.parent:not(.nodropdown)",a).each(function(e,s){s=C(s),a.prop("class")!=s.prop("class")&&(s.submenu="pushdown"==p?C("> .maxipushdownck > .floatck",y).eq(e):C("> .floatck",s),k(s))}),v(a)}),C("> .maxiclose",a.submenu).click(function(){k(a),a.removeClass("clickedck")})):"clickclose"==s?(a.mouseenter(function(){"1"==r&&g(a),C("li.maximenuck.parent.level"+a.data("level"),y).each(function(e,s){s=C(s),a.prop("class")!=s.prop("class")&&(s.submenu="pushdown"==p?C("> .maxipushdownck > .floatck",y).eq(e):C("> .floatck",s),k(s))}),v(a)}),C("> div > .maxiclose",a).click(function(){k(a),a.removeClass("clickedck")})):("click"==s?(a.hasClass("parent")&&C("> a.maximenuck",a).length&&(a.redirection=C("> a.maximenuck",a).prop("href"),C("> a.maximenuck",a).each(function(){C(this).attr("data-href",C(this).attr("href")),C(this).attr("href","javascript:void(0)")}),a.hasBeenClicked=!1),C("> a.maximenuck,> span.separator,> span.nav-header",a).click(function(){C("li.maximenuck.level"+C(a).attr("data-level"),y).removeClass("clickedck").removeClass("openck"),a.addClass("clickedck"),"1"==r&&g(a),"opened"==a.data("status")?(C("li.maximenuck",C(a)).removeClass("clickedck").removeClass("openck"),C(a).removeClass("clickedck").removeClass("openck"),k(a),C("li.maximenuck.parent:not(.nodropdown)",a).each(function(e,s){s=C(s),a.prop("class")!=s.prop("class")&&(s.submenu="pushdown"==p?C("> .maxipushdownck > .floatck",y).eq(e):C("> .floatck",s),k(s))})):(C("li.maximenuck.parent.level"+a.data("level"),y).each(function(e,s){s=C(s),a.prop("class")!=s.prop("class")&&(s.submenu="pushdown"==p?C("> .maxipushdownck > .floatck",y).eq(e):C("> .floatck",s),k(s))}),v(a))})):(a.mouseenter(function(){"pushdown"==p?C("li.maximenuck.level1.parent",y).each(function(e,s){s=C(s),a.prop("class")!=s.prop("class")&&(s.submenu=C("> .maxipushdownck > .floatck",y).eq(e),k(s))}):"1"==r&&g(a),v(a)}),"pushdown"==p&&"1"!=w.clickclose?y.mouseleave(function(){k(a)}):"1"!=w.clickclose&&a.mouseleave(function(){k(a),a.find("li.maximenuck.parent.level"+a.attr("data-level")+":not(.nodropdown)").each(function(e,s){(s=C(s)).submenu="pushdown"==p?C("> .maxipushdownck > .floatck",y).eq(e):C("> .floatck",s),k(s)})})),C("> .maxiclose",a.submenu).click(function(){k(a),a.removeClass("clickedck")}))})}(),"topfixed"==w.menuposition){var f=C(this).offset().top;C(document.body).attr("data-margintop",C(document.body).css("margin-top")),y.menuHeight=C(this).height(),C(window).bind("scroll",function(){var e,s=f;w.topfixedoffset&&(e=w.topfixedoffset,s=!isNaN(parseFloat(e))&&isFinite(e)?f+parseInt(w.topfixedoffset):parseInt(C(w.topfixedoffset).offset().top)),C(window).scrollTop()>s&&!y.hasClass("maximenufixed")?"0"==w.topfixedeffect?(y.after('<div id="'+y.attr("id")+'tmp"></div>'),C("#"+y.attr("id")+"tmp").css("visibility","hidden").height(y.height()),y.addClass("maximenufixed")):(y.css("opacity","0").css("margin-top","-"+parseInt(y.height())+"px").animate({opacity:"1","margin-top":"0"},500).addClass("maximenufixed"),C(document.body).css("margin-top",parseInt(y.menuHeight))):C(window).scrollTop()<=f&&(C(document.body).css("margin-top",C(document.body).attr("data-margintop")),y.removeClass("maximenufixed"),C("#"+y.attr("id")+"tmp").remove())})}else"bottomfixed"==w.menuposition&&C(this).addClass("maximenufixed").find("ul.maximenuck").css("position","static");function b(e){switch(e.submenu.stop(!0,!0),h[e.data("level")]="",e.data("status","closing"),u){case"noeffect":e.submenu.css("display","none"),h[e.data("level")]="",e.data("status","closed");break;case"fade":e.submenu.fadeOut(a,s,{complete:function(){h[e.data("level")]="",e.data("status","closed")}}),e.data("status","closed");break;case"slide":e.hasClass("level1")&&"horizontal"==i?e.submenu.css("max-height",""):e.submenu.css("max-width",""),e.submenu.css("display","none"),e.submenu.css("position","absolute"),h[e.data("level")]="",e.data("status","closed");break;case"open":e.submenu.stop(),e.submenuHeight=e.submenu.height(),h[e.data("level")]="",e.submenu.css("overflow","hidden"),e.data("status","closing"),e.hasClass("level1")&&"horizontal"==i?e.submenu.css("overflow","hidden").css("max-height",e.submenu.height()).animate({"max-height":0},{duration:a,queue:!1,easing:s,complete:function(){e.submenu.css("max-height",""),e.submenu.css("display","none"),e.submenu.css("position","absolute"),h[e.data("level")]="",e.data("status","closed")}}):(e.submenu.css("max-width",""),e.submenu.css("display","none"),e.submenu.css("position","absolute"),h[e.data("level")]="",e.data("status","closed"));break;default:e.submenu.hide(0,{complete:function(){h[e.data("level")]="",e.data("status","closed")}}),e.data("status","closed")}}function v(e){e.css("z-index",15e3),e.submenu.css("z-index",15e3),clearTimeout(e.timeout),e.timeout=setTimeout(function(){!function(e){if("opened"!=e.data("status")&&("showing"!=h[e.data("level")-1]||"drop"!=u))switch(e.submenu.css("display","block"),"pushdown"==p&&e.submenu.css("position","relative"),"noeffect"!=u&&(h[e.data("level")]="showing"),u){case"noeffect":h[e.data("level")]="",e.data("status","opened");break;case"slide":if("opening"==e.data("status"))break;e.data("status","opening"),e.submenu.css("overflow","hidden"),e.submenu.stop(!0,!0),slideconteneur=C(".maximenuck2",e),e.hasClass("level1")&&"horizontal"==i?(slideconteneur.css("marginTop",-e.submenuHeight),slideconteneur.animate({marginTop:0},{duration:a,queue:!1,easing:s,complete:function(){h[e.data("level")]="",e.submenu.css("overflow","visible"),e.data("status","opened")}}),e.submenu.animate({"max-height":e.submenuHeight},{duration:a,queue:!1,easing:s,complete:function(){C(this).css("max-height",""),h[e.data("level")]="",e.submenu.css("overflow","visible"),e.data("status","opened"),x(e)}})):(slideconteneur.css("marginLeft",-e.submenu.width()),slideconteneur.animate({marginLeft:0},{duration:a,queue:!1,easing:s,complete:function(){h[e.data("level")]="",e.submenu.css("overflow","visible"),e.data("status","opened")}}),e.submenu.animate({"max-width":e.submenu.width()},{duration:a,queue:!1,easing:s,complete:function(){h[e.data("level")]="",e.submenu.css("overflow","visible"),e.data("status","opened"),x(e)}}));break;case"show":e.data("status","opening"),e.submenu.hide(),e.submenu.stop(!0,!0),e.submenu.show(a,s,{complete:function(){h[e.data("level")]="",e.data("status","opened"),x(e)}}),e.data("status","opened");break;case"fade":e.data("status","opening"),e.submenu.hide(),e.submenu.stop(!0,!0),e.submenu.fadeIn(a,s,{complete:function(){h[e.data("level")]="",e.data("status","opened"),x(e)}}),e.data("status","opened");break;case"scale":e.data("status","opening"),e.submenu.hide(),e.submenu.stop(!0,!0),e.submenu.show("scale",{duration:a,easing:s,complete:function(){h[e.data("level")]="",e.data("status","opened"),x(e)}}),e.data("status","opened");break;case"puff":e.data("status","opening"),e.submenu.stop(!0,!0),e.submenu.show("puff",{duration:a,easing:s,complete:function(){h[e.data("level")]="",x(e)}}),e.data("status","opened");break;case"drop":e.data("status","opening"),e.submenu.stop(!0,!0),e.hasClass("level1")&&"horizontal"==i?"inverse"==c?(dropdirection="down",e.submenu.css("bottom",l+"px")):dropdirection="up":"inverse"==c?(dropdirection="right",e.submenu.css("right",d+"px")):(e.submenu.css("margin-left",e.submenu.width()),dropdirection="left"),e.submenu.show("drop",{direction:dropdirection,duration:a,easing:s,complete:function(){h[e.data("level")]="",x(e)}}),e.data("status","opened");break;case"open":default:e.data("status","opening"),e.submenu.stop(),e.submenu.css("overflow","hidden"),e.hasClass("level1")&&"horizontal"==i?e.submenu.animate({"max-height":e.submenuHeight},{duration:a,queue:!1,easing:s,complete:function(){C(this).css("max-height",""),h[e.data("level")]="","dropdown"==p&&e.submenu.css("overflow","visible"),e.data("status","opened"),x(e)}}):e.submenu.animate({"max-width":e.submenu.width()},{duration:a,queue:!1,easing:s,complete:function(){C(this).css("max-width",""),h[e.data("level")]="","dropdown"==p&&e.submenu.css("overflow","visible"),e.data("status","opened"),x(e)}})}}(e)},n)}function k(e){"pushdown"==p&&"closing"!=e.data("status")?b(e):"pushdown"!=p&&(e.css("z-index",12001),e.submenu.css("z-index",12001),clearTimeout(e.timeout),e.timeout=setTimeout(function(){b(e)},t))}function g(e){if(!e.hasClass("fullwidth")){var s=C(window).outerWidth();e.submenu.removeClass("fixRight").css("right","");var a=e.submenu.attr("data-display",e.submenu.css("display")).css({opacity:"0",display:"block"}).offset();if(e.submenu.css({opacity:"1",display:e.submenu.attr("data-display")}),e.submenu.removeAttr("data-display"),s<a.left+e.submenu.width()?(1==e.data("level")?e.submenu.css("right","0px"):e.submenu.css("right",e.outerWidth()),e.submenu.css("marginRight","0px"),e.submenu.addClass("fixRight")):(e.submenu.removeClass("fixRight"),e.submenu.css("right","")),"vertical"==i){var t=C(document).scrollTop()+C(window).height(),n=a.top+e.submenu.height();elDataMarginTop=e.submenu.attr("data-margin-top")?parseInt(e.submenu.attr("data-margin-top")):parseInt(e.submenu.css("margin-top")),t<n?e.submenu.attr("data-margin-top",e.submenu.css("margin-top")).css("margin-top","-="+(n-t+10)+"px"):a.top+e.submenu.height()-(parseInt(e.submenu.css("margin-top"))-elDataMarginTop)<t&&e.submenu.attr("data-margin-top")&&e.submenu.css("margin-top",elDataMarginTop+"px").removeAttr("data-margin-top")}}}function x(s){"0"!=w.closeclickoutside&&C(window).one("click",function(e){(!s.hasClass("clickedck")||0!=s.submenu.has(e.target).length||s.submenu.is(e.target)||s.is(e.target)?x:k)(s)})}})}};window.Maximenuck=t}(jQuery),function(u){var c=function(e,s){var i={fancyTransition:"linear",fancyDuree:500};if(!(this instanceof c))return new c(e,s);var a=window.fancymaximenucks||[];if(!(-1<a.indexOf(e))){a.push(e),window.fancymaximenucks=a;s=u.extend(i,s);var o=u(e);return o.each(function(e){var t=i.fancyTransition,n=i.fancyDuree;function a(e){var s=e.position().left+parseInt(e.css("marginLeft")),a=e.outerWidth();u(".maxiFancybackground",o).stop(!1,!1).animate({left:s,width:a},{duration:n,easing:t})}!function(){u("li.active.level1",o).length?o.currentItem=u("li.active.level1",o):o.currentItem=u("li.hoverbgactive.level1",o);o.currentItem.length||u("li.level1",o).each(function(e,s){(s=u(s)).mouseenter(function(){u("li.hoverbgactive",o).length||(s.addClass("hoverbgactive"),new c(o,{fancyTransition:t,fancyDuree:n}))})});if(!u(".active",o).length&&!u(".hoverbgactive",o).length)return;u("ul.maximenuck",o).append('<li class="maxiFancybackground"><div class="maxiFancycenter"><div class="maxiFancyleft"><div class="maxiFancyright"></div></div></div></li>'),fancyItem=u(".maxiFancybackground",o),o.currentItem.length&&function(e){e=u(e);var s=Math.round(e.position().left)+parseInt(e.css("marginLeft")),a=e.outerWidth();u(".maxiFancybackground",o).stop(!1,!1).animate({left:s,width:a},{duration:n,easing:t})}(o.currentItem);u("li.level1",o).each(function(e,s){(s=u(s)).mouseenter(function(){a(s)}),s.mouseleave(function(){u("li.active",o).length?a(u(o.currentItem)):u(".maxiFancybackground",o).stop(!1,!1).animate({left:0,width:0},{duration:n,easing:t})})})}()})}};window.FancyMaximenuck=c}(jQuery);!function(C){var t=function(e,s){var w={fxtransition:"linear",fxduration:500,menuID:"maximenuck",testoverflow:"0",orientation:"horizontal",behavior:"mouseover",opentype:"open",direction:"normal",directionoffset1:"30",directionoffset2:"30",dureeIn:0,dureeOut:500,ismobile:!1,menuposition:"0",showactivesubitems:"0",topfixedeffect:"1",topfixedoffset:"",clickclose:"0",effecttype:"dropdown",closeclickoutside:"0"};if(!(this instanceof t))return new t(e,s);var a=window.maximenucks||[];if(!(-1<a.indexOf(e))){a.push(e),window.maximenucks=a;s=C.extend(w,s);var y=C(e);return y.each(function(e){var s=w.fxtransition,a=w.fxduration,t=w.dureeOut,n=w.dureeIn,i=w.orientation,o=w.behavior,u=w.opentype,c=w.fxdirection,l=w.directionoffset1,d=w.directionoffset2,m=w.showactivesubitems,r=w.testoverflow,p=w.effecttype,h=new Array;if(!function(){els="pushdown"==p?(C("li.maximenuck.level1",y).each(function(e,a){C(a).hasClass("parent")||C(a).mouseenter(function(){C("li.maximenuck.level1.parent",y).each(function(e,s){s=C(s),C(a).prop("class")!=s.prop("class")&&(s.submenu=C("> .maxipushdownck > .floatck",y).eq(e),k(s))})})}),C("li.maximenuck.level1.parent",y)):C("li.maximenuck.parent",y);els.each(function(e,a){if((a=C(a)).hasClass("nodropdown"))return!0;a.hasClass("level1")&&a.data("level",1),C("li.maximenuck.parent",a).each(function(e,s){C(s).data("level",a.data("level")+1)}),"pushdown"==p?(a.submenu=C("> .maxipushdownck > .floatck",y).eq(e),a.submenu.find("> .maxidrop-main").css("width","inherit").css("overflow","hidden"),a.submenu.hover(function(){a.addClass("hover")},function(){a.removeClass("hover")})):(a.submenu=C("> .floatck",a),a.submenu.css("position","absolute"),a.addClass("maximenuckanimation")),a.submenuHeight=a.submenu.height(),a.submenuWidth=a.submenu.width(),"noeffect"==u||"open"==u||"slide"==u?a.submenu.css("display","none"):(a.submenu.css("display","block"),a.submenu.hide()),("1"==m&&a.hasClass("active")||a.hasClass("openck"))&&(a.hasClass("fullwidth")?(a.submenu.css("display","block"),"horizontal"==i&&a.submenu.css("left","0")):a.submenu.css("display","block"),a.submenu.css("max-height",""),a.submenu.show()),"inverse"==c&&a.hasClass("level1")&&"horizontal"==i&&a.submenu.css("bottom",l+"px"),"inverse"==c&&a.hasClass("level1")&&"vertical"==i&&a.submenu.css("right",l+"px"),"inverse"!=c||a.hasClass("level1")||"vertical"!=i||a.submenu.css("right",d+"px");var s=a.hasClass("showonclick")?a.hasClass("clickclose")?"showonclickclose":"click":a.hasClass("clickclose")?"clickclose":o;"showonclickclose"==s?(C("> a.maximenuck,> span.separator,> span.nav-header",a).click(function(e){e.preventDefault(),"1"==r&&g(a),C("li.maximenuck",C(a)).removeClass("clickedck").removeClass("openck"),C(a).removeClass("clickedck").removeClass("openck"),k(a),C("li.maximenuck.parent:not(.nodropdown)",a).each(function(e,s){s=C(s),a.prop("class")!=s.prop("class")&&(s.submenu="pushdown"==p?C("> .maxipushdownck > .floatck",y).eq(e):C("> .floatck",s),k(s))}),v(a)}),C("> .maxiclose",a.submenu).click(function(){k(a),a.removeClass("clickedck")})):"clickclose"==s?(a.mouseenter(function(){"1"==r&&g(a),C("li.maximenuck.parent.level"+a.data("level"),y).each(function(e,s){s=C(s),a.prop("class")!=s.prop("class")&&(s.submenu="pushdown"==p?C("> .maxipushdownck > .floatck",y).eq(e):C("> .floatck",s),k(s))}),v(a)}),C("> div > .maxiclose",a).click(function(){k(a),a.removeClass("clickedck")})):("click"==s?(a.hasClass("parent")&&C("> a.maximenuck",a).length&&(a.redirection=C("> a.maximenuck",a).prop("href"),C("> a.maximenuck",a).each(function(){C(this).attr("data-href",C(this).attr("href")),C(this).attr("href","javascript:void(0)")}),a.hasBeenClicked=!1),C("> a.maximenuck,> span.separator,> span.nav-header",a).click(function(){C("li.maximenuck.level"+C(a).attr("data-level"),y).removeClass("clickedck").removeClass("openck"),a.addClass("clickedck"),"1"==r&&g(a),"opened"==a.data("status")?(C("li.maximenuck",C(a)).removeClass("clickedck").removeClass("openck"),C(a).removeClass("clickedck").removeClass("openck"),k(a),C("li.maximenuck.parent:not(.nodropdown)",a).each(function(e,s){s=C(s),a.prop("class")!=s.prop("class")&&(s.submenu="pushdown"==p?C("> .maxipushdownck > .floatck",y).eq(e):C("> .floatck",s),k(s))})):(C("li.maximenuck.parent.level"+a.data("level"),y).each(function(e,s){s=C(s),a.prop("class")!=s.prop("class")&&(s.submenu="pushdown"==p?C("> .maxipushdownck > .floatck",y).eq(e):C("> .floatck",s),k(s))}),v(a))})):(a.mouseenter(function(){"pushdown"==p?C("li.maximenuck.level1.parent",y).each(function(e,s){s=C(s),a.prop("class")!=s.prop("class")&&(s.submenu=C("> .maxipushdownck > .floatck",y).eq(e),k(s))}):"1"==r&&g(a),v(a)}),"pushdown"==p&&"1"!=w.clickclose?y.mouseleave(function(){k(a)}):"1"!=w.clickclose&&a.mouseleave(function(){k(a),a.find("li.maximenuck.parent.level"+a.attr("data-level")+":not(.nodropdown)").each(function(e,s){(s=C(s)).submenu="pushdown"==p?C("> .maxipushdownck > .floatck",y).eq(e):C("> .floatck",s),k(s)})})),C("> .maxiclose",a.submenu).click(function(){k(a),a.removeClass("clickedck")}))})}(),"topfixed"==w.menuposition){var f=C(this).offset().top;C(document.body).attr("data-margintop",C(document.body).css("margin-top")),y.menuHeight=C(this).height(),C(window).bind("scroll",function(){var e,s=f;w.topfixedoffset&&(e=w.topfixedoffset,s=!isNaN(parseFloat(e))&&isFinite(e)?f+parseInt(w.topfixedoffset):parseInt(C(w.topfixedoffset).offset().top)),C(window).scrollTop()>s&&!y.hasClass("maximenufixed")?"0"==w.topfixedeffect?(y.after('<div id="'+y.attr("id")+'tmp"></div>'),C("#"+y.attr("id")+"tmp").css("visibility","hidden").height(y.height()),y.addClass("maximenufixed")):(y.css("opacity","0").css("margin-top","-"+parseInt(y.height())+"px").animate({opacity:"1","margin-top":"0"},500).addClass("maximenufixed"),C(document.body).css("margin-top",parseInt(y.menuHeight))):C(window).scrollTop()<=f&&(C(document.body).css("margin-top",C(document.body).attr("data-margintop")),y.removeClass("maximenufixed"),C("#"+y.attr("id")+"tmp").remove())})}else"bottomfixed"==w.menuposition&&C(this).addClass("maximenufixed").find("ul.maximenuck").css("position","static");function b(e){switch(e.submenu.stop(!0,!0),h[e.data("level")]="",e.data("status","closing"),u){case"noeffect":e.submenu.css("display","none"),h[e.data("level")]="",e.data("status","closed");break;case"fade":e.submenu.fadeOut(a,s,{complete:function(){h[e.data("level")]="",e.data("status","closed")}}),e.data("status","closed");break;case"slide":e.hasClass("level1")&&"horizontal"==i?e.submenu.css("max-height",""):e.submenu.css("max-width",""),e.submenu.css("display","none"),e.submenu.css("position","absolute"),h[e.data("level")]="",e.data("status","closed");break;case"open":e.submenu.stop(),e.submenuHeight=e.submenu.height(),h[e.data("level")]="",e.submenu.css("overflow","hidden"),e.data("status","closing"),e.hasClass("level1")&&"horizontal"==i?e.submenu.css("overflow","hidden").css("max-height",e.submenu.height()).animate({"max-height":0},{duration:a,queue:!1,easing:s,complete:function(){e.submenu.css("max-height",""),e.submenu.css("display","none"),e.submenu.css("position","absolute"),h[e.data("level")]="",e.data("status","closed")}}):(e.submenu.css("max-width",""),e.submenu.css("display","none"),e.submenu.css("position","absolute"),h[e.data("level")]="",e.data("status","closed"));break;default:e.submenu.hide(0,{complete:function(){h[e.data("level")]="",e.data("status","closed")}}),e.data("status","closed")}}function v(e){e.css("z-index",15e3),e.submenu.css("z-index",15e3),clearTimeout(e.timeout),e.timeout=setTimeout(function(){!function(e){if("opened"!=e.data("status")&&("showing"!=h[e.data("level")-1]||"drop"!=u))switch(e.submenu.css("display","block"),"pushdown"==p&&e.submenu.css("position","relative"),"noeffect"!=u&&(h[e.data("level")]="showing"),u){case"noeffect":h[e.data("level")]="",e.data("status","opened");break;case"slide":if("opening"==e.data("status"))break;e.data("status","opening"),e.submenu.css("overflow","hidden"),e.submenu.stop(!0,!0),slideconteneur=C(".maximenuck2",e),e.hasClass("level1")&&"horizontal"==i?(slideconteneur.css("marginTop",-e.submenuHeight),slideconteneur.animate({marginTop:0},{duration:a,queue:!1,easing:s,complete:function(){h[e.data("level")]="",e.submenu.css("overflow","visible"),e.data("status","opened")}}),e.submenu.animate({"max-height":e.submenuHeight},{duration:a,queue:!1,easing:s,complete:function(){C(this).css("max-height",""),h[e.data("level")]="",e.submenu.css("overflow","visible"),e.data("status","opened"),x(e)}})):(slideconteneur.css("marginLeft",-e.submenu.width()),slideconteneur.animate({marginLeft:0},{duration:a,queue:!1,easing:s,complete:function(){h[e.data("level")]="",e.submenu.css("overflow","visible"),e.data("status","opened")}}),e.submenu.animate({"max-width":e.submenu.width()},{duration:a,queue:!1,easing:s,complete:function(){h[e.data("level")]="",e.submenu.css("overflow","visible"),e.data("status","opened"),x(e)}}));break;case"show":e.data("status","opening"),e.submenu.hide(),e.submenu.stop(!0,!0),e.submenu.show(a,s,{complete:function(){h[e.data("level")]="",e.data("status","opened"),x(e)}}),e.data("status","opened");break;case"fade":e.data("status","opening"),e.submenu.hide(),e.submenu.stop(!0,!0),e.submenu.fadeIn(a,s,{complete:function(){h[e.data("level")]="",e.data("status","opened"),x(e)}}),e.data("status","opened");break;case"scale":e.data("status","opening"),e.submenu.hide(),e.submenu.stop(!0,!0),e.submenu.show("scale",{duration:a,easing:s,complete:function(){h[e.data("level")]="",e.data("status","opened"),x(e)}}),e.data("status","opened");break;case"puff":e.data("status","opening"),e.submenu.stop(!0,!0),e.submenu.show("puff",{duration:a,easing:s,complete:function(){h[e.data("level")]="",x(e)}}),e.data("status","opened");break;case"drop":e.data("status","opening"),e.submenu.stop(!0,!0),e.hasClass("level1")&&"horizontal"==i?"inverse"==c?(dropdirection="down",e.submenu.css("bottom",l+"px")):dropdirection="up":"inverse"==c?(dropdirection="right",e.submenu.css("right",d+"px")):(e.submenu.css("margin-left",e.submenu.width()),dropdirection="left"),e.submenu.show("drop",{direction:dropdirection,duration:a,easing:s,complete:function(){h[e.data("level")]="",x(e)}}),e.data("status","opened");break;case"open":default:e.data("status","opening"),e.submenu.stop(),e.submenu.css("overflow","hidden"),e.hasClass("level1")&&"horizontal"==i?e.submenu.animate({"max-height":e.submenuHeight},{duration:a,queue:!1,easing:s,complete:function(){C(this).css("max-height",""),h[e.data("level")]="","dropdown"==p&&e.submenu.css("overflow","visible"),e.data("status","opened"),x(e)}}):e.submenu.animate({"max-width":e.submenu.width()},{duration:a,queue:!1,easing:s,complete:function(){C(this).css("max-width",""),h[e.data("level")]="","dropdown"==p&&e.submenu.css("overflow","visible"),e.data("status","opened"),x(e)}})}}(e)},n)}function k(e){"pushdown"==p&&"closing"!=e.data("status")?b(e):"pushdown"!=p&&(e.css("z-index",12001),e.submenu.css("z-index",12001),clearTimeout(e.timeout),e.timeout=setTimeout(function(){b(e)},t))}function g(e){if(!e.hasClass("fullwidth")){var s=C(window).outerWidth();e.submenu.removeClass("fixRight").css("right","");var a=e.submenu.attr("data-display",e.submenu.css("display")).css({opacity:"0",display:"block"}).offset();if(e.submenu.css({opacity:"1",display:e.submenu.attr("data-display")}),e.submenu.removeAttr("data-display"),s<a.left+e.submenu.width()?(1==e.data("level")?e.submenu.css("right","0px"):e.submenu.css("right",e.outerWidth()),e.submenu.css("marginRight","0px"),e.submenu.addClass("fixRight")):(e.submenu.removeClass("fixRight"),e.submenu.css("right","")),"vertical"==i){var t=C(document).scrollTop()+C(window).height(),n=a.top+e.submenu.height();elDataMarginTop=e.submenu.attr("data-margin-top")?parseInt(e.submenu.attr("data-margin-top")):parseInt(e.submenu.css("margin-top")),t<n?e.submenu.attr("data-margin-top",e.submenu.css("margin-top")).css("margin-top","-="+(n-t+10)+"px"):a.top+e.submenu.height()-(parseInt(e.submenu.css("margin-top"))-elDataMarginTop)<t&&e.submenu.attr("data-margin-top")&&e.submenu.css("margin-top",elDataMarginTop+"px").removeAttr("data-margin-top")}}}function x(s){"0"!=w.closeclickoutside&&C(window).one("click",function(e){(!s.hasClass("clickedck")||0!=s.submenu.has(e.target).length||s.submenu.is(e.target)||s.is(e.target)?x:k)(s)})}})}};window.Maximenuck=t}(jQuery),function(u){var c=function(e,s){var i={fancyTransition:"linear",fancyDuree:500};if(!(this instanceof c))return new c(e,s);var a=window.fancymaximenucks||[];if(!(-1<a.indexOf(e))){a.push(e),window.fancymaximenucks=a;s=u.extend(i,s);var o=u(e);return o.each(function(e){var t=i.fancyTransition,n=i.fancyDuree;function a(e){var s=e.position().left+parseInt(e.css("marginLeft")),a=e.outerWidth();u(".maxiFancybackground",o).stop(!1,!1).animate({left:s,width:a},{duration:n,easing:t})}!function(){u("li.active.level1",o).length?o.currentItem=u("li.active.level1",o):o.currentItem=u("li.hoverbgactive.level1",o);o.currentItem.length||u("li.level1",o).each(function(e,s){(s=u(s)).mouseenter(function(){u("li.hoverbgactive",o).length||(s.addClass("hoverbgactive"),new c(o,{fancyTransition:t,fancyDuree:n}))})});if(!u(".active",o).length&&!u(".hoverbgactive",o).length)return;u("ul.maximenuck",o).append('<li class="maxiFancybackground"><div class="maxiFancycenter"><div class="maxiFancyleft"><div class="maxiFancyright"></div></div></div></li>'),fancyItem=u(".maxiFancybackground",o),o.currentItem.length&&function(e){e=u(e);var s=Math.round(e.position().left)+parseInt(e.css("marginLeft")),a=e.outerWidth();u(".maxiFancybackground",o).stop(!1,!1).animate({left:s,width:a},{duration:n,easing:t})}(o.currentItem);u("li.level1",o).each(function(e,s){(s=u(s)).mouseenter(function(){a(s)}),s.mouseleave(function(){u("li.active",o).length?a(u(o.currentItem)):u(".maxiFancybackground",o).stop(!1,!1).animate({left:0,width:0},{duration:n,easing:t})})})}()})}};window.FancyMaximenuck=c}(jQuery);
/* maximenu ck mobile js */
/**
 * @copyright	Copyright (C) 2018 Cedric KEIFLIN alias ced1870
 * https://www.joomlack.fr
 * Mobile Menu CK
 * @license		GNU/GPL
 * Version 1.1.4
 * */
 
 /*
 - Version 1.1.5 : fix issue with merged menu and fade effect
 - Version 1.1.4 : fix issue with merged menu, add compatibility with Mediabox CK
 - Version 1.1.3 : fix issue with maximenu pushdown layout
 - Version 1.1.2 : fix issue with image only in the menu item
 - Version 1.1.1 : fix issue with description shown in the menu bar
 */

(function($) {
	// "use strict";
	var MobileMenuCK = function(el, opts) {
		if (!(this instanceof MobileMenuCK)) return new MobileMenuCK(el, opts);

		if (! el.length) {
			console.log('MOBILE MENU CK ERROR : Selector not found : ' + el.selector);
			return;
		}

		var defaults = {
			useimages: '0',
			container: 'body', 						// body, menucontainer, topfixed
			showdesc: '0',
			showlogo: '1',
			usemodules: '0',
			menuid: '',
			mobilemenutext: 'Menu',
			showmobilemenutext: '',
			titletag: 'h3',
			displaytype: 'accordion',				// flat, accordion, fade, push
			displayeffect: 'normal',				// normal, slideleft, slideright, slideleftover, sliderightover, topfixed, open
			menubarbuttoncontent : '',
			topbarbuttoncontent : '',
			uriroot : '',
			mobilebackbuttontext : 'Back',
			menuwidth : '300',
			openedonactiveitem : '1',
			loadanchorclass : '1',
			langdirection : 'ltr',
			menuselector: 'ul',
			childselector: 'li',
			merge: '',
			beforetext: '',
			aftertext: '',
			tooglebaron: 'all', // all, button
			tooglebarevent: 'click', // click, mouseover
			mergeorder: ''
			// Logo options
			,logo_where : '1'										// 1, 2, 3
			,logo_source : 'maximenuck'								// maximenuck, custom
			,logo_image : ''										// the image src
			,logo_link : ''											// the link url
			,logo_alt : ''											// the alt tag
			,logo_position : 'left'									// left, center, right
			,logo_width : ''										// image width
			,logo_height : ''										// image height
			,logo_margintop : ''									// margin top
			,logo_marginright : ''									// margin right
			,logo_marginbottom : ''								// margin bototm
			,logo_marginleft : ''									// margin left
			,logo_class : ''
		};

		var opts = $.extend(defaults, opts);
		var t = this;
		// store the menu
		t.menu = (el[0].tagName.toLowerCase() == opts.menuselector) ? el : el.find(opts.menuselector).first();

		// exit if no menu
		if (! t.menu.length)
			return false;

		if (t.menu.length > 1) {
			var MobileMenuCKs = window.MobileMenuCKs || [];
			t.menu.each(function () {
				MobileMenuCKs.push(new MobileMenuCK($(this), opts));
			});
			window.MobileMenuCKs = MobileMenuCKs;
			return MobileMenuCKs;
		}

		// store all mobile menus in the page
		window.MobileMenuCKs = window.MobileMenuCKs || [];
		window.MobileMenuCKs.push(this);

		if (! t.menu.attr('data-mobilemenuck-id')) {
			// var now = new Date().getTime();
			// var id = 'mobilemenuck-' + parseInt(now, 10);
			t.menu.attr('data-mobilemenuck-id', opts.menuid);
		} else {
			return this;
		}
		t.mobilemenuid = opts.menuid + '-mobile'; 
		t.mobilemenu = $('#' + t.mobilemenuid); 
		t.mobilemenu.attr('data-id', opts.menuid);

		// exit if mobile menu already exists
		if (t.mobilemenu.length)
			return this;

		// store all mobile menus in the page by ID
		window.MobileMenuCKByIds = window.MobileMenuCKByIds || [];
		window.MobileMenuCKByIds[opts.menuid] = this;

		if (t.menu.prev(opts.titletag))
			t.menu.prev(opts.titletag).addClass('mobilemenuck-hide');

		t.init = function() {
			var activeitem, logoitem;
			if (t.menu.find('li.maximenuck').length) {
				t.menutype = 'maximenuck';
				t.updatelevel();
			} else if (t.menu.find('li.accordeonck').length) {
				t.menutype = 'accordeonck';
			} else {
				t.menutype = 'normal';
			}

			// for menuck
			if ($('.maxipushdownck', t.menu.parent()).length) {
				var menuitems = $(t.sortmenu(t.menu.parent()));
			} else {
				if (t.menutype == 'maximenuck') {
					var menuitems = $('li.maximenuck', t.menu);
				} else if (t.menutype == 'accordeonck') {
					var menuitems = $('li.accordeonck', t.menu);
				} else {
					var menuitems = $(opts.childselector, t.menu);
				}
			}

			// loop through the tree
			t.setDataLevelRecursive(t.menu, 1);

			// only add the menu bar if not merged with another
			if (! opts.merge) {
				if (opts.container == 'body' 
					|| opts.container == 'topfixed'
					|| opts.displayeffect == 'slideleft'
					|| opts.displayeffect == 'slideright'
					|| opts.displayeffect == 'topfixed'
					) {
					$(document.body).append('<div id="' + t.mobilemenuid + '" class="mobilemenuck ' + opts.langdirection + '"></div>');
				} else {
					el.after($('<div id="' + t.mobilemenuid + '" class="mobilemenuck"></div>'));
				}
			}
			t.mobilemenu = $('#' + t.mobilemenuid);
			t.mobilemenu.attr('data-id', opts.menuid);
			// don't create the top bar if merged with another
			if (opts.merge) {
				t.mobilemenu.html = '';
			} else {
				t.mobilemenu.html = '<div class="mobilemenuck-topbar"><div class="mobilemenuck-title">' + opts.mobilemenutext + '</div><div class="mobilemenuck-button">' + opts.topbarbuttoncontent + '</div></div>';
			}
			t.mobilemenu.html += opts.beforetext ? '<div class="mobilemenuck-beforetext">' + opts.beforetext + '</div>' : '';
			menuitems.each(function(i, itemtmp) {
				itemtmp = $(itemtmp);
				var itemanchor = t.validateitem(itemtmp);
				if (itemanchor
						) {
					t.mobilemenu.html += '<div class="mobilemenuck-item">';
					// itemanchor = $('> a.menuck', itemtmp).length ? $('> a.menuck', itemtmp).clone() : $('> span.separator', itemtmp).clone();
					if (opts.showdesc == '0') {
						if ($('span.descck', itemanchor).length)
							$('span.descck', itemanchor).remove();
					}
					var itemhref = itemanchor.attr('data-href') ? ' href="' + itemanchor.attr('data-href') + '"' : (itemanchor.attr('href') ? ' href="' + itemanchor.attr('href') + '"' : '');
					if (itemanchor.attr('target')) itemhref += ' target="' + itemanchor.attr('target') + '"';

					if (itemtmp.attr('data-mobiletext')) {
						$('span.titreck', itemanchor).html(itemtmp.attr('data-mobiletext'));
					}
					var itemmobileicon = '';
					if (itemtmp.attr('data-mobileicon')) {
						itemmobileicon = '<img class="mobilemenuck-icon" src="' + opts.uriroot + '/' + itemtmp.attr('data-mobileicon') + '" />';
					}
					// var itemanchorClass = '';
					var itemanchorClass = (opts.loadanchorclass == '1' && itemanchor.attr('class')) ? itemanchor.attr('class') : '';
					// check for specific class on the anchor to apply to the mobile menu
					if (itemanchor.hasClass('scrollTo') && opts.loadanchorclass != '1') {
						itemanchorClass += 'scrollTo';
					}
					itemanchorClass = (itemanchorClass) ? ' class="' + itemanchorClass + '"' : '';
					itemanchorRel = (itemanchor.attr('rel')) ? ' rel="' + itemanchor.attr('rel') + '"' : '';
					if (opts.useimages == '1' && ($('> * > img', itemtmp).length || $('> * > * > img', itemtmp).length)) {
						datatocopy = itemanchor.html();
						t.mobilemenu.html += '<div class="menuck ' + itemtmp.attr('class') + '"><a ' + itemhref + itemanchorClass + itemanchorRel + '>' + itemmobileicon + '<span class="mobilemenuck-item-text">' + datatocopy + '</span></a></div>';
					} else if (opts.usemodules == '1' && (
								$('> div.menuck_mod', itemtmp).length
								|| $('> div.maximenuck_mod', itemtmp).length
								|| $('> div.accordeonckmod', itemtmp).length
								)
							) {
						datatocopy = itemanchor.html();
						t.mobilemenu.html += '<div class="' + itemtmp.attr('class') + '">' + itemmobileicon + datatocopy + '</div>';
					} else {
						if (itemtmp.attr('data-mobiletext')) {
							var datatocopy = itemtmp.attr('data-mobiletext');
						} else {
							if (opts.useimages == '0') {
								itemanchor.find('> img').remove();
							}
							var datatocopy = itemanchor.html();
						}
						t.mobilemenu.html += '<div class="menuck ' + itemtmp.attr('class') + '"><a ' + itemhref + itemanchorClass + itemanchorRel + '>' + itemmobileicon + '<span class="mobilemenuck-item-text">' + datatocopy + '</span></a></div>';
					}

					var itemlevel = $(itemtmp).attr('data-level');
					var j = i;
					while (menuitems[j + 1] && !t.validateitem(menuitems[j + 1]) && j < 1000) {
						j++;
					}
					if (menuitems[j + 1] && t.validateitem(menuitems[j + 1])) {
						var itemleveldiff = $(menuitems[i]).attr('data-level') - $(menuitems[j + 1]).attr('data-level');
						if (itemleveldiff < 0) {
							t.mobilemenu.html += '<div class="mobilemenuck-submenu">';
						}
						else if (itemleveldiff > 0) {
							t.mobilemenu.html += '</div>';
							t.mobilemenu.html += t.strRepeat('</div></div>', itemleveldiff);
						} else {
							t.mobilemenu.html += '</div>';
						}
					} else {
						t.mobilemenu.html += t.strRepeat('</div></div>', itemlevel);
					}

					if (itemtmp.hasClass('current'))
						activeitem = itemtmp.clone();
					if (!opts.showdesc) {
						if ($('span.descck', $(activeitem)).length)
							$('span.descck', $(activeitem)).remove();
					}

				} //else if ($(itemtmp).hasClass('menucklogo')) {
				//logoitem = $(itemtmp).clone();
				//}
			});

			t.mobilemenu.html += opts.aftertext ? '<div class="mobilemenuck-aftertext">' + opts.aftertext + '</div>' : '';
			if (opts.merge) {
				var mergedmobilemenuid = opts.merge + '-mobile'; 
				var mergedmobilemenu = $('#' + mergedmobilemenuid);
				if (mergedmobilemenu.length) {
					if (mergedmobilemenu.find('.mobilemenuck-itemwrap').length) {
						mergedmobilemenu.find('.mobilemenuck-itemwrap').append(t.mobilemenu.html);
					} else {
						mergedmobilemenu.append(t.mobilemenu.html);
					}
				} else {
					$(document.body).append($('<div style="display:none;" data-mobilemenuck-merged="' + mergedmobilemenuid + '" data-mobilemenuck-mergedorder="' + opts.mergeorder + '">' + t.mobilemenu.html + '</div>'));
				}
			} else {
				t.mobilemenu.append(t.mobilemenu.html);
				// if another menu has been created to be merged
				if ($('[data-mobilemenuck-merged="' + t.mobilemenuid + '"]').length) {
					$('[data-mobilemenuck-merged="' + t.mobilemenuid + '"]').each(function() {
						var mergingmenu = $(this);
						var mergedorder = $(this).attr('data-mobilemenuck-mergedorder');
						$(this).find('.mobilemenuck-item').attr('data-mergedorder', mergedorder);
						var merged = false;
						t.mobilemenu.find('.mobilemenuck-item').each(function() {
							if ($(this).attr('data-mergedorder') > mergedorder && merged == false) {
								$(this).before(mergingmenu.html());
								merged = true;
							}
						});
						if (merged == false) t.mobilemenu.append(mergingmenu.html());
						$('[data-mobilemenuck-merged="' + t.mobilemenuid + '"]').remove();
					});
				}
			}
			// add custom modules in the menu
			if ($('#mobilemenuck-top-module').length) {
				t.mobilemenu.find('.mobilemenuck-topbar').after($('#mobilemenuck-top-module').show());
			}
			if ($('#mobilemenuck-bottom-module').length) {
				t.mobilemenu.append($('#mobilemenuck-bottom-module').show());
			}

			t.initCss();
			var activeitemtext;
			if (activeitem && opts.showmobilemenutext != 'none' && opts.showmobilemenutext != 'custom') {
				if (opts.showdesc == '0') {
					activeitem.find('.descck').remove();
				}
				if (opts.useimages == '1') {
					activeitemtext = activeitem.find('a.maximenuck').html();
				} else {
					activeitemtext = activeitem.find('span.titreck').html();
				}
				if (!activeitemtext || activeitemtext == 'undefined')
					activeitemtext = opts.mobilemenutext;
			} else {
				activeitemtext = opts.mobilemenutext;
			}

			if (! opts.merge) {
				var position = (opts.container == 'body') ? 'absolute' : ( (opts.container == 'topfixed') ? 'fixed' : 'relative' );
				if (opts.container == 'topfixed') opts.container = 'body';
				var mobilemenubar = '<div id="' + t.mobilemenuid + '-bar" class="mobilemenuck-bar ' + opts.langdirection + '" style="position:' + position + '"><div class="mobilemenuck-bar-title">' + activeitemtext + '</div>'
						+ '<div class="mobilemenuck-bar-button">' + opts.menubarbuttoncontent + '</div>'
						+ '</div>';
				t.mobilemenubar = $(mobilemenubar);
				// load custom module if loaded
//				if ($('#' + t.mobilemenuid + '-bar-module').length) {
				if ($('#mobilemenuck-bar-module').length) {
					t.mobilemenubar.find('.mobilemenuck-bar-title').text('');
					t.mobilemenubar.find('.mobilemenuck-bar-title').append($('#mobilemenuck-bar-module').show());
				}
				t.mobilemenubar.attr('data-id', opts.menuid);

				if (opts.container == 'body') {
					$(document.body).append(t.mobilemenubar);
				} else {
					el.after(t.mobilemenubar);
					if (opts.displayeffect == 'normal' || opts.displayeffect == 'open')
						t.mobilemenu.css('position', 'relative');
				}

				t.menu.parents('.nav-collapse').css('height', 'auto').css('overflow', 'visible');
				t.menu.parents('.navigation').find('.navbar').css('display', 'none');
				t.mobilemenubar.parents('.nav-collapse').css('height', 'auto');
				t.mobilemenubar.parents('.navigation').find('.navbar').css('display', 'none');

				if (opts.showlogo == '0') {
					
				} else if (($('.maximenucklogo', t.menu).length && opts.showlogo)
					|| opts.logo_source === 'custom'){
					if (opts.logo_source === 'custom' && opts.logo_image !== '') {
						var logo_style = (opts.logo_margintop  ? ' margin-top:' + opts.logo_margintop + ';' : '')
										+ (opts.logo_marginright  ? ' margin-right:' + opts.logo_marginright + ';' : '')
										+ (opts.logo_marginbottom  ? ' margin-bottom:' + opts.logo_marginbottom + ';' : '')
										+ (opts.logo_marginleft  ? ' margin-left:' + opts.logo_marginleft + ';' : '')
						logo_style = logo_style ? ' style="' + logo_style + '"' : '';
						var logo_html = '<img src="' + opts.uriroot + '/' + opts.logo_image + '"'
										 + (opts.logo_width  ? ' width="' + opts.logo_width + '"' : '')
										 + (opts.logo_height  ? ' height="' + opts.logo_height + '"' : '')
										 + (opts.logo_alt  ? ' alt="' + opts.logo_alt + '"' : '')
										 + logo_style
										 + ' data-position="' + opts.logo_position + '"'
										 + ' class="' + opts.logo_class + '"'
										 + '/>'
						logo_html = opts.logo_link ? '<a href="' + opts.logo_link + '">' + logo_html + '</a>' : logo_html;
						logoitem = '<div class="mobilemenuck-logo mobilemenuck-logo-' + opts.logo_position + '">' + logo_html + '</div>';
						var floatlogo = '';
					} else {
						logoitem = $('.maximenucklogo', t.menu).clone();
						var floatlogo = 'float:left;';
					}
					// convert to array
					opts.logo_where = opts.logo_where.split(',');

					if (opts.logo_where.includes('2')) {
						t.mobilemenubar.prepend('<div style="float:left;" class="' + $(logoitem).attr('class') + '">' + $(logoitem).html() + '</div>');
					} 
					if (opts.logo_where.includes('3')) {
						$('.mobilemenuck-topbar', t.mobilemenu).prepend('<div style="' + floatlogo + '" class="' + $(logoitem).attr('class') + '">' + $(logoitem).html() + '</div>');
					} 
					if (opts.logo_where.includes('1')) {
						$('.mobilemenuck-topbar', t.mobilemenu).after('<div class="' + $(logoitem).attr('class') + '">' + $(logoitem).html() + '<div style="clear:both;"></div></div>');
					}
				}
				if (opts.tooglebaron == 'button') {
					$(t.mobilemenubar).find('.mobilemenuck-bar-button').on(opts.tooglebarevent, function() {
						t.toggleMenu();
					});
				} else {
					$(t.mobilemenubar).on(opts.tooglebarevent, function() {
						t.toggleMenu();
					});
				}
				$('.mobilemenuck-button', t.mobilemenu).click(function() {
					t.closeMenu();
				});
				// close the menu when scroll is needed
				$('.scrollTo', t.mobilemenu).click(function() {
					t.closeMenu();
				});
				if (typeof Scrolltock == 'function' && $('.scrollTo', t.mobilemenu).length) {
					Scrolltock(t.mobilemenu);
				}

				$(window).on("click touchstart", function(event){
					var shallclose = true;
					$('.mobilemenuck').each(function() {
						var $this = $(this);
						if ( 
							$this.has(event.target).length == 0 //checks if descendants of submenu was clicked
							&&
							!$this.is(event.target) //checks if the submenu itself was clicked
							&&
							$('#' + t.mobilemenuid + '-bar').has(event.target).length == 0
							&&
							!$('#' + t.mobilemenuid + '-bar').is(event.target)
							){
							// is outside
							// closeMenu(opts.menuid);
							// shallclose = true;
						} else {
							// is inside one of the mobile menus, do nothing
							shallclose = false;
						}
					});
					if (shallclose) t.closeMenu();
				});
			} // end merge condition
			// add compatibility with Mediabox CK
			if (typeof(Mediabox) != "undefined") {
				Mediabox.scanPage();
			}
		}

		t.setDataLevelRecursive = function(menu, level) {
			$('> ' + opts.childselector, menu).each(function() {
				var $li = $(this);
				if (! $li.attr('data-level')) $li.attr('data-level', level).addClass('level' + level);
				if ($li.find(opts.menuselector).length) t.setDataLevelRecursive($li.find(opts.menuselector), level + 1);
			});
		}

		t.setAccordion = function() {
			if (opts.merge) {
				t.mobilemenu = $('#' + opts.merge + '-mobile');
			}
			// mobilemenu = $('#' + opts.menuid + '-mobile');
			$('.mobilemenuck-submenu', t.mobilemenu).hide();
			$('.mobilemenuck-submenu', t.mobilemenu).each(function(i, submenu) {
				submenu = $(submenu);
				var itemparent = submenu.prev('.menuck');
				if ($('+ .mobilemenuck-submenu > div.mobilemenuck-item', itemparent).length)
					$(itemparent).append('<div class="mobilemenuck-togglericon" />');
			});
			$('.mobilemenuck-togglericon', t.mobilemenu).click(function() {
				var itemparentsubmenu = $(this).parent().next('.mobilemenuck-submenu');
				if (itemparentsubmenu.css('display') == 'none') {
					itemparentsubmenu.css('display', 'block');
					$(this).parent().addClass('open');
				} else {
					itemparentsubmenu.css('display', 'none');
					$(this).parent().removeClass('open');
				}
			});
			// open the submenu on the active item
			if (opts.openedonactiveitem == '1') {
				$('.maximenuck.active:not(.current) > .mobilemenuck-togglericon', t.mobilemenu).trigger('click');
			}
		}

		t.setFade = function() {
			if (opts.merge) {
				t.mobilemenu = $('#' + opts.merge + '-mobile');
			}
			if (! $('.mobilemenuck-backbutton', t.mobilemenu).length)
				$('.mobilemenuck-topbar', t.mobilemenu).prepend('<div class="mobilemenuck-title mobilemenuck-backbutton">'+opts.mobilebackbuttontext+'</div>');
			$('.mobilemenuck-backbutton', t.mobilemenu).hide();
			$('.mobilemenuck-submenu', t.mobilemenu).hide();
			$('.mobilemenuck-submenu', t.mobilemenu).each(function(i, submenu) {
				submenu = $(submenu);
				itemparent = submenu.prev('.menuck');
				if ($('+ .mobilemenuck-submenu > div.mobilemenuck-item', itemparent).length)
					$(itemparent).append('<div class="mobilemenuck-togglericon" />');
			});
			$('.mobilemenuck-togglericon', t.mobilemenu).click(function() {
					itemparentsubmenu = $(this).parent().next('.mobilemenuck-submenu');
					parentitem = $(this).parents('.mobilemenuck-item')[0];
					$('.ckopen', t.mobilemenu).removeClass('ckopen');
					$(itemparentsubmenu).addClass('ckopen');
					$('.mobilemenuck-backbutton', t.mobilemenu).fadeIn();
					$('.mobilemenuck-title:not(.mobilemenuck-backbutton)', t.mobilemenu).hide();
					// hides the current level items and displays the submenus
					$(parentitem).parent().find('> .mobilemenuck-item > div.menuck').fadeOut(function() {
						$('.ckopen', t.mobilemenu).fadeIn();
					});
			});
			if (! opts.merge) {
			$('.mobilemenuck-topbar .mobilemenuck-backbutton', t.mobilemenu).click(function() {
				backbutton = this;
				$('.ckopen', t.mobilemenu).fadeOut(500, function() {
					$('.ckopen', t.mobilemenu).parent().parent().find('> .mobilemenuck-item > div.menuck').fadeIn();
					oldopensubmenu = $('.ckopen', t.mobilemenu);
					if (! $('.ckopen', t.mobilemenu).parents('.mobilemenuck-submenu').length) {
						$('.ckopen', t.mobilemenu).removeClass('ckopen');
						$('.mobilemenuck-title', t.mobilemenu).fadeIn();
						$(backbutton).hide();
					} else {
						$('.ckopen', t.mobilemenu).removeClass('ckopen');
						$(oldopensubmenu.parents('.mobilemenuck-submenu')[0]).addClass('ckopen');
					}
				});
				
			});
			}
		}

		t.setPush = function() {
			if (opts.merge) {
				mobilemenu = $('#' + opts.merge + '-mobile');
			} else {
				mobilemenu = $('#' + opts.menuid + '-mobile');
			}
			mobilemenu.css('height', '100%');
			if (! $('.mobilemenuck-backbutton', mobilemenu).length)
				$('.mobilemenuck-topbar', mobilemenu).prepend('<div class="mobilemenuck-title mobilemenuck-backbutton">'+opts.mobilebackbuttontext+'</div>');
			$('.mobilemenuck-backbutton', mobilemenu).hide();
			$('.mobilemenuck-submenu', mobilemenu).hide();
			// $('div.mobilemenuck-item', mobilemenu).css('position', 'relative');
			mobilemenu.append('<div class="mobilemenuck-itemwrap" />');
			$('.mobilemenuck-itemwrap', mobilemenu).css('position', 'absolute').width('100%');
			$('> div.mobilemenuck-item', mobilemenu).each(function(i, item) {
				$('.mobilemenuck-itemwrap', mobilemenu).append(item);
			});
			zindex = 10;
			$('.mobilemenuck-submenu', mobilemenu).each(function(i, submenu) {
				submenu = $(submenu);
				itemparent = submenu.prev('.menuck');
				submenu.css('left', '100%' ).css('width', '100%' ).css('top', '0' ).css('position', 'absolute').css('z-index', zindex);
				if ($('+ .mobilemenuck-submenu > div.mobilemenuck-item', itemparent).length)
					$(itemparent).append('<div class="mobilemenuck-togglericon" />');
				zindex++;
			});
			$('.mobilemenuck-togglericon', mobilemenu).click(function() {
					itemparentsubmenu = $(this).parent().next('.mobilemenuck-submenu');
					parentitem = $(this).parents('.mobilemenuck-item')[0];
					$(parentitem).parent().find('.mobilemenuck-submenu').hide();
					$('.ckopen', mobilemenu).removeClass('ckopen');
					$(itemparentsubmenu).addClass('ckopen');
					$('.mobilemenuck-backbutton', mobilemenu).fadeIn();
					$('.mobilemenuck-title:not(.mobilemenuck-backbutton)', mobilemenu).hide();
					$('.ckopen', mobilemenu).fadeIn();
					$('.mobilemenuck-itemwrap', mobilemenu).animate({'left': '-=100%' });
			});
			if (! opts.merge) {
				$('.mobilemenuck-topbar .mobilemenuck-backbutton', mobilemenu).click(function() {
					backbutton = this;
					$('.mobilemenuck-itemwrap', mobilemenu).animate({'left': '+=100%' });
					// $('.ckopen', mobilemenu).fadeOut(500, function() {
						// $('.ckopen', mobilemenu).parent().parent().find('> .mobilemenuck-item > div.menuck').fadeIn();
						oldopensubmenu = $('.ckopen', mobilemenu);
						if (! $('.ckopen', mobilemenu).parents('.mobilemenuck-submenu').length) {
							$('.ckopen', mobilemenu).removeClass('ckopen').hide();
							$('.mobilemenuck-title', mobilemenu).fadeIn();
							$(backbutton).hide();
						} else {
							$('.ckopen', mobilemenu).removeClass('ckopen').hide();
							$(oldopensubmenu.parents('.mobilemenuck-submenu')[0]).addClass('ckopen');
						}
					// });

				});
			}
		}

		t.resetFademenu = function() {
			// t.mobilemenu = $('#' + opts.menuid + '-mobile');
			$('.mobilemenuck-submenu', t.mobilemenu).hide();
			$('.mobilemenuck-item > div.menuck').show().removeClass('open');
			$('.mobilemenuck-topbar .mobilemenuck-title').show();
			$('.mobilemenuck-topbar .mobilemenuck-title.mobilemenuck-backbutton').hide();
		}

		t.resetPushmenu = function() {
			// mobilemenu = $('#' + opts.menuid + '-mobile');
			$('.mobilemenuck-submenu', t.mobilemenu).hide();
			$('.mobilemenuck-itemwrap', t.mobilemenu).css('left', '0');
			$('.mobilemenuck-topbar .mobilemenuck-title:not(.mobilemenuck-backbutton)').show();
			$('.mobilemenuck-topbar .mobilemenuck-title.mobilemenuck-backbutton').hide();
		}

		t.updatelevel = function() {
			$('div.maximenuck_mod', t.menu).each(function(i, module) {
				module = $(module);
				liparentlevel = module.parent('li.maximenuckmodule').attr('data-level');
				$('li.maximenuck', module).each(function(j, li) {
					li = $(li);
					lilevel = parseInt(li.attr('data-level')) + parseInt(liparentlevel) - 1;
					li.attr('data-level', lilevel).addClass('level' + lilevel);
				});
			});
		}

		t.validateitem = function(itemtmp) {
			if (t.menutype == 'maximenuck') {
				return t.validateitemMaximenuck(itemtmp);
			} else if (t.menutype == 'accordeonck') {
				return t.validateitemAccordeonck(itemtmp);
			} else {
				return t.validateitemNormal(itemtmp);
			}
		}

		t.validateitemNormal = function(itemtmp) {
			if (!itemtmp || $(itemtmp).hasClass('nomobileck') || $(itemtmp).hasClass('mobilemenuck-hide'))
				return false;

			if ($('> a', itemtmp).length)
				return $('> a', itemtmp).clone();
			if ($('> span.separator,> span.nav-header', itemtmp).length)
				return $('> span.separator,> span.nav-header', itemtmp).clone();

			return false;
		}

		t.validateitemMaximenuck = function(itemtmp) {
			if (!itemtmp || $(itemtmp).hasClass('nomobileck') || $(itemtmp).hasClass('mobilemenuck-hide'))
				return false;
			if ($('> * > img', itemtmp).length && opts.useimages == '0' && !$('> * > span.titreck', itemtmp).length) {
				return false
			}
			if ($('> a.maximenuck', itemtmp).length)
				return $('> a.maximenuck', itemtmp).clone();
			if ($('> span.separator,> span.nav-header', itemtmp).length)
				return $('> span.separator,> span.nav-header', itemtmp).clone();
			if ($('> * > a.maximenuck', itemtmp).length)
				return $('> * > a.maximenuck', itemtmp).clone();
			if ($('> * > span.separator,> * > span.nav-header', itemtmp).length)
				return $('> * > span.separator,> * >  span.nav-header', itemtmp).clone();
			if ($('> div.maximenuck_mod', itemtmp).length && opts.usemodules == '1')
				return $('> div.maximenuck_mod', itemtmp).clone();

			return false;
		}

		t.validateitemAccordeonck = function(itemtmp) {
			if (!itemtmp || $(itemtmp).hasClass('nomobileck') || $(itemtmp).hasClass('mobilemenuck-hide'))
				return false;
			var outer = $('> .accordeonck_outer', itemtmp).length ? $('> .accordeonck_outer', itemtmp) : itemtmp;
			if (($('> a', outer).length || $('> span.separator', outer).length)
						&& ($('> a', outer).length || $('> span.separator', outer).length || opts.useimages == '1')
						|| ($('> div.accordeonckmod', outer).length && opts.usemodules == '1')
						|| ($('> .accordeonck_outer', outer).length)
						)
				return $('> a', outer).length ? $('> a', outer).clone() : $('> span.separator', outer).clone();

			return false;
		}

		t.strRepeat = function(string, count) {
		var s = '';
			if (count < 1)
				return '';
			while (count > 0) {
				s += string;
				count--;
			}
			return s;
		}

		t.sortmenu = function(menu) {
			var items = new Array();
			mainitems = $('ul.maximenuck > li.maximenuck.level1', menu);
			j = 0;
			mainitems.each(function(ii, mainitem) {
				items.push(mainitem);
				if ($(mainitem).hasClass('parent')) {
					subitemcontainer = $('.maxipushdownck > .floatck', menu).eq(j);
					subitems = $('li.maximenuck', subitemcontainer);
					subitems.each(function(k, subitem) {
						items.push(subitem);
					});
					j++;
				}
			});
			return items;
		}

		t.initCss = function() {
			switch (opts.displayeffect) {
				case 'normal':
				default:
					t.mobilemenu.css({
						'position': 'absolute',
						'z-index': '100000',
						'top': '0',
						'left': '0',
						'display': 'none'
					});
					break;
				case 'slideleft':
				case 'slideleftover':
					t.mobilemenu.css({
						'position': 'fixed',
						'overflow-y': 'auto',
						'overflow-x': 'hidden',
						'z-index': '100000',
						'top': '0',
						'left': '0',
						'width': opts.menuwidth,
						'height': '100%',
						'display': 'none'
					});
					break;
				case 'slideright':
				case 'sliderightover':
					t.mobilemenu.css({
						'position': 'fixed',
						'overflow-y': 'auto',
						'overflow-x': 'hidden',
						'z-index': '100000',
						'top': '0',
						'right': '0',
						'left': 'auto',
						'width': opts.menuwidth,
						'height': '100%',
						'display': 'none'
					});
					break;
				case 'topfixed':
					t.mobilemenu.css({
						'position': 'fixed',
						'overflow-y': 'scroll',
						'z-index': '100000',
						'top': '0',
						'right': '0',
						'left': '0',
						'max-height': '100%',
						'display': 'none'
					});
					break;
			}
		}

		t.toggleMenu = function() {
			if (t.mobilemenu.css('display') == 'block') {
				t.closeMenu();
			} else {
				t.openMenu();
			}
		}

		t.openMenu = function() {
			// mobilemenu = $('#' + menuid + '-mobile');
//				mobilemenu.show();
			switch (opts.displayeffect) {
				case 'normal':
				default:
					t.mobilemenu.fadeOut();
					$('#' + opts.menuid + '-mobile').fadeIn();
					if (opts.container != 'body')
						t.mobilemenubar.css('display', 'none');
					break;
				case 'slideleft':
				case 'slideleftover':
					t.mobilemenu.css('display', 'block').css('opacity', '0').css('width', '0').animate({'opacity': '1', 'width': opts.menuwidth});
					if (opts.displayeffect =='slideleft')$('body').css('position', 'relative').animate({'left': opts.menuwidth});
					break;
				case 'slideright':
				case 'sliderightover':
					t.mobilemenu.css('display', 'block').css('opacity', '0').css('width', '0').animate({'opacity': '1', 'width': opts.menuwidth});
					if (opts.displayeffect =='slideright') $('body').css('position', 'relative').animate({'right': opts.menuwidth});
					break;
				case 'open':
					// mobilemenu..slideDown();
					$('#' + opts.menuid + '-mobile').slideDown('slow');
					if (opts.container != 'body')
						t.mobilemenubar.css('display', 'none');
					break;
			}
			$(document).trigger('mobilemenuck_open');
		}

		t.closeMenu = function(menuid) {
			if (opts.displaytype == 'fade') {
				t.resetFademenu();
			}
			if (opts.displaytype == 'push') {
				t.resetPushmenu();
			}
			// mobilemenu = $('#' + menuid + '-mobile');
			switch (opts.displayeffect) {
				case 'normal':
				default:
					t.mobilemenu.fadeOut();
					if (opts.container != 'body')
						t.mobilemenubar.css('display', '');
					break;
				case 'slideleft':
					t.mobilemenu.animate({'opacity': '0', 'width': '0'}, function() {
						t.mobilemenu.css('display', 'none');
					});
					$('body').animate({'left': '0'}, function() {
						$('body').css('position', '')
					});
					break;
				case 'slideright':
					t.mobilemenu.animate({'opacity': '0', 'width': '0'}, function() {
						t.mobilemenu.css('display', 'none');
					});
					$('body').animate({'right': '0'}, function() {
						$('body').css('position', '')
					});
					break;
				case 'slideleftover':
					t.mobilemenu.animate({'opacity': '0', 'width': '0'}, function() {
						t.mobilemenu.css('display', 'none');
					});
					break;
				case 'sliderightover':
					t.mobilemenu.animate({'opacity': '0', 'width': '0'}, function() {
						t.mobilemenu.css('display', 'none');
					});
					break;
				case 'open':
					t.mobilemenu.slideUp('slow', function() {
						if (opts.container != 'body')
							t.mobilemenubar.css('display', '');
					});
					
					break;
			}
			$(document).trigger('mobilemenuck_close');
		}

		t.init();
		if (opts.displaytype == 'accordion')
			t.setAccordion();
		if (opts.displaytype == 'fade')
			t.setFade();
		if (opts.displaytype == 'push')
			t.setPush();
	}
	window.MobileMenuCK = MobileMenuCK;
})(jQuery);