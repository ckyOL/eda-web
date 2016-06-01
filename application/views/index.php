<!DOCTYPE html>
<html>
<head>

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css"  media="screen,projection"/>

    <link href="http://fonts.useso.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Eda</title>
</head>

<body>

<nav>
    <div class="nav-wrapper light-blue darken-1">
        
        <a class="brand-logo ">EDA</a>

        <ul class="right hide-on-med-and-down">

            <li><a class="modal-trigger" href="#sign">Sign up</a></li>
            <li><a class="modal-trigger" href="#login">Login in</a></li>
        </ul>
        

    </div>

</nav>

<div class="container">

</div>

<div id="login" class="modal">
    <div class="modal-content">
        <div class="input-field col s6">
            <input id="username" type="text" class="validate">
            <label for="username">User Name</label>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a type="submit" class=" modal-action modal-close waves-effect waves-green btn-flat">Login in</a>
    </div>
</div>

<div id="sign" class="modal">
    <div class="modal-content">
        <div class="input-field col s6">
            <input id="username" type="text" class="validate">
            <label for="username">User Name</label>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a type="submit" class=" modal-action modal-close waves-effect waves-green btn-flat">Sign up</a>
    </div>
</div>




<!--Import jQuery before materialize.js-->

<script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script type="text/javascript" src="/public/js/app.js"></script>
</body>
</html>
