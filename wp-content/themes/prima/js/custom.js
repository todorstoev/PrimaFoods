jQuery(document).ready(function ($) {
    // get form
    var form = $('#contact-ajax');
    // get div for errors
    var formMessages = $('#form-messages');

    $(form).submit(function (event) {

        event.preventDefault();

        var formData = $(this).serialize();

        console.log($(this).attr('action'));

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData
        })
                .done(function (response) {

                    $(formMessages).removeClass('alert alert-warning col-md-10 pull-right');
                    $(formMessages).addClass('alert alert-success col-md-10 pull-right');
                    $(formMessages).text(response);



                    $('#name').val('');
                    $('#inputEmail3').val('');
                    $('#subject').val('');
                    $('#yourtext').val('');
                })
                .fail(function (data) {
                    $(formMessages).removeClass('alert alert-success col-md-10 pull-right');
                    $(formMessages).addClass('alert alert-warning col-md-10 pull-right');

                    // Set the message text.
                    if (data.responseText !== '') {
                        $(formMessages).text(data.responseText);
                    } else {
                        $(formMessages).text('Oops! An error occured and your message could not be sent.');
                    }
                });

    });



    $('.search-field').addClass('form-control');
    $('.search-submit').addClass('btn btn-default');

});