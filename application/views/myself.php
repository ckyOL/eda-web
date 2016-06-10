<?php include "public/static/head.php"; ?>
<title>My Collocation</title>
</head>

<body>

<?php include "public/static/nav.php" ?>

<div class="container">



    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s6"><a class="active" href="#myColl">My Collocation</a></li>
                <li class="tab col s6"><a href="#myFriend">Friend</a></li>
            </ul>
        </div>

        <div id="myColl" class="col s12">
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
                </li>
            </ul>

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
                        <a href="javascript:deleteMatching('<?php echo $card_item['id']; ?>')" ><i class="material-icons red-text ">delete</i></a>
                        <a href="/matching/view/<?php echo $card_item['id']; ?>" ><i class="material-icons light-blue-text right">more_horiz</i></a>
                    </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div id="myFriend" class="col s12">
            <ul class="collection">
                <?php foreach ($friends as $friend): ?>
                    <li class="collection-item avatar">
                        <img src="<?php echo $friend['picture']; ?>" alt="userPic" class="circle">
                        <span class="title"><?php echo $friend['name']; ?>,LV<?php echo $friend['level']; ?></span>
                        <p><?php echo $friend['signature']; ?></p>
                        <p><?php
                            switch($friend['sex'])
                            {
                                case 1:echo '♂';break;
                                case 2:echo '♀';break;
                                case 3:echo '';break;
                            }
                            ?>
                        </p>
                        <a href="javascript:deleteFriend('<?php echo $friend['id']; ?>')" class="secondary-content">Delete</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
    
</div>
</body>
</html>
