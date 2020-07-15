$(function() {
    // Get the form.
    var form = $('#contact_form');

    // Get the messages div.
    var formMessages = $('#contact_results');

    $(form).submit(function(event) {
        // Stop browser from submitting the form
        event.preventDefault();

        var formData = $(form).serialize();

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
        .done(function(response) {
            // Make sure that the formMessages div has the 'success' class.
            $(formMessages).removeClass('alert-danger');
            $(formMessages).addClass('alert-success');
        
            // Set the message text.
            $(formMessages).text(response);
        
            // Clear the form.
            $('#name').val('');
            $('#email').val('');
            $('#message').val('');
        })
        .fail(function(data) {
            // Make sure that the formMessages div has the 'error' class.
            $(formMessages).removeClass('alert-success');
            $(formMessages).addClass('alert-danger');

            $(formMessages).text('Oops! An error occurred and your message could not be sent.');
        });
    });
});