jQuery(document).ready(function(){
    jQuery(".color").mousedown(
        function() {
            changeCheck(jQuery(this));
        });
    jQuery(".color").each(
        function() {
            changeCheckStart(jQuery(this));
        });
});

function changeCheck(el)
{
    var el = el,
        input = el.find("input").eq(0);
    if(!input.attr("checked")) {
        el.css("border","2px solid #555");
        input.attr("checked", true)
    } else {
        el.css("border","1px solid #888");
        input.attr("checked", false)
    }
    return true;
}

function changeCheckStart(el)
{
    var el = el,
        input = el.find("input").eq(0);
    if(input.attr("checked")) {
        el.css("border","2px solid #555");
    }
    return true;
}