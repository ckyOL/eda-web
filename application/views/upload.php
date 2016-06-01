<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css"  media="screen,projection"/>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Upload</title>
</head>

<body>

<nav>
    <div class="nav-wrapper light-blue darken-1">
        <div class="col s12">
            <a href="friend.php" class="breadcrumb">Stream</a>
            <a href="#!" class="breadcrumb">Upload</a>
        </div>
    </div>
</nav>

<div class="container">
    <div id="uploadDiv">
        <div class="row">
            <div class="col s12">
                <h3 class="flow-text">Collocation picture</h3>
                <img src="">

                <div class="file-field input-field col s6">
                    <input class="file-path validate hide" type="text"/>
                    <div class="btn">
                        <span>Upload </span>
                        <input type="file" />
                    </div>
                </div>
            </div>

            <div class="input-field col s6">
                <input value="" id="Style" type="text" class="validate">
                <label class="active" for="Style">Style</label>
            </div>
            <div class="input-field col s6">
                <input value="" id="Scenario" type="text" class="validate">
                <label class="active" for="Scenario">Scenario</label>
            </div>
            <div class="input-field col s6">
                <input value="" id="Season" type="text" class="validate">
                <label class="active" for="Season">Season</label>
            </div>
        </div>
        <footer>
            <ul class="pagination">
                <li class="disabled"><a href="#!"><i class="material-icons">keyboard_arrow_left</i></a></li>
                <li class="active"><a onclick="collUpload()">1</a></li>
                <li class="waves-effect"><a onclick="topsUpload()">2</a></li>
                <li class="waves-effect"><a onclick="bottomsUpload()">3</a></li>
                <li class="waves-effect"><a onclick="shoeUpload()">4</a></li>
                <li class="waves-effect"><a onclick="assUpload()">5</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">keyboard_arrow_right</i></a></li>
            </ul>
        </footer>
    </div>
</div>

<!--Import jQuery before materialize.js-->

<script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script type="text/javascript" src="/public/js/app.js"></script>
</body>
</html>
