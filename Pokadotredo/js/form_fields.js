$(document).ready(function() {

    // on focus, if text still initial, empty text and remove soft-text formatting
    $('input[type="text"], textarea').focus(function(e) {
        if ($(this).val() == $('label[for="' + this.id + '"]').text()) {
            $(this).val("");
            $(this).removeClass("soft-text");
        }
    });

    // on loss of focus, if text is empty, set to initial value (label text)
    $('input[type="text"], textarea').blur(function(e) {
        if (!$(this).val())
            $(this).val($('label[for="' + this.id + '"]').text());
        if ($(this).val() == $('label[for="' + this.id + '"]').text()) 
            $(this).addClass("soft-text");
    });

});