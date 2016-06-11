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
        <div class="red lighten-2"><span class="white-text"><?php echo validation_errors();echo $systemerror; ?></span></div>
        <form method="post">

        <div class="row">
            <div class="col s12">
                <h3 class="flow-text">Collocation Details</h3>
            </div>

            <div class="input-field col s12">
                <input id="Style" name="style" type="text" class="validate" value="<?php echo set_value('style'); ?>">
                <label class="active" for="Style">Style</label>
            </div>
            <div class="input-field col s12">
                <input id="Scenario" name="scenario" type="text" class="validate" value="<?php echo set_value('scenario'); ?>">
                <label class="active" for="Scenario">Scenario</label>
            </div>
            <div class="input-field col s12 l6">
                <input id="Season" name="season" type="text" class="validate" value="<?php echo set_value('season'); ?>">
                <label class="active" for="Season">Season</label>
            </div>
            <div class="col s12 l6">
                <label>Sex Select</label>
                <select name="sex" class="browser-default">
                    <option value="1" <?php echo  set_select('sex', '1'); ?>>Male</option>
                    <option value="2" <?php echo  set_select('sex', '2'); ?>>Female</option>
                    <option value="3" <?php echo  set_select('sex', '3'); ?>>Asexuality</option>
                </select>
            </div>
            <div class="input-field col s12">
                <textarea id="textarea1" name="reviews" class="materialize-textarea"><?php echo set_value('reviews'); ?></textarea>
                <label for="textarea1">Reviews</label>
            </div>

        </div>

        <div class="fixed-action-btn" style="bottom: 45px; right: 45px;">
            <button class="waves-effect waves-light btn" type="submit" name="action"><i class="material-icons right">arrow_forward</i>Next</button>
        </div>

        </form>

    </div>
</div>


</body>
</html>
