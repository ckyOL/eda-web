<?php include "public/static/head.php"; ?>
    <title>Notification</title>
</head>

<body>
<?php include "public/static/nav.php" ?>


<div class="container">
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#test1">Friends<span id="friendnum" class="blue-text text-darken-2"><?php echo $notifyNum['friend']; ?></span></a></li>
                <li class="tab col s3"><a href="#test2">Edit<span id="editnum" class="blue-text text-darken-2"><?php echo $notifyNum['edit']; ?></span></a></li>
                <li class="tab col s3 "><a href="#test3">Comment<span id="commentnum" class="blue-text text-darken-2"><?php echo $notifyNum['comment']; ?></span></a></li>
                <li class="tab col s3"><a href="#test4">Like<span id="likenum" class="blue-text text-darken-2"><?php echo $notifyNum['like']; ?></span></a></li>
            </ul>
        </div>
        <div id="test1" class="col s12">
            <ul class="collection">
                <?php $i = 0; foreach ($friends as $friend): ?>
                    <div id="friend<?php echo $i; ?>">
                        <li class="collection-item avatar">
                            <a href="/user/page/<?php echo $friend['id']; ?>"><img src="<?php echo $friend['picture']; ?>" alt="userPic" class="circle"></a>
                            <span class="title"><?php echo $friend['name']; ?>,LV<?php echo $friend['level']; ?></span>
                            <p>Follow you!</p>
                            <a href="javascript:readFriend('<?php echo $i++; ?>','<?php echo $friend['id']; ?>')" class="secondary-content">Read</a>
                        </li>
                    </div>

                <?php endforeach; ?>
            </ul>
        </div>
        <div id="test2" class="col s12">
            <?php $i = 0; foreach ($edits as $edit): ?>
                <div id="message<?php echo $i; ?>" class="col s12">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title"><?php echo $edit['name']; ?>:<?php echo $edit['title']; ?></span>
                            <p><?php echo $edit['content']; ?></p>
                            <p><a href="/matching/view/<?php echo $edit['matchingid']; ?>">Link</a></p>
                        </div>
                        <div class="card-action">
                            <a href="javascript:readMessage('<?php echo $i++; ?>','<?php echo $edit['id']; ?>')">Read</a>
                            <a href='/sendMessage/reply/<?php echo $edit['id']; ?>'>Reply</a>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
        <div id="test3" class="col s12">
            <?php $i = 0; foreach ($comments as $comment): ?>
                <div id="comment<?php echo $i; ?>" class="col s12">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title"><?php echo $comment['name']; ?></span>
                            <p><?php echo $comment['content']; ?></p>
                            <p><a href="/matching/view/<?php echo $comment['matchingid']; ?>">Link</a></p>
                        </div>
                        <div class="card-action">
                            <a href="javascript:readComment('<?php echo $i++; ?>','<?php echo $comment['id']; ?>')">Read</a>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
        <div id="test4" class="col s12">
            <?php $i = 0; foreach ($likes as $like): ?>
                <div id="like<?php echo $i; ?>" class="col s12">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title"><?php echo $like['name']; ?></span>
                            <p>like your matching!</p>
                            <p><a href="/matching/view/<?php echo $like['matchingid']; ?>">Link</a></p>
                        </div>
                        <div class="card-action">
                            <a href="javascript:readLike('<?php echo $i++; ?>','<?php echo $like['userid']; ?>','<?php echo $like['matchingid']; ?>')">Read</a>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>


</body>
</html>
