<?php include "public/static/head.php"; ?>
<title>Edit</title>
</head>

<body>

<nav>
    <div class="nav-wrapper light-blue darken-1">
        <div class="col s12">
            <a href="/matching/<?php echo $mid; ?>" class="breadcrumb">Info</a>
            <a href="#!" class="breadcrumb">Edit</a>
        </div>
    </div>
</nav>

<div class="container">

    <h5>Old Collocation</h5>
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
        </div>
    </div>
    <h5>New Collocation</h5>
    <div class="red lighten-2"><span class="white-text"><?php echo validation_errors();echo $systemerror; ?></span></div>
    <form method="post">

        <div class="row">
            <div class="input-field col s12">
                <input id="Style" name="style" type="text" class="validate" value="<?php echo set_value('style'); ?>">
                <label class="active" for="Style">Style</label>
            </div>
            <div class="input-field col s12">
                <input id="Scenario" name="scenario" type="text" class="validate" value="<?php echo set_value('scenario'); ?>">
                <label class="active" for="Scenario">Scenario</label>
            </div>
            <div class="input-field col s6">
                <input id="Season" name="season" type="text" class="validate" value="<?php echo set_value('season'); ?>">
                <label class="active" for="Season">Season</label>
            </div>
            <div class="col s6">
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


</body>
</html>
