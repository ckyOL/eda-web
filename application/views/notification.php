<!DOCTYPE html>
<html>
<head>

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css"  media="screen,projection"/>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Notification</title>
</head>

<body>

<nav>
    <div class="nav-wrapper light-blue darken-1">
        <ul class="left hide-on-med-and-down">
            <li><a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a></li>
        </ul>
        <a class="brand-logo ">EDA</a>

        <ul id="slide-out" class="side-nav">
            <li><a href="hot.php">Hot</a></li>
            <li><a href="collection.php">Collection</a></li>
            <li><a href="friend.php">Friend</a></li>
            <li><a href="">Search</a></li>
            <li class="active"><a href="notification.php">Notification</a></li>
            <li><a href="setting.php">Setting</a></li>
        </ul>

    </div>

</nav>

<div class="container">
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#test1">Friends</a></li>
                <li class="tab col s3"><a href="#test2">Edit</a></li>
                <li class="tab col s3 "><a href="#test3">Comment</a></li>
                <li class="tab col s3"><a href="#test4">Like</a></li>
            </ul>
        </div>
        <div id="test1" class="col s12">Test 1</div>
        <div id="test2" class="col s12">Test 2</div>
        <div id="test3" class="col s12">Test 3</div>
        <div id="test4" class="col s12">Test 4</div>
    </div>
</div>



<!--Import jQuery before materialize.js-->

<script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script type="text/javascript" src="/public/js/app.js"></script>
</body>
</html>
