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

    </div>
    <footer>
        <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">keyboard_arrow_left</i></a></li>
            <li class="active"><a onclick="collUpload()">1</a></li>
            <li class="waves-effect"><a onclick="topsUpload()">2</a></li>
            <li class="waves-effect"><a onclick="bottomsUpload()">3</a></li>
            <li class="waves-effect"><a onclick="shoeUpload()">4</a></li>
            <li class="waves-effect"><a onclick="assUpload()">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">keyboard_arrow_right</i></a></li>
        </ul>
    </footer>

</div>