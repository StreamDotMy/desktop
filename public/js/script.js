$(document).ready(function() {
 
    // the below lines  of codes are for menu 
    $('#toggle').click(function() {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
        $('#play-icon').toggleClass('hide');
    });

    // // the below lines  of codes are for landing page to hide after few seconds 
    // setTimeout(function() {
    //     $('#landingpage').fadeOut('fast');
    // }, 3000);

    // the below lines  of codes are for 
    $('#video-click').click(function() {
        $('.videos-details').show();
    });

    // the below lines are for showing password if eye icon is clicked 
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

});