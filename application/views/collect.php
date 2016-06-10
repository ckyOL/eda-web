<?php include "public/static/head.php"; ?>
    <title>Collection Collocation</title>
</head>

<body>
<?php include "public/static/nav.php" ?>

<div class="container">
    <div class="row">
        <?php foreach ($cards as $card_item): ?>
            <div class="col s12 m6">
                <div class="card medium">
                    <div class="card-image">
                        <img class="materialboxed" src="<?php echo $card_item['p1']; ?>">
                        <span class="card-title"><?php echo $card_item['name']; ?></span>
                    </div>
                    <div class="card-content">
                        <p><?php echo $card_item['reviews']; ?></p>
                    </div>
                    <div class="card-action">
                    <span>
                        <a href="javascript:likeit('<?php echo $card_item['id']; ?>')" ><i class="material-icons light-blue-text ">thumb_up</i><span id="likenum<?php echo $card_item['id']; ?>"><?php echo $card_item['num']; ?></span></a>
                        <a href="javascript:favorite('<?php echo $card_item['id']; ?>')" ><i class="material-icons light-blue-text ">favorite</i></a>
                        <a href="/matching/view/<?php echo $card_item['id']; ?>" ><i class="material-icons light-blue-text right">more_horiz</i></a>
                    </span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
</body>
</html>
