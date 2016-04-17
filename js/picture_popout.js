$(document).ready(function() {

    $(".picture-triple-container").click(function() {
        var img = $(this).children("img");
        console.log(img.attr("src"));
        $("#picture-popout-img").attr("src", img.attr("src").replace("_small", ""));
        $("#picture-popout-img").attr("alt", img.attr("alt"));
        $("#picture-popout-container").show();
    });

    $("#picture-popout-close").click(function() {
        $("#picture-popout-container").hide();
    });

    $("#picture-popout").click(function(e) {
        e.stopPropagation();
    });

    $("#picture-popout-container").click(function() {
        $(this).hide();
    });

});