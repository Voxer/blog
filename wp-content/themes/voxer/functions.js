$(document).ready(function() {
    $("#home-page #latest-post #share i").click(function() {
        $("#latest-post-social").slideToggle("fast");
    });
    $("#each-post article.type-post header #share i").click(function() {
        $("#header-social").slideToggle("fast");
    });
});
