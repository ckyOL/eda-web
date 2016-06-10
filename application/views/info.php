<?php include "public/static/head.php"; ?>
    <title>Clothing Collocation</title>
</head>

<body>

<nav>
    <div class="nav-wrapper light-blue darken-1">
        <div class="col s12">
            <a href="/" class="breadcrumb">EDA</a>
            <a href="javascript:history.go(-1);" class="breadcrumb">Stream</a>
            <a href="#!" class="breadcrumb">Info</a>
        </div>
    </div>
</nav>


<div class="container">
    <ul class="collection">
        <li class="collection-item avatar">
            <a href="/user/page/<?php echo $user['id']; ?>"><img src="<?php echo $user['picture']; ?>" alt="userPic" class="circle"></a>
            <span class="title"><?php echo $user['name']; ?></span>
            <p>Time:<?php echo $matching['time']; ?></p>
            <a href="javascript:follow('<?php echo $user['id']; ?>')" class="secondary-content">Follow</a>
        </li>
    </ul>

    <div class="card large">
        <div class="row">
            <div class="col s5">
                <div class="card-image"  style=" height:425px; overflow:hidden;">
                    <img class="materialboxed" style="margin: 5px 5px" src="<?php echo $matching['p1']; ?>">
                </div>

            </div>
            <div class="card-content col s7">
                <h5 class="flow-text">Style: <?php echo $matching['style']; ?></h5>
                <h5 class="flow-text">Scenario: <?php echo $matching['scenario']; ?></h5>
                <h5 class="flow-text">Season: <?php echo $matching['season']; ?></h5>
                <h5 class="flow-text">Sex: <?php
                    switch($matching['sex'])
                    {
                        case 1:echo '♂';break;
                        case 2:echo '♀';break;
                        case 3:echo '♂♀';break;
                    }
                    ?></h5>
                <h5 class="flow-text">Reviews:</h5>
                <p><?php echo $matching['reviews']; ?></p>
            </div>
            <div class="card-action col s12">
            <span>
                <a href="javascript:likeit('<?php echo $matching['id']; ?>')" ><i class="material-icons light-blue-text ">thumb_up</i><span id="likenum<?php echo $matching['id']; ?>"><?php echo $matching['likenum']; ?></span></a>
                <a href="javascript:favorite('<?php echo $matching['id']; ?>')" ><i class="material-icons light-blue-text ">favorite</i></a>
                <a href="/edit/matching/<?php echo $matching['id']; ?>" ><i class="material-icons light-blue-text right">create</i></a>
            </span>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col s12"><h5>Parts</h5></div>

        <?php foreach ($parts as $part):?>

        <div class="col s6">
            <div class="card medium">
                <div class="card-image">
                    <img class="materialboxed" src="<?php echo $part['picture']; ?>">
                    <span class="card-title"><?php echo $part['type']; ?></span>
                </div>
                <div class="card-content">
                    <p><?php echo $part['content']; ?></p>
                </div>
                <div class="card-action">
                    <a class="modal-trigger" href="#modal<?php echo $part['id']; ?>" ><i class="material-icons light-blue-text ">shopping_cart</i></a>
                    <a href="/edit/parts/<?php echo $part['id']; ?>" ><i class="material-icons light-blue-text right">create</i></a>
                </div>
            </div>
        </div>
        <div id="modal<?php echo $part['id']; ?>" class="modal">
            <div class="modal-content">
                <h5>Brand: <?php echo $part['brand']; ?></h5>
                <p>Buy Link:</p>
                <p><a href="<?php echo $part['buy']; ?>"><?php echo $part['buy']; ?></a></p>
            </div>
            <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">关闭</a>
            </div>
        </div>
        <?php endforeach; ?>

    </div>


    <div class="row">
        <div class="col s12"><h5>Comment</h5></div>

        <?php foreach ($comments as $comment):?>

        <div class="col s12">
            <div class="card teal lighten-5">
                <div class="card-content">
                    <span class="card-title"><?php echo $comment['name']; ?></span>
                    <p><?php echo $comment['content']; ?></p>
                </div>
                <div class="card-action">
                    <?php echo $comment['time']; ?>
                </div>
            </div>
        </div>

        <?php endforeach; ?>
    </div>
    <div class="red lighten-2"><span class="white-text"><?php echo validation_errors();echo $systemerror; ?></span></div>
    <form method="post">
        <div class="input-field ">
            <input id="comment" name="comment" type="text" class="validate" value="<?php echo set_value('comment'); ?>">
            <label for="comment">Comment Type here</label>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="mdi-content-send right"></i>
        </button>
    </form>

</div>
</body>
</html>
