
<?php include "public/static/head.php"; ?>
<title>Eda</title>
</head>
<body>

<?php include "public/static/nav2.php" ?>

<div class="container">
    <div class="row">
        <div class="col s12"><h5 class="flow-text"><?php echo $searchwords; ?></h5></div>
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
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>



</body>
</html>
