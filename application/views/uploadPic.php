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
                <h3 class="flow-text">Collocation picture</h3>
                <img class="materialboxed" height="300" src="<?php echo $full_path; ?>">
                <div class="red lighten-2"><span class="white-text"><?php echo $error;?></span></div>
                <form action="/upload/pic" enctype="multipart/form-data" method="post">
                <div class="file-field input-field col l9 s12 ">
                    <input class="file-path validate" type="text"/>
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="picfile"/>
                    </div>
                </div>
                <div class="col l3 s12">
                    <button class="btn-flat" type="submit">Upload
                        <i class="material-icons right">file_upload</i>
                    </button>
                </div>
                </form>
            </div>



        <div class="fixed-action-btn" style="bottom: 45px; right: 45px;">
            <a class="waves-effect waves-light btn <?php echo $next; ?>" href="/upload/matching" "><i class="material-icons right">arrow_forward</i>Next</a>
        </div>



    </div>
</div>


</body>
</html>
