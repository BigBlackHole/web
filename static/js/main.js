function id_ajax(param, funct) {
    var arr = {
        type: 'POST',
        dataType: 'json',
        success: function(msg) {
            Response=msg;
            if (funct!=undefined) {
                funct(msg);
            }
        },
        error:function(msg){
            $('html').html(msg.responseText);
        }
    };
    $.extend(arr, param);
    arr['url'] = document.location.protocol+'//'+document.location.hostname+arr['url'];
    var Response=false;
    $.ajax(arr);
    return Response;
}