<?php include "public/static/head.php"; ?>
    <title>Friend Collocation</title>
</head>

<body>

<?php include "public/static/nav.php" ?>

        <ul id="slide-out" class="side-nav">
            <li><a href="/">Hot</a></li>
            <li><a href="collect">Collection</a></li>
            <li class="active"><a href="friend">Friend</a></li>
            <li><a href="notification">Notification</a></li>
            <li><a href="setting">Setting</a></li>

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

    <div class="fixed-action-btn" style="bottom: 45px; right: 45px;">
        <a class="btn-floating btn-large waves-effect waves-light purple darken-1" href="upload.php"><i class="material-icons">add</i></a>
    </div>
</div>
</body>
</html>
