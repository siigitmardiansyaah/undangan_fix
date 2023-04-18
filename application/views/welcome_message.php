<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- This site is optimized with the Yoast SEO plugin v15.4 - https://yoast.com/wordpress/plugins/seo/ -->
    <title><?php echo $title ?></title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='dns-prefetch' href='//s.w.org' />
    <script src="https://www.googletagmanager.com/gtag/js?id=UA-188795912-1" type="text/javascript"
        data-cfasync="false"></script>
    <script type="text/javascript" data-cfasync="false">
        var mi_version = '7.16.2';
        var mi_track_user = true;
        var mi_no_track_reason = '';

        var disableStr = 'ga-disable-UA-188795912-1';

        /* Function to detect opted out users */
        function __gtagTrackerIsOptedOut () {
            return document.cookie.indexOf(disableStr + '=true') > - 1;
        }

        /* Disable tracking if the opt-out cookie exists. */
        if (__gtagTrackerIsOptedOut()) {
            window[disableStr] = true;
        }

        /* Opt-out function */
        function __gtagTrackerOptout () {
            document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
            window[disableStr] = true;
        }

        if ('undefined' === typeof gaOptout) {
            function gaOptout () {
                __gtagTrackerOptout();
            }
        }
        window.dataLayer = window.dataLayer || [];
        if (mi_track_user) {
            function __gtagTracker () { dataLayer.push(arguments); }
            __gtagTracker('js', new Date());
            __gtagTracker('set', {
                'developer_id.dZGIzZG': true,
            });
            __gtagTracker('config', 'UA-188795912-1', {
                forceSSL: true, link_attribution: true,
            });
            window.gtag = __gtagTracker; (
                function () {
                    /* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
                    /* ga and __gaTracker compatibility shim. */
                    var noopfn = function () {
                        return null;
                    };
                    var newtracker = function () {
                        return new Tracker();
                    };
                    var Tracker = function () {
                        return null;
                    };
                    var p = Tracker.prototype;
                    p.get = noopfn;
                    p.set = noopfn;
                    p.send = function () {
                        var args = Array.prototype.slice.call(arguments);
                        args.unshift('send');
                        __gaTracker.apply(null, args);
                    };
                    var __gaTracker = function () {
                        var len = arguments.length;
                        if (len === 0) {
                            return;
                        }
                        var f = arguments[len - 1];
                        if (typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function') {
                            if ('send' === arguments[0]) {
                                var hitConverted, hitObject = false, action;
                                if ('event' === arguments[1]) {
                                    if ('undefined' !== typeof arguments[3]) {
                                        hitObject = {
                                            'eventAction': arguments[3],
                                            'eventCategory': arguments[2],
                                            'eventLabel': arguments[4],
                                            'value': arguments[5] ? arguments[5] : 1,
                                        }
                                    }
                                }
                                if (typeof arguments[2] === 'object') {
                                    hitObject = arguments[2];
                                }
                                if ('undefined' !== typeof (
                                    arguments[1].hitType
                                )) {
                                    hitObject = arguments[1];
                                }
                                if (hitObject) {
                                    action = 'timing' === arguments[1].hitType ? 'timing_complete' : hitObject.eventAction;
                                    hitConverted = mapArgs(hitObject);
                                    __gtagTracker('event', action, hitConverted);
                                }
                            }
                            return;
                        }

                        function mapArgs (args) {
                            var gaKey, hit = {};
                            var gaMap = {
                                'eventCategory': 'event_category',
                                'eventAction': 'event_action',
                                'eventLabel': 'event_label',
                                'eventValue': 'event_value',
                                'nonInteraction': 'non_interaction',
                                'timingCategory': 'event_category',
                                'timingVar': 'name',
                                'timingValue': 'value',
                                'timingLabel': 'event_label',
                            };
                            for (gaKey in gaMap) {
                                if ('undefined' !== typeof args[gaKey]) {
                                    hit[gaMap[gaKey]] = args[gaKey];
                                }
                            }
                            return hit;
                        }

                        try {
                            f.hitCallback();
                        } catch (ex) {
                        }
                    };
                    __gaTracker.create = newtracker;
                    __gaTracker.getByName = newtracker;
                    __gaTracker.getAll = function () {
                        return [];
                    };
                    __gaTracker.remove = noopfn;
                    __gaTracker.loaded = true;
                    window['__gaTracker'] = __gaTracker;
                }
            )();
        } else {
            console.log("");
            (function () {
                function __gtagTracker () {
                    return null;
                }
                window['__gtagTracker'] = __gtagTracker;
                window['gtag'] = __gtagTracker;
            })();
        }
    </script>
    <!-- / Google Analytics by MonsterInsights -->
    <script>
        window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.orimages\/core\/emoji\/14.0.0\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.orimages\/core\/emoji\/14.0.0\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "<?php echo base_url()?>assets/js/wp-emoji-release.min.js" } };
        /*! This file is auto-generated */
        !function (e, a, t) { var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d"); function s (e, t) { var a = String.fromCharCode, e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL()); return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL() } function c (e) { var t = a.createElement("script"); t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t) } for (o = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, r = 0; r < o.length; r++)t.supports[o[r]] = function (e) { if (!p || !p.fillText) return !1; switch (p.textBaseline = "top", p.font = "600 32px Arial", e) { case "flag": return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]); case "emoji": return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999]) }return !1 }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]); t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () { t.DOMReady = !0 }, t.supports.everything || (n = function () { t.readyCallback() }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () { "complete" === a.readyState && t.readyCallback() })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji))) }(window, document, window._wpemojiSettings);
    </script>
    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style class='custom-scrollbar' type='text/css'>
        #comments {
            height: auto !important;
        }

        #comments {
            max-height: 500px;
            overflow-y: auto;
            overflow-x: hidden;
        }
    </style>
    <link rel='stylesheet' id='bdt-uikit-css'
        href="<?php echo base_url()?>assets/css/bdt-uikit.css"
        media='all' />
    <link rel='stylesheet' id='ep-helper-css'
        href="<?php echo base_url()?>assets/css/ep-helper.css"
        media='all' />
    <link rel='stylesheet' id='wp-block-library-css'
        href="<?php echo base_url()?>assets/css/style.min.css" media='all' />
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--accent: #cd2653;
            --wp--preset--color--primary: #000000;
            --wp--preset--color--secondary: #6d6d6d;
            --wp--preset--color--subtle-background: #dcd7ca;
            --wp--preset--color--background: #fff;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 18px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 26.25px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-size--normal: 21px;
            --wp--preset--font-size--larger: 32px;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
    </style>
    <link rel='stylesheet' id='copy-the-code-css'
        href="<?php echo base_url()?>assets/css/copy-the-code.css"
        media='all' />
    <link rel='stylesheet' id='quiz-maker-css'
        href="<?php echo base_url()?>assets/css/quiz-maker-public.css"
        media='all' />
    <link rel='stylesheet' id='malihu-custom-scrollbar-css-css'
        href="<?php echo base_url()?>assets/css/jquery.mCustomScrollbar.min.css"
        media='all' />
    <link rel='stylesheet' id='monsterinsights-popular-posts-style-css'
        href="<?php echo base_url()?>assets/css/frontend.min.css"
        media='all' />
    <link rel='stylesheet' id='wpforms-full-css'
        href="<?php echo base_url()?>assets/css/wpforms-full.min.css"
        media='all' />
    <link rel='stylesheet' id='twentytwenty-style-css'
        href="<?php echo base_url()?>assets/css/style_twentytwenty.css" media='all' />
    <style id='twentytwenty-style-inline-css'>
        .color-accent,
        .color-accent-hover:hover,
        .color-accent-hover:focus,
        :root .has-accent-color,
        .has-drop-cap:not(:focus):first-letter,
        .wp-block-button.is-style-outline,
        a {
            color: #cd2653;
        }

        blockquote,
        .border-color-accent,
        .border-color-accent-hover:hover,
        .border-color-accent-hover:focus {
            border-color: #cd2653;
        }

        button,
        .button,
        .faux-button,
        .wp-block-button__link,
        .wp-block-file .wp-block-file__button,
        input[type="button"],
        input[type="reset"],
        input[type="submit"],
        .bg-accent,
        .bg-accent-hover:hover,
        .bg-accent-hover:focus,
        :root .has-accent-background-color,
        .comment-reply-link {
            background-color: #cd2653;
        }

        .fill-children-accent,
        .fill-children-accent * {
            fill: #cd2653;
        }

        body,
        .entry-title a,
        :root .has-primary-color {
            color: #000000;
        }

        :root .has-primary-background-color {
            background-color: #000000;
        }

        cite,
        figcaption,
        .wp-caption-text,
        .post-meta,
        .entry-content .wp-block-archives li,
        .entry-content .wp-block-categories li,
        .entry-content .wp-block-latest-posts li,
        .wp-block-latest-comments__comment-date,
        .wp-block-latest-posts__post-date,
        .wp-block-embed figcaption,
        .wp-block-image figcaption,
        .wp-block-pullquote cite,
        .comment-metadata,
        .comment-respond .comment-notes,
        .comment-respond .logged-in-as,
        .pagination .dots,
        .entry-content hr:not(.has-background),
        hr.styled-separator,
        :root .has-secondary-color {
            color: #6d6d6d;
        }

        :root .has-secondary-background-color {
            background-color: #6d6d6d;
        }

        pre,
        fieldset,
        input,
        textarea,
        table,
        table *,
        hr {
            border-color: #dcd7ca;
        }

        caption,
        code,
        code,
        kbd,
        samp,
        .wp-block-table.is-style-stripes tbody tr:nth-child(odd),
        :root .has-subtle-background-background-color {
            background-color: #dcd7ca;
        }

        .wp-block-table.is-style-stripes {
            border-bottom-color: #dcd7ca;
        }

        .wp-block-latest-posts.is-grid li {
            border-top-color: #dcd7ca;
        }

        :root .has-subtle-background-color {
            color: #dcd7ca;
        }

        body:not(.overlay-header) .primary-menu>li>a,
        body:not(.overlay-header) .primary-menu>li>.icon,
        .modal-menu a,
        .footer-menu a,
        .footer-widgets a,
        #site-footer .wp-block-button.is-style-outline,
        .wp-block-pullquote:before,
        .singular:not(.overlay-header) .entry-header a,
        .archive-header a,
        .header-footer-group .color-accent,
        .header-footer-group .color-accent-hover:hover {
            color: #cd2653;
        }

        .social-icons a,
        #site-footer button:not(.toggle),
        #site-footer .button,
        #site-footer .faux-button,
        #site-footer .wp-block-button__link,
        #site-footer .wp-block-file__button,
        #site-footer input[type="button"],
        #site-footer input[type="reset"],
        #site-footer input[type="submit"] {
            background-color: #cd2653;
        }

        .header-footer-group,
        body:not(.overlay-header) #site-header .toggle,
        .menu-modal .toggle {
            color: #000000;
        }

        body:not(.overlay-header) .primary-menu ul {
            background-color: #000000;
        }

        body:not(.overlay-header) .primary-menu>li>ul:after {
            border-bottom-color: #000000;
        }

        body:not(.overlay-header) .primary-menu ul ul:after {
            border-left-color: #000000;
        }

        .site-description,
        body:not(.overlay-header) .toggle-inner .toggle-text,
        .widget .post-date,
        .widget .rss-date,
        .widget_archive li,
        .widget_categories li,
        .widget cite,
        .widget_pages li,
        .widget_meta li,
        .widget_nav_menu li,
        .powered-by-wordpress,
        .to-the-top,
        .singular .entry-header .post-meta,
        .singular:not(.overlay-header) .entry-header .post-meta a {
            color: #6d6d6d;
        }

        .header-footer-group pre,
        .header-footer-group fieldset,
        .header-footer-group input,
        .header-footer-group textarea,
        .header-footer-group table,
        .header-footer-group table *,
        .footer-nav-widgets-wrapper,
        #site-footer,
        .menu-modal nav *,
        .footer-widgets-outer-wrapper,
        .footer-top {
            border-color: #dcd7ca;
        }

        .header-footer-group table caption,
        body:not(.overlay-header) .header-inner .toggle-wrapper::before {
            background-color: #dcd7ca;
        }
    </style>
    <link rel='stylesheet' id='twentytwenty-print-style-css'
        href='<?php echo base_url()?>assets/css/print.css' media='print' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='<?php echo base_url()?>assets/css/elementor-icons.min.css'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-legacy-css'
        href='<?php echo base_url()?>assets/css/frontend-legacy.min.css'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href="<?php echo base_url()?>assets/css/elementor_frontend.min.css" media='all' />
    <link rel='stylesheet' id='elementor-post-11-css'
        href="<?php echo base_url()?>assets/css/post-11.css" media='all' />
    <link rel='stylesheet' id='elementor-pro-css'
        href="<?php echo base_url()?>assets/css/elementorpro_frontend.min.css"
        media='all' />
    <link rel='stylesheet' id='elementor-post-30850-css'
        href="<?php echo base_url()?>assets/css/post-30850.css" media='all' />
    <link rel='stylesheet' id='quiz-maker-admin-css'
        href="<?php echo base_url()?>assets/css/admin.css" media='all' />
    <link rel='stylesheet' id='elementor-post-417-css'
        href="<?php echo base_url()?>assets/css/post-417.css" media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Playfair+Display%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLato%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CKarla%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CBad+Script%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.0.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href="<?php echo base_url()?>assets/css/fontawesome.min.css"
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='<?php echo base_url()?>assets/css/solid.min.css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-regular-css'
        href='<?php echo base_url()?>assets/css/regular.min.css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css'
        href='<?php echo base_url()?>assets/css/brands.min.css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-2-css'
        href='<?php echo base_url()?>assets/css/iconic-font.min.css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-iconic-fonts-css'
        href='<?php echo base_url()?>assets/css/iconic-font.min.css'
        media='all' />
    <script id='monsterinsights-frontend-script-js-extra'>
        var monsterinsights_frontend = { "js_events_tracking": "true", "download_extensions": "doc,pdf,ppt,zip,xls,docx,pptx,xlsx", "inbound_paths": "[{\"path\":\"\\\/go\\\/\",\"label\":\"affiliate\"},{\"path\":\"\\\/recommend\\\/\",\"label\":\"affiliate\"}]", "home_url": "https:\/\/invistory.com", "hash_tracking": "false", "ua": "UA-188795912-1" };
    </script>
    <script
        src='<?php echo base_url()?>assets/js/frontend-gtag.min.js'
        id='monsterinsights-frontend-script-js'></script>
    <script src='<?php echo base_url()?>assets/js/jquery.min.js' id='jquery-core-js'></script>
    <script src='<?php echo base_url()?>assets/js/jquery-migrate.min.js'
        id='jquery-migrate-js'></script>
    <script src='<?php echo base_url()?>assets/js/index.js'
        id='twentytwenty-js-js' async></script>
    <script id='twentytwenty-js-js-after'>
        window.addEventListener("load", function () {

            if (typeof jQuery === "undefined") {
                return;
            }

            jQuery(document).on("wpformsPageChange", function () {

                if (typeof twentytwenty === "undefined" || typeof twentytwenty.intrinsicRatioVideos === "undefined" || typeof twentytwenty.intrinsicRatioVideos.makeFit === "undefined") {
                    return;
                }

                twentytwenty.intrinsicRatioVideos.makeFit();
            });

            jQuery(document).on("wpformsRichTextEditorInit", function (e, editor) {

                jQuery(editor.container).find("iframe").addClass("intrinsic-ignore");
            });
        });
    </script>
    <script type="text/javascript">
        (function () {
            window.ma_el_fs = { can_use_premium_code: false };
        })();
    </script>
    <style>
        /* write your CSS code here */
        .elementor embed,
        .elementor iframe {
            width: 100% !important;
        }
    </style>
    <script>document.documentElement.className = document.documentElement.className.replace('no-js', 'js');</script>
    <style id="custom-background-css">
        body.custom-background {
            background-color: #fff;
        }
    </style>
    <style id="wp-custom-css">
        @media only screen and (max-width: 768px) {

            html,
            body {
                width: 100%;
                overflow-x: hidden;
            }
        }

        @media only screen and (max-width: 1025px) {

            html,
            body {
                width: 100%;
                overflow-x: hidden;
            }
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/wedding.png">
</head>
<body class="page-template page-template-elementor_canvas page page-id-30850 custom-background wp-custom-logo wp-embed-responsive singular enable-search-modal has-post-thumbnail has-no-pagination showing-comments hide-avatars elementor_canvas footer-top-hidden elementor-default elementor-template-canvas elementor-kit-11 elementor-page elementor-page-30850">
    <a class="skip-link screen-reader-text" href="#site-content">Skip to the content</a><svg
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-dark-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0.49803921568627" />
                    <feFuncG type="table" tableValues="0 0.49803921568627" />
                    <feFuncB type="table" tableValues="0 0.49803921568627" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-red">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 0.27843137254902" />
                    <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-midnight">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0" />
                    <feFuncG type="table" tableValues="0 0.64705882352941" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-magenta-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.78039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.94901960784314" />
                    <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-green">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-orange">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.098039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.66274509803922" />
                    <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <div data-elementor-type="wp-page" data-elementor-id="30850" class="elementor elementor-30850">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                    class="has_ma_el_bg_slider elementor-section elementor-top-section elementor-element elementor-element-5605342 elementor-section-boxed elementor-section-height-default elementor-section-height-default jltma-glass-effect-no"
                    data-id="5605342" data-element_type="section" id="header">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="has_ma_el_bg_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9121236 jltma-glass-effect-no"
                                data-id="9121236" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-7c41d0d jltma-glass-effect-no elementor-widget elementor-widget-heading"
                                            data-id="7c41d0d" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">The Wedding
                                                    of</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2c42afed jltma-glass-effect-no elementor-widget elementor-widget-heading"
                                            data-id="2c42afed" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Widi & Sigit
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-5d7f6cba jltma-glass-effect-no elementor-widget elementor-widget-heading"
                                            data-id="5d7f6cba" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">06 Mei 2023</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-0ebbf34 elementor-view-framed elementor-shape-circle jltma-glass-effect-no elementor-widget elementor-widget-icon"
                                            data-id="0ebbf34" data-element_type="widget"
                                            data-widget_type="icon.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-wrapper">
                                                    <a class="elementor-icon" href="#quote">
                                                        <i aria-hidden="true" class="fas fa-angle-double-down"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="has_ma_el_bg_slider elementor-section elementor-top-section elementor-element elementor-element-28ff22b3 elementor-section-full_width elementor-section-height-default elementor-section-height-default jltma-glass-effect-no"
                    data-id="28ff22b3" data-element_type="section" id="head-invitation"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="has_ma_el_bg_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-558dd1bf jltma-glass-effect-no"
                                data-id="558dd1bf" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-6976483 elementor-align-right elementor-fixed jltma-glass-effect-no elementor-widget elementor-widget-button"
                                            data-id="6976483" data-element_type="widget"
                                            data-settings="{&quot;_position&quot;:&quot;fixed&quot;}"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-size-sm" role="button"
                                                        id="button-play">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span
                                                                class="elementor-button-icon elementor-align-icon-left">
                                                                <i aria-hidden="true" class="far fa-play-circle"></i>
                                                            </span>
                                                            <span class="elementor-button-text"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-74963cc elementor-align-right elementor-fixed jltma-glass-effect-no elementor-widget elementor-widget-button"
                                            data-id="74963cc" data-element_type="widget"
                                            data-settings="{&quot;_position&quot;:&quot;fixed&quot;}"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-size-sm" role="button"
                                                        id="button-pause">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span
                                                                class="elementor-button-icon elementor-align-icon-left">
                                                                <i aria-hidden="true" class="far fa-pause-circle"></i>
                                                            </span>
                                                            <span class="elementor-button-text"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2611bff elementor--h-position-center elementor--v-position-middle jltma-glass-effect-no elementor-widget elementor-widget-slides"
                                            data-id="2611bff" data-element_type="widget"
                                            data-settings="{&quot;navigation&quot;:&quot;none&quot;,&quot;autoplay_speed&quot;:3000,&quot;transition&quot;:&quot;fade&quot;,&quot;transition_speed&quot;:1000,&quot;autoplay&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;}"
                                            data-widget_type="slides.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-swiper">
                                                    <div class="elementor-slides-wrapper elementor-main-swiper swiper-container"
                                                        dir="ltr">
                                                        <div class="swiper-wrapper elementor-slides">
                                                            <div class="elementor-repeater-item-3d38b67 swiper-slide">
                                                                <div
                                                                    class="swiper-slide-bg elementor-ken-burns elementor-ken-burns--out">
                                                                </div>
                                                                <div class="elementor-background-overlay"></div>
                                                                <div class="swiper-slide-inner">
                                                                    <div class="swiper-slide-contents"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="has_ma_el_bg_slider elementor-section elementor-top-section elementor-element elementor-element-1cd83fa7 light-color elementor-section-boxed elementor-section-height-default elementor-section-height-default jltma-glass-effect-no"
                    data-id="1cd83fa7" data-element_type="section" id="quote"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;opacity-tilt&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-shape elementor-shape-bottom" data-negative="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2600 131.1" preserveAspectRatio="none">
                            <path class="elementor-shape-fill" d="M0 0L2600 0 2600 69.1 0 0z" />
                            <path class="elementor-shape-fill" style="opacity:0.5" d="M0 0L2600 0 2600 69.1 0 69.1z" />
                            <path class="elementor-shape-fill" style="opacity:0.25"
                                d="M2600 0L0 0 0 130.1 2600 69.1z" />
                        </svg>
                    </div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="has_ma_el_bg_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5bf6122 jltma-glass-effect-no"
                                data-id="5bf6122" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-0dcc743 jltma-glass-effect-no elementor-widget elementor-widget-image"
                                            data-id="0dcc743" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image">
                                                    <img width="580" height="75"
                                                        src="<?php echo base_url()?>assets/images/floral-leaf-divider-17-grey-invistory-undangan-digital-min.png"
                                                        class="attachment-medium_large size-medium_large" alt=""
                                                        loading="lazy"
                                                        sizes="(max-width: 580px) 100vw, 580px" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-555ba457 animated-slow jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="555ba457" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <p class="elementor-heading-title elementor-size-default">"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri,
                                                    <span style="letter-spacing: -0.27px;">agar kamu cenderung dan merasa tenteram kepadanya, 
                                                    </span>dan Dia menjadikan di antaramu rasa kasih dan sayang"<br><br>Q.S Ar Rum : 21</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="has_ma_el_bg_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-842206a jltma-glass-effect-no"
                                data-id="842206a" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-7e208dc animated-slow jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-image"
                                            data-id="7e208dc" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image">
                                                    <img width="580" height="387"
                                                        src="<?php echo base_url()?>assets/images/DPG02590.jpg"
                                                        class="attachment-medium_large size-medium_large" alt=""
                                                        loading="lazy"
                                                        sizes="(max-width: 580px) 100vw, 580px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="has_ma_el_bg_slider elementor-section elementor-top-section elementor-element elementor-element-0d77b0b elementor-section-boxed elementor-section-height-default elementor-section-height-default jltma-glass-effect-no"
                    data-id="0d77b0b" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="has_ma_el_bg_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-de3c951 jltma-glass-effect-no"
                                data-id="de3c951" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-a56388c jltma-glass-effect-no elementor-widget elementor-widget-bdt-advanced-divider"
                                            data-id="a56388c" data-element_type="widget"
                                            data-widget_type="bdt-advanced-divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="bdt-ep-advanced-divider"
                                                    data-settings="{&quot;animation&quot;:true}">

                                                    <img src=" <?php echo base_url()?>assets/images/leaf.svg"
                                                        alt="advanced divider" class="bdt-animation-stroke ep_square">

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="has_ma_el_bg_slider elementor-section elementor-top-section elementor-element elementor-element-dca3783 elementor-section-height-min-height elementor-section-items-top light-color elementor-section-boxed elementor-section-height-default jltma-glass-effect-no"
                    data-id="dca3783" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="has_ma_el_bg_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-58c7323 jltma-glass-effect-no"
                                data-id="58c7323" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section
                                            class="has_ma_el_bg_slider elementor-section elementor-inner-section elementor-element elementor-element-c590468 groombride elementor-section-boxed elementor-section-height-default elementor-section-height-default jltma-glass-effect-no"
                                            data-id="c590468" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="has_ma_el_bg_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-416133b jltma-glass-effect-no"
                                                        data-id="416133b" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-5c123fe jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-image"
                                                                    data-id="5c123fe" data-element_type="widget"
                                                                    data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="580" height="580"
                                                                                src="<?php echo base_url()?>assets/images/dia.jpg"
                                                                                class="attachment-large size-large"
                                                                                alt="" loading="lazy"
                                                                                sizes="(max-width: 580px) 100vw, 580px" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-2131df1 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                                                    data-id="2131df1" data-element_type="widget"
                                                                    data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:500}"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            Widi</p>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-b14ac7c jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                                                    data-id="b14ac7c" data-element_type="widget"
                                                                    data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:1000}"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h4
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            Widi Ajeng Komala</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-7268db2 jltma-glass-effect-no elementor-widget elementor-widget-bdt-advanced-divider"
                                                                    data-id="7268db2" data-element_type="widget"
                                                                    data-widget_type="bdt-advanced-divider.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="bdt-ep-advanced-divider"
                                                                            data-settings="{&quot;animation&quot;:true}">

                                                                            <img src="<?php echo base_url()?>assets/images/line.svg"
                                                                                alt="advanced divider"
                                                                                class="bdt-animation-stroke ep_square">

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-80ef34a jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-text-editor"
                                                                    data-id="80ef34a" data-element_type="widget"
                                                                    data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:1500}"
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="elementor-text-editor elementor-clearfix">
                                                                            <p>Putri Pertama dari <br /> Bapak Kuat
                                                                                <br />&amp; <br/> Ibu Zubaedah
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="has_ma_el_bg_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-835d4be jltma-glass-effect-no"
                                                        data-id="835d4be" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-b9186e7 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-image"
                                                                    data-id="b9186e7" data-element_type="widget"
                                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="580" height="580"
                                                                                src="<?php echo base_url()?>assets/images/saya.jpg"
                                                                                class="attachment-medium_large size-medium_large"
                                                                                alt="" loading="lazy"
                                                                                sizes="(max-width: 580px) 100vw, 580px" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-cc23f59 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                                                    data-id="cc23f59" data-element_type="widget"
                                                                    data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:500}"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            Sigit</p>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-86a024e jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                                                    data-id="86a024e" data-element_type="widget"
                                                                    data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:1000}"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h4
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            Sigit Mardiansyah</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-379a84d jltma-glass-effect-no elementor-widget elementor-widget-bdt-advanced-divider"
                                                                    data-id="379a84d" data-element_type="widget"
                                                                    data-widget_type="bdt-advanced-divider.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="bdt-ep-advanced-divider"
                                                                            data-settings="{&quot;animation&quot;:true}">

                                                                            <img src="<?php echo base_url()?>assets/images/line.svg"
                                                                                alt="advanced divider"
                                                                                class="bdt-animation-stroke ep_square">

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-6c3da55 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-text-editor"
                                                                    data-id="6c3da55" data-element_type="widget"
                                                                    data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:1500}"
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="elementor-text-editor elementor-clearfix">
                                                                            <p>Putra Pertama dari<br/>Bapak Sarno
                                                                                <br />&amp; <br />Ibu Purwanti</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="has_ma_el_bg_slider elementor-section elementor-top-section elementor-element elementor-element-4a2783bf dark-color elementor-section-boxed elementor-section-height-default elementor-section-height-default jltma-glass-effect-no"
                    data-id="4a2783bf" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[{&quot;id&quot;:99,&quot;url&quot;:&quot;https:\/\/invistory.com\/wp-content\/uploads\/2020\/11\/pexels-trung-nguyen-2959192-scaled-e1605339986159.jpg&quot;},{&quot;id&quot;:3762,&quot;url&quot;:&quot;https:\/\/invistory.com\/wp-content\/uploads\/2021\/06\/pexels-dmitry-zvolskiy-1676123-min-scaled.jpg&quot;},{&quot;id&quot;:97,&quot;url&quot;:&quot;https:\/\/invistory.com\/wp-content\/uploads\/2020\/11\/pexels-dog\u0306ukan-benli-3094345-scaled-e1605339905281.jpg&quot;}],&quot;background_slideshow_slide_duration&quot;:3000,&quot;background_slideshow_transition_duration&quot;:1000,&quot;background_slideshow_ken_burns&quot;:&quot;yes&quot;,&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_ken_burns_zoom_direction&quot;:&quot;in&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="has_ma_el_bg_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7ffa323f jltma-glass-effect-no"
                                data-id="7ffa323f" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-e3dd967 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="e3dd967" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">We will become a family in</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-51f56d0 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="51f56d0" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">06 Mei 2023</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ec413e elementor-countdown--label-block jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-countdown"
                                            data-id="ec413e" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="countdown.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-countdown-wrapper" data-date="1683331200">
                                                    <div class="elementor-countdown-item"><span
                                                            class="elementor-countdown-digits elementor-countdown-days"></span>
                                                        <span class="elementor-countdown-label">Days</span></div>
                                                    <div class="elementor-countdown-item"><span
                                                            class="elementor-countdown-digits elementor-countdown-hours"></span>
                                                        <span class="elementor-countdown-label">Hours</span></div>
                                                    <div class="elementor-countdown-item"><span
                                                            class="elementor-countdown-digits elementor-countdown-minutes"></span>
                                                        <span class="elementor-countdown-label">Minutes</span></div>
                                                    <div class="elementor-countdown-item"><span
                                                            class="elementor-countdown-digits elementor-countdown-seconds"></span>
                                                        <span class="elementor-countdown-label">Seconds</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-343cbc6 elementor-align-center jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-button"
                                            data-id="343cbc6" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="button.default">
                                            <!-- <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href="https://www.google.com/calendar/render?action=TEMPLATE&#038;text=The%20Wedding%20of%20Eric%20%26%20Nala&#038;details&#038;dates=20221231T180000/20221231T210000&#038;location=Invistory%20Hotel,%20Jalan%20Jenderal%20Sudirman%20Kav%2001%20Kota%20Jakarta%20Selatan"
                                                        target="_blank"
                                                        class="elementor-button-link elementor-button elementor-size-xs"
                                                        role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span
                                                                class="elementor-button-icon elementor-align-icon-left">
                                                                <i aria-hidden="true" class="im im-calendar"></i>
                                                            </span>
                                                            <span class="elementor-button-text">Add to Calendar</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div> -->
                                        </div>
                                        <section
                                            class="has_ma_el_bg_slider elementor-section elementor-inner-section elementor-element elementor-element-1bb77cd elementor-section-boxed elementor-section-height-default elementor-section-height-default jltma-glass-effect-no"
                                            data-id="1bb77cd" data-element_type="section"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="has_ma_el_bg_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-420faa5 jltma-glass-effect-no"
                                                        data-id="420faa5" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-74ab83b jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                                                    data-id="74ab83b" data-element_type="widget"
                                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            Akad Nikah</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-82aa513 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-text-editor"
                                                                    data-id="82aa513" data-element_type="widget"
                                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="elementor-text-editor elementor-clearfix">
                                                                            Sabtu, 06 Mei 2023<br>
                                                                            08.00 - 09.00<br>
                                                                            <strong>di Rumah Mempelai Wanita</strong><br>
                                                                            Kirana Cikarang Blk. G16, Telagamurni, Kec. Cikarang Bar., Kabupaten Bekasi, Jawa Barat 17520
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-1c4b95d elementor-align-center jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-button"
                                                                    data-id="1c4b95d" data-element_type="widget"
                                                                    data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:500}"
                                                                    data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="https://goo.gl/maps/6cmbX3mXSAU12ghHA" target="_blank"
                                                                                class="elementor-button-link elementor-button elementor-size-xs"
                                                                                role="button">
                                                                                <span
                                                                                    class="elementor-button-content-wrapper">
                                                                                    <span
                                                                                        class="elementor-button-icon elementor-align-icon-left">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-map-marker"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-button-text">View
                                                                                        Location</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="has_ma_el_bg_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ff0c0d4 jltma-glass-effect-no"
                                                        data-id="ff0c0d4" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-004388d jltma-glass-effect-no elementor-widget elementor-widget-image"
                                                                    data-id="004388d" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img src="<?php echo base_url()?>assets/images/pexels-dmitry-zvolskiy-1676123-min-scaled-p8r44anca7wl7bncpiy19lztejxmijo0xts907gokw.jpg"
                                                                                title="pexels-dmitry-zvolskiy-1676123-min"
                                                                                alt="pexels-dmitry-zvolskiy-1676123-min" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="has_ma_el_bg_slider elementor-section elementor-inner-section elementor-element elementor-element-a76374a elementor-section-boxed elementor-section-height-default elementor-section-height-default jltma-glass-effect-no"
                                            data-id="a76374a" data-element_type="section"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="has_ma_el_bg_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ce6c159 jltma-glass-effect-no"
                                                        data-id="ce6c159" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-b490c88 jltma-glass-effect-no elementor-widget elementor-widget-image"
                                                                    data-id="b490c88" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img src="<?php echo base_url()?>assets/images/pexels-doğukan-benli-3094345-scaled-e1605339905281-oye6yt2m5v4kvbu3b2iq72ffc761t0dp9rdu8dbtkg.jpg"
                                                                                title="pexels-doğukan-benli-3094345"
                                                                                alt="pexels-doğukan-benli-3094345" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="has_ma_el_bg_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b622b9f jltma-glass-effect-no"
                                                        data-id="b622b9f" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-2fc3fa7 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                                                    data-id="2fc3fa7" data-element_type="widget"
                                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            Resepsi Pernikahan</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-392f054 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-text-editor"
                                                                    data-id="392f054" data-element_type="widget"
                                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="elementor-text-editor elementor-clearfix">
                                                                            Sabtu, 06 Mei 2023<br>
                                                                            10.00 - Selesai<br>
                                                                            <strong>Rumah Mempelai Wanita</strong><br>
                                                                            Kirana Cikarang Blk. G16, Telagamurni, Kec. Cikarang Bar., Kabupaten Bekasi, Jawa Barat 17520
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-380a705 elementor-align-center jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-button"
                                                                    data-id="380a705" data-element_type="widget"
                                                                    data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:500}"
                                                                    data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="https://goo.gl/maps/6cmbX3mXSAU12ghHA" target="_blank"
                                                                                class="elementor-button-link elementor-button elementor-size-xs"
                                                                                role="button">
                                                                                <span
                                                                                    class="elementor-button-content-wrapper">
                                                                                    <span
                                                                                        class="elementor-button-icon elementor-align-icon-left">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-map-marker"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-button-text">View
                                                                                        Location</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- <section
                    class="has_ma_el_bg_slider elementor-section elementor-top-section elementor-element elementor-element-47cffc08 light-color elementor-section-boxed elementor-section-height-default elementor-section-height-default jltma-glass-effect-no"
                    data-id="47cffc08" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="has_ma_el_bg_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7d3a42b5 jltma-glass-effect-no"
                                data-id="7d3a42b5" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-d146254 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="d146254" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Live
                                                    Streaming</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-66d178bc jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-text-editor"
                                            data-id="66d178bc" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    Please join us as part of our special day and watch our wedding live
                                                    from here. </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-9f56256 elementor-aspect-ratio-169 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-video"
                                            data-id="9f56256" data-element_type="widget"
                                            data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/www.youtube.com\/watch?v=NpEaa2P7qZI&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:500,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;,&quot;aspect_ratio&quot;:&quot;169&quot;}"
                                            data-widget_type="video.default">
                                            <div class="elementor-widget-container">
                                                <div
                                                    class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                                    <div class="elementor-video"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-30a8ef4 elementor-align-center jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-button"
                                            data-id="30a8ef4" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href="#" target="_blank"
                                                        class="elementor-button-link elementor-button elementor-size-sm"
                                                        role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span
                                                                class="elementor-button-icon elementor-align-icon-left">
                                                                <i aria-hidden="true" class="fab fa-youtube"></i>
                                                            </span>
                                                            <span class="elementor-button-text">Watch on Youtube</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
                <section
                    class="has_ma_el_bg_slider elementor-section elementor-top-section elementor-element elementor-element-d641f93 dark-color elementor-section-boxed elementor-section-height-default elementor-section-height-default jltma-glass-effect-no"
                    data-id="d641f93" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="has_ma_el_bg_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cab42f1 jltma-glass-effect-no"
                                data-id="cab42f1" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-52294c9 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="52294c9" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Kirim Hadiah</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-515e2f9 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-text-editor"
                                            data-id="515e2f9" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    Hopefully this limitation does not reduce happiness for both of us
                                                    and does not eliminate the blessings from all of you. Your prayer
                                                    for our marriage is the greatest gift of all. </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-43ea24a elementor-align-center jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-bdt-modal"
                                            data-id="43ea24a" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="bdt-modal.default">
                                            <div class="elementor-widget-container">
                                                <div class="bdt-modal-wrapper">

                                                    <a class="bdt-modal-button elementor-button elementor-size-sm"
                                                        data-bdt-toggle="target: #bdt-modal-43ea24a"
                                                        href="javascript:void(0)">
                                                        <!-- <span > -->

                                                        <span
                                                            class="bdt-button-icon-align-left bdt-modal-button-icon elementor-button-icon">

                                                            <i aria-hidden="true" class="fa-fw fas fa-gift"></i>
                                                        </span>

                                                        <span class="elementor-button-text">Send Gift</span>
                                                        <!-- </span> -->
                                                    </a>

                                                    <div id="bdt-modal-43ea24a"
                                                        class="bdt-modal-43ea24a bdt-modal bdt-flex-top"
                                                        data-bdt-modal=""
                                                        data-settings="{&quot;id&quot;:&quot;bdt-modal-43ea24a&quot;,&quot;widgetId&quot;:&quot;bdt-modal-43ea24a&quot;,&quot;layout&quot;:&quot;default&quot;,&quot;splashDelay&quot;:false,&quot;splashInactivity&quot;:false,&quot;displayTimes&quot;:false,&quot;displayTimesExpire&quot;:12,&quot;cacheOnAdmin&quot;:false,&quot;scrollDirection&quot;:false,&quot;scrollOffset&quot;:false,&quot;scrollSelector&quot;:false,&quot;modal_id&quot;:&quot;#bdt-modal-43ea24a&quot;,&quot;custom_section&quot;:false,&quot;closeBtnDelayShow&quot;:false,&quot;delayTime&quot;:false,&quot;pageID&quot;:30850}">
                                                        <div class="bdt-modal-dialog bdt-margin-auto-vertical">

                                                            <button class="bdt-modal-close-default elementor-animation-"
                                                                id="bdt-modal-close-button" type="button"
                                                                data-bdt-close></button>

                                                            <div class="bdt-modal-header bdt-text-center">
                                                                <h3 class="bdt-modal-title">Virtual Blessings</h3>
                                                            </div>

                                                            <div class="bdt-modal-body bdt-text-center"
                                                                bdt-overflow-auto="">
                                                                <img loading="lazy"
                                                                    class="aligncenter wp-image-234 size-medium"
                                                                    src="<?php echo base_url()?>assets/images/logo_bri.png"
                                                                    alt="" width="194" height="300"
                                                                    sizes="(max-width: 194px) 100vw, 194px" />
                                                                <p
                                                                    style="text-align: center; font-size: 20px; font-family: 'Noto Serif', Sans-serif !important;">
                                                                    BRI<br>
                                                                    a.n Widi Ajeng Komala<br>
                                                                    117901005649506</p>

                                                                <div class="text-center">
                                                                    <button id="e-clipboard-btn-85e407b-39150"
                                                                        class="elementor-button elementor-size-xs"
                                                                        type="button"
                                                                        data-clipboard-target="#e-clipboard-value-85e407b-39150"
                                                                        data-animation="headShake"
                                                                        onclick="copyText1()">

                                                                        <script>
                                                                            function copyText1 () {
                                                                                navigator.clipboard.writeText
                                                                                    ("117901005649506");
                                                                            }
                                                                        </script>

                                                                        <span
                                                                            class="elementor-button-content-wrapper e-flexbox">
                                                                            <span
                                                                                class="elementor-button-icon elementor-align-icon-left">
                                                                                <i class="far fa-copy"
                                                                                    aria-hidden="true"></i> </span>
                                                                            <span class="elementor-button-text">Copy
                                                                                Number</span>
                                                                        </span>

                                                                </div>


                                                                <img loading="lazy"
                                                                    class="aligncenter wp-image-234 size-medium"
                                                                    src="<?php echo base_url()?>assets/images/logo_bca.png"
                                                                    alt="" width="194" height="300"
                                                                    sizes="(max-width: 194px) 100vw, 194px" />
                                                                <p
                                                                    style="text-align: center; font-size: 20px; font-family: 'Noto Serif', Sans-serif !important;">
                                                                    BCA<br>
                                                                    a.n Sigit Mardiansyah<br>
                                                                    4860391614</p>

                                                                <div class="text-center">
                                                                    <button id="e-clipboard-btn-85e407b-39150"
                                                                        class="elementor-button elementor-size-xs"
                                                                        type="button"
                                                                        data-clipboard-target="#e-clipboard-value-85e407b-39150"
                                                                        data-animation="headShake"
                                                                        onclick="copyText11()">

                                                                        <script>
                                                                            function copyText11 () {
                                                                                navigator.clipboard.writeText
                                                                                    ("4860391614");
                                                                            }
                                                                        </script>

                                                                        <span
                                                                            class="elementor-button-content-wrapper e-flexbox">
                                                                            <span
                                                                                class="elementor-button-icon elementor-align-icon-left">
                                                                                <i class="far fa-copy"
                                                                                    aria-hidden="true"></i> </span>
                                                                            <span class="elementor-button-text">Copy
                                                                                Number</span>
                                                                        </span>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="has_ma_el_bg_slider elementor-section elementor-top-section elementor-element elementor-element-c4eeb89 elementor-section-full_width light-color elementor-section-height-default elementor-section-height-default jltma-glass-effect-no"
                    data-id="c4eeb89" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="has_ma_el_bg_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-edeaa67 jltma-glass-effect-no"
                                data-id="edeaa67" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-c81287c jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="c81287c" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Gallery</h2>
                                            </div>
                                        </div>
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                              <li data-target="#myCarousel" data-slide-to="1"></li>
                                              <li data-target="#myCarousel" data-slide-to="2"></li>
                                            </ol>
                                          
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner">
                                              <div class="item active">
                                                <img src="<?php echo base_url()?>assets/images/DPG02586.jpg" style="width:50%;height: 50%; display: block; margin-left: auto;margin-right: auto;" alt="Los Angeles">
                                              </div>
                                          
                                              <div class="item">
                                                <img src="<?php echo base_url()?>assets/images/DPG02590.jpg" style="width:50%;height: 50%; display: block; margin-left: auto;margin-right: auto;" alt="Chicago">
                                              </div>
                                          
                                              <div class="item">
                                                <img src="<?php echo base_url()?>assets/images/DPG02597.jpg" style="width:50%;height: 50%; display: block; margin-left: auto;margin-right: auto;" alt="New York">
                                              </div>
                                              <div class="item">
                                                <img src="<?php echo base_url()?>assets/images/DPG02598.jpg" style="width:50%;height: 50%; display: block; margin-left: auto;margin-right: auto;" alt="New York">
                                              </div>
                                              <div class="item">
                                                <img src="<?php echo base_url()?>assets/images/DPG02600.jpg" style="width:50%;height: 50%; display: block; margin-left: auto;margin-right: auto;" alt="New York">
                                              </div>
                                              <div class="item">
                                                <img src="<?php echo base_url()?>assets/images/DPG02604.jpg" style="width:50%;height: 50%; display: block; margin-left: auto;margin-right: auto;" alt="New York">
                                              </div>
                                              <div class="item">
                                                <img src="<?php echo base_url()?>assets/images/DPG02608.jpg" style="width:50%;height: 50%; display: block; margin-left: auto;margin-right: auto;" alt="New York">
                                              </div>
                                              <div class="item">
                                                <img src="<?php echo base_url()?>assets/images/DPG02610.jpg" style="width:50%;height: 50%; display: block; margin-left: auto;margin-right: auto;" alt="New York">
                                              </div>
                                              <div class="item">
                                                <img src="<?php echo base_url()?>assets/images/DPG02614.jpg" style="width:50%;height: 50%; display: block; margin-left: auto;margin-right: auto;" alt="New York">
                                              </div>
                                            </div>
                                          
                                            <!-- Left and right controls -->
                                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                              <span class="glyphicon glyphicon-chevron-left"></span>
                                              <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                              <span class="glyphicon glyphicon-chevron-right"></span>
                                              <span class="sr-only">Next</span>
                                            </a>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="has_ma_el_bg_slider elementor-section elementor-top-section elementor-element elementor-element-029027a elementor-section-boxed elementor-section-height-default elementor-section-height-default jltma-glass-effect-no"
                    data-id="029027a" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="has_ma_el_bg_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a453d31 jltma-glass-effect-no"
                                data-id="a453d31" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-d8114cf jltma-glass-effect-no elementor-widget elementor-widget-bdt-advanced-divider"
                                            data-id="d8114cf" data-element_type="widget"
                                            data-widget_type="bdt-advanced-divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="bdt-ep-advanced-divider"
                                                    data-settings="{&quot;animation&quot;:true}">

                                                    <img src="<?php echo base_url()?>assets/images/leaf.svg"
                                                        alt="advanced divider" class="bdt-animation-stroke ep_square">

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="has_ma_el_bg_slider elementor-section elementor-top-section elementor-element elementor-element-29d456c1 light-color elementor-section-boxed elementor-section-height-default elementor-section-height-default jltma-glass-effect-no"
                    data-id="29d456c1" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="has_ma_el_bg_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7b27c565 jltma-glass-effect-no"
                                data-id="7b27c565" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-ead3b74 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="ead3b74" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="heading.default">
                                            <!-- <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">RSVP</h2>
                                            </div> -->
                                        </div>
                                        <!-- <div class="elementor-element elementor-element-d01f876 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-bdt-wp-forms"
                                            data-id="d01f876" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="bdt-wp-forms.default">
                                            <div class="elementor-widget-container">
                                                <div class="wpforms-container wpforms-container-full rsvp-invistory"
                                                    id="wpforms-21098">
                                                    <form id="wpforms-form-21098"
                                                        class="wpforms-validate wpforms-form wpforms-ajax-form"
                                                        data-formid="21098" method="post" enctype="multipart/form-data"
                                                        action="/wedding-invitation-premium-d/?u=Invistory"
                                                        data-token="30e72b2f9a7513a1249e744a285a8267"><noscript
                                                            class="wpforms-error-noscript">Please enable JavaScript in
                                                            your browser to complete this form.</noscript>
                                                        <div class="wpforms-field-container">
                                                            <div id="wpforms-21098-field_5-container"
                                                                class="wpforms-field wpforms-field-radio wpforms-conditional-trigger"
                                                                data-field-id="5"><label class="wpforms-field-label"
                                                                    for="wpforms-21098-field_5">Will you join with us?
                                                                    <span
                                                                        class="wpforms-required-label">*</span></label>
                                                                <ul id="wpforms-21098-field_5"
                                                                    class="wpforms-field-required">
                                                                    <li class="choice-1 depth-1"><input type="radio"
                                                                            id="wpforms-21098-field_5_1"
                                                                            name="wpforms[fields][5]"
                                                                            value="Definitely Yes" required><label
                                                                            class="wpforms-field-label-inline"
                                                                            for="wpforms-21098-field_5_1">Definitely
                                                                            Yes</label></li>
                                                                    <li class="choice-2 depth-1"><input type="radio"
                                                                            id="wpforms-21098-field_5_2"
                                                                            name="wpforms[fields][5]"
                                                                            value="Sorry, I Can&#039;t Attend Your Wedding"
                                                                            required><label
                                                                            class="wpforms-field-label-inline"
                                                                            for="wpforms-21098-field_5_2">Sorry, I Can't
                                                                            Attend Your Wedding</label></li>
                                                                </ul>
                                                            </div>
                                                            <div id="wpforms-21098-field_24-container"
                                                                class="wpforms-field wpforms-field-text"
                                                                data-field-id="24"><label class="wpforms-field-label"
                                                                    for="wpforms-21098-field_24">Full Name <span
                                                                        class="wpforms-required-label">*</span></label><input
                                                                    type="text" id="wpforms-21098-field_24"
                                                                    class="wpforms-field-large wpforms-field-required"
                                                                    name="wpforms[fields][24]" placeholder="Full Name"
                                                                    required></div>
                                                            <div id="wpforms-21098-field_3-container"
                                                                class="wpforms-field wpforms-field-select wpforms-conditional-field wpforms-conditional-show wpforms-field-select-style-classic"
                                                                data-field-id="3" style="display:none;"><label
                                                                    class="wpforms-field-label"
                                                                    for="wpforms-21098-field_3">Sessions <span
                                                                        class="wpforms-required-label">*</span></label><select
                                                                    id="wpforms-21098-field_3"
                                                                    class="wpforms-field-large wpforms-field-required"
                                                                    name="wpforms[fields][3]" required="required">
                                                                    <option value="Reception Only" selected='selected'>
                                                                        Reception Only</option>
                                                                    <option value="Wedding Ceremony &amp; Reception">
                                                                        Wedding Ceremony &amp; Reception</option>
                                                                    <option
                                                                        value="Holy Matrimony, Wedding Ceremony &amp; Reception">
                                                                        Holy Matrimony, Wedding Ceremony &amp; Reception
                                                                    </option>
                                                                </select></div>
                                                            <div id="wpforms-21098-field_25-container"
                                                                class="wpforms-field wpforms-field-select wpforms-conditional-field wpforms-conditional-show wpforms-conditional-trigger wpforms-field-select-style-classic"
                                                                data-field-id="25" style="display:none;"><label
                                                                    class="wpforms-field-label"
                                                                    for="wpforms-21098-field_25">Number of Guest <span
                                                                        class="wpforms-required-label">*</span></label><select
                                                                    id="wpforms-21098-field_25"
                                                                    class="wpforms-field-large wpforms-field-required"
                                                                    name="wpforms[fields][25]" required="required">
                                                                    <option value="1 Guest" selected='selected'>1 Guest
                                                                    </option>
                                                                    <option value="2 Guests">2 Guests</option>
                                                                </select></div>
                                                            <div id="wpforms-21098-field_23-container"
                                                                class="wpforms-field wpforms-field-text wpforms-conditional-field wpforms-conditional-show"
                                                                data-field-id="23" style="display:none;"><label
                                                                    class="wpforms-field-label"
                                                                    for="wpforms-21098-field_23">Name 2 <span
                                                                        class="wpforms-required-label">*</span></label><input
                                                                    type="text" id="wpforms-21098-field_23"
                                                                    class="wpforms-field-large wpforms-field-required"
                                                                    name="wpforms[fields][23]" placeholder="Name"
                                                                    required></div>
                                                            <div id="wpforms-21098-field_2-container"
                                                                class="wpforms-field wpforms-field-phone wpforms-conditional-field wpforms-conditional-show"
                                                                data-field-id="2" style="display:none;"><label
                                                                    class="wpforms-field-label"
                                                                    for="wpforms-21098-field_2">Phone Number <span
                                                                        class="wpforms-required-label">*</span></label><input
                                                                    type="tel" id="wpforms-21098-field_2"
                                                                    class="wpforms-field-large wpforms-field-required wpforms-smart-phone-field"
                                                                    data-rule-smart-phone-field="true"
                                                                    name="wpforms[fields][2]" placeholder="Phone Number"
                                                                    required></div>
                                                            <div id="wpforms-21098-field_12-container"
                                                                class="wpforms-field wpforms-field-hidden"
                                                                data-field-id="12"><input type="hidden"
                                                                    id="wpforms-21098-field_12"
                                                                    name="wpforms[fields][12]" value="Invistory"></div>
                                                            <div id="wpforms-21098-field_16-container"
                                                                class="wpforms-field wpforms-field-hidden"
                                                                data-field-id="16"><input type="hidden"
                                                                    id="wpforms-21098-field_16"
                                                                    name="wpforms[fields][16]"></div>
                                                        </div>
                                                        <div class="wpforms-submit-container"><input type="hidden"
                                                                name="wpforms[id]" value="21098"><input type="hidden"
                                                                name="wpforms[author]" value="1"><input type="hidden"
                                                                name="wpforms[post_id]" value="30850"><button
                                                                type="submit" name="wpforms[submit]"
                                                                id="wpforms-submit-21098" class="wpforms-submit"
                                                                data-alt-text="Sending..." data-submit-text="Submit"
                                                                aria-live="assertive"
                                                                value="wpforms-submit">Submit</button><img
                                                                loading="lazy"
                                                                src="https://invistory.com/wp-content/plugins/wpforms/assets/imagessubmit-spin.svg"
                                                                class="wpforms-submit-spinner" style="display: none;"
                                                                width="26" height="26" alt=""></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="elementor-element elementor-element-e93b1c4 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-quiz-maker"
                                            data-id="e93b1c4" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="quiz-maker.default">
                                            <div class="elementor-widget-container">
                                                <div class='ays-quiz-wrap'>
                                                    <div class='ays-quiz-container ays_quiz_classic_light  '
                                                        data-quest-effect='fade'
                                                        data-bg-gradient='linear-gradient(to bottom right, #c4bea8, #c4b27d)'
                                                        data-hide-bg-image='false' id='ays-quiz-container-2'>
                                                        <div class='ays-live-bar-wrap ays-live-fourth-wrap'>
                                                            <div class='ays-live-bar-fill ays-live-fourth'
                                                                style='width: 0%;'><span><span
                                                                        class='ays-live-bar-percent'>0</span>%</span>
                                                            </div>
                                                        </div>

                                                        <div class='ays-questions-container'>
                                                            <div class='ays-quiz-some-items-icons-wrap'></div>
                                                            <span class='ays_quizn_ancnoxneri_qanak'><i
                                                                    class='ays_fa ays_fa_users'></i> 597</span>

                                                            <form action='' method='post' autocomplete='off'
                                                                id='ays_finish_quiz_2'
                                                                class=' enable_questions_result '>
                                                                <input type='hidden' value='list'
                                                                    class='answer_view_class'>
                                                                <input type='hidden' value=''
                                                                    class='ays_qm_enable_arrows'>
                                                                <section style='display:none;'
                                                                    class='ays_quiz_timer_container'>
                                                                    <div class='ays-quiz-timer ' data-timer='60'></div>
                                                                    <div
                                                                        class='ays-quiz-after-timer  empty_after_timer_text '>
                                                                    </div>
                                                                    <hr style='height:1px;'>
                                                                </section>

                                                                <div class='step active-step'>
                                                                    <div class='ays-abs-fs ays-start-page'>

                                                                        <img src='imagesDPG02598.JPG'
                                                                            alt='' class='ays_quiz_image'>
                                                                        <p class='ays-fs-title'>Quiz Sigit & Widi</p>
                                                                        <div class='ays-fs-subtitle'>
                                                                            <p>How Much You Know About Us?</p>
                                                                        </div>
                                                                        <input type='hidden' name='ays_quiz_id'
                                                                            value='2' />
                                                                        <input type='hidden' name='ays_quiz_questions'
                                                                            value='1,2,3'>

                                                                        <div class='ays_buttons_div'>
                                                                            <input type='button' name='next'
                                                                                class='ays_next start_button action-button'
                                                                                value='Start' />
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                                <div class='step  ' data-question-id='2'
                                                                    data-type='radio' data-required='false'>

                                                                    <p class='ays-question-counter animated'>1 / 3</p>
                                                                    <div class='ays-abs-fs'>

                                                                        <div class='ays_quiz_question'>
                                                                            <p>1. Siapa Nama Kucingnya Widi ?</p>

                                                                        </div>

                                                                        <div
                                                                            class='ays-quiz-answers ays_list_view_container  '>
                                                                            <div class='ays-field ays_list_view_item'>
                                                                                <input type='hidden'
                                                                                    name='ays_answer_correct[]'
                                                                                    value='1' />

                                                                                <input type='radio'
                                                                                    name='ays_questions[ays-question-2]'
                                                                                    id='ays-answer-4-2' value='4' />

                                                                                <label for='ays-answer-4-2'
                                                                                    class='  ays_position_initial '>A.
                                                                                    Kuroneko</label><label
                                                                                    for='ays-answer-4-2'
                                                                                    class='ays_answer_image ays_empty_before_content'></label>



                                                                            </div>
                                                                            <div class='ays-field ays_list_view_item'>
                                                                                <input type='hidden'
                                                                                    name='ays_answer_correct[]'
                                                                                    value='0' />

                                                                                <input type='radio'
                                                                                    name='ays_questions[ays-question-2]'
                                                                                    id='ays-answer-11-2' value='11' />

                                                                                <label for='ays-answer-11-2'
                                                                                    class='  ays_position_initial '>B.
                                                                                    Bubu</label><label
                                                                                    for='ays-answer-11-2'
                                                                                    class='ays_answer_image ays_empty_before_content'></label>



                                                                            </div>
                                                                            <div class='ays-field ays_list_view_item'>
                                                                                <input type='hidden'
                                                                                    name='ays_answer_correct[]'
                                                                                    value='0' />

                                                                                <input type='radio'
                                                                                    name='ays_questions[ays-question-2]'
                                                                                    id='ays-answer-5-2' value='5' />

                                                                                <label for='ays-answer-5-2'
                                                                                    class='  ays_position_initial '>C.
                                                                                    Hitam</label><label
                                                                                    for='ays-answer-5-2'
                                                                                    class='ays_answer_image ays_empty_before_content'></label>



                                                                            </div>
                                                                        </div>


                                                                        <div class='ays_buttons_div'>

                                                                            <i
                                                                                class="ays_fa ays_fa_arrow_circle_left ays_previous action-button ays_arrow ays_display_none"></i>
                                                                            <input type='button' name='next'
                                                                                class='ays_previous action-button '
                                                                                value='Prev' />

                                                                            <i
                                                                                class="ays_fa ays_fa_arrow_circle_right ays_next action-button ays_arrow ays_next_arrow ays_display_none"></i>
                                                                            <input type='button' name='next'
                                                                                class='ays_next action-button ays_display_none'
                                                                                value='Next' />
                                                                        </div>

                                                                        <div class='wrong_answer_text ays_do_not_show'
                                                                            style='display:none'>

                                                                        </div>
                                                                        <div class='right_answer_text ays_do_not_show'
                                                                            style='display:none'>

                                                                        </div>
                                                                        <div class='ays_questtion_explanation'
                                                                            style='display:none'>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class='step  ' data-question-id='3'
                                                                    data-type='radio' data-required='false'>

                                                                    <p class='ays-question-counter animated'>2 / 3</p>
                                                                    <div class='ays-abs-fs'>

                                                                        <div class='ays_quiz_question'>
                                                                            <p>Sebutkan salah satu sahabatnya widi ?</p>

                                                                        </div>

                                                                        <div
                                                                            class='ays-quiz-answers ays_list_view_container  '>
                                                                            <div class='ays-field ays_list_view_item'>
                                                                                <input type='hidden'
                                                                                    name='ays_answer_correct[]'
                                                                                    value='1' />

                                                                                <input type='radio'
                                                                                    name='ays_questions[ays-question-3]'
                                                                                    id='ays-answer-8-2' value='8' />

                                                                                <label for='ays-answer-8-2'
                                                                                    class='  ays_position_initial '>A.
                                                                                    Nunung</label><label
                                                                                    for='ays-answer-8-2'
                                                                                    class='ays_answer_image ays_empty_before_content'></label>



                                                                            </div>
                                                                            <div class='ays-field ays_list_view_item'>
                                                                                <input type='hidden'
                                                                                    name='ays_answer_correct[]'
                                                                                    value='0' />

                                                                                <input type='radio'
                                                                                    name='ays_questions[ays-question-3]'
                                                                                    id='ays-answer-7-2' value='7' />

                                                                                <label for='ays-answer-7-2'
                                                                                    class='  ays_position_initial '>B. Wisnu</label><label
                                                                                    for='ays-answer-7-2'
                                                                                    class='ays_answer_image ays_empty_before_content'></label>



                                                                            </div>
                                                                            <div class='ays-field ays_list_view_item'>
                                                                                <input type='hidden'
                                                                                    name='ays_answer_correct[]'
                                                                                    value='0' />

                                                                                <input type='radio'
                                                                                    name='ays_questions[ays-question-3]'
                                                                                    id='ays-answer-9-2' value='9' />

                                                                                <label for='ays-answer-9-2'
                                                                                    class='  ays_position_initial '>C. Eka</label><label
                                                                                    for='ays-answer-9-2'
                                                                                    class='ays_answer_image ays_empty_before_content'></label>



                                                                            </div>
                                                                        </div>


                                                                        <div class='ays_buttons_div'>

                                                                            <i
                                                                                class="ays_fa ays_fa_arrow_circle_left ays_previous action-button ays_arrow ays_display_none"></i>
                                                                            <input type='button' name='next'
                                                                                class='ays_previous action-button '
                                                                                value='Prev' />

                                                                            <i
                                                                                class="ays_fa ays_fa_arrow_circle_right ays_next action-button ays_arrow ays_next_arrow ays_display_none"></i>
                                                                            <input type='button' name='next'
                                                                                class='ays_next action-button ays_display_none'
                                                                                value='Next' />
                                                                        </div>

                                                                        <div class='wrong_answer_text ays_do_not_show'
                                                                            style='display:none'>

                                                                        </div>
                                                                        <div class='right_answer_text ays_do_not_show'
                                                                            style='display:none'>

                                                                        </div>
                                                                        <div class='ays_questtion_explanation'
                                                                            style='display:none'>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class='step  ' data-question-id='1'
                                                                    data-type='radio' data-required='false'>

                                                                    <p class='ays-question-counter animated'>3 / 3</p>
                                                                    <div class='ays-abs-fs'>

                                                                        <div class='ays_quiz_question'>
                                                                            <p>3. Makanan Kesukaan Widi?</p>

                                                                        </div>

                                                                        <div
                                                                            class='ays-quiz-answers ays_list_view_container  '>
                                                                            <div class='ays-field ays_list_view_item'>
                                                                                <input type='hidden'
                                                                                    name='ays_answer_correct[]'
                                                                                    value='0' />

                                                                                <input type='radio'
                                                                                    name='ays_questions[ays-question-1]'
                                                                                    id='ays-answer-2-2' value='2' />

                                                                                <label for='ays-answer-2-2'
                                                                                    class='  ays_position_initial '>A.
                                                                                    Daging Sapi</label><label
                                                                                    for='ays-answer-2-2'
                                                                                    class='ays_answer_image ays_empty_before_content'></label>



                                                                            </div>
                                                                            <div class='ays-field ays_list_view_item'>
                                                                                <input type='hidden'
                                                                                    name='ays_answer_correct[]'
                                                                                    value='0' />

                                                                                <input type='radio'
                                                                                    name='ays_questions[ays-question-1]'
                                                                                    id='ays-answer-1-2' value='1' />

                                                                                <label for='ays-answer-1-2'
                                                                                    class='  ays_position_initial '>B.
                                                                                    Daging Ayam</label><label
                                                                                    for='ays-answer-1-2'
                                                                                    class='ays_answer_image ays_empty_before_content'></label>



                                                                            </div>
                                                                            <div class='ays-field ays_list_view_item'>
                                                                                <input type='hidden'
                                                                                    name='ays_answer_correct[]'
                                                                                    value='1' />

                                                                                <input type='radio'
                                                                                    name='ays_questions[ays-question-1]'
                                                                                    id='ays-answer-3-2' value='3' />

                                                                                <label for='ays-answer-3-2'
                                                                                    class='  ays_position_initial '>C.
                                                                                    Daging Ikan</label><label
                                                                                    for='ays-answer-3-2'
                                                                                    class='ays_answer_image ays_empty_before_content'></label>



                                                                            </div>
                                                                        </div>


                                                                        <div class='ays_buttons_div'>

                                                                            <i
                                                                                class="ays_fa ays_fa_arrow_circle_left ays_previous action-button ays_arrow ays_display_none"></i>
                                                                            <input type='button' name='next'
                                                                                class='ays_previous action-button '
                                                                                value='Prev' />
                                                                            <i
                                                                                class='ays_display_none ays_fa ays_fa_flag_checkered ays_finish action-button ays_arrow ays_next_arrow'></i><input
                                                                                type='submit' name='ays_finish_quiz'
                                                                                class=' ays_display_none ays_next ays_finish action-button'
                                                                                value='See Result' />
                                                                        </div>

                                                                        <div class='wrong_answer_text ays_do_not_show'
                                                                            style='display:none'>

                                                                        </div>
                                                                        <div class='right_answer_text ays_do_not_show'
                                                                            style='display:none'>

                                                                        </div>
                                                                        <div class='ays_questtion_explanation'
                                                                            style='display:none'>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class='step ays_thank_you_fs'>
                                                                    <div class='ays-abs-fs ays-end-page'>
                                                                        <div style='text-align:center;'>
                                                                            <div data-class='lds-dual-ring'
                                                                                data-role='loader' class='ays-loader'>
                                                                            </div>
                                                                        </div>
                                                                        <div class='ays_quiz_results_page'>
                                                                            <div class='ays_score_message'></div>
                                                                            <div class='ays_message'></div>
                                                                            <p
                                                                                class='ays_score ays_score_display_none animated'>
                                                                                Your score is </p>
                                                                            <p class='ays_average'>The average score is
                                                                                29%</p>
                                                                            <div class='ays-progress fourth'>
                                                                                <span
                                                                                    class='ays-progress-value fourth'>0%</span>
                                                                                <div class='ays-progress-bg fourth'>
                                                                                    <div class='ays-progress-bar fourth'
                                                                                        style='width:0%;'></div>
                                                                                </div>
                                                                            </div>
                                                                            <p class='ays_restart_button_p'></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <style>
                                                                    div#ays-quiz-container-2 * {
                                                                        box-sizing: border-box;
                                                                    }

                                                                    /* Styles for Internet Explorer start */
                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 {}

                                                                    /* Styles for Quiz container */
                                                                    #ays-quiz-container-2 {
                                                                        min-height: 350px;
                                                                        width: 500px;
                                                                        background-color: #c4bea8;
                                                                        background-position: center center;
                                                                        background-image: linear-gradient(to bottom right, #c4bea8, #c4b27d);
                                                                        border-radius: 10px 10px 0px 10px;
                                                                        box-shadow: none;
                                                                        border: none;
                                                                    }

                                                                    /* Styles for Navigation bar */
                                                                    #ays-quiz-questions-nav-wrap-2 {
                                                                        width: 100%;
                                                                        border-radius: 10px 10px 0px 10px;
                                                                        box-shadow: none;
                                                                        border: none;
                                                                    }

                                                                    #ays-quiz-questions-nav-wrap-2 .ays-quiz-questions-nav-content .ays-quiz-questions-nav-item a.ays_questions_nav_question {
                                                                        color: #ffffff;
                                                                        border-color: #ffffff;
                                                                        background-color: #c4bea8;
                                                                    }

                                                                    #ays-quiz-questions-nav-wrap-2 .ays-quiz-questions-nav-content .ays-quiz-questions-nav-item.ays-quiz-questions-nav-item-active a.ays_questions_nav_question {
                                                                        box-shadow: inset 0 0 5px #ffffff, 0 0 5px #ffffff;
                                                                    }

                                                                    #ays-quiz-questions-nav-wrap-2 .ays-quiz-questions-nav-content .ays-quiz-questions-nav-item.ays-quiz-questions-nav-item-answered a.ays_questions_nav_question {
                                                                        color: #c4bea8;
                                                                        border-color: #c4bea8;
                                                                        background-color: #ffffff;
                                                                    }

                                                                    #ays-quiz-questions-nav-wrap-2 .ays-quiz-questions-nav-content .ays-quiz-questions-nav-item a.ays_questions_nav_question.ays_quiz_correct_answer {
                                                                        color: rgba(39, 174, 96, 1);
                                                                        border-color: rgba(39, 174, 96, 1);
                                                                        background-color: rgba(39, 174, 96, 0.4);
                                                                    }

                                                                    #ays-quiz-questions-nav-wrap-2 .ays-quiz-questions-nav-content .ays-quiz-questions-nav-item a.ays_questions_nav_question.ays_quiz_wrong_answer {
                                                                        color: rgba(243, 134, 129, 1);
                                                                        border-color: rgba(243, 134, 129, 1);
                                                                        background-color: rgba(243, 134, 129, 0.4);
                                                                    }

                                                                    /* Styles for questions */
                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 div.step {
                                                                        min-height: 350px;
                                                                    }

                                                                    /* Styles for text inside quiz container */
                                                                    #ays-quiz-container-2.ays-quiz-container .ays-questions-container .ays-start-page *:not(input),
                                                                    #ays-quiz-container-2.ays-quiz-container .ays-questions-container .ays_question_hint,
                                                                    #ays-quiz-container-2.ays-quiz-container .ays-questions-container label[for^="ays-answer-"],
                                                                    #ays-quiz-container-2.ays-quiz-container .ays-questions-container p,
                                                                    #ays-quiz-container-2.ays-quiz-container .ays-questions-container .ays-fs-title,
                                                                    #ays-quiz-container-2.ays-quiz-container .ays-questions-container .ays-fs-subtitle,
                                                                    #ays-quiz-container-2.ays-quiz-container .ays-questions-container .logged_in_message,
                                                                    #ays-quiz-container-2.ays-quiz-container .ays-questions-container .ays-quiz-limitation-count-of-takers,
                                                                    #ays-quiz-container-2.ays-quiz-container .ays-questions-container .ays-quiz-limitation-count-of-takers *,
                                                                    #ays-quiz-container-2.ays-quiz-container .ays-questions-container .ays_score_message,
                                                                    #ays-quiz-container-2.ays-quiz-container .ays-questions-container .ays_message {
                                                                        color: #ffffff;
                                                                        outline: none;
                                                                    }

                                                                    /* Quiz title / transformation */
                                                                    #ays-quiz-container-2 .ays-fs-title {
                                                                        text-transform: capitalize;
                                                                        text-align: center;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-quiz-password-message-box,
                                                                    #ays-quiz-container-2 .ays-quiz-question-note-message-box,
                                                                    #ays-quiz-container-2 .ays_quiz_question,
                                                                    #ays-quiz-container-2 .ays_quiz_question *:not([class^='enlighter']) {
                                                                        color: #ffffff;
                                                                    }

                                                                    #ays-quiz-container-2 textarea,
                                                                    #ays-quiz-container-2 input::first-letter,
                                                                    #ays-quiz-container-2 select::first-letter,
                                                                    #ays-quiz-container-2 option::first-letter {
                                                                        color: initial !important;
                                                                    }

                                                                    #ays-quiz-container-2 p::first-letter:not(.ays_no_questions_message) {
                                                                        color: #ffffff !important;
                                                                        background-color: transparent !important;
                                                                        font-size: inherit !important;
                                                                        font-weight: inherit !important;
                                                                        float: none !important;
                                                                        line-height: inherit !important;
                                                                        margin: 0 !important;
                                                                        padding: 0 !important;
                                                                    }

                                                                    #ays-quiz-container-2 .select2-container,
                                                                    #ays-quiz-container-2 .ays-field * {
                                                                        font-size: 15px !important;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-fs-subtitle p {
                                                                        text-align: center;
                                                                    }

                                                                    #ays-quiz-container-2 .ays_quiz_question p {
                                                                        font-size: 18px;
                                                                        text-align: center;
                                                                    }

                                                                    #ays-quiz-container-2 .ays_quiz_question {
                                                                        text-align: center;
                                                                        margin-bottom: 10px;
                                                                    }

                                                                    #ays-quiz-container-2 .ays_quiz_question pre {
                                                                        max-width: 100%;
                                                                        white-space: break-spaces;
                                                                    }

                                                                    div#ays-quiz-container-2 .ays-questions-container .ays-field,
                                                                    div#ays-quiz-container-2 .ays-questions-container .ays-field input~label[for^='ays-answer-'],
                                                                    div#ays-quiz-container-2 .ays-questions-container .ays-modern-dark-question *,
                                                                    div#ays-quiz-container-2 .ays-questions-container .ays_quiz_question,
                                                                    div#ays-quiz-container-2 .ays-questions-container .ays_quiz_question * {
                                                                        word-break: break-word;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-quiz-timer p {
                                                                        font-size: 16px;
                                                                    }

                                                                    #ays-quiz-container-2 section.ays_quiz_redirection_timer_container hr,
                                                                    #ays-quiz-container-2 section.ays_quiz_timer_container hr {
                                                                        margin: 0;
                                                                    }

                                                                    #ays-quiz-container-2 section.ays_quiz_timer_container.ays_quiz_timer_red_warning .ays-quiz-timer {
                                                                        color: red;
                                                                    }

                                                                    #ays-quiz-container-2 .ays_thank_you_fs p {
                                                                        text-align: center;
                                                                    }

                                                                    #ays-quiz-container-2 .information_form input[type='text'],
                                                                    #ays-quiz-container-2 .information_form input[type='url'],
                                                                    #ays-quiz-container-2 .information_form input[type='number'],
                                                                    #ays-quiz-container-2 .information_form input[type='email'],
                                                                    #ays-quiz-container-2 .information_form input[type='tel'],
                                                                    #ays-quiz-container-2 .information_form textarea,
                                                                    #ays-quiz-container-2 .information_form select,
                                                                    #ays-quiz-container-2 .information_form option {
                                                                        color: initial !important;
                                                                        outline: none;
                                                                        margin-left: 0;
                                                                        background-image: unset;
                                                                    }

                                                                    #ays-quiz-container-2 .information_form input[type='checkbox'] {
                                                                        margin: 0 10px;
                                                                        outline: initial;
                                                                        -webkit-appearance: auto;
                                                                        -moz-appearance: auto;
                                                                        position: initial;
                                                                        width: initial;
                                                                        height: initial;
                                                                        border: initial;
                                                                        background: initial;
                                                                    }

                                                                    #ays-quiz-container-2 .information_form input[type='checkbox']::after {
                                                                        content: none;
                                                                    }

                                                                    #ays-quiz-container-2 .wrong_answer_text {
                                                                        color: #ff4d4d;
                                                                    }

                                                                    #ays-quiz-container-2 .right_answer_text {
                                                                        color: #33cc33;
                                                                    }

                                                                    #ays-quiz-container-2 .ays_cb_and_a,
                                                                    #ays-quiz-container-2 .ays_cb_and_a * {
                                                                        color: rgb(255, 255, 255);
                                                                        text-align: center;
                                                                    }

                                                                    #ays-quiz-container-2 iframe {
                                                                        min-height: 350px;
                                                                    }

                                                                    #ays-quiz-container-2 label.ays_for_checkbox,
                                                                    #ays-quiz-container-2 span.ays_checkbox_for_span {
                                                                        color: initial !important;
                                                                        display: block;
                                                                    }

                                                                    /* Quiz textarea height */
                                                                    #ays-quiz-container-2 textarea {
                                                                        height: 100px;
                                                                        min-height: 100px;
                                                                    }

                                                                    /* Quiz rate and passed users count */
                                                                    #ays-quiz-container-2 .ays_quizn_ancnoxneri_qanak,
                                                                    #ays-quiz-container-2 .ays_quiz_rete_avg {
                                                                        color: #c4bea8;
                                                                        background-color: #ffffff;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-questions-container>.ays_quizn_ancnoxneri_qanak {
                                                                        padding: 5px 20px;
                                                                    }

                                                                    #ays-quiz-container-2 div.for_quiz_rate.ui.star.rating .icon {
                                                                        color: rgba(255, 255, 255, 0.35);
                                                                    }

                                                                    #ays-quiz-container-2 .ays_quiz_rete_avg div.for_quiz_rate_avg.ui.star.rating .icon {
                                                                        color: rgba(196, 190, 168, 0.5);
                                                                    }

                                                                    #ays-quiz-container-2 .ays_quiz_rete .ays-quiz-rate-link-box .ays-quiz-rate-link {
                                                                        color: #ffffff;
                                                                    }

                                                                    /* Loaders */
                                                                    #ays-quiz-container-2 div.lds-spinner,
                                                                    #ays-quiz-container-2 div.lds-spinner2 {
                                                                        color: #ffffff;
                                                                    }

                                                                    #ays-quiz-container-2 div.lds-spinner div:after,
                                                                    #ays-quiz-container-2 div.lds-spinner2 div:after {
                                                                        background-color: #ffffff;
                                                                    }

                                                                    #ays-quiz-container-2 .lds-circle,
                                                                    #ays-quiz-container-2 .lds-facebook div,
                                                                    #ays-quiz-container-2 .lds-ellipsis div {
                                                                        background: #ffffff;
                                                                    }

                                                                    #ays-quiz-container-2 .lds-ripple div {
                                                                        border-color: #ffffff;
                                                                    }

                                                                    #ays-quiz-container-2 .lds-dual-ring::after,
                                                                    #ays-quiz-container-2 .lds-hourglass::after {
                                                                        border-color: #ffffff transparent #ffffff transparent;
                                                                    }

                                                                    /* Stars */
                                                                    #ays-quiz-container-2 .ui.rating .icon,
                                                                    #ays-quiz-container-2 .ui.rating .icon:before {
                                                                        font-family: Rating !important;
                                                                    }

                                                                    /* Progress bars */
                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 .ays-progress {
                                                                        border-color: rgba(255, 255, 255, 0.8);
                                                                    }

                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 .ays-progress-bg {
                                                                        background-color: rgba(255, 255, 255, 0.3);
                                                                    }

                                                                    #ays-quiz-container-2 .ays-live-fourth {
                                                                        background-color: #ffffff;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-live-fourth-wrap {
                                                                        background-color: #ffffff;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-progress-value {
                                                                        color: #ffffff;
                                                                        text-align: center;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-progress-bar {
                                                                        background-color: #ffffff;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-question-counter .ays-live-bar-wrap {
                                                                        direction: ltr !important;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-live-bar-fill {
                                                                        color: #ffffff;
                                                                        border-bottom: 2px solid rgba(255, 255, 255, 0.8);
                                                                        text-shadow: 0px 0px 5px #c4bea8;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-live-bar-fill.ays-live-fourth,
                                                                    #ays-quiz-container-2 .ays-live-bar-fill.ays-live-third,
                                                                    #ays-quiz-container-2 .ays-live-bar-fill.ays-live-second {
                                                                        text-shadow: unset;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-live-bar-percent {
                                                                        display: none;
                                                                    }

                                                                    /* Music, Sound */
                                                                    #ays-quiz-container-2 .ays_music_sound {
                                                                        color: rgb(255, 255, 255);
                                                                    }

                                                                    /* Dropdown questions scroll bar */
                                                                    #ays-quiz-container-2 blockquote {
                                                                        border-left-color: #ffffff !important;
                                                                    }

                                                                    /* Question hint */
                                                                    #ays-quiz-container-2 .ays_question_hint_container .ays_question_hint_text {
                                                                        background-color: #c4bea8;
                                                                        box-shadow: 0 0 15px 3px rgba(0, 0, 0, 0.6);
                                                                        max-width: 270px;
                                                                    }

                                                                    #ays-quiz-container-2 .ays_question_hint_container .ays_question_hint_text p {
                                                                        max-width: unset;
                                                                    }

                                                                    #ays-quiz-container-2 .ays_questions_hint_max_width_class {
                                                                        max-width: 80%;
                                                                    }

                                                                    /* Information form */
                                                                    #ays-quiz-container-2 .ays-form-title {
                                                                        color: rgb(255, 255, 255);
                                                                    }

                                                                    /* Quiz timer */
                                                                    #ays-quiz-container-2 div.ays-quiz-redirection-timer,
                                                                    #ays-quiz-container-2 div.ays-quiz-timer {
                                                                        color: #ffffff;
                                                                        text-align: center;
                                                                    }

                                                                    #ays-quiz-container-2 div.ays-quiz-timer.ays-quiz-message-before-timer:before {
                                                                        font-weight: 500;
                                                                    }

                                                                    /* Quiz buttons */
                                                                    #ays-quiz-container-2 input#ays-submit,
                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 .action-button,
                                                                    div#ays-quiz-container-2 #ays_finish_quiz_2 .action-button.ays_restart_button {
                                                                        background-color: #ffffff;
                                                                        color: #515151;
                                                                        font-size: 16px;
                                                                        padding: 10px 30px;
                                                                        border-radius: 20px;
                                                                        white-space: nowrap;
                                                                        letter-spacing: 0;
                                                                        box-shadow: unset;
                                                                    }

                                                                    #ays-quiz-container-2 input#ays-submit,
                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 input.action-button {}

                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 a[class~=ajax_add_to_cart] {
                                                                        background-color: #c4bea8;
                                                                        color: #515151;
                                                                        padding: 10px 5px;
                                                                        font-size: 14px;
                                                                        border-radius: 20px;
                                                                        white-space: nowrap;
                                                                        border: 1px solid #515151;
                                                                    }

                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 .action-button.ays_check_answer {
                                                                        padding: 5px 10px;
                                                                        font-size: 16px !important;
                                                                    }

                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 .action-button.ays_download_certificate {
                                                                        white-space: nowrap;
                                                                        padding: 5px 10px;
                                                                    }

                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 .action-button.ays_arrow {
                                                                        color: #515151 !important;
                                                                        white-space: nowrap;
                                                                        padding: 5px 10px;
                                                                    }

                                                                    #ays-quiz-container-2 input#ays-submit:hover,
                                                                    #ays-quiz-container-2 input#ays-submit:focus,
                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 .action-button:hover,
                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 .action-button:focus {
                                                                        box-shadow: 0 0 0 2px #515151;
                                                                        background-color: #ffffff;
                                                                    }

                                                                    #ays-quiz-container-2 .ays_restart_button {
                                                                        color: #515151;
                                                                    }

                                                                    #ays-quiz-container-2 .ays_buttons_div {
                                                                        justify-content: center;
                                                                    }

                                                                    #ays-quiz-container-2 .step:first-of-type .ays_buttons_div {
                                                                        justify-content: center !important;
                                                                    }

                                                                    #ays-quiz-container-2 input[type='button'],
                                                                    #ays-quiz-container-2 input[type='submit'] {
                                                                        color: #515151 !important;
                                                                        outline: none;
                                                                    }

                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 i.ays_early_finish.action-button[disabled]:hover,
                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 i.ays_early_finish.action-button[disabled]:focus,
                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 i.ays_early_finish.action-button[disabled],
                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 i.ays_arrow.action-button[disabled]:hover,
                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 i.ays_arrow.action-button[disabled]:focus,
                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 i.ays_arrow.action-button[disabled] {
                                                                        color: #aaa !important;
                                                                    }

                                                                    #ays-quiz-container-2 .ays_finish.action-button {
                                                                        margin: 10px 5px;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-share-btn.ays-share-btn-branded {
                                                                        color: #fff;
                                                                    }

                                                                    /* Question answers */
                                                                    #ays-quiz-container-2 .ays-field {
                                                                        border-color: #ffffff;
                                                                        border-style: solid;
                                                                        border-width: 2px;
                                                                        box-shadow: none;
                                                                        flex-direction: row-reverse;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-quiz-answers .ays-field:hover {
                                                                        opacity: 1;
                                                                    }

                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 .ays-field label.ays_answer_caption[for^='ays-answer-'] {
                                                                        z-index: 1;
                                                                        position: initial;
                                                                        bottom: 0;
                                                                    }

                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 .ays-field input~label[for^='ays-answer-'] {
                                                                        padding: 5px;
                                                                    }

                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 .ays-field {
                                                                        margin-bottom: 10px;
                                                                    }

                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 .ays-field.ays_grid_view_item {
                                                                        width: calc(50% - 5px);
                                                                    }

                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 .ays-field.ays_grid_view_item:nth-child(odd) {
                                                                        margin-right: 5px;
                                                                    }

                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 .ays-field input:checked+label:before {
                                                                        border-color: #ffffff;
                                                                        background: #ffffff;
                                                                        background-clip: content-box;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-quiz-answers div.ays-text-right-answer {
                                                                        color: #ffffff;
                                                                    }

                                                                    /* Answer maximum length of a text field */
                                                                    #ays-quiz-container-2 .ays_quiz_question_text_message {
                                                                        color: #ffffff;
                                                                        text-align: left;
                                                                        font-size: 12px;
                                                                    }

                                                                    div#ays-quiz-container-2 div.ays_quiz_question_text_error_message {
                                                                        color: #ff0000;
                                                                    }

                                                                    /* Questions answer image */
                                                                    #ays-quiz-container-2 .ays-answer-image {
                                                                        width: 15em;
                                                                        height: 15em;
                                                                        object-fit: cover;
                                                                    }

                                                                    /* Questions answer right/wrong icons */
                                                                    #ays-quiz-container-2 .ays-field input~label.answered.correct:after {
                                                                        content: url('imagescorrect.png');
                                                                    }

                                                                    #ays-quiz-container-2 .ays-field input~label.answered.wrong:after {
                                                                        content: url('imageswrong.png');
                                                                    }

                                                                    #ays-quiz-container-2 .ays-field label.answered:last-of-type:after {
                                                                        height: auto;
                                                                        left: 10px;
                                                                        top: 10px;
                                                                    }

                                                                    /* Dropdown questions */
                                                                    #ays-quiz-container-2 .select2-container--default .select2-search--dropdown .select2-search__field:focus,
                                                                    #ays-quiz-container-2 .select2-container--default .select2-search--dropdown .select2-search__field {
                                                                        outline: unset;
                                                                        padding: 0.75rem;
                                                                    }

                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 .ays-field .select2-container--default .select2-selection--single {
                                                                        border-bottom: 2px solid #ffffff;
                                                                        background-color: #ffffff;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-field .select2-container--default .select2-selection--single .select2-selection__rendered,
                                                                    #ays-quiz-container-2 .ays-field .select2-container--default .select2-selection--single .select2-selection__placeholder,
                                                                    #ays-quiz-container-2 .ays-field .select2-container--default .select2-selection--single .select2-selection__arrow {
                                                                        color: #000000;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-field .select2-container--default .select2-selection--single .select2-selection__rendered,
                                                                    #ays-quiz-container-2 .select2-container--default .select2-results__option--highlighted[aria-selected] {
                                                                        background-color: #ffffff;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-field .select2-container--default,
                                                                    #ays-quiz-container-2 .ays-field .select2-container--default .selection,
                                                                    #ays-quiz-container-2 .ays-field .select2-container--default .dropdown-wrapper,
                                                                    #ays-quiz-container-2 .ays-field .select2-container--default .select2-selection--single .select2-selection__rendered,
                                                                    #ays-quiz-container-2 .ays-field .select2-container--default .select2-selection--single .select2-selection__rendered .select2-selection__placeholder,
                                                                    #ays-quiz-container-2 .ays-field .select2-container--default .select2-selection--single .select2-selection__arrow,
                                                                    #ays-quiz-container-2 .ays-field .select2-container--default .select2-selection--single .select2-selection__arrow b[role='presentation'] {
                                                                        font-size: 16px !important;
                                                                    }

                                                                    #ays-quiz-container-2 .select2-container--default .select2-results__option {
                                                                        padding: 6px;
                                                                    }

                                                                    /* Dropdown questions scroll bar */
                                                                    #ays-quiz-container-2 .select2-results__options::-webkit-scrollbar {
                                                                        width: 7px;
                                                                    }

                                                                    #ays-quiz-container-2 .select2-results__options::-webkit-scrollbar-track {
                                                                        background-color: rgba(196, 190, 168, 0.35);
                                                                    }

                                                                    #ays-quiz-container-2 .select2-results__options::-webkit-scrollbar-thumb {
                                                                        transition: .3s ease-in-out;
                                                                        background-color: rgba(196, 190, 168, 0.55);
                                                                    }

                                                                    #ays-quiz-container-2 .select2-results__options::-webkit-scrollbar-thumb:hover {
                                                                        transition: .3s ease-in-out;
                                                                        background-color: rgba(196, 190, 168, 0.85);
                                                                    }

                                                                    /* WooCommerce product */
                                                                    #ays-quiz-container-2 .ays-woo-block {
                                                                        background-color: rgba(255, 255, 255, 0.8);
                                                                    }

                                                                    #ays-quiz-container-2 .ays-woo-product-block h4.ays-woo-product-title>a {
                                                                        color: #ffffff;
                                                                    }

                                                                    /* Audio / Video */
                                                                    #ays-quiz-container-2 .mejs-container .mejs-time {
                                                                        box-sizing: unset;
                                                                    }

                                                                    #ays-quiz-container-2 .mejs-container .mejs-time-rail {
                                                                        padding-top: 15px;
                                                                    }

                                                                    #ays-quiz-container-2 .mejs-container .mejs-mediaelement video {
                                                                        margin: 0;
                                                                    }

                                                                    /* Limitation */
                                                                    #ays-quiz-container-2 .ays-quiz-limitation-count-of-takers {
                                                                        padding: 50px;
                                                                    }

                                                                    /* Hestia theme (Version: 3.0.16) | Start */
                                                                    #ays-quiz-container-2 .mejs-container .mejs-inner .mejs-controls .mejs-button>button:hover,
                                                                    #ays-quiz-container-2 .mejs-container .mejs-inner .mejs-controls .mejs-button>button {
                                                                        box-shadow: unset;
                                                                        background-color: transparent;
                                                                    }

                                                                    #ays-quiz-container-2 .mejs-container .mejs-inner .mejs-controls .mejs-button>button {
                                                                        margin: 10px 6px;
                                                                    }

                                                                    /* Hestia theme (Version: 3.0.16) | End */
                                                                    /* Go theme (Version: 1.4.3) | Start */
                                                                    #ays-quiz-container-2 label[for^='ays-answer']:before,
                                                                    #ays-quiz-container-2 label[for^='ays-answer']:before {
                                                                        -webkit-mask-image: unset;
                                                                        mask-image: unset;
                                                                    }

                                                                    #ays-quiz-container-2.ays_quiz_classic_light .ays-field input:checked+label.answered:before,
                                                                    #ays-quiz-container-2.ays_quiz_classic_dark .ays-field input:checked+label.answered:before {
                                                                        background-color: #ffffff !important;
                                                                    }

                                                                    #ays-quiz-container-2.ays_quiz_classic_light .ays-field input:checked+label.answered.correct:before,
                                                                    #ays-quiz-container-2.ays_quiz_classic_dark .ays-field input:checked+label.answered.correct:before {
                                                                        background-color: #27ae60 !important;
                                                                    }

                                                                    #ays-quiz-container-2.ays_quiz_classic_light .ays-field input:checked+label.answered.wrong:before,
                                                                    #ays-quiz-container-2.ays_quiz_classic_dark .ays-field input:checked+label.answered.wrong:before {
                                                                        background-color: #cc3700 !important;
                                                                    }

                                                                    /* Go theme (Version: 1.4.3) | End */
                                                                    #ays-quiz-container-2 .ays_quiz_results fieldset.ays_fieldset .ays_quiz_question .wp-video {
                                                                        width: 100% !important;
                                                                        max-width: 100%;
                                                                    }

                                                                    /* Classic Dark / Classic Light */
                                                                    /* Dropdown questions right/wrong styles */
                                                                    #ays-quiz-container-2.ays_quiz_classic_dark .correct_div,
                                                                    #ays-quiz-container-2.ays_quiz_classic_light .correct_div {
                                                                        border-color: green !important;
                                                                        opacity: 1 !important;
                                                                        background-color: rgba(39, 174, 96, 0.4) !important;
                                                                    }

                                                                    #ays-quiz-container-2.ays_quiz_classic_dark .correct_div .selected-field,
                                                                    #ays-quiz-container-2.ays_quiz_classic_light .correct_div .selected-field {
                                                                        padding: 0px 10px 0px 10px;
                                                                        color: green !important;
                                                                    }

                                                                    #ays-quiz-container-2.ays_quiz_classic_dark .wrong_div,
                                                                    #ays-quiz-container-2.ays_quiz_classic_light .wrong_div {
                                                                        border-color: red !important;
                                                                        opacity: 1 !important;
                                                                        background-color: rgba(243, 134, 129, 0.4) !important;
                                                                    }

                                                                    #ays-quiz-container-2.ays_quiz_classic_dark .ays-field.checked_answer_div.wrong_div input:checked~label,
                                                                    #ays-quiz-container-2.ays_quiz_classic_light .ays-field.checked_answer_div.wrong_div input:checked~label {
                                                                        background-color: rgba(243, 134, 129, 0.4) !important;
                                                                    }

                                                                    #ays-quiz-container-2 .ays_question_result .ays-field .ays_quiz_hide_correct_answer:after {
                                                                        content: '' !important;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-quiz-close-full-screen {
                                                                        fill: #ffffff;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-quiz-open-full-screen {
                                                                        fill: #ffffff;
                                                                    }

                                                                    @media screen and (max-width: 768px) {
                                                                        #ays-quiz-container-2 {
                                                                            max-width: 100%;
                                                                        }

                                                                        div#ays-quiz-container-2.ays_quiz_modern_light .step,
                                                                        div#ays-quiz-container-2.ays_quiz_modern_dark .step {
                                                                            padding-right: 0px !important;
                                                                            padding-top: 0px !important;
                                                                        }

                                                                        div#ays-quiz-container-2.ays_quiz_modern_light div.step[data-question-id],
                                                                        div#ays-quiz-container-2.ays_quiz_modern_dark div.step[data-question-id] {
                                                                            background-size: cover !important;
                                                                            background-position: center center !important;
                                                                        }

                                                                        div#ays-quiz-container-2.ays_quiz_modern_light .ays-abs-fs:not(.ays-start-page):not(.ays-end-page),
                                                                        div#ays-quiz-container-2.ays_quiz_modern_dark .ays-abs-fs:not(.ays-start-page):not(.ays-end-page) {
                                                                            width: 100%;
                                                                        }

                                                                        #ays-quiz-container-2 .ays_quiz_question p {
                                                                            font-size: 18px;
                                                                        }

                                                                        #ays-quiz-container-2 .select2-container,
                                                                        #ays-quiz-container-2 .ays-field * {
                                                                            font-size: 15px !important;
                                                                        }
                                                                    }

                                                                    /* Custom css styles */
                                                                    /* RTL direction styles */
                                                                </style>
                                                                <style>
                                                                    #ays-quiz-container-2 p {
                                                                        margin: 0.625em;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-field.checked_answer_div input:checked~label {
                                                                        background-color: rgba(255, 255, 255, 0.6);
                                                                    }

                                                                    #ays-quiz-container-2.ays_quiz_classic_light .enable_correction .ays-field.checked_answer_div input:checked+label,
                                                                    #ays-quiz-container-2.ays_quiz_classic_dark .enable_correction .ays-field.checked_answer_div input:checked+label {
                                                                        background-color: transparent;
                                                                    }

                                                                    #ays-quiz-container-2 .ays-field:hover {
                                                                        background: rgba(255, 255, 255, 0.8);
                                                                        color: #fff;
                                                                        transition: all .3s;
                                                                    }

                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 .action-button:hover,
                                                                    #ays-quiz-container-2 #ays_finish_quiz_2 .action-button:focus {
                                                                        box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.5), 0 0 0 3px #515151;
                                                                        background: #ffffff;
                                                                    }
                                                                </style>
                                                                <script>
                                                                    if (typeof aysQuizOptions === 'undefined') {
                                                                        var aysQuizOptions = [];
                                                                    }
                                                                    aysQuizOptions['2'] = 'eyJxdWl6X3ZlcnNpb24iOiI2LjIuOC40IiwiY29sb3IiOiIjZmZmZmZmIiwiYmdfY29sb3IiOiIjYzRiZWE4IiwidGV4dF9jb2xvciI6IiNmZmZmZmYiLCJoZWlnaHQiOjM1MCwid2lkdGgiOjUwMCwiZW5hYmxlX2xvZ2dlZF91c2VycyI6Im9mZiIsImluZm9ybWF0aW9uX2Zvcm0iOiJkaXNhYmxlIiwiZm9ybV9uYW1lIjoib24iLCJmb3JtX2VtYWlsIjpudWxsLCJmb3JtX3Bob25lIjpudWxsLCJpbWFnZV93aWR0aCI6IiIsImltYWdlX2hlaWdodCI6IiIsImVuYWJsZV9jb3JyZWN0aW9uIjoib2ZmIiwiZW5hYmxlX3Byb2dyZXNzX2JhciI6Im9uIiwiZW5hYmxlX3F1ZXN0aW9uc19yZXN1bHQiOiJvbiIsInJhbmRvbWl6ZV9xdWVzdGlvbnMiOiJvbiIsInJhbmRvbWl6ZV9hbnN3ZXJzIjoib24iLCJlbmFibGVfcXVlc3Rpb25zX2NvdW50ZXIiOiJvbiIsImVuYWJsZV9yZXN0cmljdGlvbl9wYXNzIjoib2ZmIiwicmVzdHJpY3Rpb25fcGFzc19tZXNzYWdlIjoiIiwidXNlcl9yb2xlIjpbXSwiY3VzdG9tX2NzcyI6IiIsImxpbWl0X3VzZXJzIjoib2ZmIiwibGltaXRhdGlvbl9tZXNzYWdlIjoiIiwicmVkaXJlY3RfdXJsIjoiIiwicmVkaXJlY3Rpb25fZGVsYXkiOjAsImFuc3dlcnNfdmlldyI6Imxpc3QiLCJlbmFibGVfcnRsX2RpcmVjdGlvbiI6Im9mZiIsImVuYWJsZV9sb2dnZWRfdXNlcnNfbWVzc2FnZSI6IiIsInF1ZXN0aW9uc19jb3VudCI6IiIsImVuYWJsZV9xdWVzdGlvbl9iYW5rIjoib2ZmIiwiZW5hYmxlX2xpdmVfcHJvZ3Jlc3NfYmFyIjoib24iLCJlbmFibGVfcGVyY2VudF92aWV3Ijoib24iLCJlbmFibGVfYXZlcmFnZV9zdGF0aXN0aWNhbCI6Im9uIiwiZW5hYmxlX25leHRfYnV0dG9uIjoib2ZmIiwiZW5hYmxlX3ByZXZpb3VzX2J1dHRvbiI6Im9uIiwiZW5hYmxlX2Fycm93cyI6Im9mZiIsInRpbWVyX3RleHQiOiIiLCJxdWl6X3RoZW1lIjoiY2xhc3NpY19saWdodCIsImVuYWJsZV9zb2NpYWxfYnV0dG9ucyI6Im9mZiIsInJlc3VsdF90ZXh0IjoiPGg0IHN0eWxlPVwidGV4dC1hbGlnbjogY2VudGVyXCI+UXVpeiBGaW5pc2hlZCE8XC9oND4iLCJlbmFibGVfcGFzc19jb3VudCI6Im9uIiwiaGlkZV9zY29yZSI6Im9mZiIsInJhdGVfZm9ybV90aXRsZSI6IiIsImJveF9zaGFkb3dfY29sb3IiOiIjMDAwIiwicXVpel9ib3JkZXJfcmFkaXVzIjoiMTAiLCJxdWl6X2JnX2ltYWdlIjoiIiwicXVpel9ib3JkZXJfd2lkdGgiOiI1IiwicXVpel9ib3JkZXJfc3R5bGUiOiJpbnNldCIsInF1aXpfYm9yZGVyX2NvbG9yIjoiIzAwMCIsInF1aXpfbG9hZGVyIjoiZHVhbF9yaW5nIiwiY3JlYXRlX2RhdGUiOiIyMDIxLTExLTE4IDEyOjEyOjAwIiwiYXV0aG9yIjpudWxsLCJxdWVzdF9hbmltYXRpb24iOiJmYWRlIiwiZm9ybV90aXRsZSI6IiIsImVuYWJsZV9iZ19tdXNpYyI6Im9mZiIsInF1aXpfYmdfbXVzaWMiOiIiLCJhbnN3ZXJzX2ZvbnRfc2l6ZSI6IjE1Iiwic2hvd19jcmVhdGVfZGF0ZSI6Im9mZiIsInNob3dfYXV0aG9yIjoib2ZmIiwiZW5hYmxlX2Vhcmx5X2ZpbmlzaCI6Im9mZiIsImFuc3dlcnNfcndfdGV4dHMiOiJvbl9yZXN1bHRzX3BhZ2UiLCJkaXNhYmxlX3N0b3JlX2RhdGEiOiJvZmYiLCJlbmFibGVfYmFja2dyb3VuZF9ncmFkaWVudCI6Im9uIiwiYmFja2dyb3VuZF9ncmFkaWVudF9jb2xvcl8xIjoiI2M0YmVhOCIsImJhY2tncm91bmRfZ3JhZGllbnRfY29sb3JfMiI6IiNjNGIyN2QiLCJxdWl6X2dyYWRpZW50X2RpcmVjdGlvbiI6ImRpYWdvbmFsX2xlZnRfdG9fcmlnaHQiLCJyZWRpcmVjdF9hZnRlcl9zdWJtaXQiOiJvZmYiLCJzdWJtaXRfcmVkaXJlY3RfdXJsIjoiIiwic3VibWl0X3JlZGlyZWN0X2RlbGF5IjowLCJwcm9ncmVzc19iYXJfc3R5bGUiOiJmb3VydGgiLCJlbmFibGVfZXhpdF9idXR0b24iOiJvZmYiLCJleGl0X3JlZGlyZWN0X3VybCI6IiIsImltYWdlX3NpemluZyI6ImNvdmVyIiwicXVpel9iZ19pbWFnZV9wb3NpdGlvbiI6ImNlbnRlciBjZW50ZXIiLCJjdXN0b21fY2xhc3MiOiIiLCJlbmFibGVfc29jaWFsX2xpbmtzIjoib2ZmIiwic29jaWFsX2xpbmtzIjp7ImxpbmtlZGluX2xpbmsiOiIiLCJmYWNlYm9va19saW5rIjoiIiwidHdpdHRlcl9saW5rIjoiIiwidmtvbnRha3RlX2xpbmsiOiIifSwic2hvd19xdWl6X3RpdGxlIjoib24iLCJzaG93X3F1aXpfZGVzYyI6Im9uIiwic2hvd19sb2dpbl9mb3JtIjoib2ZmIiwibW9iaWxlX21heF93aWR0aCI6IiIsImxpbWl0X3VzZXJzX2J5IjoiaXAiLCJhY3RpdmVfZGF0ZV9jaGVjayI6Im9mZiIsImFjdGl2ZUludGVydmFsIjoiMjAyMi0wMi0xMSAyMzo0MDoxMyIsImRlYWN0aXZlSW50ZXJ2YWwiOiIyMDIyLTAyLTExIDIzOjQwOjEzIiwiYWN0aXZlX2RhdGVfcHJlX3N0YXJ0X21lc3NhZ2UiOiJUaGUgcXVpeiB3aWxsIGJlIGF2YWlsYWJsZSBzb29uISIsImFjdGl2ZV9kYXRlX21lc3NhZ2UiOiJUaGUgcXVpeiBoYXMgZXhwaXJlZCEiLCJleHBsYW5hdGlvbl90aW1lIjoiNCIsImVuYWJsZV9jbGVhcl9hbnN3ZXIiOiJvZmYiLCJzaG93X2NhdGVnb3J5Ijoib2ZmIiwic2hvd19xdWVzdGlvbl9jYXRlZ29yeSI6Im9mZiIsImRpc3BsYXlfc2NvcmUiOiJieV9wZXJjYW50YWdlIiwiZW5hYmxlX3J3X2FzbndlcnNfc291bmRzIjoib2ZmIiwiYW5zX3JpZ2h0X3dyb25nX2ljb24iOiJkZWZhdWx0IiwicXVpel9iZ19pbWdfaW5fZmluaXNoX3BhZ2UiOiJvZmYiLCJmaW5pc2hfYWZ0ZXJfd3JvbmdfYW5zd2VyIjoib2ZmIiwiYWZ0ZXJfdGltZXJfdGV4dCI6IiIsImVuYWJsZV9lbnRlcl9rZXkiOiJvbiIsImJ1dHRvbnNfdGV4dF9jb2xvciI6IiM1MTUxNTEiLCJidXR0b25zX3Bvc2l0aW9uIjoiY2VudGVyIiwic2hvd19xdWVzdGlvbnNfZXhwbGFuYXRpb24iOiJvbl9yZXN1bHRzX3BhZ2UiLCJlbmFibGVfYXVkaW9fYXV0b3BsYXkiOiJvZmYiLCJidXR0b25zX3NpemUiOiJtZWRpdW0iLCJidXR0b25zX2ZvbnRfc2l6ZSI6IjE2IiwiYnV0dG9uc193aWR0aCI6IiIsImJ1dHRvbnNfbGVmdF9yaWdodF9wYWRkaW5nIjoiMzAiLCJidXR0b25zX3RvcF9ib3R0b21fcGFkZGluZyI6IjEwIiwiYnV0dG9uc19ib3JkZXJfcmFkaXVzIjoiMjAiLCJlbmFibGVfbGVhdmVfcGFnZSI6Im9mZiIsImVuYWJsZV90YWNrZXJzX2NvdW50Ijoib2ZmIiwidGFja2Vyc19jb3VudCI6IiIsInBhc3Nfc2NvcmUiOjEwMCwicGFzc19zY29yZV9tZXNzYWdlIjoiPGg0IHN0eWxlPVwidGV4dC1hbGlnbjogY2VudGVyXCI+Q29uZ3JhdHVsYXRpb25zITxcL2g0PlxyXG48cCBzdHlsZT1cInRleHQtYWxpZ246IGNlbnRlclwiPllvdSBwYXNzZWQgdGhlIHF1aXohPFwvcD4iLCJmYWlsX3Njb3JlX21lc3NhZ2UiOiI8aDQgc3R5bGU9XCJ0ZXh0LWFsaWduOiBjZW50ZXJcIj5Pb3BzITxcL2g0PlxyXG48cCBzdHlsZT1cInRleHQtYWxpZ246IGNlbnRlclwiPllvdSBoYXZlIG5vdCBwYXNzZWQgdGhlIHF1aXohXHJcblRyeSBhZ2FpbiE8XC9wPiIsInF1ZXN0aW9uX2ZvbnRfc2l6ZSI6MTgsInF1aXpfd2lkdGhfYnlfcGVyY2VudGFnZV9weCI6InBpeGVscyIsInF1ZXN0aW9uc19oaW50X2ljb25fb3JfdGV4dCI6ImRlZmF1bHQiLCJxdWVzdGlvbnNfaGludF92YWx1ZSI6IiIsImVuYWJsZV9lYXJseV9maW5zaF9jb21maXJtX2JveCI6Im9mZiIsImVuYWJsZV9xdWVzdGlvbnNfb3JkZXJpbmdfYnlfY2F0Ijoib2ZmIiwic2hvd19zY2hlZHVsZV90aW1lciI6Im9mZiIsInNob3dfdGltZXJfdHlwZSI6ImNvdW50ZG93biIsInF1aXpfbG9hZGVyX3RleHRfdmFsdWUiOiIiLCJoaWRlX2NvcnJlY3RfYW5zd2VycyI6Im9mZiIsInNob3dfaW5mb3JtYXRpb25fZm9ybSI6Im9uIiwicXVpel9sb2FkZXJfY3VzdG9tX2dpZiI6IiIsImRpc2FibGVfaG92ZXJfZWZmZWN0Ijoib2ZmIiwicXVpel9sb2FkZXJfY3VzdG9tX2dpZl93aWR0aCI6MTAwLCJwcm9ncmVzc19saXZlX2Jhcl9zdHlsZSI6ImZvdXJ0aCIsInF1aXpfdGl0bGVfdHJhbnNmb3JtYXRpb24iOiJjYXBpdGFsaXplIiwic2hvd19hbnN3ZXJzX251bWJlcmluZyI6IkEuIiwicXVpel9pbWFnZV93aWR0aF9ieV9wZXJjZW50YWdlX3B4IjoicGl4ZWxzIiwicXVpel9pbWFnZV9oZWlnaHQiOiIiLCJxdWl6X2JnX2ltZ19vbl9zdGFydF9wYWdlIjoib2ZmIiwicXVpel9ib3hfc2hhZG93X3hfb2Zmc2V0IjowLCJxdWl6X2JveF9zaGFkb3dfeV9vZmZzZXQiOjAsInF1aXpfYm94X3NoYWRvd196X29mZnNldCI6MTUsInF1aXpfcXVlc3Rpb25fdGV4dF9hbGlnbm1lbnQiOiJjZW50ZXIiLCJxdWl6X2Fycm93X3R5cGUiOiJhcnJvd19jaXJjbGUiLCJxdWl6X3Nob3dfd3JvbmdfYW5zd2Vyc19maXJzdCI6Im9mZiIsInF1aXpfZGlzcGxheV9hbGxfcXVlc3Rpb25zIjoib2ZmIiwicXVpel90aW1lcl9yZWRfd2FybmluZyI6Im9mZiIsInF1aXpfc2NoZWR1bGVfdGltZXpvbmUiOiJVVEMrNyIsInF1ZXN0aW9uc19oaW50X2J1dHRvbl92YWx1ZSI6IkhpbnQiLCJxdWl6X3RhY2tlcnNfbWVzc2FnZSI6IlRoaXMgcXVpeiBpcyBleHBpcmVkISIsInF1aXpfZW5hYmxlX2xpbmtlZGluX3NoYXJlX2J1dHRvbiI6Im9uIiwicXVpel9lbmFibGVfZmFjZWJvb2tfc2hhcmVfYnV0dG9uIjoib24iLCJxdWl6X2VuYWJsZV90d2l0dGVyX3NoYXJlX2J1dHRvbiI6Im9uIiwicXVpel9tYWtlX3Jlc3BvbnNlc19hbm9ueW1vdXMiOiJvZmYiLCJxdWl6X21ha2VfYWxsX3Jldmlld19saW5rIjoib24iLCJzaG93X3F1ZXN0aW9uc19udW1iZXJpbmciOiIxLiIsInF1aXpfbWVzc2FnZV9iZWZvcmVfdGltZXIiOiIiLCJlbmFibGVfcGFzc3dvcmQiOiJvZmYiLCJwYXNzd29yZF9xdWl6IjoiIiwicXVpel9wYXNzd29yZF9tZXNzYWdlIjoiIiwiZW5hYmxlX3NlZV9yZXN1bHRfY29uZmlybV9ib3giOiJvZmYiLCJkaXNwbGF5X2ZpZWxkc19sYWJlbHMiOiJvZmYiLCJlbmFibGVfZnVsbF9zY3JlZW5fbW9kZSI6Im9mZiIsInF1aXpfZW5hYmxlX3Bhc3N3b3JkX3Zpc2liaWxpdHkiOiJvZmYiLCJxdWVzdGlvbl9tb2JpbGVfZm9udF9zaXplIjoxOCwiYW5zd2Vyc19tb2JpbGVfZm9udF9zaXplIjoxNSwic29jaWFsX2J1dHRvbnNfaGVhZGluZyI6IjxpbWcgY2xhc3M9XCJ3cC1pbWFnZS00NzYgc2l6ZS1tZWRpdW0gYWxpZ25jZW50ZXJcIiBzcmM9XCJodHRwczpcL1wvaW52aXN0b3J5LmNvbVwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyMFwvMTFcL3BleGVscy1zZXJnaW8tc291emEtMTc3OTQ5Mi0zMDB4MjAwLmpwZ1wiIGFsdD1cIlwiIHdpZHRoPVwiMzAwXCIgaGVpZ2h0PVwiMjAwXCIgXC8+IiwicXVpel9lbmFibGVfdmtvbnRha3RlX3NoYXJlX2J1dHRvbiI6Im9uIiwiYW5zd2Vyc19ib3JkZXIiOiJvbiIsImFuc3dlcnNfYm9yZGVyX3dpZHRoIjoyLCJhbnN3ZXJzX2JvcmRlcl9zdHlsZSI6InNvbGlkIiwiYW5zd2Vyc19ib3JkZXJfY29sb3IiOiIjZmZmZmZmIiwic29jaWFsX2xpbmtzX2hlYWRpbmciOiIiLCJxdWl6X2VuYWJsZV9xdWVzdGlvbl9jYXRlZ29yeV9kZXNjcmlwdGlvbiI6Im9mZiIsImFuc3dlcnNfbWFyZ2luIjoxMCwicXVpel9tZXNzYWdlX2JlZm9yZV9yZWRpcmVjdF90aW1lciI6IiIsInJlcXVpcmVkX2ZpZWxkcyI6WyJheXNfdXNlcl9uYW1lIl0sImVuYWJsZV90aW1lciI6Im9uIiwiZW5hYmxlX3F1aXpfcmF0ZSI6Im9mZiIsImVuYWJsZV9yYXRlX2F2ZyI6Im9mZiIsImVuYWJsZV9ib3hfc2hhZG93Ijoib2ZmIiwiZW5hYmxlX2JvcmRlciI6Im9mZiIsInF1aXpfdGltZXJfaW5fdGl0bGUiOiJvbiIsImVuYWJsZV9yYXRlX2NvbW1lbnRzIjoib24iLCJlbmFibGVfcmVzdGFydF9idXR0b24iOiJvZmYiLCJhdXRvZmlsbF91c2VyX2RhdGEiOiJvZmYiLCJ0aW1lciI6NjAsImNhbGN1bGF0ZV9zY29yZSI6ImJ5X2NvcnJlY3RuZXNzIiwic2hvd19hbnN3ZXJzX2NhcHRpb24iOiJvbiIsIm1ha2VfcXVlc3Rpb25zX3JlcXVpcmVkIjoib2ZmIiwic3VibWl0X3JlZGlyZWN0X2FmdGVyIjoiIiwicndfYW5zd2Vyc19zb3VuZHMiOmZhbHNlLCJpZCI6IjIiLCJ0aXRsZSI6IlF1aXogRXJpYyAmIE5hbGEiLCJkZXNjcmlwdGlvbiI6IkhvdyBNdWNoIFlvdSBLbm93IEFib3V0IFVzPyIsInF1aXpfaW1hZ2UiOiJodHRwczpcL1wvaW52aXN0b3J5LmNvbVwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyMFwvMTFcL3BleGVscy1lcmljLWRvLTM2OTc3NzEtc2NhbGVkLmpwZyIsInF1aXpfY2F0ZWdvcnlfaWQiOiIxIiwicXVlc3Rpb25faWRzIjoiMSwyLDMiLCJvcmRlcmluZyI6IjIiLCJwdWJsaXNoZWQiOiIxIiwiaW50ZXJ2YWxzIjpudWxsLCJhdXRob3JfaWQiOiIwIiwicG9zdF9pZCI6bnVsbCwiaXNfdXNlcl9sb2dnZWRfaW4iOmZhbHNlLCJxdWl6X2FuaW1hdGlvbl90b3AiOjEwMCwicXVpel9lbmFibGVfYW5pbWF0aW9uX3RvcCI6Im9uIiwic3RvcmVfYWxsX25vdF9maW5pc2hlZF9yZXN1bHRzIjpmYWxzZX0=';
                                                                </script>
                                                                <input type='hidden' name='quiz_id' value='2' />
                                                                <input type='hidden' name='start_date'
                                                                    class='ays-start-date' />
                                                                <input type='hidden' name='ays_finish_quiz_nonce_2'
                                                                    value='b42b4d3801' />
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script type="text/javascript">(function ($) {
                                                        var blockLoaded = false;
                                                        var blockLoadedInterval = setInterval(function () {
                                                            if ($(document).find(".for_quiz_rate_avg.ui.rating").length > 0) {
                                                                blockLoaded = true;
                                                            }

                                                            if (blockLoaded) {
                                                                clearInterval(blockLoadedInterval);
                                                                $(document).find(".for_quiz_rate_avg.ui.rating").rating("disable");
                                                            }
                                                        }, 500);
                                                    })(jQuery)</script>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="has_ma_el_bg_slider elementor-section elementor-top-section elementor-element elementor-element-2574e835 dark-color elementor-section-boxed elementor-section-height-default elementor-section-height-default jltma-glass-effect-no"
                    data-id="2574e835" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;curve&quot;,&quot;shape_divider_top&quot;:&quot;curve&quot;,&quot;shape_divider_top_negative&quot;:&quot;yes&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-shape elementor-shape-top" data-negative="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                            <path class="elementor-shape-fill"
                                d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z" />
                        </svg>
                    </div>
                    <div class="elementor-shape elementor-shape-bottom" data-negative="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                            <path class="elementor-shape-fill"
                                d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z" />
                        </svg>
                    </div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="has_ma_el_bg_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-30b0d11b jltma-glass-effect-no"
                                data-id="30b0d11b" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-131ee30 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="131ee30" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Kirim Ucapanmu</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-9fff7af elementor-align-center jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-button"
                                            data-id="9fff7af" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href="#wishes"
                                                        class="elementor-button-link elementor-button elementor-size-sm"
                                                        role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span
                                                                class="elementor-button-icon elementor-align-icon-left">
                                                                <i aria-hidden="true" class="far fa-comment-dots"></i>
                                                            </span>
                                                            <span class="elementor-button-text">Tuliskan Ucapanmu<span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-d366ca6 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-post-comments"
                                            data-id="d366ca6" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="post-comments.theme_comments">
                                            <div class="elementor-widget-container">

                                                <div class="comments" id="comments">


                                                    <div class="comments-header section-inner small max-percentage">

                                                        <h2 class="comment-reply-title">
                                                            8 replies on &ldquo;Wedding Invitation Premium D&rdquo;
                                                        </h2><!-- .comments-title -->

                                                    </div><!-- .comments-header -->

                                                    <div class="comments-inner section-inner thin max-percentage">
														<?php if(empty($tamu)) : ?>
															
														<?php else : ?>
														<?php foreach($tamu as $us) : ?>
															<div id="comment-25355"
                                                            class="comment even thread-even depth-1">
                                                            <article id="div-comment-25355" class="comment-body">
                                                                <footer class="comment-meta">
                                                                    <div class="comment-author vcard">
                                                                        <span class="fn"><?php echo $us->nama ?> <?php if($us->hadir == "Hadir") { echo ' <i class="fas fa-check" style="color:green;"></i>';} else {echo ' <i class="fa fa-xmark" style="color:red;"></i>';}?></span><span
                                                                            class="screen-reader-text says"><?php echo $us->nama ?> </span>
                                                                    </div><!-- .comment-author -->


                                                                </footer><!-- .comment-meta -->

                                                                <div class="comment-content entry-content">

                                                                    <p><?php echo $us->ucapan ?></p>

                                                                </div><!-- .comment-content -->


                                                            </article><!-- .comment-body -->

                                                        </div><!-- #comment-## -->
														<?php endforeach; endif; ?>
                                                        
                                                        

                                                    </div><!-- .comments-inner -->

                                                </div><!-- comments -->

                                                <hr class="styled-separator is-style-wide" aria-hidden="true" />
                                                <div id="respond" class="comment-respond">
                                                    <h2 id="reply-title" class="comment-reply-title">Leave a Reply</h2>
                                                    <form action="<?php echo base_url()?>ucapan"
                                                        method="POST" >
														<p class="comment-form-author"><label for="author">Nama</label>
                                                            <input id="author" name="nama" type="text"
                                                                placeholder="Nama Kamu" value="" size="20" required /></p>
																
                                                            <input id="author" name="nama1" type="hidden"
                                                                value="<?php echo $nama ?>" value="" size="20" />
                                                                <p class="comment-form-comment"><label
                                                                for="comment">Kehadiran</label><select name="hadir"  id="hadir" required class="form-control" style="border-radius:10px">
                                                                <option value="" disabled selected>Konfirmasi Kehadiran</option>
                                                                <option value="Hadir">Hadir</option>
                                                                <option value="Tidak">Tidak Hadir</option>
                                                            </select>
                                                        </p>
                                                        <p class="comment-form-comment"><label
                                                                for="comment">Ucapan</label><textarea id="comment"
                                                                name="comment" cols="45" rows="8"
                                                                placeholder="Kirim Ucapanmu"
                                                                aria-required="true" required></textarea></p>

																<input type="submit" name="submit" id="submit" class="button" value="Submit"/>

                                                        
                                                    </form>
                                                </div><!-- #respond -->
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-718ad399 elementor-widget-divider--separator-type-pattern elementor-widget-divider--view-line jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-divider"
                                            data-id="718ad399" data-element_type="widget" id="wishes"
                                            data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider"
                                                    style="--divider-pattern-url: url(&quot;data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; preserveAspectRatio=&#039;none&#039; overflow=&#039;visible&#039; height=&#039;100%&#039; viewBox=&#039;0 0 24 24&#039; fill=&#039;black&#039; stroke=&#039;none&#039;%3E%3Cpath d=&#039;M12.7,2.3c-0.4-0.4-1.1-0.4-1.5,0l-8,9.1c-0.3,0.4-0.3,0.9,0,1.2l8,9.1c0.4,0.4,1.1,0.4,1.5,0l8-9.1c0.3-0.4,0.3-0.9,0-1.2L12.7,2.3z&#039;/%3E%3C/svg%3E&quot;);">
                                                    <span class="elementor-divider-separator">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-19fbb0c9 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="19fbb0c9" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Thank You
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-509698b6 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="509698b6" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Widi & Sigit
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="has_ma_el_bg_slider elementor-section elementor-top-section elementor-element elementor-element-7273c2e elementor-section-full_width elementor-section-height-default elementor-section-height-default jltma-glass-effect-no"
                    data-id="7273c2e" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="has_ma_el_bg_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f02926b jltma-glass-effect-no"
                                data-id="f02926b" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-c2b05f4 jltma-glass-effect-no elementor-widget elementor-widget-html"
                                            data-id="c2b05f4" data-element_type="widget"
                                            data-widget_type="html.default">
                                            <div class="elementor-widget-container">
                                                <audio id="myaudio" loop="loop">
                                                    <source
                                                        src="<?php echo base_url()?>assets/Summer Is for Falling in Love - Sarah Kang.mp3"
                                                        type="audio/mp3" />
                                                </audio>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-a0176e4 jltma-glass-effect-no elementor-widget elementor-widget-template"
                                            data-id="a0176e4" data-element_type="widget"
                                            data-widget_type="template.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-template">
                                                    <div data-elementor-type="footer" data-elementor-id="220"
                                                        class="elementor elementor-220">
                                                        <div class="elementor-section-wrap">
                                                            <section
                                                                class="has_ma_el_bg_slider elementor-section elementor-top-section elementor-element elementor-element-2faeb3e9 elementor-section-content-middle footer-custom elementor-section-boxed elementor-section-height-default elementor-section-height-default jltma-glass-effect-no"
                                                                data-id="2faeb3e9" data-element_type="section"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-container elementor-column-gap-no">
                                                                    <div class="elementor-row">
                                                                        <div class="has_ma_el_bg_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-25d92efe jltma-glass-effect-no"
                                                                            data-id="25d92efe"
                                                                            data-element_type="column">
                                                                            <div
                                                                                class="elementor-column-wrap elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <!-- <div class="elementor-element elementor-element-97fe511 jltma-glass-effect-no elementor-widget elementor-widget-theme-site-logo elementor-widget-image"
                                                                                        data-id="97fe511"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="theme-site-logo.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="elementor-image">
                                                                                                <a
                                                                                                    href="https://invistory.com">
                                                                                                    <img width="581"
                                                                                                        height="127"
                                                                                                        src="https://invistory.com/wp-content/uploads/2020/11/cropped-Logo-Panjang.png"
                                                                                                        class="attachment-full size-full"
                                                                                                        alt=""
                                                                                                        loading="lazy" />
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div> -->
                                                                                    <!-- <section
                                                                                        class="has_ma_el_bg_slider elementor-section elementor-inner-section elementor-element elementor-element-a949b8a elementor-section-boxed elementor-section-height-default elementor-section-height-default jltma-glass-effect-no"
                                                                                        data-id="a949b8a"
                                                                                        data-element_type="section">
                                                                                        <div
                                                                                            class="elementor-container elementor-column-gap-default">
                                                                                            <div class="elementor-row">
                                                                                                <div class="has_ma_el_bg_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-954d4f3 jltma-glass-effect-no"
                                                                                                    data-id="954d4f3"
                                                                                                    data-element_type="column">
                                                                                                    <div
                                                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                                                        <div
                                                                                                            class="elementor-widget-wrap">
                                                                                                            <div class="elementor-element elementor-element-7ac4782 elementor-view-default jltma-glass-effect-no elementor-widget elementor-widget-icon"
                                                                                                                data-id="7ac4782"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="icon.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="elementor-icon-wrapper">
                                                                                                                        <a class="elementor-icon"
                                                                                                                            href="https://wasap.at/pQIosn"
                                                                                                                            target="_blank">
                                                                                                                            <i aria-hidden="true"
                                                                                                                                class="fab fa-whatsapp"></i>
                                                                                                                        </a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="has_ma_el_bg_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-cdb3630 jltma-glass-effect-no"
                                                                                                    data-id="cdb3630"
                                                                                                    data-element_type="column">
                                                                                                    <div
                                                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                                                        <div
                                                                                                            class="elementor-widget-wrap">
                                                                                                            <div class="elementor-element elementor-element-2c7f996 elementor-view-default jltma-glass-effect-no elementor-widget elementor-widget-icon"
                                                                                                                data-id="2c7f996"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="icon.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="elementor-icon-wrapper">
                                                                                                                        <a class="elementor-icon"
                                                                                                                            href="https://instagram.com/invistory.official"
                                                                                                                            target="_blank">
                                                                                                                            <i aria-hidden="true"
                                                                                                                                class="fab fa-instagram"></i>
                                                                                                                        </a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </section> -->
                                                                                    <div class="elementor-element elementor-element-288de0ba jltma-glass-effect-no elementor-widget elementor-widget-heading"
                                                                                        data-id="288de0ba"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="elementor-heading-title elementor-size-default">
                                                                                                Copyright 2023 © All
                                                                                                rights Reserved. Design
                                                                                                by Sigma</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div data-elementor-type="popup" data-post-id="30850" data-obj-id="30850" data-elementor-id="417"
        class="elementor elementor-417 e-post-30850 elementor-location-popup"
        data-elementor-settings="{&quot;entrance_animation&quot;:&quot;fadeIn&quot;,&quot;entrance_animation_mobile&quot;:&quot;fadeInDown&quot;,&quot;exit_animation&quot;:&quot;fadeIn&quot;,&quot;exit_animation_mobile&quot;:&quot;fadeIn&quot;,&quot;prevent_close_on_esc_key&quot;:&quot;yes&quot;,&quot;prevent_scroll&quot;:&quot;yes&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1.2,&quot;sizes&quot;:[]},&quot;triggers&quot;:{&quot;page_load&quot;:&quot;yes&quot;,&quot;page_load_delay&quot;:0},&quot;timing&quot;:[]}">
        <div class="elementor-section-wrap">
            <section
                class="has_ma_el_bg_slider elementor-section elementor-top-section elementor-element elementor-element-81179aa elementor-section-boxed elementor-section-height-default elementor-section-height-default jltma-glass-effect-no"
                data-id="81179aa" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="has_ma_el_bg_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-64691be jltma-glass-effect-no"
                            data-id="64691be" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-2c2ba99 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                        data-id="2c2ba99" data-element_type="widget" id="inv-name"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:0}"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h4 class="elementor-heading-title elementor-size-default">Dear, <?php echo $nama ?>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-ea83d74 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                        data-id="ea83d74" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">You're Invited!
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-eb0b525 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                        data-id="eb0b525" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:500}"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">The Wedding
                                                Celebration of</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-a49e994 jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                        data-id="a49e994" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:1000}"
                                        data-widget_type="heading.default">
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <div class="elementor-widget-container">
                                            <h6 class="elementor-heading-title elementor-size-sm">Widi
                                            </h6>
                                            <br/>
                                            <h6 class="elementor-heading-title elementor-size-sm"> &amp;
                                            </h6>
                                            <br/>
                                            <h6 class="elementor-heading-title elementor-size-sm"> Sigit
                                            </h6>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="has_ma_el_bg_slider elementor-section elementor-top-section elementor-element elementor-element-e69377d elementor-section-full_width elementor-section-height-min-height elementor-section-content-top elementor-section-height-default elementor-section-items-middle jltma-glass-effect-no"
                data-id="e69377d" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="has_ma_el_bg_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f1d6088 jltma-glass-effect-no"
                            data-id="f1d6088" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-713856c jltma-glass-effect-no elementor-widget elementor-widget-html"
                                        data-id="713856c" data-element_type="widget" data-widget_type="html.default">
                                        <div class="elementor-widget-container">
                                            <script>
                                                jQuery(function ($) {
                                                    const urlParams = new URLSearchParams(window.location.search);
                                                    if (urlParams.get('u') != null) {
                                                        let str = document.getElementById("inv-name").innerHTML;
                                                        document.getElementById("inv-name").innerHTML = str.replace("&amp;", "&");
                                                    }

                                                    $("#open-invitation").click(function () {
                                                        var audio = document.getElementById("myaudio");
                                                        audio.volume = 0.5;
                                                        audio.play();
                                                        document.getElementById('button-play').style.display = 'none'
                                                        document.getElementById('email').value = 'guest@invistory.com';
                                                    });

                                                    $("#button-play").click(function () {
                                                        document.getElementById('button-play').style.display = 'none'
                                                        document.getElementById('button-pause').style.display = 'inline-block';
                                                        var audio = document.getElementById("myaudio");
                                                        audio.play();
                                                    });

                                                    $("#button-pause").click(function () {
                                                        document.getElementById('button-pause').style.display = 'none'
                                                        document.getElementById('button-play').style.display = 'inline-block';
                                                        var audio = document.getElementById("myaudio");
                                                        audio.pause();
                                                    });

                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7b5c99f elementor-align-center elementor-mobile-align-center elementor-absolute jltma-glass-effect-no elementor-invisible elementor-widget elementor-widget-button"
                                        data-id="7b5c99f" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_mobile&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:1500,&quot;_position&quot;:&quot;absolute&quot;}"
                                        data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a href="#elementor-action%3Aaction%3Dpopup%3Aclose%26settings%3DeyJkb19ub3Rfc2hvd19hZ2FpbiI6IiJ9"
                                                    class="elementor-button-link elementor-button elementor-size-sm"
                                                    role="button" id="open-invitation">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-icon elementor-align-icon-left">
                                                            <i aria-hidden="true" class="fas fa-envelope-open-text"></i>
                                                        </span>
                                                        <span class="elementor-button-text">Open Invitation</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

	<!-- JAVASCRIPT -->
	<link rel='stylesheet' id='ep-advanced-divider-css'
        href='<?php echo base_url()?>assets/css/ep-advanced-divider.css'
        media='all' />
    <link rel='stylesheet' id='elementor-gallery-css'
        href='<?php echo base_url()?>assets/css/e-gallery.min.css'
        media='all' />
    <link rel='stylesheet' id='quiz-maker-font-awesome-css'
        href='<?php echo base_url()?>assets/css/quiz-maker-font-awesome.min.css'
        media='all' />
    <link rel='stylesheet' id='quiz-maker-sweetalert-css-css'
        href='<?php echo base_url()?>assets/css/quiz-maker-sweetalert2.min.css'
        media='all' />
    <link rel='stylesheet' id='quiz-maker-animate-css'
        href='<?php echo base_url()?>assets/css/animate.css' media='all' />
    <link rel='stylesheet' id='quiz-maker-animations-css'
        href='<?php echo base_url()?>assets/css/animations.css' media='all' />
    <link rel='stylesheet' id='quiz-maker-rating-css'
        href='<?php echo base_url()?>assets/css/rating.min.css' media='all' />
    <!-- <link rel='stylesheet' id='quiz-maker-select2-css'
        href='<?php echo base_url()?>assets/css/quiz-maker-select2.min.css'
        media='all' /> -->
    <link rel='stylesheet' id='quiz-maker-loaders-css'
        href='<?php echo base_url()?>assets/css/loaders.css' media='all' />
    <link rel='stylesheet' id='elementor-post-220-css'
        href='<?php echo base_url()?>assets/css/post-220.css' media='all' />
    <link rel='stylesheet' id='e-animations-css'
        href='<?php echo base_url()?>assets/css/animations.min.css'
        media='all' />
    <link rel='stylesheet' id='master-addons-main-style-css'
        href='<?php echo base_url()?>assets/css/master-addons-styles.css'
        media='all' />
    <link rel='stylesheet' id='wpforms-smart-phone-field-css'
        href='<?php echo base_url()?>assets/css/intl-tel-input.min.css'
        media='all' />
    <script id='copy-the-code-js-extra'>
        var copyTheCode = { "copy_content_as": "", "previewMarkup": "<h2>Hello World<\/h2>", "buttonMarkup": "<button class=\"copy-the-code-button\" title=\"\"><\/button>", "buttonSvg": "<svg viewBox=\"-21 0 512 512\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"><path d=\"m186.667969 416c-49.984375 0-90.667969-40.683594-90.667969-90.667969v-218.664062h-37.332031c-32.363281 0-58.667969 26.300781-58.667969 58.664062v288c0 32.363281 26.304688 58.667969 58.667969 58.667969h266.664062c32.363281 0 58.667969-26.304688 58.667969-58.667969v-37.332031zm0 0\"><\/path><path d=\"m469.332031 58.667969c0-32.40625-26.261719-58.667969-58.664062-58.667969h-224c-32.40625 0-58.667969 26.261719-58.667969 58.667969v266.664062c0 32.40625 26.261719 58.667969 58.667969 58.667969h224c32.402343 0 58.664062-26.261719 58.664062-58.667969zm0 0\"><\/path><\/svg>", "selectors": [{ "selector": "cop", "style": "button", "button_text": "Copy", "button_title": "Copy to Clipboard", "button_copy_text": "Copied!", "button_position": "inside" }, { "selector": "pres", "style": "svg-icon", "button_text": "Copy", "button_title": "Copy to Clipboard", "button_copy_text": "Copied!", "button_position": "inside" }, { "selector": "pre", "style": "SVG Icon", "button_text": "Copy", "button_title": "Copy to Clipboard", "button_copy_text": "Copied!", "button_position": "inside" }], "selector": "pre", "settings": { "selector": "pre", "button-text": "Copy", "button-title": "Copy to Clipboard", "button-copy-text": "Copied!", "button-position": "inside" }, "string": { "title": "Copy to Clipboard", "copy": "Copy", "copied": "Copied!" }, "image-url": "https:\/\/invistory.com\/wp-content\/plugins\/copy-the-code\/\/assetimages\/copy-1.svg" };
    </script>
    <script src='<?php echo base_url()?>assets/js/copy-the-code.js'
        id='copy-the-code-js'></script>
    <script
        src='<?php echo base_url()?>assets/js/dynamic-conditions-public.js'
        id='dynamic-conditions-js'></script>
    <script
        src='<?php echo base_url()?>assets/js/jquery.mCustomScrollbar.concat.min.js'
        id='malihu-custom-scrollbar-js'></script>
    <script id='custom_scrollbar_enabler-js-extra'>
        var customScrollbarEnabler = { "scrollbars": [{ "name": "Comments Scroll Bar", "status": true, "selector": "#comments", "height": { "size": "500", "unit": "px" }, "width": { "size": "", "unit": "px" }, "position": "inside", "inline_css": [{ "property": "", "value": "" }], "theme": "light", "mouseWheel": { "enable": true, "scrollAmount": "auto" }, "keyboard": { "enable": true, "scrollAmount": "auto" }, "scrollButtons": { "enable": false, "scrollAmount": "auto", "scrollType": "stepless" }, "mCSB_draggerContainer": "", "mCSB_dragger": "", "mCSB_dragger_bar": "", "mCSB_draggerRail": "", "mCSB_scrollTools": "", "initialize_on_ajax_load": false, "responsive": { "enable": false, "screen_width_range": [[1, 500]] } }], "debugMode": "0", "pluginName": "Custom Scrollbar 1.3.8" };
    </script>
    <script
        src='<?php echo base_url()?>assets/js/custom-scrollbar-enabler.min.js'
        id='custom_scrollbar_enabler-js'></script>
    <script src='<?php echo base_url()?>assets/js/imagesloaded.min.js' id='imagesloaded-js'></script>
    <script id='bdt-uikit-js-extra'>
        var element_pack_ajax_login_config = { "ajaxurl": "https:\/\/invistory.com\/wp-admin\/admin-ajax.php", "language": "en", "loadingmessage": "Sending user info, please wait...", "unknownerror": "Unknown error, make sure access is correct!" };
        var ElementPackConfig = { "ajaxurl": "https:\/\/invistory.com\/wp-admin\/admin-ajax.php", "nonce": "891b0957bd", "data_table": { "language": { "lengthMenu": "Show _MENU_ Entries", "info": "Showing _START_ to _END_ of _TOTAL_ entries", "search": "Search :", "sZeroRecords": "No matching records found", "paginate": { "previous": "Previous", "next": "Next" } } }, "contact_form": { "sending_msg": "Sending message please wait...", "captcha_nd": "Invisible captcha not defined!", "captcha_nr": "Could not get invisible captcha response!" }, "mailchimp": { "subscribing": "Subscribing you please wait..." }, "search": { "more_result": "More Results", "search_result": "SEARCH RESULT", "not_found": "not found" }, "elements_data": { "sections": [], "columns": [], "widgets": [] } };
    </script>
    <script src='<?php echo base_url()?>assets/js/bdt-uikit.min.js'
        id='bdt-uikit-js'></script>
    <script src='<?php echo base_url()?>assets/js/webpack.runtime.min.js'
        id='elementor-webpack-runtime-js'></script>
    <script src='<?php echo base_url()?>assets/js/frontend-modules.min.js'
        id='elementor-frontend-modules-js'></script>
    <script src='<?php echo base_url()?>assets/js/waypoints.min.js'
        id='elementor-waypoints-js'></script>
    <script src='<?php echo base_url()?>assets/js/core.min.js' id='jquery-ui-core-js'></script>
    <script src='<?php echo base_url()?>assets/js/swiper.min.js'
        id='swiper-js'></script>
    <script src='<?php echo base_url()?>assets/js/share-link.min.js'
        id='share-link-js'></script>
    <script src='<?php echo base_url()?>assets/js/dialog.min.js'
        id='elementor-dialog-js'></script>
    <script id='elementor-frontend-js-before'>
        var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Extra", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Extra", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.8.1", "is_static": false, "experimentalFeatures": { "e_import_export": true, "e_hidden_wordpress_widgets": true, "theme_builder_v2": true, "landing-pages": true, "elements-color-picker": true, "favorite-widgets": true, "admin-top-bar": true, "page-transitions": true, "notes": true, "form-submissions": true, "e_scroll_snap": true }, "urls": { "assets": "https:\/\/invistory.com\/wp-content\/plugins\/elementor\/assets\/" }, "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 30850, "title": "Wedding%20Invitation%20Premium%20D%20%7C%20Invistory%20-%20Undangan%20Digital", "excerpt": "", "featuredImage": "https:\/\/invistory.com\/wp-content\/uploads\/2020\/11\/pexels-eric-do-3697771-1024x683.jpg" } };
    </script>
    <script src='<?php echo base_url()?>assets/js/frontend.min.js'
        id='elementor-frontend-js'></script>
    <script
        src='<?php echo base_url()?>assets/js/ep-advanced-divider.min.js'
        id='ep-advanced-divider-js'></script>
    <script
        src='<?php echo base_url()?>assets/js/ep-modal.min.js'
        id='ep-modal-js'></script>
    <script src='<?php echo base_url()?>assets/js/e-gallery.min.js'
        id='elementor-gallery-js'></script>
    <script src='<?php echo base_url()?>assets/js/effect.min.js'
        id='jquery-effects-core-js'></script>
    <!-- <script src='<?php echo base_url()?>assets/js/quiz-maker-select2.min.js'
        id='quiz-maker-select2js-js'></script> -->
    <script
        src='<?php echo base_url()?>assets/js/quiz-maker-sweetalert2.all.min.js'
        id='quiz-maker-sweetalert-js-js'></script>
    <script src='<?php echo base_url()?>assets/js/rating.min.js'
        id='quiz-maker-rate-quiz-js'></script>
    <script src='<?php echo base_url()?>assets/js/quiz-maker-functions.js'
        id='quiz-maker-functions.js-js'></script>
    <script id='quiz-maker-ajax-public-js-extra'>
        var quiz_maker_ajax_public = { "ajax_url": "https:\/\/invistory.com\/wp-admin\/admin-ajax.php", "warningIcon": "https:\/\/invistory.com\/wp-content\/plugins\/quiz-maker\/publiimages\/warning.svg" };
    </script>
    <script src='<?php echo base_url()?>assets/js/quiz-maker-public-ajax.js'
        id='quiz-maker-ajax-public-js'></script>
    <script id='quiz-maker-js-extra'>
        var quizLangObj = { "notAnsweredText": "You have not answered this question", "areYouSure": "Do you want to finish the quiz? Are you sure?", "sorry": "Sorry", "unableStoreData": "We are unable to store your data", "connectionLost": "Connection is lost", "checkConnection": "Please check your connection and try again", "selectPlaceholder": "Select an answer", "shareDialog": "Share Dialog", "passwordIsWrong": "Password is wrong!", "expiredMessage": "The quiz has expired!", "day": "day", "days": "days", "hour": "hour", "hours": "hours", "minute": "minute", "minutes": "minutes", "second": "second", "seconds": "seconds", "alreadyPassedQuiz": "You already passed this quiz.", "requiredError": "This is a required question", "avg": "avg", "votes": "votes", "startButtonText": "Start", "defaultStartButtonText": "Start", "redirectAfter": "Redirecting after", "loadResource": "Can't load resource.", "somethingWentWrong": "Maybe something went wrong." };
    </script>
    <script src='<?php echo base_url()?>assets/js/quiz-maker-public.js'
        id='quiz-maker-js'></script>
    <script
        src='<?php echo base_url()?>assets/js/helper.min.js'
        id='element-pack-helper-js'></script>
    <script src='<?php echo base_url()?>assets/js/webpack-pro.runtime.min.js'
        id='elementor-pro-webpack-runtime-js'></script>
    <script src='<?php echo base_url()?>assets/js/regenerator-runtime.min.js'
        id='regenerator-runtime-js'></script>
    <script src='<?php echo base_url()?>assets/js/wp-polyfill.min.js'
        id='wp-polyfill-js'></script>
    <script src='<?php echo base_url()?>assets/js/hooks.min.js'
        id='wp-hooks-js'></script>
    <script src='<?php echo base_url()?>assets/js/i18n.min.js'
        id='wp-i18n-js'></script>
    <script id='wp-i18n-js-after'>
        wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
    </script>
    <script id='elementor-pro-frontend-js-before'>
        var ElementorProFrontendConfig = { "ajaxurl": "https:\/\/invistory.com\/wp-admin\/admin-ajax.php", "nonce": "cf471650d8", "urls": { "assets": "https:\/\/invistory.com\/wp-content\/plugins\/elementor-pro\/assets\/", "rest": "https:\/\/invistory.com\/wp-json\/" }, "shareButtonsNetworks": { "facebook": { "title": "Facebook", "has_counter": true }, "twitter": { "title": "Twitter" }, "linkedin": { "title": "LinkedIn", "has_counter": true }, "pinterest": { "title": "Pinterest", "has_counter": true }, "reddit": { "title": "Reddit", "has_counter": true }, "vk": { "title": "VK", "has_counter": true }, "odnoklassniki": { "title": "OK", "has_counter": true }, "tumblr": { "title": "Tumblr" }, "digg": { "title": "Digg" }, "skype": { "title": "Skype" }, "stumbleupon": { "title": "StumbleUpon", "has_counter": true }, "mix": { "title": "Mix" }, "telegram": { "title": "Telegram" }, "pocket": { "title": "Pocket", "has_counter": true }, "xing": { "title": "XING", "has_counter": true }, "whatsapp": { "title": "WhatsApp" }, "email": { "title": "Email" }, "print": { "title": "Print" } }, "facebook_sdk": { "lang": "en_US", "app_id": "" }, "lottie": { "defaultAnimationUrl": "https:\/\/invistory.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json" } };
    </script>
    <script src='<?php echo base_url()?>assets/js/elemetorpro_frontend.min.js'
        id='elementor-pro-frontend-js'></script>
    <script
        src='<?php echo base_url()?>assets/js/preloaded-elements-handlers.min.js'
        id='pro-preloaded-elements-handlers-js'></script>
    <script src='<?php echo base_url()?>assets/js/preloaded-modules.min.js'
        id='preloaded-modules-js'></script>
    <script
        src='<?php echo base_url()?>assets/js/jquery.sticky.min.js'
        id='e-sticky-js'></script>
    <script src='<?php echo base_url()?>assets/js/underscore.min.js' id='underscore-js'></script>
    <script id='wp-util-js-extra'>
        var _wpUtilSettings = { "ajax": { "url": "\/wp-admin\/admin-ajax.php" } };
    </script>
    <script src='<?php echo base_url()?>assets/js/wp-util.min.js' id='wp-util-js'></script>
    <script id='wpforms-elementor-js-extra'>
        var wpformsElementorVars = { "captcha_provider": "recaptcha", "recaptcha_type": "v2" };
    </script>
    <script
        src='<?php echo base_url()?>assets/js/elementorfrontend.min.js'
        id='wpforms-elementor-js'></script>
    <script src='<?php echo base_url()?>assets/js/plugins.js'
        id='master-addons-plugins-js'></script>
    <script id='master-addons-scripts-js-extra'>
        var jltma_scripts = { "plugin_url": "https:\/\/invistory.com\/wp-content\/plugins\/master-addons", "ajaxurl": "https:\/\/invistory.com\/wp-admin\/admin-ajax.php", "nonce": "master-addons-elementor" };
        var jltma_data_table_vars = { "lengthMenu": "Display _MENU_ records per page", "zeroRecords": "Nothing found - sorry", "info": "Showing page _PAGE_ of _PAGES_", "infoEmpty": "No records available", "infoFiltered": "(filtered from _MAX_ total records)", "searchPlaceholder": "Search...", "processing": "Processing...", "csvHtml5": "CSV", "excelHtml5": "Excel", "pdfHtml5": "PDF", "print": "Print" };
    </script>
    <script src='<?php echo base_url()?>assets/js/master-addons-scripts.js'
        id='master-addons-scripts-js'></script>
    <script src='<?php echo base_url()?>assets/js/wpforms.js'
        id='wpforms-js'></script>
    <script
        src='<?php echo base_url()?>assets/js/wpforms-conditional-logic-fields.js'
        id='wpforms-builder-conditionals-js'></script>
    <script
        src='<?php echo base_url()?>assets/js/jquery.intl-tel-input.min.js'
        id='wpforms-smart-phone-field-js'></script>
    <script src='<?php echo base_url()?>assets/js/jquery.validate.min.js'
        id='wpforms-validation-js'></script>
    <script src='<?php echo base_url()?>assets/js/jquery.inputmask.min.js'
        id='wpforms-maskedinput-js'></script>
    <script>
        /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function () { var t, e = location.hash.substring(1); /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus()) }, !1);
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpforms_settings = { "val_required": "This field is required.", "val_email": "Please enter a valid email address.", "val_email_suggestion": "Did you mean {suggestion}?", "val_email_suggestion_title": "Click to accept this suggestion.", "val_email_restricted": "This email address is not allowed.", "val_number": "Please enter a valid number.", "val_number_positive": "Please enter a valid positive number.", "val_confirm": "Field values do not match.", "val_checklimit": "You have exceeded the number of allowed selections: {#}.", "val_limit_characters": "{count} of {limit} max characters.", "val_limit_words": "{count} of {limit} max words.", "val_recaptcha_fail_msg": "Google reCAPTCHA verification failed, please try again later.", "val_empty_blanks": "Please fill out all blanks.", "uuid_cookie": "1", "locale": "en", "wpforms_plugin_url": "https:\/\/invistory.com\/wp-content\/plugins\/wpforms\/", "gdpr": "", "ajaxurl": "https:\/\/invistory.com\/wp-admin\/admin-ajax.php", "mailcheck_enabled": "1", "mailcheck_domains": [], "mailcheck_toplevel_domains": ["dev"], "is_ssl": "1", "currency_code": "USD", "currency_thousands": ",", "currency_decimals": "2", "currency_decimal": ".", "currency_symbol": "$", "currency_symbol_pos": "left", "val_requiredpayment": "Payment is required.", "val_creditcard": "Please enter a valid credit card number.", "val_post_max_size": "The total size of the selected files {totalSize} Mb exceeds the allowed limit {maxSize} Mb.", "val_time12h": "Please enter time in 12-hour AM\/PM format (eg 8:45 AM).", "val_time24h": "Please enter time in 24-hour format (eg 22:45).", "val_time_limit": "Please enter time between {minTime} and {maxTime}.", "val_url": "Please enter a valid URL.", "val_fileextension": "File type is not allowed.", "val_filesize": "File exceeds max size allowed. File was not uploaded.", "post_max_size": "2147483648", "val_password_strength": "A stronger password is required. Consider using upper and lower case letters, numbers, and symbols.", "val_phone": "Please enter a valid phone number.", "richtext_add_media_button": "", "entry_preview_iframe_styles": ["https:\/\/invistory.com\/wp-includes\/js\/tinymce\/skins\/lightgray\/content.min.css?ver=6.0.3", "https:\/\/invistory.com\/wp-includes\/css\/dashicons.min.css?ver=6.0.3", "https:\/\/invistory.com\/wp-includes\/js\/tinymce\/skins\/wordpress\/wp-content.css?ver=6.0.3"] }
/* ]]> */
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpforms_conditional_logic = { "21098": { "3": { "logic": [[{ "field": "5", "operator": "==", "value": "Definitely Yes", "type": "radio" }]], "action": "show" }, "25": { "logic": [[{ "field": "5", "operator": "==", "value": "Definitely Yes", "type": "radio" }]], "action": "show" }, "23": { "logic": [[{ "field": "25", "operator": "==", "value": "2 Guests", "type": "select" }]], "action": "show" }, "2": { "logic": [[{ "field": "5", "operator": "==", "value": "Definitely Yes", "type": "radio" }]], "action": "show" } } }
/* ]]> */
    </script>
    <script type="text/javascript">

        jQuery(function ($) {
            $('.wpf-disable-field input, .wpf-disable-field textarea').attr('readonly', 'readonly');

        });

    </script>
	<!-- JAVASCRIPT -->
</body>
</html>
