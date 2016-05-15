window.onload = function() {

    $(".studio-picture").click(function() {
        if ($(this).is("img"))
            var img = $(this);
        else
            var img = $(this).children("img");
        $("#picture-popout-img").attr("src", img.attr("src").replace("_small", ""));
        $("#picture-popout-img").attr("alt", img.attr("alt"));
        $("#picture-popout-container").show();
        $("#picture-popout-container").css("z-index", 10);
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

};