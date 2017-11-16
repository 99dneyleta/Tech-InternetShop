
$(document).ready(function(){
    $flag=1;
    $("#name").focusout(function(){
        if($(this).val()===''){
            $(this).css("border-color", "#FF0000");
            $('#selfInf-submit').attr('disabled',true);
            $('#selfInf-submit').css('color',"#565656");
            $("#errorName").text("* You have to enter your name!");
        }
        else
        {
            $(this).css("border-color", "#2eb82e");
            $('#selfInf-submit').attr('disabled',false);
            $('#selfInf-submit').css('color',"white");
            $("#errorName").text("");

        }
    });
    // $("#password").focusout(function(){
    //     if($(this).val()===''){
    //         $(this).css("border-color", "#FF0000");
    //         $('#login-submit').attr('disabled',true);
    //         $('#login-submit').css('color',"#565656");
    //         $("#error_logpass").text("* You have to enter your password!");
    //     }
    //     else
    //     {
    //         $(this).css("border-color", "#2eb82e");
    //         $('#login-submit').attr('disabled',false);
    //         $('#login-submit').css('color',"white");
    //         $("#error_logpass").text("");
    //
    //     }
    // });
    $("#mail").focusout(function(){
        var r = /^[\w\.\d-_]+@[\w\.\d-_]+\.\w{2,4}$/i;
        if($(this).val()===''){
            $(this).css("border-color", "#FF0000");
            $('#selfInf-submit').attr('disabled',true);
            $('#selfInf-submit').css('color',"#565656");
            $("#errorMail").text("* You have to enter your mail!");
        }
        else if (!r.test($(this).val())) {
            $(this).css("border-color", "#FF0000");
            $('#selfInf-submit').attr('disabled',true);
            $('#selfInf-submit').css('color',"#565656");
            $("#errorMail").text("* Enter valid mail!");
        }
        else
        {
            $(this).css("border-color", "#2eb82e");
            $('#selfInf-submit').attr('disabled',false);
            $('#selfInf-submit').css('color',"white");
            $("#errorMail").text("");
        }
    });
    // $("#confirm-password").focusout(function(){
    //     if($(this).val()===''){
    //         $(this).css("border-color", "#FF0000");
    //         $('#register-submit').attr('disabled',true);
    //         $('#register-submit').css('color',"#565656");
    //         $("#error_confpass").text("* Confirm your password!");
    //     }
    //     else if ($(this).val()!==$pass)
    //     {
    //         $(this).css("border-color", "#FF0000");
    //         $('#register-submit').attr('disabled',true);
    //         $("#error_confpass").text("* Passwords do not match");
    //     }
    //     else
    //     {
    //         $(this).css("border-color", "#2eb82e");
    //         $('#register-submit').attr('disabled',false);
    //         $('#register-submit').css('color',"white");
    //         $("#error_confpass").text("");
    //     }
    // });
    $("#phone").focusout(function(){
        $pho =$("#phone").val();
        if($(this).val()===''){
            $(this).css("border-color", "#FF0000");
            $('#selfInf-submit').attr('disabled',true);
            $('#selfInf-submit').css('color',"#565656");
            $("#errorPhone").text("* You have to enter your Phone Number!");
        }
        else if ($pho.length!==10)
        {
            $(this).css("border-color", "#FF0000");
            $('#selfInf-submit').attr('disabled',true);
            $('#selfInf-submit').css('color',"#565656");
            $("#errorPhone").text("* Lenght of Phone Number Should Be Ten");
        }
        else if(!$.isNumeric($pho))
        {
            $(this).css("border-color", "#FF0000");
            $('#selfInf-submit').attr('disabled',true);
            $('#selfInf-submit').css('color',"#565656");
            $("#errorPhone").text("* Phone Number Should Be Numeric");
        }
        else{
            $(this).css({"border-color":"#2eb82e"});
            $('#selfInf-submit').attr('disabled',false);
            $('#selfInf-submit').css('color',"white");
            $("#errorPhone").text("");
        }
    });
    $( "#submit" ).click(function() {
        if($("#name").val()==='')
        {
            $("#name").css("border-color", "#FF0000");
            $('#selfInf-submit').css('color',"#565656");
            $('#selfInf-submit').attr('disabled',true);
            $("#errorName").text("* You have to enter your first name!");
        }
        if($("#phone").val()==='')
        {
            $("#phone").css("border-color", "#FF0000");
            $('#selfInf-submit').attr('disabled',true);
            $('#selfInf-submit').css('color',"#565656");
            $("#errorPhone").text("* You have to enter your Phone Number!");
        }
        if($("#mail").val()==='')
        {
            $("#mail").css("border-color", "#FF0000");
            $('#selfInf-submit').attr('disabled',true);
            $('#selfInf-submit').css('color',"#565656");
            $("#errorMail").text("* You have to enter your mail!");
        }
        // if($("#confirm-password").val()==='')
        // {
        //     $("#confirm-password").css("border-color", "#FF0000");
        //     $('#register-submit').attr('disabled',true);
        //     $('#register-submit').css('color',"#565656");
        //     $("#error_confpass").text("* Confirm your Password!");
        // }
        // if($("#password").val()==='')
        // {
        //     $("#password").css("border-color", "#FF0000");
        //     $('#login-submit').attr('disabled',true);
        //     $('#login-submit').css('color',"#565656");
        //     $("#error_logpass").text("* You have to enter your Password!");
        // }
    });
});

$('.status').each(function(){
    var x = $(this).text();
    if (x === 'Processed') $(this).css({color: '#d39f14'});
    else $(this).css({color: 'green'});
});
