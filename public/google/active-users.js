!function (t) {
    function e(s) {
        if (i[s]) return i[s].exports;
        var n = i[s] = {i: s, l: !1, exports: {}};
        return t[s].call(n.exports, n, n.exports, e), n.l = !0, n.exports
    }

    var i = {};
    e.m = t, e.c = i, e.i = function (t) {
        return t
    }, e.d = function (t, i, s) {
        e.o(t, i) || Object.defineProperty(t, i, {configurable: !1, enumerable: !0, get: s})
    }, e.n = function (t) {
        var i = t && t.__esModule ? function () {
            return t.default
        } : function () {
            return t
        };
        return e.d(i, "a", i), i
    }, e.o = function (t, e) {
        return Object.prototype.hasOwnProperty.call(t, e)
    }, e.p = "", e(e.s = 2)
}({
    2: function (t, e) {
        gapi.analytics.ready(function () {
            gapi.analytics.createComponent("ActiveUsers", {
                initialize: function () {
                    this.activeUsers = 0, gapi.analytics.auth.once("signOut", this.handleSignOut_.bind(this))
                }, execute: function () {
                    this.polling_ && this.stop(), this.render_(), gapi.analytics.auth.isAuthorized() ? this.pollActiveUsers_() : gapi.analytics.auth.once("signIn", this.pollActiveUsers_.bind(this))
                }, stop: function () {
                    clearTimeout(this.timeout_), this.polling_ = !1, this.emit("stop", {activeUsers: this.activeUsers})
                }, render_: function () {
                    var t = this.get();
                    this.container = "string" == typeof t.container ? document.getElementById(t.container) : t.container, this.container.innerHTML = t.template || this.template, this.container.querySelector("b").innerHTML = this.activeUsers
                }, pollActiveUsers_: function () {
                    var t = this.get(), e = 1e3 * (t.pollingInterval || 5);
                    if (isNaN(e) || e < 5e3) throw new Error("Frequency must be 5 seconds or more.");
                    this.polling_ = !0, gapi.client.analytics.data.realtime.get({
                        ids: t.ids,
                        metrics: "rt:activeUsers"
                    }).then(function (t) {
                        var i = t.result, s = i.totalResults ? +i.rows[0][0] : 0, n = this.activeUsers;
                        this.emit("success", {activeUsers: this.activeUsers}), s != n && (this.activeUsers = s, this.onChange_(s - n)), 1 == this.polling_ && (this.timeout_ = setTimeout(this.pollActiveUsers_.bind(this), e))
                    }.bind(this))
                }, onChange_: function (t) {
                    var e = this.container.querySelector("b");
                    e && (e.innerHTML = this.activeUsers), this.emit("change", {
                        activeUsers: this.activeUsers,
                        delta: t
                    }), t > 0 ? this.emit("increase", {
                        activeUsers: this.activeUsers,
                        delta: t
                    }) : this.emit("decrease", {activeUsers: this.activeUsers, delta: t})
                }, handleSignOut_: function () {
                    this.stop(), gapi.analytics.auth.once("signIn", this.handleSignIn_.bind(this))
                }, handleSignIn_: function () {
                    this.pollActiveUsers_(), gapi.analytics.auth.once("signOut", this.handleSignOut_.bind(this))
                }, template: '<div class="ActiveUsers">Online Ziyaret??i: <b class="ActiveUsers-value"></b></div>'
            })
        })
    }
});
