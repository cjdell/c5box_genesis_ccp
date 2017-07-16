/*COPYRIGHT C5BOX.COM */
!function(t){var e=null,n={init:function(n){var a=t.extend({slideTransition:"none",slideTransitionSpeed:2e3,slideEndAnimation:!0,position:"0,0",transitionIn:"left",transitionOut:"left",fullWidth:!1,delay:0,timeout:2e3,speedIn:2500,speedOut:1e3,easeIn:"easeOutExpo",easeOut:"easeOutCubic",controls:!1,pager:!1,autoChange:!0,pauseOnHover:!1,backgroundAnimation:!1,backgroundElement:null,backgroundX:500,backgroundY:500,backgroundSpeed:2500,backgroundEase:"easeOutCubic",responsive:!1,increase:!1,dimensions:"",startCallback:null,startNextSlideCallback:null,stopCallback:null,pauseCallback:null,resumeCallback:null,nextSlideCallback:null,prevSlideCallback:null,pagerCallback:null},n);return this.each(function(){e=new i(this,a)})},pause:function(){e.pause(!0)},resume:function(){e.resume()},stop:function(){e.stop()},start:function(){e.start()},startNextSlide:function(){e.startNextSlide()}},i=function(e,n){function i(){if(n.controls&&(G.append('<a href="#" class="prev"></a><a href="#" class="next" ></a>'),G.find(".next").bind("click",function(){return b()}),G.find(".prev").bind("click",function(){return h()})),n.pauseOnHover&&G.bind({mouseenter:function(){l(!1)},mouseleave:function(){o()}}),n.fullWidth?G.css({overflow:"visible"}):G.css({overflow:"hidden"}),n.pager){var e="boolean"!=typeof n.pager;J=e?n.pager:t('<div class="fs-pager-wrapper"></div>'),e?J.addClass("fs-custom-pager-wrapper"):G.append(J)}G.children(".slide").each(function(i){var a=t(this);if(a.children().attr("rel",i).addClass("fs_obj"),a.children("[data-fixed]").addClass("fs_fixed_obj"),n.pager||e){var r=t('<a rel="'+i+'" href="#"></a>').bind("click",function(){return f(this)});J.append(r)}}),n.pager&&(J=t(J).children("a")),n.responsive&&W(),G.find(".fs_loader").length>0&&G.find(".fs_loader").remove(),a()}function a(){P.stop=!1,P.pause=!1,P.running=!0,g("slide"),p(n.startCallback)}function r(){P.stop=!1,P.pause=!1,P.running=!0,c(),p(n.startNextSlideCallback)}function s(){P.stop=!0,P.running=!1,G.find(".slide").stop(!0,!0),G.find(".fs_obj").stop(!0,!0).removeClass("fs-animation"),z(X),p(n.stopCallback)}function l(t){P.pause=!0,P.running=!1,t&&G.find(".fs-animation").finish(),p(n.pauseCallback)}function o(){P.stop=!1,P.pause=!1,P.running=!0,P.slideComplete?g("slide"):P.stepComplete?g("step"):P.finishedObjs<P.maxObjs||g(P.currentStep<P.maxStep?"step":"slide"),p(n.resumeCallback)}function c(){P.lastSlide=P.currentSlide,P.currentSlide+=1,P.stop=!1,P.pause=!1,P.running=!0,v(),p(n.nextSlideCallback)}function u(){P.lastSlide=P.currentSlide,P.currentSlide-=1,P.stop=!1,P.pause=!1,P.running=!0,v(),p(n.prevSlideCallback)}function d(t){P.lastSlide=P.currentSlide,P.currentSlide=t,P.stop=!1,P.pause=!1,P.running=!0,v(),p(n.pagerCallback)}function p(e){t.isFunction(e)&&e.call(this,G,P.currentSlide,P.lastSlide,P.currentStep)}function f(e){var n=parseInt(t(e).attr("rel"));return n!=P.currentSlide&&(s(),d(n)),!1}function h(){return s(),u(),!1}function b(){return s(),c(),!1}function g(t){if(!P.pause&&!P.stop&&P.running)switch(t){case"slide":P.slideComplete=!1,m();break;case"step":P.stepComplete=!1,O();break;case"obj":j()}}function m(){var t=n.timeout;P.init?(P.init=!1,v(!0)):X.push(setTimeout(function(){0==P.maxSlide&&1==P.running||(P.lastSlide=P.currentSlide,P.currentSlide+=1,v())},t))}function v(t){if(G.find(".active-slide").removeClass("active-slide"),P.currentSlide>P.maxSlide&&(P.currentSlide=0),P.currentSlide<0&&(P.currentSlide=P.maxSlide),F.currentSlide=G.children(".slide:eq("+P.currentSlide+")").addClass("active-slide"),0==F.currentSlide.length&&(P.currentSlide=0,F.currentSlide=G.children(".slide:eq("+P.currentSlide+")")),null!=P.lastSlide&&(P.lastSlide<0&&(P.lastSlide=P.maxSlide),F.lastSlide=G.children(".slide:eq("+P.lastSlide+")")),t?F.animation="none":(F.animation=F.currentSlide.attr("data-in"),null==F.animation&&(F.animation=n.slideTransition)),n.slideEndAnimation&&null!=P.lastSlide)E();else switch(F.animation){case"none":S(),x();break;case"scrollLeft":S(),x();break;case"scrollRight":S(),x();break;case"scrollTop":S(),x();break;case"scrollBottom":S(),x();break;default:S()}}function S(){n.backgroundAnimation&&R(),n.pager&&(J.removeClass("active"),J.eq(P.currentSlide).addClass("active")),C(),F.currentSlide.children().hide(),P.currentStep=0,P.currentObj=0,P.maxObjs=0,P.finishedObjs=0,F.currentSlide.children("[data-fixed]").show(),N()}function k(t){null!=F.lastSlide&&F.lastSlide.hide(),t.hasClass("active-slide")&&g("step")}function x(){null!=F.lastSlide&&"none"!=F.animation&&M()}function w(){}function C(){var e=F.currentSlide.children(),n=0;e.each(function(){var e=parseFloat(t(this).attr("data-step"));n=e>n?e:n}),P.maxStep=n}function O(){var t;t=0==P.currentStep?F.currentSlide.children('*:not([data-step]):not([data-fixed]), *[data-step="'+P.currentStep+'"]:not([data-fixed])'):F.currentSlide.children('*[data-step="'+P.currentStep+'"]:not([data-fixed])'),P.maxObjs=t.length,Y=t,P.maxObjs>0?(P.currentObj=0,P.finishedObjs=0,g("obj")):y()}function y(){return P.stepComplete=!0,P.currentStep+=1,P.currentStep>P.maxStep?void(n.autoChange&&(P.currentStep=0,P.slideComplete=!0,g("slide"))):void g("step")}function j(){var e=t(Y[P.currentObj]);e.addClass("fs-animation");var i=e.attr("data-position"),a=e.attr("data-in"),r=e.attr("data-delay"),s=e.attr("data-time"),l=e.attr("data-ease-in"),o=e.attr("data-special");i=null==i?n.position.split(","):i.split(","),null==a&&(a=n.transitionIn),null==r&&(r=n.delay),null==l&&(l=n.easeIn),L(e,i,a,r,s,l,o),P.currentObj+=1,P.currentObj<P.maxObjs?g("obj"):P.currentObj=0}function I(t){t.removeClass("fs-animation"),t.attr("rel")==P.currentSlide&&(P.finishedObjs+=1,P.finishedObjs==P.maxObjs&&y())}function E(){var e=F.lastSlide.children(":not([data-fixed])");e.each(function(){var e=t(this),i=e.position(),a=e.attr("data-out"),r=e.attr("data-ease-out");null==a&&(a=n.transitionOut),null==r&&(r=n.easeOut),T(e,i,a,null,r)}).promise().done(function(){x(),S()})}function N(){var t=F.currentSlide,e={},i={},a=n.slideTransitionSpeed,r=F.animation;switch(n.responsive?unit="%":unit="px",r){case"slideLeft":e.left=K+unit,e.top="0"+unit,e.display="block",i.left="0"+unit,i.top="0"+unit;break;case"slideTop":e.left="0"+unit,e.top=-Z+unit,e.display="block",i.left="0"+unit,i.top="0"+unit;break;case"slideBottom":e.left="0"+unit,e.top=Z+unit,e.display="block",i.left="0"+unit,i.top="0"+unit;break;case"slideRight":e.left=-K+unit,e.top="0"+unit,e.display="block",i.left="0"+unit,i.top="0"+unit;break;case"fade":e.left="0"+unit,e.top="0"+unit,e.display="block",e.opacity=0,i.opacity=1;break;case"none":e.left="0"+unit,e.top="0"+unit,e.display="block",a=0;break;case"scrollLeft":e.left=K+unit,e.top="0"+unit,e.display="block",i.left="0"+unit,i.top="0"+unit;break;case"scrollTop":e.left="0"+unit,e.top=-Z+unit,e.display="block",i.left="0"+unit,i.top="0"+unit;break;case"scrollBottom":e.left="0"+unit,e.top=Z+unit,e.display="block",i.left="0"+unit,i.top="0"+unit;break;case"scrollRight":e.left=-K+unit,e.top="0"+unit,e.display="block",i.left="0"+unit,i.top="0"+unit}t.css(e).animate(i,a,"linear",function(){k(t)})}function M(){var t={},e=n.slideTransitionSpeed,i=null,a=F.animation;switch(i=n.responsive?"%":"px",a){case"scrollLeft":t.left=-K+i,t.top="0"+i;break;case"scrollTop":t.left="0"+i,t.top=Z+i;break;case"scrollBottom":t.left="0"+i,t.top=-Z+i;break;case"scrollRight":t.left=K+i,t.top="0"+i;break;default:e=0}F.lastSlide.animate(t,e,"linear",function(){w()})}function L(e,i,a,r,s,l,o){var c={},u={},d=n.speedIn,p=null;switch(p=n.responsive?"%":"px",null!=s&&""!=s&&(d=s-r),c.opacity=1,a){case"left":c.top=i[0],c.left=K;break;case"bottomLeft":c.top=Z,c.left=K;break;case"topLeft":c.top=-1*e.outerHeight(),c.left=K;break;case"top":c.top=-1*e.outerHeight(),c.left=i[1];break;case"bottom":c.top=Z,c.left=i[1];break;case"right":c.top=i[0],c.left=-V-e.outerWidth();break;case"bottomRight":c.top=Z,c.left=-V-e.outerWidth();break;case"topRight":c.top=-1*e.outerHeight(),c.left=-V-e.outerWidth();break;case"fade":c.top=i[0],c.left=i[1],c.opacity=0,u.opacity=1;break;case"none":c.top=i[0],c.left=i[1],c.display="none",d=0}u.top=i[0],u.left=i[1],u.left=u.left+p,u.top=u.top+p,c.left=c.left+p,c.top=c.top+p,X.push(setTimeout(function(){if("cycle"==o&&e.attr("rel")==P.currentSlide){var i=e.prev();if(i.length>0){var a=t(i).attr("data-position").split(",");a={top:a[0],left:a[1]};var r=t(i).attr("data-out");null==r&&(r=n.transitionOut),T(i,a,r,d)}}e.css(c).show().animate(u,d,l,function(){I(e)}).addClass("fs_obj_active")},r))}function T(t,e,i,a,r){var s={},l={},o=null;a=n.speedOut,o=n.responsive?"%":"px";var c=t.outerWidth(),u=t.outerHeight();switch(n.responsive&&(c=q(c,$),u=q(u,D)),i){case"left":l.left=-V-100-c;break;case"bottomLeft":l.top=Z,l.left=-V-100-c;break;case"topLeft":l.top=-u,l.left=-V-100-c;break;case"top":l.top=-u;break;case"bottom":l.top=Z;break;case"right":l.left=K;break;case"bottomRight":l.top=Z,l.left=K;break;case"topRight":l.top=-u,l.left=K;break;case"fade":s.opacity=1,l.opacity=0;break;case"hide":l.display="none",a=0;break;default:l.display="none",a=0}"undefined"!=typeof l.top&&l.top.toString().indexOf("px")>0&&(l.top=l.top.substring(0,l.top.length-2),n.responsive&&(l.top=q(l.top,D))),"undefined"!=typeof l.left&&l.left.toString().indexOf("px")>0&&(l.left=l.left.substring(0,l.left.length-2),n.responsive&&(l.left=q(l.left,$))),l.left=l.left+o,l.top=l.top+o,t.css(s).animate(l,a,r,function(){t.hide()}).removeClass("fs_obj_active")}function R(){var e;e=null==n.backgroundElement||""==n.backgroundElement?G.parent():t(n.backgroundElement);var i=e.css("background-position");i=i.split(" ");var a=n.backgroundX,r=n.backgroundY,s=Number(i[0].replace(/[px,%]/g,""))+Number(a),l=Number(i[1].replace(/[px,%]/g,""))+Number(r);e.animate({backgroundPositionX:s+"px",backgroundPositionY:l+"px"},n.backgroundSpeed,n.backgroundEase)}function W(){var i=n.dimensions.split(","),a=Q();$=i[0],D=i[1],n.increase||t(e).css({maxWidth:$+"px"});var r=G.children(".slide").find("*");r.each(function(){var e=t(this),n=null,i=null,r=null;if(null!=e.attr("data-position")){var s=e.attr("data-position").split(",");n=q(s[1],$),i=q(s[0],D),e.attr("data-position",i+","+n)}null!=e.attr("width")&&""!=e.attr("width")?(r=e.attr("width"),n=q(r,$),e.attr("width",n+"%"),e.css("width",n+"%")):"0px"!=e.css("width")?(r=e.css("width"),r.indexOf("px")>0&&(r=r.substring(0,r.length-2),n=q(r,$),e.css("width",n+"%"))):"img"==e.prop("tagName").toLowerCase()&&-1!=a?(r=_(e),n=q(r,$),e.css("width",n+"%").attr("width",n+"%")):"img"==e.prop("tagName").toLowerCase()&&(r=e.get(0).width,n=q(r,$),e.css("width",n+"%")),null!=e.attr("height")&&""!=e.attr("height")?(r=e.attr("height"),i=q(r,D),e.attr("height",i+"%"),e.css("height",i+"%")):"0px"!=e.css("height")?(r=e.css("height"),r.indexOf("px")>0&&(r=r.substring(0,r.length-2),i=q(r,D),e.css("height",i+"%"))):"img"==e.prop("tagName").toLowerCase()&&-1!=a?(r=H(e),i=q(r,D),e.css("height",i+"%").attr("height",i+"%")):"img"==e.prop("tagName").toLowerCase()&&(r=e.get(0).height,i=q(r,D),e.css("height",i+"%")),e.attr("data-fontsize",e.css("font-size")),e.attr("data-letterspacing",e.css("letter-spacing"))}),G.css({width:"auto",height:"auto"}).append('<div class="fs-stretcher" style="width:'+$+"px; height:"+D+'px"></div>'),A(),t(window).bind("resize",function(){A()})}function _(t){var e=new Image;return e.src=t.attr("src"),e.width}function H(t){var e=new Image;return e.src=t.attr("src"),e.height}function A(){var e=G.innerWidth();G.innerHeight();if($>=e||n.increase){var i=$/D,a=e/i;G.find(".fs-stretcher").css({width:e+"px",height:a+"px"})}U=t("body").width();var r=G.width();V=q((U-r)/2,$),K=100,n.fullWidth&&(K=100+2*V),Z=100,(0==P.init||$>e)&&B()}function B(){var e=null,n=G.children(".slide").find("*");n.each(function(){obj=t(this);var n=obj.attr("data-fontsize");n.indexOf("px")>0&&(n=n.substring(0,n.length-2),e=q(n,D)*(G.find(".fs-stretcher").height()/100),obj.css("fontSize",e+"px"),obj.css("lineHeight","100%"));var i=obj.attr("data-letterspacing");i.indexOf("px")>0&&(i=i.substring(0,i.length-2),e=q(i,D)*(G.find(".fs-stretcher").height()/100),obj.css("letterSpacing",e+"px"))})}function q(t,e){return t/(e/100)}function z(e){var n=e.length;t.each(e,function(t){clearTimeout(this),t==n-1&&(e=[])})}function Q(){var t=-1;if("Microsoft Internet Explorer"==navigator.appName){var e=navigator.userAgent,n=new RegExp("MSIE ([0-9]{1,}[.0-9]{0,})");null!=n.exec(e)&&(t=parseFloat(RegExp.$1))}return t}var P={init:!0,running:!1,pause:!1,stop:!1,slideComplete:!1,stepComplete:!1,controlsActive:!0,currentSlide:0,lastSlide:null,maxSlide:0,currentStep:0,maxStep:0,currentObj:0,maxObjs:0,finishedObjs:0},F={currentSlide:null,lastSlide:null,animationkey:"none"},X=[],Y=null,$=null,D=null;t(e).wrapInner('<div class="c5box_animateslider" />');var G=t(e).find(".c5box_animateslider"),J=null;P.maxSlide=G.children(".slide").length-1;var K=G.width(),U=t("body").width(),V=0;n.fullWidth&&(V=(U-K)/2,K=U);var Z=G.height();i(),this.start=function(){a()},this.startNextSlide=function(){r()},this.stop=function(){s()},this.pause=function(){l(!1)},this.resume=function(){o()}};t.fn.fractionSlider=function(e){return n[e]?n[e].apply(this,Array.prototype.slice.call(arguments,1)):"object"!=typeof e&&e?void t.error("Method "+e+" does not exist on jQuery.tooltip"):n.init.apply(this,arguments)};var a={};t.each(["Quad","Cubic","Quart","Quint","Expo"],function(t,e){a[e]=function(e){return Math.pow(e,t+2)}}),t.extend(a,{Sine:function(t){return 1-Math.cos(t*Math.PI/2)},Circ:function(t){return 1-Math.sqrt(1-t*t)},Elastic:function(t){return 0==t||1==t?t:-Math.pow(2,8*(t-1))*Math.sin((80*(t-1)-7.5)*Math.PI/15)},Back:function(t){return t*t*(3*t-2)},Bounce:function(t){for(var e,n=4;t<((e=Math.pow(2,--n))-1)/11;);return 1/Math.pow(4,3-n)-7.5625*Math.pow((3*e-2)/22-t,2)}}),t.each(a,function(e,n){t.easing["easeIn"+e]=n,t.easing["easeOut"+e]=function(t){return 1-n(1-t)},t.easing["easeInOut"+e]=function(t){return.5>t?n(2*t)/2:1-n(-2*t+2)/2}})}(jQuery);
$(function() {
    $(".custom-nav-class ul.nav > li").each(function() {
        $(this).has("ul").find("a").first().append(" <i class='fa fa-caret-down'></i>")
    }), $(".custom-nav-class ul.nav ul li").each($(window).width() < 767 ? function() {
        $(this).has("ul").find("a").first().append(" <i class='fa fa-caret-down'></i>")
    } : function() {
        $(this).has("ul").find("a").first().append(" <i class='fa fa-caret-right'></i>")
    }), $(".custom-nav-class ul.nav li").hover(function() {
        $(this).has("ul") && $(this).children("ul").addClass("opennav") && $(this).children("ul").children('li').addClass('dlist-animate')
    }, function() {
        $(this).has("ul") && $(this).children("ul").removeClass("opennav") && $(this).children("ul").children('li').removeClass('dlist-animate')
    })
});

