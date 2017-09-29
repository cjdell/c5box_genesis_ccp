function menuTouch(t) {
    var e, n, i = !this.dataNoclick;
    for (e = 0, n = dropdowns.length; n > e; ++e) dropdowns[e].dataNoclick = !1;
    this.dataNoclick = i, this.focus()
}

function menuClick(t) {
    this.dataNoclick && t.preventDefault()
}! function(t) {
    var e = null,
        n = {
            init: function(n) {
                var a = t.extend({
                    slideTransition: "none",
                    slideTransitionSpeed: 2e3,
                    slideEndAnimation: !0,
                    position: "0,0",
                    transitionIn: "left",
                    transitionOut: "left",
                    fullWidth: !1,
                    delay: 0,
                    timeout: 2e3,
                    speedIn: 2500,
                    speedOut: 1e3,
                    easeIn: "easeOutExpo",
                    easeOut: "easeOutCubic",
                    controls: !1,
                    pager: !1,
                    autoChange: !0,
                    pauseOnHover: !1,
                    backgroundAnimation: !1,
                    backgroundElement: null,
                    backgroundX: 500,
                    backgroundY: 500,
                    backgroundSpeed: 2500,
                    backgroundEase: "easeOutCubic",
                    responsive: !1,
                    increase: !1,
                    dimensions: "",
                    startCallback: null,
                    startNextSlideCallback: null,
                    stopCallback: null,
                    pauseCallback: null,
                    resumeCallback: null,
                    nextSlideCallback: null,
                    prevSlideCallback: null,
                    pagerCallback: null
                }, n);
                return this.each(function() {
                    e = new i(this, a)
                })
            },
            pause: function() {
                e.pause(!0)
            },
            resume: function() {
                e.resume()
            },
            stop: function() {
                e.stop()
            },
            start: function() {
                e.start()
            },
            startNextSlide: function() {
                e.startNextSlide()
            }
        },
        i = function(e, n) {
            function i() {
                if (n.controls && (D.append('<a href="#" class="prev"></a><a href="#" class="next" ></a>'), D.find(".next").bind("click", function() {
                        return m()
                    }), D.find(".prev").bind("click", function() {
                        return f()
                    })), n.pauseOnHover && D.bind({
                        mouseenter: function() {
                            r(!1)
                        },
                        mouseleave: function() {
                            o()
                        }
                    }), n.fullWidth ? D.css({
                        overflow: "visible"
                    }) : D.css({
                        overflow: "hidden"
                    }), n.pager) {
                    var e = "boolean" != typeof n.pager;
                    G = e ? n.pager : t('<div class="fs-pager-wrapper"></div>'), e ? G.addClass("fs-custom-pager-wrapper") : D.append(G)
                }
                D.children(".slide").each(function(i) {
                    var a = t(this);
                    if (a.children().attr("rel", i).addClass("fs_obj"), a.children("[data-fixed]").addClass("fs_fixed_obj"), n.pager || e) {
                        var s = t('<a rel="' + i + '" href="#"></a>').bind("click", function() {
                            return h(this)
                        });
                        G.append(s)
                    }
                }), n.pager && (G = t(G).children("a")), n.responsive && L(), D.find(".fs_loader").length > 0 && D.find(".fs_loader").remove(), a()
            }

            function a() {
                B.stop = !1, B.pause = !1, B.running = !0, g("slide"), p(n.startCallback)
            }

            function s() {
                B.stop = !1, B.pause = !1, B.running = !0, c(), p(n.startNextSlideCallback)
            }

            function l() {
                B.stop = !0, B.running = !1, D.find(".slide").stop(!0, !0), D.find(".fs_obj").stop(!0, !0).removeClass("fs-animation"), P(V), p(n.stopCallback)
            }

            function r(t) {
                B.pause = !0, B.running = !1, t && D.find(".fs-animation").finish(), p(n.pauseCallback)
            }

            function o() {
                B.stop = !1, B.pause = !1, B.running = !0, B.slideComplete ? g("slide") : B.stepComplete ? g("step") : B.finishedObjs < B.maxObjs || g(B.currentStep < B.maxStep ? "step" : "slide"), p(n.resumeCallback)
            }

            function c() {
                B.lastSlide = B.currentSlide, B.currentSlide += 1, B.stop = !1, B.pause = !1, B.running = !0, v(), p(n.nextSlideCallback)
            }

            function u() {
                B.lastSlide = B.currentSlide, B.currentSlide -= 1, B.stop = !1, B.pause = !1, B.running = !0, v(), p(n.prevSlideCallback)
            }

            function d(t) {
                B.lastSlide = B.currentSlide, B.currentSlide = t, B.stop = !1, B.pause = !1, B.running = !0, v(), p(n.pagerCallback)
            }

            function p(e) {
                t.isFunction(e) && e.call(this, D, B.currentSlide, B.lastSlide, B.currentStep)
            }

            function h(e) {
                var n = parseInt(t(e).attr("rel"));
                return n != B.currentSlide && (l(), d(n)), !1
            }

            function f() {
                return l(), u(), !1
            }

            function m() {
                return l(), c(), !1
            }

            function g(t) {
                if (!B.pause && !B.stop && B.running) switch (t) {
                    case "slide":
                        B.slideComplete = !1, b();
                        break;
                    case "step":
                        B.stepComplete = !1, $();
                        break;
                    case "obj":
                        O()
                }
            }

            function b() {
                var t = n.timeout;
                B.init ? (B.init = !1, v(!0)) : V.push(setTimeout(function() {
                    0 == B.maxSlide && 1 == B.running || (B.lastSlide = B.currentSlide, B.currentSlide += 1, v())
                }, t))
            }

            function v(t) {
                if (D.find(".active-slide").removeClass("active-slide"), B.currentSlide > B.maxSlide && (B.currentSlide = 0), B.currentSlide < 0 && (B.currentSlide = B.maxSlide), Q.currentSlide = D.children(".slide:eq(" + B.currentSlide + ")").addClass("active-slide"), 0 == Q.currentSlide.length && (B.currentSlide = 0, Q.currentSlide = D.children(".slide:eq(" + B.currentSlide + ")")), null != B.lastSlide && (B.lastSlide < 0 && (B.lastSlide = B.maxSlide), Q.lastSlide = D.children(".slide:eq(" + B.lastSlide + ")")), t ? Q.animation = "none" : (Q.animation = Q.currentSlide.attr("data-in"), null == Q.animation && (Q.animation = n.slideTransition)), n.slideEndAnimation && null != B.lastSlide) I();
                else switch (Q.animation) {
                    case "none":
                        k(), x();
                        break;
                    case "scrollLeft":
                        k(), x();
                        break;
                    case "scrollRight":
                        k(), x();
                        break;
                    case "scrollTop":
                        k(), x();
                        break;
                    case "scrollBottom":
                        k(), x();
                        break;
                    default:
                        k()
                }
            }

            function k() {
                n.backgroundAnimation && E(), n.pager && (G.removeClass("active"), G.eq(B.currentSlide).addClass("active")), C(), Q.currentSlide.children().hide(), B.currentStep = 0, B.currentObj = 0, B.maxObjs = 0, B.finishedObjs = 0, Q.currentSlide.children("[data-fixed]").show(), _()
            }

            function S(t) {
                null != Q.lastSlide && Q.lastSlide.hide(), t.hasClass("active-slide") && g("step")
            }

            function x() {
                null != Q.lastSlide && "none" != Q.animation && N()
            }

            function w() {}

            function C() {
                var e = Q.currentSlide.children(),
                    n = 0;
                e.each(function() {
                    var e = parseFloat(t(this).attr("data-step"));
                    n = e > n ? e : n
                }), B.maxStep = n
            }

            function $() {
                var t;
                t = 0 == B.currentStep ? Q.currentSlide.children('*:not([data-step]):not([data-fixed]), *[data-step="' + B.currentStep + '"]:not([data-fixed])') : Q.currentSlide.children('*[data-step="' + B.currentStep + '"]:not([data-fixed])'), B.maxObjs = t.length, F = t, B.maxObjs > 0 ? (B.currentObj = 0, B.finishedObjs = 0, g("obj")) : y()
            }

            function y() {
                return B.stepComplete = !0, B.currentStep += 1, B.currentStep > B.maxStep ? void(n.autoChange && (B.currentStep = 0, B.slideComplete = !0, g("slide"))) : void g("step")
            }

            function O() {
                var e = t(F[B.currentObj]);
                e.addClass("fs-animation");
                var i = e.attr("data-position"),
                    a = e.attr("data-in"),
                    s = e.attr("data-delay"),
                    l = e.attr("data-time"),
                    r = e.attr("data-ease-in"),
                    o = e.attr("data-special");
                i = null == i ? n.position.split(",") : i.split(","), null == a && (a = n.transitionIn), null == s && (s = n.delay), null == r && (r = n.easeIn), M(e, i, a, s, l, r, o), B.currentObj += 1, B.currentObj < B.maxObjs ? g("obj") : B.currentObj = 0
            }

            function j(t) {
                t.removeClass("fs-animation"), t.attr("rel") == B.currentSlide && (B.finishedObjs += 1, B.finishedObjs == B.maxObjs && y())
            }

            function I() {
                var e = Q.lastSlide.children(":not([data-fixed])");
                e.each(function() {
                    var e = t(this),
                        i = e.position(),
                        a = e.attr("data-out"),
                        s = e.attr("data-ease-out");
                    null == a && (a = n.transitionOut), null == s && (s = n.easeOut), T(e, i, a, null, s)
                }).promise().done(function() {
                    x(), k()
                })
            }

            function _() {
                var t = Q.currentSlide,
                    e = {},
                    i = {},
                    a = n.slideTransitionSpeed,
                    s = Q.animation;
                switch (n.responsive ? unit = "%" : unit = "px", s) {
                    case "slideLeft":
                        e.left = J + unit, e.top = "0" + unit, e.display = "block", i.left = "0" + unit, i.top = "0" + unit;
                        break;
                    case "slideTop":
                        e.left = "0" + unit, e.top = -Z + unit, e.display = "block", i.left = "0" + unit, i.top = "0" + unit;
                        break;
                    case "slideBottom":
                        e.left = "0" + unit, e.top = Z + unit, e.display = "block", i.left = "0" + unit, i.top = "0" + unit;
                        break;
                    case "slideRight":
                        e.left = -J + unit, e.top = "0" + unit, e.display = "block", i.left = "0" + unit, i.top = "0" + unit;
                        break;
                    case "fade":
                        e.left = "0" + unit, e.top = "0" + unit, e.display = "block", e.opacity = 0, i.opacity = 1;
                        break;
                    case "none":
                        e.left = "0" + unit, e.top = "0" + unit, e.display = "block", a = 0;
                        break;
                    case "scrollLeft":
                        e.left = J + unit, e.top = "0" + unit, e.display = "block", i.left = "0" + unit, i.top = "0" + unit;
                        break;
                    case "scrollTop":
                        e.left = "0" + unit, e.top = -Z + unit, e.display = "block", i.left = "0" + unit, i.top = "0" + unit;
                        break;
                    case "scrollBottom":
                        e.left = "0" + unit, e.top = Z + unit, e.display = "block", i.left = "0" + unit, i.top = "0" + unit;
                        break;
                    case "scrollRight":
                        e.left = -J + unit, e.top = "0" + unit, e.display = "block", i.left = "0" + unit, i.top = "0" + unit
                }
                t.css(e).animate(i, a, "linear", function() {
                    S(t)
                })
            }

            function N() {
                var t = {},
                    e = n.slideTransitionSpeed,
                    i = null,
                    a = Q.animation;
                switch (i = n.responsive ? "%" : "px", a) {
                    case "scrollLeft":
                        t.left = -J + i, t.top = "0" + i;
                        break;
                    case "scrollTop":
                        t.left = "0" + i, t.top = Z + i;
                        break;
                    case "scrollBottom":
                        t.left = "0" + i, t.top = -Z + i;
                        break;
                    case "scrollRight":
                        t.left = J + i, t.top = "0" + i;
                        break;
                    default:
                        e = 0
                }
                Q.lastSlide.animate(t, e, "linear", function() {
                    w()
                })
            }

            function M(e, i, a, s, l, r, o) {
                var c = {},
                    u = {},
                    d = n.speedIn,
                    p = null;
                switch (p = n.responsive ? "%" : "px", null != l && "" != l && (d = l - s), c.opacity = 1, a) {
                    case "left":
                        c.top = i[0], c.left = J;
                        break;
                    case "bottomLeft":
                        c.top = Z, c.left = J;
                        break;
                    case "topLeft":
                        c.top = -1 * e.outerHeight(), c.left = J;
                        break;
                    case "top":
                        c.top = -1 * e.outerHeight(), c.left = i[1];
                        break;
                    case "bottom":
                        c.top = Z, c.left = i[1];
                        break;
                    case "right":
                        c.top = i[0], c.left = -U - e.outerWidth();
                        break;
                    case "bottomRight":
                        c.top = Z, c.left = -U - e.outerWidth();
                        break;
                    case "topRight":
                        c.top = -1 * e.outerHeight(), c.left = -U - e.outerWidth();
                        break;
                    case "fade":
                        c.top = i[0], c.left = i[1], c.opacity = 0, u.opacity = 1;
                        break;
                    case "none":
                        c.top = i[0], c.left = i[1], c.display = "none", d = 0
                }
                u.top = i[0], u.left = i[1], u.left = u.left + p, u.top = u.top + p, c.left = c.left + p, c.top = c.top + p, V.push(setTimeout(function() {
                    if ("cycle" == o && e.attr("rel") == B.currentSlide) {
                        var i = e.prev();
                        if (i.length > 0) {
                            var a = t(i).attr("data-position").split(",");
                            a = {
                                top: a[0],
                                left: a[1]
                            };
                            var s = t(i).attr("data-out");
                            null == s && (s = n.transitionOut), T(i, a, s, d)
                        }
                    }
                    e.css(c).show().animate(u, d, r, function() {
                        j(e)
                    }).addClass("fs_obj_active")
                }, s))
            }

            function T(t, e, i, a, s) {
                var l = {},
                    r = {},
                    o = null;
                a = n.speedOut, o = n.responsive ? "%" : "px";
                var c = t.outerWidth(),
                    u = t.outerHeight();
                switch (n.responsive && (c = q(c, Y), u = q(u, X)), i) {
                    case "left":
                        r.left = -U - 100 - c;
                        break;
                    case "bottomLeft":
                        r.top = Z, r.left = -U - 100 - c;
                        break;
                    case "topLeft":
                        r.top = -u, r.left = -U - 100 - c;
                        break;
                    case "top":
                        r.top = -u;
                        break;
                    case "bottom":
                        r.top = Z;
                        break;
                    case "right":
                        r.left = J;
                        break;
                    case "bottomRight":
                        r.top = Z, r.left = J;
                        break;
                    case "topRight":
                        r.top = -u, r.left = J;
                        break;
                    case "fade":
                        l.opacity = 1, r.opacity = 0;
                        break;
                    case "hide":
                        r.display = "none", a = 0;
                        break;
                    default:
                        r.display = "none", a = 0
                }
                "undefined" != typeof r.top && r.top.toString().indexOf("px") > 0 && (r.top = r.top.substring(0, r.top.length - 2), n.responsive && (r.top = q(r.top, X))), "undefined" != typeof r.left && r.left.toString().indexOf("px") > 0 && (r.left = r.left.substring(0, r.left.length - 2), n.responsive && (r.left = q(r.left, Y))), r.left = r.left + o, r.top = r.top + o, t.css(l).animate(r, a, s, function() {
                    t.hide()
                }).removeClass("fs_obj_active")
            }

            function E() {
                var e;
                e = null == n.backgroundElement || "" == n.backgroundElement ? D.parent() : t(n.backgroundElement);
                var i = e.css("background-position");
                i = i.split(" ");
                var a = n.backgroundX,
                    s = n.backgroundY,
                    l = Number(i[0].replace(/[px,%]/g, "")) + Number(a),
                    r = Number(i[1].replace(/[px,%]/g, "")) + Number(s);
                e.animate({
                    backgroundPositionX: l + "px",
                    backgroundPositionY: r + "px"
                }, n.backgroundSpeed, n.backgroundEase)
            }

            function L() {
                var i = n.dimensions.split(","),
                    a = z();
                Y = i[0], X = i[1], n.increase || t(e).css({
                    maxWidth: Y + "px"
                });
                var s = D.children(".slide").find("*");
                s.each(function() {
                    var e = t(this),
                        n = null,
                        i = null,
                        s = null;
                    if (null != e.attr("data-position")) {
                        var l = e.attr("data-position").split(",");
                        n = q(l[1], Y), i = q(l[0], X), e.attr("data-position", i + "," + n)
                    }
                    null != e.attr("width") && "" != e.attr("width") ? (s = e.attr("width"), n = q(s, Y), e.attr("width", n + "%"), e.css("width", n + "%")) : "0px" != e.css("width") ? (s = e.css("width"), s.indexOf("px") > 0 && (s = s.substring(0, s.length - 2), n = q(s, Y), e.css("width", n + "%"))) : "img" == e.prop("tagName").toLowerCase() && -1 != a ? (s = A(e), n = q(s, Y), e.css("width", n + "%").attr("width", n + "%")) : "img" == e.prop("tagName").toLowerCase() && (s = e.get(0).width, n = q(s, Y), e.css("width", n + "%")), null != e.attr("height") && "" != e.attr("height") ? (s = e.attr("height"), i = q(s, X), e.attr("height", i + "%"), e.css("height", i + "%")) : "0px" != e.css("height") ? (s = e.css("height"), s.indexOf("px") > 0 && (s = s.substring(0, s.length - 2), i = q(s, X), e.css("height", i + "%"))) : "img" == e.prop("tagName").toLowerCase() && -1 != a ? (s = H(e), i = q(s, X), e.css("height", i + "%").attr("height", i + "%")) : "img" == e.prop("tagName").toLowerCase() && (s = e.get(0).height, i = q(s, X), e.css("height", i + "%")), e.attr("data-fontsize", e.css("font-size")), e.attr("data-letterspacing", e.css("letter-spacing"))
                }), D.css({
                    width: "auto",
                    height: "auto"
                }).append('<div class="fs-stretcher" style="width:' + Y + "px; height:" + X + 'px"></div>'), R(), t(window).bind("resize", function() {
                    R()
                })
            }

            function A(t) {
                var e = new Image;
                return e.src = t.attr("src"), e.width
            }

            function H(t) {
                var e = new Image;
                return e.src = t.attr("src"), e.height
            }

            function R() {
                var e = D.innerWidth();
                if (D.innerHeight(), Y >= e || n.increase) {
                    var i = Y / X,
                        a = e / i;
                    D.find(".fs-stretcher").css({
                        width: e + "px",
                        height: a + "px"
                    })
                }
                K = t("body").width();
                var s = D.width();
                U = q((K - s) / 2, Y), J = 100, n.fullWidth && (J = 100 + 2 * U), Z = 100, (0 == B.init || Y > e) && W()
            }

            function W() {
                var e = null,
                    n = D.children(".slide").find("*");
                n.each(function() {
                    obj = t(this);
                    var n = obj.attr("data-fontsize");
                    n.indexOf("px") > 0 && (n = n.substring(0, n.length - 2), e = q(n, X) * (D.find(".fs-stretcher").height() / 100), obj.css("fontSize", e + "px"), obj.css("lineHeight", "100%"));
                    var i = obj.attr("data-letterspacing");
                    i.indexOf("px") > 0 && (i = i.substring(0, i.length - 2), e = q(i, X) * (D.find(".fs-stretcher").height() / 100), obj.css("letterSpacing", e + "px"))
                })
            }

            function q(t, e) {
                return t / (e / 100)
            }

            function P(e) {
                var n = e.length;
                t.each(e, function(t) {
                    clearTimeout(this), t == n - 1 && (e = [])
                })
            }

            function z() {
                var t = -1;
                if ("Microsoft Internet Explorer" == navigator.appName) {
                    var e = navigator.userAgent,
                        n = new RegExp("MSIE ([0-9]{1,}[.0-9]{0,})");
                    null != n.exec(e) && (t = parseFloat(RegExp.$1))
                }
                return t
            }
            var B = {
                    init: !0,
                    running: !1,
                    pause: !1,
                    stop: !1,
                    slideComplete: !1,
                    stepComplete: !1,
                    controlsActive: !0,
                    currentSlide: 0,
                    lastSlide: null,
                    maxSlide: 0,
                    currentStep: 0,
                    maxStep: 0,
                    currentObj: 0,
                    maxObjs: 0,
                    finishedObjs: 0
                },
                Q = {
                    currentSlide: null,
                    lastSlide: null,
                    animationkey: "none"
                },
                V = [],
                F = null,
                Y = null,
                X = null;
            t(e).wrapInner('<div class="c5box_animateslider" />');
            var D = t(e).find(".c5box_animateslider"),
                G = null;
            B.maxSlide = D.children(".slide").length - 1;
            var J = D.width(),
                K = t("body").width(),
                U = 0;
            n.fullWidth && (U = (K - J) / 2, J = K);
            var Z = D.height();
            i(), this.start = function() {
                a()
            }, this.startNextSlide = function() {
                s()
            }, this.stop = function() {
                l()
            }, this.pause = function() {
                r(!1)
            }, this.resume = function() {
                o()
            }
        };
    t.fn.fractionSlider = function(e) {
        return n[e] ? n[e].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof e && e ? void t.error("Method " + e + " does not exist on jQuery.tooltip") : n.init.apply(this, arguments)
    };
    var a = {};
    t.each(["Quad", "Cubic", "Quart", "Quint", "Expo"], function(t, e) {
        a[e] = function(e) {
            return Math.pow(e, t + 2)
        }
    }), t.extend(a, {
        Sine: function(t) {
            return 1 - Math.cos(t * Math.PI / 2)
        },
        Circ: function(t) {
            return 1 - Math.sqrt(1 - t * t)
        },
        Elastic: function(t) {
            return 0 == t || 1 == t ? t : -Math.pow(2, 8 * (t - 1)) * Math.sin((80 * (t - 1) - 7.5) * Math.PI / 15)
        },
        Back: function(t) {
            return t * t * (3 * t - 2)
        },
        Bounce: function(t) {
            for (var e, n = 4; t < ((e = Math.pow(2, --n)) - 1) / 11;);
            return 1 / Math.pow(4, 3 - n) - 7.5625 * Math.pow((3 * e - 2) / 22 - t, 2)
        }
    }), t.each(a, function(e, n) {
        t.easing["easeIn" + e] = n, t.easing["easeOut" + e] = function(t) {
            return 1 - n(1 - t)
        }, t.easing["easeInOut" + e] = function(t) {
            return .5 > t ? n(2 * t) / 2 : 1 - n(-2 * t + 2) / 2
        }
    })
}(jQuery), $(function() {
    $(".custom-nav-class ul.nav > li").each(function() {
        $(this).has("ul").find("a").first().append(" <i class='fa fa-caret-down'></i>")
    }), $(".custom-nav-class ul.nav ul li").each($(window).width() < 767 ? function() {
        $(this).has("ul").find("a").first().append(" <i class='fa fa-caret-down'></i>")
    } : function() {
        $(this).has("ul").find("a").first().append(" <i class='fa fa-caret-right'></i>")
    }), $(".custom-nav-class ul.nav li").hover(function() {
        $(this).has("ul") && $(this).children("ul").addClass("opennav") && $(this).children("ul").children("li").addClass("dlist-animate")
    }, function() {
        $(this).has("ul") && $(this).children("ul").removeClass("opennav") && $(this).children("ul").children("li").removeClass("dlist-animate")
    })
}), ! function(t) {
    "use strict";

    function e(e, n) {
        this.element = t(e), this.settings = t.extend({}, i, n), this._defaults = i, this._init()
    }
    var n = "Morphext",
        i = {
            animation: "bounceIn",
            separator: ",",
            speed: 2e3,
            complete: t.noop
        };
    e.prototype = {
        _init: function() {
            var e = this;
            this.phrases = [], this.element.addClass("morphext"), t.each(this.element.text().split(this.settings.separator), function(n, i) {
                e.phrases.push(t.trim(i))
            }), this.index = -1, this.animate(), this.start()
        },
        animate: function() {
            this.index = ++this.index % this.phrases.length, this.element[0].innerHTML = '<span class="animated ' + this.settings.animation + '">' + this.phrases[this.index] + "</span>", t.isFunction(this.settings.complete) && this.settings.complete.call(this)
        },
        start: function() {
            var t = this;
            this._interval = setInterval(function() {
                t.animate()
            }, this.settings.speed)
        },
        stop: function() {
            this._interval = clearInterval(this._interval)
        }
    }, t.fn[n] = function(i) {
        return this.each(function() {
            t.data(this, "plugin_" + n) || t.data(this, "plugin_" + n, new e(this, i))
        })
    }
}(jQuery);
var count = [];
$(function() {
    if ($(".scrolleffect .img-bgcover").each(function(t, e) {
            var n = scrollMonitor.create(e);
            n.enterViewport(function() {
                count.push(n.watchItem), $(e).hasClass("show") || setTimeout(function() {
                    e.className = "img-bgcover show"
                }, 50 * count.length)
            }), n.exitViewport(function() {
                count = []
            })
        }), 0 == $("html.ccm-edit-mode").length && $(".parallaxarea").each(function(t, e) {
            $(e).addClass("parallax_active" + t), 0 != $(this).children("[class*=ccm-custom-style]:first-child").length && "none" != $(this).children("[class*=ccm-custom-style]:first-child").css("background-image") && (pdiv = $(e).children("[class*=ccm-custom-style]:first-child").css("background-image"), pdiv = pdiv.replace(/^url\(["']?/, "").replace(/["']?\)$/, ""), $(e).children("[class*=ccm-custom-style]:first-child").css("background-image", "none"), $(e).css({
                background: "none"
            }), $(".parallax_active" + t).parallax({
                imageSrc: pdiv,
                zIndex: 1,
                bleed: 10,
                speed: .4
            }))
        }), $(".scrolleffect .ca-menu, .scrolleffect-delay .ca-menu").each(function(t, e) {
            var n = scrollMonitor.create(e);
            n.enterViewport(function() {
                count.push(n.watchItem), $(e).hasClass("show") || setTimeout(function() {
                    e.className = "ca-menu show"
                }, 50 * count.length)
            }), n.exitViewport(function() {
                count = []
            })
        }), $("#header").length) {
        var t = scrollMonitor.create(".master-container", -$("#header").height());
        t.stateChange(function() {
            t.isAboveViewport ? $("#header").addClass("solidify") : $("#header").removeClass("solidify")
        }), t.isAboveViewport ? $("#header").addClass("solidify") : $("#header").removeClass("solidify")
    }
});
var hasTouch = "ontouchstart" in window,
    iOS5 = /iPad|iPod|iPhone/.test(navigator.platform) && "matchMedia" in window;
if ($(".navcontrol ul li").has("ul").addClass("dropdown"), hasTouch && document.querySelectorAll && !iOS5) {
    var i, len, element, dropdowns = document.querySelectorAll(".navcontrol ul li.dropdown > a");
    for (i = 0, len = dropdowns.length; len > i; ++i) element = dropdowns[i], element.dataNoclick = !1, element.addEventListener("touchstart", menuTouch, !1), element.addEventListener("click", menuClick, !1)
}
$(function() {
    if ($("#ccm-toolbar").length) {
        var t = $("#ccm-toolbar").outerHeight(!0);
        if ($("#ccm-page-status-bar").length) {
            var e = $("#ccm-page-status-bar").outerHeight(!0);
            t += e
        }
        $("#header").css("top", "49px")
    }
}), $(function() {
    $(".custom-nav-class ul.nav li.dropdown").children("ul").children("li").addClass("dlist")
}), $(function() {
    $(".navcontrol li").on("mouseenter mouseleave", function(t) {
        if ($(this).has("ul").length > 0) {
            var e = $("ul:first", this),
                n = e.offset(),
                i = n.left,
                a = e.width(),
                s = ($("body").height(), $("body").width()),
                l = s >= i + a;
            l ? $(this).removeClass("edge") : $(this).addClass("edge")
        }
    }), $(".master-container .scroller i").on("click", function() {
        var t = $("#banner").next("div").find(".container");
        return $("html, body").animate({
            scrollTop: $(t).offset().top - 80
        }, 500), !1
    }), $(".parallaxarea, #introbox, #home-pagetype, #homesection2, #marqueebox, #homesection1").each(function() {
        var t = $(this);
        0 == t.html().replace(/\s|&nbsp;/g, "").length && t.remove()
    }), $(".flipit").Morphext({
        animation: "flipInY",
        separator: "|",
        speed: 3e3,
        complete: function() {}
    })
});
