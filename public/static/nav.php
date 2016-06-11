<nav>
    <div class="nav-wrapper light-blue darken-1">
        <ul class="left">
            <li><a href="#" data-activates="slide-out" class="button-collapse show-on-large hide-on-med-and-down"><i class="material-icons">menu</i></a></li>
        </ul>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <a class="brand-logo" href="/">EDA</a>

        <ul class="right hide-on-med-and-down">
            <li><a class="modal-trigger" href="#searchmodal"><i class="material-icons left">search</i>Search Collocation</a></li>
            <li><a href="/myself"><img class="left circle" width="40" height="40" style="margin: 10px 10px" src="<?php echo $pictureUrl; ?>"><?php echo $userName; ?></a></li>
            <li><a href="/quit"><i class="material-icons left">exit_to_app</i>Quit</a></li>
        </ul>
        <ul id="slide-out" class="side-nav">
            <li><a href="/">Hot</a></li>
            <li><a href="/collect">Collection</a></li>
            <li><a href="/friend">Friend</a></li>
            <li><a href="/notification">Notification</a></li>
            <li><a href="/setting">Setting</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="/">Hot</a></li>
            <li><a href="/collect">Collection</a></li>
            <li><a href="/friend">Friend</a></li>
            <li><a href="/notification">Notification</a></li>
            <li><a href="/setting">Setting</a></li>
            <li><a class="modal-trigger" href="#searchmodal">search</a></li>
            <li><a href="/myself"><?php echo $userName; ?></a></li>
            <li><a href="/quit">Quit</a></li>
        </ul>

    </div>

</nav>

<div id="searchmodal" class="modal modal bottom-sheet">
    <form method="post" action="/search">
        <div class="modal-content">
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">search</i>
                    <input id="icon_prefix" type="text" class="validate" name="searchcontent">
                    <label for="icon_prefix">Search</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn waves-effect btn-flat " type="submit" >Go</button>
        </div>
    </form>
</div>

<div class="fixed-action-btn" style="bottom: 45px; right: 45px;">
    <a class="btn-floating btn-large waves-effect waves-light purple darken-1" href="/upload"><i class="material-icons">add</i></a>
</div>