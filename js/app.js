var customSearch;
! function(e) {
    "use strict";
    var a = function(a) {
            var o = e(this),
                i = o.attr("data-toggle"),
                s = "toc" === i ? "bio" : "toc";
            o.hasClass("active") || (t(o, a), t(o.siblings(".dark-btn"), a), e(".site-" + s).toggleClass("show"), setTimeout(function() {
                e(".site-" + s).hide(), e(".site-" + i).show(), setTimeout(function() {
                    e(".site-" + i).toggleClass("show")
                }, 50)
            }, 240))
        },
        t = function(e, a) {
            a.preventDefault(), !0 === e.hasClass("active") ? e.removeClass("active") : e.addClass("active")
        },
        o = function(a) {
            a.preventDefault();
            var t = e(this),
                o = a.data && a.data.correction ? a.data.correction : 0;
            e("html, body").animate({
                scrollTop: e(t.attr("href")).offset().top - o
            }, 400)
        },
        i = function(a) {
            var o = e(this);
            t(o, a), e("body").addClass("bio-open")
        },
        s = function(a) {
            e("body").removeClass("bio-open"), t(e(".site-nav-switch"), a)
        };
    e(function() {
        e(".post-list, #footer, #page-nav").addClass("show"), e(".site-nav-switch").on("click", i), e(".site-wrapper .overlay").on("click", s), e(".window-nav, .go-comment, .site-toc a").on("click", o), e(".sidebar-switch .dark-btn").on("click", a), setTimeout(function() {
            e("#loading-bar-wrapper").fadeOut(500)
        }, 300), "google" === SEARCH_SERVICE ? customSearch = new GoogleCustomSearch({
            apiKey: GOOGLE_CUSTOM_SEARCH_API_KEY,
            engineId: GOOGLE_CUSTOM_SEARCH_ENGINE_ID
        }) : "algolia" === SEARCH_SERVICE ? customSearch = new AlgoliaSearch({
            apiKey: ALGOLIA_API_KEY,
            appId: ALGOLIA_APP_ID,
            indexName: ALGOLIA_INDEX_NAME
        }) : "hexo" === SEARCH_SERVICE ? customSearch = new HexoSearch : "azure" === SEARCH_SERVICE ? customSearch = new AzureSearch({
            serviceName: AZURE_SERVICE_NAME,
            indexName: AZURE_INDEX_NAME,
            queryKey: AZURE_QUERY_KEY
        }) : "baidu" === SEARCH_SERVICE && (customSearch = new BaiduSearch({
            apiId: BAIDU_API_ID
        }))
    })
}(jQuery);