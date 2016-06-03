<?php include "public/static/head.php"; ?>
    <title>Clothing Collocation</title>
</head>

<body>

<nav>
    <div class="nav-wrapper light-blue darken-1">
        <div class="col s12">
            <a href="javascript:history.go(-1);" class="breadcrumb">Stream</a>
            <a href="#!" class="breadcrumb">Info</a>
        </div>
    </div>
</nav>


<div class="container">
    <div class="card large">
        <div class="row">
            <div class="card-image col s5">
                <img src="images/sample-1.jpg">
            </div>
            <div class="card-content col s7">
                <h5 class="flow-text">Style:</h5>
                <h5 class="flow-text">Scenario:</h5>
                <h5 class="flow-text">Season:</h5>
                <h5 class="flow-text">Sex:</h5>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col s6">
            <div class="card medium">
                <div class="card-image">
                    <img src="images/sample-1.jpg">
                    <span class="card-title"></span>
                </div>
                <div class="card-content">
                    <p class="flow-text">Brand:</p>
                    <p class="flow-text">Describe:</p>
                </div>
            </div>
        </div>

    </div>

    <div class="card large">
        <div class="card-content">
            <span class="card-title">Reviews</span>
            <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
            <span>
                <a href="#" ><i class="material-icons light-blue-text ">thumb_up</i></a>
                <a href="#" ><i class="material-icons light-blue-text ">favorite</i></a>
                <a href="#" ><i class="material-icons light-blue-text ">create</i></a>
                <a href="#" ><i class="material-icons light-blue-text right">shopping_cart</i></a>
            </span>
        </div>
    </div>


    <ul class="collection">
        <li class="collection-item avatar">
            <img src="images/yuna.jpg" alt="" class="circle">
            <span class="title">Title</span>
            <p>First Line <br>
                Second Line
            </p>
        </li>
    </ul>

    <div class="input-field ">
        <input id="comment" type="text" class="validate">
        <label for="comment">Comment Type here</label>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="mdi-content-send right"></i>
    </button>


</div>
</body>
</html>
