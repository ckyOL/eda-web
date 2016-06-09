/**
 * Created by chen on 16/5/18.
 */

$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal({
        dismissible: true
    });
    $(".button-collapse").sideNav();
    $('.materialboxed').materialbox();
});


function clothes(pageName) {
    var num = document.getElementById("CollcationNum").value;
    alert(num);
    for (var i=0;i<num;i++){
        $.get("/public/static/"+pageName, { },
            function(data){
                $("#uploadDiv").html(data);
            }); 
    }
}

function uploadPic(formid,ajaxid,url) {
    $.ajax({
        url: url,
        type: 'POST',
        cache: false,
        data: new FormData($('#'+formid)[0]),
        processData: false,
        contentType: false
    }).done(function(res) {
        var resArray=res.toString().split(":");
        if(resArray[0]=="0")
        {
            $("#"+ajaxid).html(resArray[1]);
        }
        else
        {
            location.reload(true);
        }

    }).fail(function(res) {
        alert("Connection error");
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
