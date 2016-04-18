$( document ).ready(function() {
    console.log( "ready!" );

    $( "#show-login" ).click(function() {
        if ( $( ".login-box" ).hasClass("opened") ) {
            $( ".login-box" ).removeClass("opened").slideUp( "slow", function() {
                // Animation complete.
            });
        } else {
            $( ".login-box" ).addClass("opened").slideDown( "slow", function() {
                // Animation complete.
            });
        }
    });

    /*$('body').on('click', function () {
        if ( $( ".login-box" ).hasClass("opened") ) {
            $( ".login-box" ).removeClass("opened").slideUp( "slow", function() {
                // Animation complete.
            });
        }
    });*/

    var loginForm = $("#login-form");
    loginForm.submit(function(e){
        e.preventDefault();
        var formData = loginForm.serialize();
        
    });
});