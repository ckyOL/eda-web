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

function collUpload() {
    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("uploadDiv").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("POST","collup.php",true);
    xmlhttp.send();
}

function topsUpload() {
    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("uploadDiv").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("POST","topsup.php",true);
    xmlhttp.send();
}

function bottomsUpload() {
    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("uploadDiv").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("POST","bottomsup.php",true);
    xmlhttp.send();
}

function shoeUpload() {
    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("uploadDiv").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("POST","shoesup.php",true);
    xmlhttp.send();
}

function assUpload() {
    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("uploadDiv").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("POST","assup.php",true);
    xmlhttp.send();
}