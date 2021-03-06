ReadSpeaker.lib.Facade.adapter || (ReadSpeaker.lib.Facade.adapter = {});
ReadSpeaker.lib.Facade.adapter.jquery = function () {
    var g = {_formatRet: function (a) {
        return a.jquery && a.length ? 1 == a.length ? a[0].jquery ? a[0][0] : a[0] : jQuery(a).toArray() : []
    }, get: function (a) {
        return"#" === a ? [] : document.getElementById(a) || this._formatRet(jQuery(a))
    }, findIn: function (a, b) {
        var c = a.jquery ? a : jQuery(a);
        return this._formatRet(c.find(b))
    }, closest: function (a, b) {
        return this._formatRet(jQuery(a).closest(b))
    }, getAttr: function (a, b) {
        return jQuery(a).attr(b)
    }, setAttr: function (a, b, c) {
        jQuery(a).attr(b, c)
    }, regEvent: function (a, b, c) {
        var e = jQuery(a).attr("data-rsevent-id") || "rs_" + Math.round(1E6 * Math.random());
        jQuery(a).attr("data-rsevent-id", e);
        d.push(e, b, c);
        if (!d.store[e] || !(d.store[e][b] && 1 < d.store[e][b].length))if (jQuery.isFunction(jQuery.fn.on))jQuery(a).on(b, d.dispatch); else jQuery(a).bind(b, d.dispatch)
    }, unregEvent: function (a, b, c) {
        a === window && (a = document.documentElement);
        var e = jQuery(a).attr("data-rsevent-id");
        c ? d.pop(e, b, c) || (jQuery.isFunction(jQuery.fn.off) ? jQuery(a).off(b, d.dispatch) : jQuery(a).unbind(b, d.dispatch)) :
            (jQuery.isFunction(jQuery.fn.off) ? jQuery(a).off(b) : jQuery(a).unbind(b), d.pop(e, b))
    }, fireEvent: function (a, b) {
        a === window && (a = document.documentElement);
        jQuery(a).trigger(b)
    }, width: function (a) {
        return jQuery(a).width()
    }, height: function (a) {
        return jQuery(a).height()
    }, innerWidth: function (a) {
        return jQuery(a).innerWidth()
    }, innerHeight: function (a) {
        return jQuery(a).innerHeight()
    }, outerWidth: function (a, b) {
        return jQuery(a).outerWidth(b || !1)
    }, outerHeight: function (a, b) {
        return jQuery(a).outerHeight(b || !1)
    }, offsetParent: function (a) {
        return jQuery(a).offsetParent()[0]
    },
        offset: function (a, b) {
            return void 0 !== b ? jQuery(a).offset(b) : jQuery(a).offset()
        }, absOffset: function (a) {
            var a = jQuery(a)[0], b = document.body, c = document.defaultView || window, e = document.documentElement, d = document.createElement("div");
            d.style.paddingLeft = d.style.width = "1px";
            b.appendChild(d);
            var f = 2 == d.offsetWidth;
            b.removeChild(d);
            d = a.getBoundingClientRect();
            return{top: d.top + (c.pageYOffset || f && e.scrollTop || b.scrollTop) - (e.clientTop || b.clientTop || 0), left: d.left + (c.pageXOffset || f && e.scrollLeft || b.scrollLeft) -
                (e.clientLeft || b.clientLeft || 0)}
        }, position: function (a) {
            return jQuery(a).position()
        }, scrollLeft: function (a, b) {
            return void 0 !== b ? jQuery(a).scrollLeft(b) : jQuery(a).scrollLeft()
        }, scrollTop: function (a, b) {
            return void 0 !== b ? jQuery(a).scrollTop(b) : jQuery(a).scrollTop()
        }, addClass: function (a, b) {
            jQuery(a).addClass(b)
        }, removeClass: function (a, b) {
            jQuery(a).removeClass(b)
        }, hasClass: function (a, b) {
            return jQuery(a).hasClass(b)
        }, css: function (a, b, c) {
            if (c)jQuery(a).css(b, c); else return jQuery(a).css(b)
        }, isVisible: function (a) {
            return jQuery(a).is(":visible")
        },
        addStyleRule: function (a, b, c) {
            c = "string" == typeof c ? document.styleSheets[c] || document.getElementById(c) : c;
            c.addRule ? c.addRule(a, b) : c.sheet.insertRule && c.sheet.insertRule(a + " {" + b + "}", c.sheet.cssRules.length)
        }, isArray: function (a) {
            return jQuery.isArray(a)
        }, rsid: function (a) {
            if ("" == this.getAttr(a, "data-rsid") || void 0 == this.getAttr(a, "data-rsid")) {
                var b = ReadSpeaker.rsidCount++;
                this.setAttr(a, "data-rsid", b)
            }
            return this.getAttr(a, "data-rsid")
        }, detach: function (a) {
            return jQuery(a).detach()[0]
        }, convertEvent: function (a) {
            var b =
                new ReadSpeaker.lib.Facade.RSEvent;
            b.pageX = a.pageX;
            b.pageY = a.pageY;
            b.screenX = a.screenX;
            b.screenY = a.screenY;
            b.clientX = a.clientX;
            b.clientY = a.clientY;
            b.target = a.currentTarget;
            b.type = a.type;
            b.keyCode = a.keyCode;
            b.targetTouches = a.targetTouches;
            b.originalEvent = a.originalEvent;
            return b
        }, clone: function (a, b, c) {
            return this._formatRet(jQuery(a).clone(b, c))
        }, remove: function () {
            return jQuery(elm).remove()
        }, replaceWith: function (a, b) {
            return _formatRet(jQuery(a).replaceWith(b))
        }, focus: function (a, b) {
            void 0 !== b ? this.focusIn(a,
                b) : jQuery(a).focus()
        }, focusIn: function (a, b) {
            jQuery(a).focusin(b)
        }, focusOut: function (a, b) {
            jQuery(a).focusout(b)
        }}, d = null;
    return{meta: {revision: "3253"}, init: function () {
        d = rspkr.lib.Facade.eq;
        rspkr.lib.Facade.adapterInit(g);
        rspkr.log("[rspkr.l.f] jQuery adapter initialized.");
        rspkr.Common.dispatchEvent("onAdapterReady")
    }}
}();
