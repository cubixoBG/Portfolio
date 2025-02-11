<?php

//Fontion pour inclure les parties html réutilisées du site
function html_parts($name) {
    require(__DIR__."../html_parts/".$name.".php"); 
}

function imgSlider($name, $description) {
    echo '<img src="../img/'.$name.'.webp" alt="'.$description.'">';
}

?>