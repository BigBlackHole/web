$(document).ready(function() {
    $('form#login').submit(function() {
        id_ajax({url: $('form').attr('action'), data: $('form').serializeArray(), async:false}, response);
        return false;
    });
});
function response(msg) {
    if(msg['error']) {
        $('p.error').html(msg['error']);
    } else {
        window.location.href = document.location.origin;
    }
}