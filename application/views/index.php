<?php include "/public/static/head.php"; ?>
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
        <?php foreach ($friendCard as $card_item): ?>\
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-image">
                        <img src="<?php echo $card_item['photo']; ?>">
                    </div>
                    <div class="card-content">
                        <p><?php echo $card_item['userName']; ?></p>
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
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
