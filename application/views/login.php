<?php include "public/static/head.php"; ?>
    <title>Eda Login</title>
</head>

<body>

<nav>
    <div class="nav-wrapper light-blue darken-1">

        <a class="brand-logo ">EDA</a>

        <ul class="right hide-on-med-and-down">

            <li><a class="modal-trigger" href="register">Sign up</a></li>
            <li><a class="modal-trigger" href="login">Login in</a></li>
        </ul>


    </div>

</nav>

<div class="container">
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
        <a class="modal-action waves-effect waves-green btn-flat">Login in</a>
    </div>
</div>


</body>
</html>
