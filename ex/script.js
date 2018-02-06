$(document).ready(function() {
    var randomToken =  Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
    console.log(randomToken);
    $('form').submit(function(event) { //Trigger on form submit


        $('#name + .throw_error').empty(); //Clear the messages first
        $('#success').empty();

        var postForm = { //Fetch form data
            'name': $('input[name=name]').val(), //Store name fields value
            'csrf_token': $('input[name=csrf_token]').val()
        };


        $.ajax({ //Process the form using $.ajax()
            type: 'POST', //Method type
            url: 'process.php', //Your form processing file url
            data: postForm, //Forms name
            dataType: 'json',
            success: function(data) {
                console.log(data);

                if (!data.success) { //If fails
                    if (data.errors.name) { //Returned if any error from process.php
                        $('.throw_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
                    }
                    console.log(data);
                } else {
                    $('#success').fadeIn(1000).append('<p>' + data.posted + '</p>'); //If successful, than throw a success message
                    $('#success').fadeIn(1000).append('<p>' + data.name + '</p>');
                    $('#success').fadeIn(1000).append('<p> token anda : ' + data.token_anda + '</p>');
                    $('#success').fadeIn(1000).append('<p> session anda : ' + data.session_anda + '</p>');
                    $('#success').fadeIn(1000).append('<p> status token : ' + data.status_token + '</p>');

                    console.log(data);
                }
            }
        });
        document.getElementById('myButton').disabled = true;
        event.preventDefault(); //Prevent the default submit


    });
});