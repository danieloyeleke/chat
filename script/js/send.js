$('#form_input').submit(function(){
    //alert('Done');
    var message = $('#message').val();
    var sender = $('#sender').val();
    
    $.ajax({
        url: 'script/php/send.php',
        data:{sender:sender, message: message},
        success:function(data){
            alert(data);
        }
    });
    
    return false;
}); 