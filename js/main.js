$(document).ready(function() {
    $('#myCarousel').carousel({
        interval: 10000
    })
});

$(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});


$(document).ready(function(){
    $flag=1;
    $("#username").focusout(function(){
        if($(this).val()===''){
            $(this).css("border-color", "#FF0000");
            $('#login-submit').attr('disabled',true);
            $('#login-submit').css('color',"#565656");
            $("#error_logname").text("* You have to enter your name!");
        }
        else
        {
            $(this).css("border-color", "#2eb82e");
            $('#login-submit').attr('disabled',false);
            $('#login-submit').css('color',"white");
            $("#error_logname").text("");

        }
    });
    $("#password").focusout(function(){
        if($(this).val()===''){
            $(this).css("border-color", "#FF0000");
            $('#login-submit').attr('disabled',true);
            $('#login-submit').css('color',"#565656");
            $("#error_logpass").text("* You have to enter your password!");
        }
        else
        {
            $(this).css("border-color", "#2eb82e");
            $('#login-submit').attr('disabled',false);
            $('#login-submit').css('color',"white");
            $("#error_logpass").text("");

        }
    });

    $("#username-reg").focusout(function(){
        if($(this).val()===''){
            $(this).css("border-color", "#FF0000");
            $('#register-submit').attr('disabled',true);
            $('#register-submit').css('color',"#565656");
            $("#error_name").text("* You have to enter your name!");
        }
        else
        {
            $(this).css("border-color", "#2eb82e");
            $('#register-submit').attr('disabled',false);
            $('#register-submit').css('color',"white");
            $("#error_name").text("");

        }
    });
    $("#password-reg").focusout(function(){
        $pass = $('#password-reg').val();
        if($(this).val()===''){
            $(this).css("border-color", "#FF0000");
            $('#register-submit').attr('disabled',true);
            $('#register-submit').css('color',"#565656");
            $("#error_pass").text("* You have to enter your password!");
        }
        else
        {
            $(this).css("border-color", "#2eb82e");
            $('#register-submit').attr('disabled',false);
            $('#register-submit').css('color',"white");
            $("#error_pass").text("");
        }
    });
    $("#email").focusout(function(){
        var r = /^[\w\.\d-_]+@[\w\.\d-_]+\.\w{2,4}$/i;
        if($(this).val()===''){
            $(this).css("border-color", "#FF0000");
            $('#register-submit').attr('disabled',true);
            $('#register-submit').css('color',"#565656");
            $("#error_mail").text("* You have to enter your mail!");
        }
        else if (!r.test($(this).val())) {
            $(this).css("border-color", "#FF0000");
            $('#register-submit').attr('disabled',true);
            $('#register-submit').css('color',"#565656");
            $("#error_mail").text("* Enter valid mail!");
        }
        else
        {
            $(this).css("border-color", "#2eb82e");
            $('#register-submit').attr('disabled',false);
            $('#register-submit').css('color',"white");
            $("#error_mail").text("");
        }



    });
    $("#confirm-password").focusout(function(){
        if($(this).val()===''){
            $(this).css("border-color", "#FF0000");
            $('#register-submit').attr('disabled',true);
            $('#register-submit').css('color',"#565656");
            $("#error_confpass").text("* Confirm your password!");
        }
        else if ($(this).val()!==$pass)
        {
            $(this).css("border-color", "#FF0000");
            $('#register-submit').attr('disabled',true);
            $("#error_confpass").text("* Passwords do not match");
        }
        else
        {
            $(this).css("border-color", "#2eb82e");
            $('#register-submit').attr('disabled',false);
            $('#register-submit').css('color',"white");
            $("#error_confpass").text("");
        }
    });
    $("#tel").focusout(function(){
        $pho =$("#tel").val();
        if($(this).val()===''){
            $(this).css("border-color", "#FF0000");
            $('#register-submit').attr('disabled',true);
            $('#register-submit').css('color',"#565656");
            $("#error_phone").text("* You have to enter your Phone Number!");
        }
        else if ($pho.length!==10)
        {
            $(this).css("border-color", "#FF0000");
            $('#register-submit').attr('disabled',true);
            $('#register-submit').css('color',"#565656");
            $("#error_phone").text("* Lenght of Phone Number Should Be Ten");
        }
        else if(!$.isNumeric($pho))
        {
            $(this).css("border-color", "#FF0000");
            $('#register-submit').attr('disabled',true);
            $('#register-submit').css('color',"#565656");
            $("#error_phone").text("* Phone Number Should Be Numeric");
        }
        else{
            $(this).css({"border-color":"#2eb82e"});
            $('#register-submit').attr('disabled',false);
            $('#register-submit').css('color',"white");
            $("#error_phone").text("");
        }
    });
    $( "#submit" ).click(function() {
        if($("#username-reg").val()==='')
        {
            $("#username-reg").css("border-color", "#FF0000");
            $('#register-submit').css('color',"#565656");
            $('#register-submit').attr('disabled',true);
            $("#error_name").text("* You have to enter your first name!");
        }
        if($("#tel").val()==='')
        {
            $("#tel").css("border-color", "#FF0000");
            $('#register-submit').attr('disabled',true);
            $('#register-submit').css('color',"#565656");
            $("#error_phone").text("* You have to enter your Phone Number!");
        }
        if($("#email").val()==='')
        {
            $("#email").css("border-color", "#FF0000");
            $('#register-submit').attr('disabled',true);
            $('#register-submit').css('color',"#565656");
            $("#error_mail").text("* You have to enter your mail!");
        }
        if($("#password-reg").val()==='')
        {
            $("#password-reg").css("border-color", "#FF0000");
            $('#register-submit').attr('disabled',true);
            $('#register-submit').css('color',"#565656");
            $("#error_pass").text("* You have to enter your Password!");
        }
        if($("#confirm-password").val()==='')
        {
            $("#confirm-password").css("border-color", "#FF0000");
            $('#register-submit').attr('disabled',true);
            $('#register-submit').css('color',"#565656");
            $("#error_confpass").text("* Confirm your Password!");
        }
        if($("#password").val()==='')
        {
            $("#password").css("border-color", "#FF0000");
            $('#login-submit').attr('disabled',true);
            $('#login-submit').css('color',"#565656");
            $("#error_logpass").text("* You have to enter your Password!");
        }
        if($("#username").val()==='')
        {
            $("#username").css("border-color", "#FF0000");
            $('#login-submit').css('color',"#565656");
            $('#login-submit').attr('disabled',true);
            $("#error_logname").text("* You have to enter your name!");
        }
    });
});
