<?php include "public/static/head.php"; ?>
    <title>Friend Collocation</title>
</head>

<body>

<?php include "public/static/nav.php" ?>

<div class="container">
    <div class="row">
        <?php foreach ($cards as $card_item): ?>
            <div class="col s12 m6">
                <div class="card medium">
                    <div class="card-image">
                        <img src="<?php echo $card_item['photo']; ?>">
                        <span class="card-title"><?php echo $card_item['userName']; ?></span>
                    </div>
                    <div class="card-content">
                        <p><?php echo $card_item['reviews']; ?></p>
                    </div>
                    <div class="card-action">
                    <span>
                        <a href="/like/<?php echo $card_item['id']; ?>" ><i class="material-icons light-blue-text ">thumb_up</i></a>
                        <a href="/favorite/<?php echo $card_item['id']; ?>" ><i class="material-icons light-blue-text ">favorite</i></a>
                        <a href="/matching/<?php echo $card_item['id']; ?>" ><i class="material-icons light-blue-text right">more_horiz</i></a>
                    </span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    
</div>
</body>
</html>
