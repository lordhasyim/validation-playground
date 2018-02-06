$(document).ready(function(){
        $(#test_form).submit(function(e) {

            var postForm = {
                'firstname' : $('input[firstname=firstname]').val();
                'lastname' : $('input[lastname=lastname]').val();
            }

            $.ajax({
                type    : 'POST',
                url     : 'process.php',
                data    : postForm,
                dataType : 'json',
                success : function(data) {
                            if(!data.success) {
                                if(data.errors.)
                            }

                          }
            });
        })
    });