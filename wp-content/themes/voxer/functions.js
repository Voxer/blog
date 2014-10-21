$(document).ready(function() {
    $("#home-page #latest-post #share i").click(function() {
        $("#latest-post-social").slideToggle("fast");
    });
    $("#each-post article.type-post header #share i").click(function() {
        $("#header-social").slideToggle("fast");
    });
    function isSmall() {
	  return matchMedia(Foundation.media_queries.small).matches &&
	    !matchMedia(Foundation.media_queries.medium).matches;
	}
	$(window).resize(function() {
		if(isSmall()){
			location.reload();
		}
	})
});
