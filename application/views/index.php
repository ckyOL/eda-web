
<?php include "public/static/head.php"; ?>
<title>Eda</title>
</head>
<body>

<nav>
    <div class="nav-wrapper light-blue darken-1">
        
        <a class="brand-logo ">EDA</a>

        <ul class="right hide-on-med-and-down">

            <li><a href="register">Sign up</a></li>
            <li><a href="login">Login in</a></li>
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
                        <a href="#" ><i class="material-icons light-blue-text right">more_horiz</i></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
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
</div>
</body>
</html>
