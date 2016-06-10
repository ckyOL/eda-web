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


</div>


</body>
</html>
