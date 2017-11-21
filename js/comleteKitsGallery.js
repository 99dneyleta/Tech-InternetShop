jQuery(document).ready(function(){
    jQuery(".checkbox").mousedown(
        function() {
            changeCheck(jQuery(this));
        });
    jQuery(".checkbox").each(
        function() {
            changeCheckStart(jQuery(this));
        });
});

function changeCheck(el)
{
    var el = el,
        input = el.find("input").eq(0);
    if(!input.attr("checked")) {
        el.css("background","#bbb");
        input.attr("checked", true)
    } else {
        el.css("background","white");
        input.attr("checked", false)
    }
    return true;
}

function changeCheckStart(el)
{
    var el = el,
        input = el.find("input").eq(0);
    if(input.attr("checked")) {
        el.css("background","#bbb");
    }
    return true;
}
