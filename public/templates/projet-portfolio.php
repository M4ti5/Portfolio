<?php
function doubleQuote(){
    return stripcslashes(addslashes('"'));
}
function newProjectsCard($title,$viewLink,$gitLink,$date,$techno,$decription){

    echo "<div class='projects' onclick=".doubleQuote()."redirect('{$viewLink}')".doubleQuote().">
            <div class='titre'>".$title."</div>
            <div class='description'>".$decription."</div>
            <div class='date'>".$date."</div>
            <div class='technos'>  
                <a href='".$gitLink."' ><i class='ref-icones fab fa-2x fa-github'></i></a>
                <span>".$techno."</span>
            </div>
        </div>";
}