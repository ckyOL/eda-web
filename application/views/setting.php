<?php include "public/static/head.php"; ?>
    <title>Setting</title>
</head>

<body>
<?php include "public/static/nav.php" ?>


<div class="container">
    <div class="row">
        <div class="col s12">
            <a >Profile picture</a>
        </div>
    </div>

    <div class="row">
        <img src="images/sample-1.jpg">
        <?php echo validation_errors(); ?>
        <?php echo form_open('setting/picture'); ?>

        <div class="file-field input-field col s6">
                <input class="file-path validate hide" type="text"/>
                <div class="btn">
                     <span>Upload </span>
                     <input type="file" />
                </div>
            </div>
        </form>
    </div>

    <?php echo validation_errors(); ?>
    <?php echo form_open('setting/user'); ?>
    <div class="row">
        <div class="input-field col s6">
            <input value="" id="userName" type="text" class="validate">
            <label class="active" for="userName">User Name</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6">
            <input id="password" type="password" class="validate">
            <label class="active" for="password">Password</label>
        </div>
    </div>

    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="mdi-content-send right"></i>
    </button>
</from>
</div>

</body>
</html>
