<nav>
    <div class="nav-wrapper light-blue darken-1">

        <a class="brand-logo hide-on-med-and-down" href="/">EDA</a>
        <ul class="right ">
            <li><a class="modal-trigger" href="#searchmodal"><i class="material-icons left">search</i>Search Collocation</a></li>
            <li><a href="/register">Sign up</a></li>
            <li><a href="/login">Login in</a></li>
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