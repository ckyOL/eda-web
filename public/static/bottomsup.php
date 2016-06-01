<div id="uploadDiv">
    <div class="row">
        <div class="col s12">
            <h3 class="flow-text">Bottoms picture</h3>
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
            <input value="" id="Brand" type="text" class="validate">
            <label class="active" for="Brand">Brand</label>
        </div>
        <div class="input-field col s6">
            <input value="" id="Describe" type="text" class="validate">
            <label class="active" for="Describe">Describe</label>
        </div>
        <footer>
            <ul class="pagination">
                <li class="waves-effect"><a onclick="getNextForm('topsup.php')"><i class="material-icons">keyboard_arrow_left</i></a></li>
                <li class="waves-effect"><a onclick="getNextForm('collup.php')">1</a></li>
                <li class="waves-effect"><a onclick="getNextForm('topsup.php')">2</a></li>
                <li class="active"><a onclick="getNextForm('bottomsup.php')">3</a></li>
                <li class="waves-effect"><a onclick="getNextForm('shoesup.php')">4</a></li>
                <li class="waves-effect"><a onclick="getNextForm('assup.php')">5</a></li>
                <li class="waves-effect"><a onclick="getNextForm('shoesup.php')"><i class="material-icons">keyboard_arrow_right</i></a></li>
            </ul>
        </footer>
    </div>


</div>