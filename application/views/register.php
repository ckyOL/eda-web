<?php include "public/static/head.php"; ?>
    <title>Eda Register</title>
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

    <div class="red lighten-2"><span class="white-text"><?php echo validation_errors(); ?></span></div>
    <div class="teal lighten-2"><span class="white-text"><?php echo $successInfo; ?></span></div>

    <form id="registerForm" method="post">
        <div class="row">
            <div class="input-field col s12">
                <input id="username" name="username" type="text" value="<?php echo set_value('username'); ?>">
                <label for="username">User Name</label>
            </div>
            <div class="input-field col s12">
                <input id="password" name="password" type="password" value="<?php echo set_value('password'); ?>">
                <label for="password">Password</label>
            </div>
        </div>
        <div class="col s12">
            <button class="btn waves-effect waves-green" type="submit">Sign up
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>

</body>
</html>
