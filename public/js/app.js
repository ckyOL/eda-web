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
            Materialize.toast(resArray[1], 1500);
        });
}

function favorite(mid) {
    $.get('/matching/favorite', { mid:mid },
        function(data){
            Materialize.toast(data, 1500);
        });
}

function follow(fid) {
    $.get('/friend/add', { friendid:fid },
        function(data){
            Materialize.toast(data, 1500);
        });
}

function deleteMatching(mid) {
    if(window.confirm('Delete is unrecoverable, do you confirm to delete?'))
    {
        $.get('/matching/delete', { mid:mid },
            function(data){
                Materialize.toast(data, 1500,'',function(){location.reload(true);})
            });
    }
}

function deleteFriend(fid) {
    $.get('/friend/delete', { friendid:fid },
        function(data){
            Materialize.toast(data, 1500,'',function(){location.reload(true);})
        });
}

function readComment(ajaxid,id) {
    $.get('/notification/readComment', { cid:id },
        function(data){
            var resArray=data.toString().split(":");
            Materialize.toast(resArray[1], 1500);
            if(resArray[0]!="-1")
            {
                $("#comment"+ajaxid).html("");
                $("#commentnum").html(resArray[0]);
            }
        });
}
function readMessage(ajaxid,id) {
    $.get('/notification/readMessage', { mid:id },
        function(data){
            var resArray=data.toString().split(":");
            Materialize.toast(resArray[1], 1500);
            if(resArray[0]!="-1")
            {
                $("#message"+ajaxid).html("");
                $("#editnum").html(resArray[0]);
            }
        });
}
function readFriend(ajaxid,uid) {
    $.get('/notification/readFriend', { uid:uid },
        function(data){
            var resArray=data.toString().split(":");
            Materialize.toast(resArray[1], 1500);
            if(resArray[0]!="-1")
            {
                $("#friend"+ajaxid).html("");
                $("#friendnum").html(resArray[0]);
            }
        });
}
function readLike(ajaxid,uid,mid) {
    $.get('/notification/readLike', { uid:uid,mid:mid },
        function(data){
            var resArray=data.toString().split(":");
            Materialize.toast(resArray[1], 1500);
            if(resArray[0]!="-1")
            {
                $("#like"+ajaxid).html("");
                $("#likenum").html(resArray[0]);
            }
        });
}
