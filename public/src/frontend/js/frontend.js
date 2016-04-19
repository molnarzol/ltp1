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
        this.initValidation('#register_form', {rules: {email: {required:true}, name: {required:true}}});
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
        var form = $(element);
        form.validate(params);
    }
}