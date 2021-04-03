$(document).ready(function(){

    $('.like').click(function(){
        var reply_id = $(this).attr('id');
        $.ajax({
            url : 'http://localhost/mark85//single_post.php',
            type: 'post',
            async: false,
            data: {
                'liked': 1,
                'reply_id' : reply_id
            },
            success:function(){
             location.reload();
            }
        });
    });


    // Unlike

    $('.unlike').click(function(){
        var reply_id = $(this).attr('id');
        $.ajax({
            url : 'http://localhost/mark85//single_post.php',
            type: 'post',
            async: false,
            data: {
                'unliked': 1,
                'reply_id' : reply_id
            },
            success:function(){
                location.reload();
            }
        });
    });

});
