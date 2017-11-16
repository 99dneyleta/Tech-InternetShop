
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
    $("#oldPass").focusout(function(){
        if($(this).val()===''){
            $(this).css("border-color", "inherit");
            $('#selfInf-submit').attr('disabled',false);
            $('#selfInf-submit').css('color',"white");
            $("#errorOldPass").text("");
        }
    });
    $("#newPass").focusout(function(){
        if($(this).val()===''){
            $(this).css("border-color", "#inherit");
            $('#selfInf-submit').attr('disabled',false);
            $('#selfInf-submit').css('color',"white");
            $("#errorNewPass").text("");
        }
    });
    $("#confPass").focusout(function(){
        if($(this).val()===''){
            $(this).css("border-color", "#inherit");
            $('#selfInf-submit').attr('disabled',false);
            $('#selfInf-submit').css('color',"white");
            $("#errorConfPass").text("");
        }
    });
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
    $pass = $("#newPass").val();
    $("#confirm-password").focusout(function(){
        if ($(this).val()!==$pass)
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
    $("#selfInf-submit").click(function() {
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
        if($("#oldPass").val()!=='' && $("#newPass").val()==='' && $("#confPass").val()===''){
            $("#newPass").css("border-color", "#FF0000");
            $("#confPass").css("border-color", "#FF0000");
            $('#selfInf-submit').attr('disabled',true);
            $('#selfInf-submit').css('color',"#565656");
            $("#errorNewPass").text("*If you want to change your password, you have to enter new password!");
            $("#errorConfPass").text("*If you want to change your password, you have to confirm your new password!");
        }
        if($("#oldPass").val()==='' && $("#newPass").val()!=='' && $("#confPass").val()===''){
            $("#oldPass").css("border-color", "#FF0000");
            $("#confPass").css("border-color", "#FF0000");
            $('#selfInf-submit').attr('disabled',true);
            $('#selfInf-submit').css('color',"#565656");
            $("#errorOldPass").text("*If you want to change your password, you have to enter old password!");
            $("#errorConfPass").text("*If you want to change your password, you have to confirm your new password!");
        }
        if($("#oldPass").val()==='' && $("#newPass").val()==='' && $("#confPass").val()!==''){
            $("#newPass").css("border-color", "#FF0000");
            $("#oldPass").css("border-color", "#FF0000");
            $('#selfInf-submit').attr('disabled',true);
            $('#selfInf-submit').css('color',"#565656");
            $("#errorNewPass").text("*If you want to change your password, you have to enter new password!");
            $("#errorOldPass").text("*If you want to change your password, you have to enter old password!");
        }
        if($("#oldPass").val()!=='' && $("#newPass").val()!=='' && $("#confPass").val()===''){
            $("#confPass").css("border-color", "#FF0000");
            $('#selfInf-submit').attr('disabled',true);
            $('#selfInf-submit').css('color',"#565656");
            $("#errorConfPass").text("*If you want to change your password, you have to confirm your new password!");
        }
        if($("#oldPass").val()!=='' && $("#newPass").val()==='' && $("#confPass").val()!==''){
            $("#newPass").css("border-color", "#FF0000");
            $('#selfInf-submit').attr('disabled',true);
            $('#selfInf-submit').css('color',"#565656");
            $("#errorNewPass").text("*If you want to change your password, you have to enter new password!");
        }
        if($("#oldPass").val()==='' && $("#newPass").val()!=='' && $("#confPass").val()!==''){
            $("#oldPass").css("border-color", "#FF0000");
            $('#selfInf-submit').attr('disabled',true);
            $('#selfInf-submit').css('color',"#565656");
            $("#errorOldPass").text("*If you want to change your password, you have to enter old password!");
        }
    });
});

$('.status').each(function(){
    var x = $(this).text();
    if (x === 'Processed') $(this).css({color: '#d39f14'});
    else $(this).css({color: 'green'});
});

$(document).on('click', '#close-preview', function(){
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
            $('.image-preview').popover('show');
        },
        function () {
            $('.image-preview').popover('hide');
        }
    );
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse");
    });
    // Create the preview image
    $(".image-preview-input input:file").change(function (){
        var img = $('<img/>', {
            id: 'dynamic',
            width:200,
            height:200
        });
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }
        reader.readAsDataURL(file);
    });
});
