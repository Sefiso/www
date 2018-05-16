var timer;
$(document).ready(function() {
    if ($("#blink").is(':checked')) {
        blinking($("#btn"));
    } else {
        clearInterval(timer);
    }
});

$("#btn").click(function() {
    clearInterval(timer);
    $("#blink").attr('checked', false);
});

function blinking(elm) {
    timer = setInterval(blink, 10);
    function blink() {
        elm.fadeOut(400, function() {
           elm.fadeIn(400);
        });
    }
}