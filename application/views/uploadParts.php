<?php include "public/static/head.php"; ?>
<title>Upload</title>
</head>

<body>

<nav>
    <div class="nav-wrapper light-blue darken-1">
        <div class="col s12">
            <a href="/" class="breadcrumb">EDA</a>
            <a href="javascript:history.go(-1);" class="breadcrumb">Stream</a>
            <a href="#!" class="breadcrumb">Upload</a>
        </div>
    </div>
</nav>


<div class="container">
    <div id="uploadDiv">
        <div class="row">
            <div class="col s12">
                <h3 class="flow-text">Collocation Part <?php echo $partnum; ?></h3>
                <img class="materialboxed" height="150" src="<?php echo $full_path; ?>">
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
                    <a class="btn-flat" onclick="uploadPic('picForm','error','/upload/pic')">Upload
                        <i class="material-icons right">file_upload</i>
                    </a>
                </div>
                <div class="red lighten-2 col s12"><span class="white-text"><?php echo validation_errors();echo $systemerror; ?></span></div>
                <form method="post">
                    <div class="input-field col s12">
                        <input id="type" name="type" type="text" class="validate" value="<?php echo set_value('type'); ?>">
                        <label class="active" for="type">Type</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="brand" name="brand" type="text" class="validate" value="<?php echo set_value('brand'); ?>">
                        <label class="active" for="brand">Brand</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="buy" name="buy" type="text" class="validate" value="<?php echo set_value('buy'); ?>">
                        <label class="active" for="buy">Buy Link</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" name="content" class="materialize-textarea"><?php echo set_value('content'); ?></textarea>
                        <label for="textarea1">Describe</label>
                    </div>
                    <div class="col s12">
                        <button class="waves-effect waves-light btn" type="submit" name="button" value="add"><i class="material-icons right">arrow_forward</i>Add Next</button>
                        <button class="waves-effect waves-light orange btn" type="submit" name="button" value="finish"><i class="material-icons right">done</i>Finish All</button>
                    </div>
                </form>
            </div>







        </div>
    </div>


</body>
</html>
