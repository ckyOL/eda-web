<?php include "public/static/head.php"; ?>
    <title>Upload</title>
</head>

<body>

<nav>
    <div class="nav-wrapper light-blue darken-1">
        <div class="col s12">
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
                <img src="">

                <div class="file-field input-field col s6">
                    <input class="file-path validate hide" type="text"/>
                    <div class="btn">
                        <span>Upload </span>
                        <input type="file" />
                    </div>
                </div>
            </div>

            <div class="input-field col s6">
                <input value="" id="Style" type="text" class="validate">
                <label class="active" for="Style">Style</label>
            </div>
            <div class="input-field col s6">
                <input value="" id="Scenario" type="text" class="validate">
                <label class="active" for="Scenario">Scenario</label>
            </div>
            <div class="input-field col s6">
                <input value="" id="Season" type="text" class="validate">
                <label class="active" for="Season">Season</label>
            </div>

            <div class="input-field col s6">
                <input value="" id="Sex" type="text" class="validate">
                <label class="active" for="Sex">Sex</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <input value="" id="CollocationNum" type="text" class="validate">
                <label class="active" for="CollocationNum">Collocation Number</label>
            </div>
        </div>

        <div class="fixed-action-btn" style="bottom: 45px; right: 45px;">
            <a class="waves-effect waves-light btn"><i class="material-icons right">arrow_forward</i>Next</a>
        </div>
    </div>
</div>


</body>
</html>
