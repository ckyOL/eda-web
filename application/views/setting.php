<?php include "public/static/head.php"; ?>
    <title>Setting</title>
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
        </li>
    </ul>

    <div class="row">
        <div class="col s12">
            <h5 class="flow-text">Profile picture</h5>
            <div class="red lighten-2"><span class="white-text"><div id="error"></div></span></div>
            <form enctype="multipart/form-data" id="picForm">
                <div class="file-field input-field col l9 s12 ">
                    <input class="file-path validate" type="text"/>
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="picfile" id="picfile"/>
                    </div>
                </div>
            </form>
            <div class="col l3 s12">
                <a class="btn-flat" onclick="uploadPic('picForm','error','/setting/pic')">Upload
                    <i class="material-icons right">file_upload</i>
                </a>
            </div>
        </div>
    </div>

    <form method="post">
        <div class="row">
            <div class="red lighten-2 col s12"><span class="white-text"><?php echo validation_errors();echo $systemerror; ?></span></div>
            <div class="input-field col s6">
                <input id="username" name="username" type="text" class="validate" value="<?php echo set_value('username'); ?>">
                <label class="active" for="username">User Name</label>
            </div>
            <div class="input-field col s6">
                <input id="password" name="password" type="password" class="validate">
                <label class="active" for="password">Password</label>
            </div>
            <div class="input-field col s12">
                <textarea id="textarea1" name="signature" class="materialize-textarea"><?php echo set_value('signature'); ?></textarea>
                <label for="textarea1">Signature</label>
            </div>
            <div class="col s12">
                <span>Sex:</span>
                <input name="sex" type="radio" id="male" value="1" />
                <label for="male">Male</label>
                <input name="sex" type="radio" id="female" value="2" />
                <label for="female">Female</label>
                <input name="sex" type="radio" id="secrecy" value="3"/>
                <label for="secrecy">Secrecy</label>
            </div>
            <div class="col s12">
                <button class="waves-effect waves-light btn" type="submit"><i class="material-icons right">arrow_upward</i>Update</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
