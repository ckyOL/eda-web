<!DOCTYPE html>
<html>
<head>

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css"  media="screen,projection"/>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Setting</title>
</head>

<body>

<nav>
    <div class="nav-wrapper light-blue darken-1">
        <ul class="left hide-on-med-and-down">
            <li><a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a></li>
        </ul>
        <a class="brand-logo ">EDA</a>

        <ul id="slide-out" class="side-nav">
            <li><a href="friend.php">Friend</a></li>
            <li><a href="">Search</a></li>
            <li><a href="notification.php">Notification</a></li>
            <li class="active"><a href="setting.php">Setting</a></li>
        </ul>

    </div>

</nav>

<div class="container">


    <div class="row">
        <a >Profile picture</a>
        <img src="images/sample-1.jpg">
        <form action="#">
            <div class="file-field input-field col s6">
                <input class="file-path validate hide" type="text"/>
                <div class="btn">
                     <span>Upload </span>
                     <input type="file" />
                </div>
            </div>
        </form>
    </div>

    <div class="row">
        <div class="input-field col s6">
            <input value="" id="userName" type="text" class="validate">
            <label class="active" for="userName">User Name</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6">
            <input id="password" type="password" class="validate">
            <label class="active" for="password">Password</label>
        </div>
    </div>

    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="mdi-content-send right"></i>
    </button>

</div>



<!--Import jQuery before materialize.js-->

<script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script type="text/javascript" src="app.js"></script>
</body>
</html>
