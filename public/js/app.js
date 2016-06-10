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

function likeit(mid) {
    $.get('/matching/like', { mid:mid },
        function(data){
            var resArray=data.toString().split(":");
            $("#likenum"+mid).html(resArray[0]);
            Materialize.toast(resArray[1], 4000);
        });
}

function favorite(mid) {
    $.get('/matching/favorite', { mid:mid },
        function(data){
            Materialize.toast(data, 4000);
        });
}

function follow(fid) {
    $.get('/friend/add', { friendid:fid },
        function(data){
            Materialize.toast(data, 4000);
        });
}

function deleteMatching(mid) {
    if(window.confirm('Delete is unrecoverable, do you confirm to delete?'))
    {
        $.get('/matching/delete', { mid:mid },
            function(data){
                Materialize.toast(data, 2000,'',function(){location.reload(true);})
            });
    }
}

function deleteFriend(fid) {
    $.get('/friend/delete', { friendid:fid },
        function(data){
            Materialize.toast(data, 2000,'',function(){location.reload(true);})
        });
}

