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
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s6"><a class="active" href="#myColl">My Collocation</a></li>
                <li class="tab col s6"><a href="#myFriend">Friend</a></li>
            </ul>
        </div>

        <div id="myColl" class="col s12">
            <?php foreach ($cards as $card_item): ?>
                <div class="col s12 m6">
                    <div class="card medium">
                        <div class="card-image">
                            <img src="<?php echo $card_item['p1']; ?>">
                            <span class="card-title"><?php echo $card_item['name']; ?></span>
                        </div>
                        <div class="card-content">
                            <p><?php echo $card_item['reviews']; ?></p>
                        </div>
                        <div class="card-action">
                    <span>
                        <a href="/matching/<?php echo $card_item['id']; ?>" ><i class="material-icons light-blue-text right">more_horiz</i></a>
                    </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div id="myFriend" class="col s12">
            <ul class="collection">
                <?php foreach ($myFriend as $collectItem): ?>
                <li class="collection-item avatar">
                    <img src="<?php echo $collectItem["photo"]; ?>" alt="" class="circle">
                    <span class="title"><?php echo $collectItem["userName"]; ?></span>
                    <p>First Line <br>
                        Second Line
                    </p>
                    <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
    
</div>
</body>
</html>
