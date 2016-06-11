<?php include "public/static/head.php"; ?>
<title>Edit</title>
</head>

<body>

<nav>
    <div class="nav-wrapper light-blue darken-1">
        <div class="col s12">
            <a href="/matching/view/<?php echo $mid; ?>" class="breadcrumb">Info</a>
            <a href="#!" class="breadcrumb">Edit</a>
        </div>
    </div>
</nav>

<div class="container">

    <h5>Old Part</h5>
    <div class="col s6">
        <div class="card medium">
            <div class="card-image">
                <img class="materialboxed" src="<?php echo $part['picture']; ?>">
                <span class="card-title"><?php echo $part['type']; ?></span>
            </div>
            <div class="card-content">
                <p><?php echo $part['content']; ?></p>
            </div>
        </div>
    </div>
    <h5>New Part</h5>
    <div class="red lighten-2 col s12"><span class="white-text"><?php echo validation_errors();echo $systemerror; ?></span></div>
    <form method="post">
        <div class="input-field col s12">
            <input id="type" name="type" type="text" class="validate" value="<?php echo set_value('type'); ?>">
            <label class="active" for="type">Type</label>
        </div>
        <div class="input-field col s12">
            <textarea id="textarea1" name="content" class="materialize-textarea"><?php echo set_value('content'); ?></textarea>
            <label for="textarea1">Describe</label>
        </div>
        <div class="fixed-action-btn" style="bottom: 45px; right: 45px;">
            <button class="waves-effect waves-light btn" type="submit" name="action"><i class="material-icons right">arrow_forward</i>Next</button>
        </div>
    </form>

</div>


</body>
</html>