!function(a){"use strict";function b(b,c){this.element=a(b),this.settings=a.extend({},d,c),this._defaults=d,this._init()}var c="Morphext",d={animation:"bounceIn",separator:",",speed:2e3,complete:a.noop};b.prototype={_init:function(){var b=this;this.phrases=[],this.element.addClass("morphext"),a.each(this.element.text().split(this.settings.separator),function(c,d){b.phrases.push(a.trim(d))}),this.index=-1,this.animate(),this.start()},animate:function(){this.index=++this.index%this.phrases.length,this.element[0].innerHTML='<span class="animated '+this.settings.animation+'">'+this.phrases[this.index]+"</span>",a.isFunction(this.settings.complete)&&this.settings.complete.call(this)},start:function(){var a=this;this._interval=setInterval(function(){a.animate()},this.settings.speed)},stop:function(){this._interval=clearInterval(this._interval)}},a.fn[c]=function(d){return this.each(function(){a.data(this,"plugin_"+c)||a.data(this,"plugin_"+c,new b(this,d))})}}(jQuery);
var count = [];
$(function(){
    $(".scrolleffect .img-bgcover").each(function(index, item){
        var pagelistimage = scrollMonitor.create(item);
        pagelistimage.enterViewport(function() {
            count.push(pagelistimage.watchItem);
            if(!$(item).hasClass("show")){
                setTimeout(
                    function() 
                    {
                    item.className = "img-bgcover show";
                    }, count.length*50);
            }
        });
        pagelistimage.exitViewport(function() {
            count = [];
        });
    })
    if($("html.ccm-edit-mode").length == 0){
         $(".parallaxarea").each(function(index, el) {
                $(el).addClass('parallax_active'+index);
                if($(this).children("[class*=ccm-custom-style]:first-child").length != 0 && $(this).children("[class*=ccm-custom-style]:first-child").css('background-image') != 'none'){
                    pdiv = $(el).children("[class*=ccm-custom-style]:first-child").css('background-image');
                    pdiv = pdiv.replace(/^url\(["']?/, '').replace(/["']?\)$/, '');
                    $(el).children("[class*=ccm-custom-style]:first-child").css('background-image', 'none');
                    $(el).css({
                        background: 'none'
                    });
                    $(".parallax_active"+index).parallax({
                    imageSrc: pdiv,
                    zIndex: 1,
                    bleed: 10,
                    speed: 0.4,
                    });
                }
            });
     }
     $(".scrolleffect .ca-menu, .scrolleffect-delay .ca-menu").each(function(index, item){
        var pagelistimage = scrollMonitor.create(item);
        pagelistimage.enterViewport(function() {
            count.push(pagelistimage.watchItem);
            if(!$(item).hasClass("show")){
                setTimeout(
                    function() 
                    {
                    item.className = "ca-menu show";
                    }, count.length*50);
            }
        });
        pagelistimage.exitViewport(function() {
            count = [];
        });
    })
     if($("#header").length){   
        var headerscroll = scrollMonitor.create(".master-container", -$("#header").height());
        headerscroll.stateChange(function(){
            if(headerscroll.isAboveViewport){
                $("#header").addClass('solidify');
            }else{
                $("#header").removeClass('solidify');
            }
        })
        if(headerscroll.isAboveViewport){
                $("#header").addClass('solidify');
            }else{
                $("#header").removeClass('solidify');
            }
    }
})

var hasTouch = ("ontouchstart" in window);
var iOS5 = /iPad|iPod|iPhone/.test(navigator.platform) && "matchMedia" in window;
$(".navcontrol ul li").has("ul").addClass("dropdown");
if (hasTouch && document.querySelectorAll && !iOS5) {
    var i, len, element,
        dropdowns = document.querySelectorAll(".navcontrol ul li.dropdown > a");
    function menuTouch(event) {
        var i, len, noclick = !(this.dataNoclick);
        for (i = 0, len = dropdowns.length; i < len; ++i) {
            dropdowns[i].dataNoclick = false;
        }
        this.dataNoclick = noclick;
        this.focus();
    }
    function menuClick(event) {
        if (this.dataNoclick) {
            event.preventDefault();
        }
    }
    for (i = 0, len = dropdowns.length; i < len; ++i) {
        element = dropdowns[i];
        element.dataNoclick = false;
        element.addEventListener("touchstart", menuTouch, false);
        element.addEventListener("click", menuClick, false);
    }
}

$(function(){
    if ($('#ccm-toolbar').length) {
       var tbheight = $('#ccm-toolbar').outerHeight(true);
       if ($('#ccm-page-status-bar').length) {
          var sbheight = $('#ccm-page-status-bar').outerHeight(true);
          tbheight = tbheight + sbheight;
       }
       $('#header').css('top','49px');
    }
});
$(function(){
	$(".custom-nav-class ul.nav li.dropdown").children("ul").children('li').addClass('dlist')
});
$(function(){
    $(".navcontrol li").on('mouseenter mouseleave', function (e) {
        if($(this).has("ul").length > 0){
            var elm = $('ul:first', this);
            var off = elm .offset();
            var l = off.left;
            var w = elm.width();
            var docH = $("body").height();
            var docW = $("body").width();

            var isEntirelyVisible = (l+ w <= docW);

            if ( ! isEntirelyVisible ) {
                $(this).addClass('edge');
            } else {
                $(this).removeClass('edge');
            }
        }
    });
    $('.master-container .scroller i').on('click', function () {
        var ele = $("#banner").next("div").find(".container");
        // this will search within the section
        $("html, body").animate({
             scrollTop: $(ele).offset().top - 80
        }, 500);
        return false;
    });
		$(".parallaxarea, #introbox, #home-pagetype, #homesection2, #marqueebox, #homesection1").each(function(){var a=$(this);if(a.html().replace(/\s|&nbsp;/g,"").length==0){a.remove()}});

    $(".flipit").Morphext({
		    animation: "flipInY",
		    separator: "|",
		    speed: 3000,
		    complete: function () {
		    }
		});
})





