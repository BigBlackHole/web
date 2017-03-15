$(document).ready(function() {
    $('form#uploads').submit(function() {
        id_ajax({url: '/files', async:false}, files);
        return false;
    });
    id_ajax({url: '/files', async:false}, files);
});
function files(msg) {
    console.log(msg);
    if(msg['status'] != 'error') {
        $('.files-list').html('<thead><tr><td>UserID</td><td>FileID</td><td>File URL</td><td>Created At</td></tr></thead><tbody></tbody>');
        jQuery.each(msg, function(i, val) {
            var href = document.location.origin+'/static/uploads/'+val['id']+'.'+val['type'];
            $('.files-list').append('<tr><td>'+val['user_id']+'</td><td>'+val['id']+'</td><td><a href="'+href+'">'+href+'</a></td><td>'+val['created_at']+'</td></tr>');
        }); 
    }           
}
