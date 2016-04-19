$( document ).ready(function() {
    Register.init();

    // var loginForm = $("#login-form");
    // loginForm.submit(function(e){
    //     e.preventDefault();
    //     var formData = loginForm.serialize();
    //
    // });
});
Register = {
    init: function(){
        console.log( "ready!" );
        this.bindEvents();
        var rules = {
                rules: {
                    first_name: {required: true, maxlength: 255},
                    last_name: {required: true, maxlength: 255},
                    email: {required: true, email: true},
                    password: {required: true},
                    password_again: {equalTo: "#password"}
                }
        };
        this.initValidation('#register_form', rules);

        var rules = {
            rules: {
                email: {required: true},
                password: {required: true}
            }
        };
        this.initValidation('#login_form', rules);
    },
    bindEvents: function(){
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
    },
    initValidation: function(element, params){
        console.log('validating the ' + element + ' form!');
        var form = $(element);
        form.validate(params);
    }
}