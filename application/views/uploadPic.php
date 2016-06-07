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
                <img class="materialboxed" width="650" src="<?php echo $picUrl; ?>">
                <form >
                <div class="file-field input-field col s6">
                    <input class="file-path validate hide" type="text"/>
                    <div class="btn">
                        <span>Upload </span>
                        <input type="file" />
                    </div>
                </div>
                </form>
            </div>


        <form name="number">
            <div class="fixed-action-btn" style="bottom: 45px; right: 45px;">
                <a class="waves-effect waves-light btn" onclick="clothes('collup.php')"><i class="material-icons right">arrow_forward</i>Next</a>
            </div>
        </form>



    </div>
</div>


</body>
</html>
