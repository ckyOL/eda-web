<?php include "public/static/head.php"; ?>
<title>Send Message</title>
</head>

<body onload="warn()">

<nav>
    <div class="nav-wrapper light-blue darken-1">
        <div class="col s12">
            <a href="/matching/<?php echo $mid; ?>" class="breadcrumb">Info</a>
            <a href="#!" class="breadcrumb">Edit</a>
        </div>
    </div>
</nav>

<div class="container">
    <h5>To:<?php echo $username; ?></h5>
    <div class="row">
        <div class="red lighten-2 col s12"><span class="white-text"><?php echo validation_errors();echo $systemerror; ?></span></div>
        <form method="post">
            <div class="input-field col s12">
                <input id="title" name="title" type="text" class="validate" value="<?php echo set_value('title'); ?>">
                <label class="active" for="title">Title</label>
            </div>
            <div class="input-field col s12">
                <textarea id="textarea1" name="content" class="materialize-textarea"><?php echo set_value('content'); ?></textarea>
                <label for="textarea1">Message</label>
            </div>
            <div class="col s12">
                <button class="btn waves-effect waves-green" type="submit">Send
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>

</div>

<script>
    function warn() {
        Materialize.toast('<?php echo $warnMessage; ?>', 4000);
    }
</script>

</body>
</html>
