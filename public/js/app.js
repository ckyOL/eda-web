/**
 * Created by chen on 16/5/18.
 */

$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal({
        dismissible: true
    });

});

// Initialize collapse button
$(".button-collapse").sideNav();
// Initialize collapsible (uncomment the line below if you use the dropdown variation)
//$('.collapsible').collapsible();

function getNextForm(pageName) {
    $.get("/public/static/"+pageName, { },
        function(data){
            $("#uploadDiv").html(data);
        });
}

function simpleGet(url,ajaxid) {
    $.get(url, { },
        function(data){
            $("#"+ajaxid).html(data);
        });
}

function simpleSubmit(formid,ajaxid,url) {
    $.ajax({
        cache:false,
        type: "POST",
        url:url,
        data:$("#"+formid).serialize(),
        async: true,
        error: function(request) {
            alert("Connection error");
        },
        success: function(data) {
            $("#"+ajaxid).html(data);
        }
    });
}
