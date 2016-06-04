<?php include "public/static/head.php"; ?>
<title>My Collocation</title>
</head>

<body>

<?php include "public/static/nav.php" ?>

<div class="container">
    <div class="card Medium">
        <div class="card-image">
            <img src="images/sample-1.jpg">
        </div>
        <div class="card-content">
            <h5 class="flow-text">Name:</h5>
        </div>
    </div>

    <div class="row">
        <?php foreach ($userCard as $card_item): ?>\
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
