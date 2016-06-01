<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css"  media="screen,projection"/>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Hot Collocation</title>
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
            <li class="active"><a href="collection.php">Collection</a></li>
            <li><a href="friend.php">Friend</a></li>
            <li><a href="">Search</a></li>
            <li><a href="notification.php">Notification</a></li>
            <li><a href="setting.php">Setting</a></li>
        </ul>

    </div>

</nav>

<div class="container">
    <div class="row">
        <div class="col s12 m6">
            <div class="card">
                <div class="card-image">
                    <img src="images/sample-1.jpg">
                </div>
                <div class="card-content">
                    <p></p>
                </div>
                <div class="card-action">
                    <span>
                        <a href="#" ><i class="material-icons light-blue-text ">thumb_up</i></a>
                        <a href="#" ><i class="material-icons light-blue-text ">favorite</i></a>
                        <a href="#" ><i class="material-icons light-blue-text right">more_horiz</i></a>
                    </span>
                </div>
            </div>
        </div>

        <div class="col s12 m6">
            <div class="card">
                <div class="card-image">
                    <img src="images/sample-1.jpg">
                </div>
                <div class="card-content">
                    <p></p>
                </div>
                <div class="card-action">
                    <span>
                        <a href="#" ><i class="material-icons light-blue-text ">thumb_up</i></a>
                        <a href="#" ><i class="material-icons light-blue-text ">favorite</i></a>
                        <a href="#" ><i class="material-icons light-blue-text right">more_horiz</i></a>
                    </span>
                </div>
            </div>
        </div>
    </div>

</div>



<!--Import jQuery before materialize.js-->

<script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script type="text/javascript" src="app.js"></script>
</body>
</html>
