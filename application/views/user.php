<?php include "public/static/head.php"; ?>
<title>User Home</title>
</head>

<body>

<?php include "public/static/nav.php" ?>

<div class="container">
    <ul class="collection">
        <li class="collection-item avatar">
            <img src="<?php echo $user['picture']; ?>" alt="userPic" class="circle">
            <span class="title"><?php echo $user['name']; ?>,LV<?php echo $user['level']; ?></span>
            <p><?php echo $user['signature']; ?></p>
            <p><?php
                switch($user['sex'])
                {
                    case 1:echo '♂';break;
                    case 2:echo '♀';break;
                    case 3:echo '';break;
                }
                ?>
            </p>
            <a href="javascript:follow('<?php echo $user['id']; ?>')" class="secondary-content">Follow</a>
        </li>
    </ul>

    <div class="row">
        <?php foreach ($cards as $card_item): ?>
            <div class="col s12 m6">
                <div class="card medium">
                    <div class="card-image">
                        <img class="materialboxed" src="<?php echo $card_item['p1']; ?>">
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
