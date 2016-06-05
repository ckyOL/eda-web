<?php include "public/static/head.php"; ?>
<title>Edit</title>
</head>

<body>

<nav>
    <div class="nav-wrapper light-blue darken-1">
        <div class="col s12">
            <a href="javascript:history.go(-1);" class="breadcrumb">Info</a>
            <a href="#!" class="breadcrumb">Edit</a>
        </div>
    </div>
</nav>

<div class="container">

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


                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="mdi-content-send right"></i>
                </button>

        </div>

<?php foreach ($collcationItem as $cardItem): ?>
        <div class="row">
            <div class="col s12">
                <h3 class="flow-text">Collocation picture</h3>
                <img src="<?php echo $cardItem[img] ?>">

                <div class="file-field input-field col s6">
                    <input class="file-path validate hide" type="text"/>
                    <div class="btn">
                        <span>Upload </span>
                        <input type="file" />
                    </div>
                </div>
            </div>

            <div class="input-field col s6">
                <input value="<?php echo $cardItem[brand] ?>" id="Brand" type="text" class="validate">
                <label class="active" for="Brand">Brand</label>
            </div>
            <div class="input-field col s6">
                <input value="<?php echo $cardItem[des] ?>" id="Describe" type="text" class="validate">
                <label class="active" for="Describe">Describe</label>
            </div>
        </div>

        <div class="row">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="mdi-content-send right"></i>
            </button>
        </div>
    <?php endforeach; ?>

</div>


</body>
</html>
