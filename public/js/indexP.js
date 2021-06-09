$(document).ready(function(){
    $('#btn_up_post').click(function(){
            var url = $('#postEdit').attr('action');
            var data = $('#postEdit').serialize();

            $.ajax({
                type: 'ajax',
                method: 'post',
                url: url,
                data: data,
                async: false,
                dataType: 'json',
                success: function()
                {
                     $('#editPost').modal('hide');
                     window.reload();                    
                },                
                error: function()
                {   
                    console.error("request has failed, contact the support");
                }
            });
    });
    $('#')
})

$(document).on('click', '.edtPst', function() {
        var idP = $(this).data('idpst');

        $.ajax({
            type: 'ajax',
            method: 'get',
            async: false,
            url: 'http://localhost:8000/admin/posts/edit/'+idP,
            dataType: 'json',
            success: function(data)
            {
                $('input[name=_idpost]').val(data.id);
                $('#author-title').val(data.title);
                $('#content-text').val(data.content);
            }
        })
});

$(document).on('click', '.delPst', function() {
    var idP = $(this).data('idpst');

    $('#btnPostDelete').unbind( ).click(function(){
        $.ajax({
            type: 'ajax',
            method: 'get',
            async: false,
            url: 'http://localhost:8000/admin/posts/delete/'+idP,
            dataType: 'json',
            success: function()
            {
                    $('#delPost').modal('hide');
                    window.reload();
                    //window.location = "/admin/posts";                   
            },
            error: function()
            {   
                console.error("request has failed, contact the support");
            }        
        })

    });    
});