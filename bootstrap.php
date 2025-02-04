<?php

//Fontion pour inclure les parties html réutilisées du site
function html_parts($name) {
    require(__DIR__."../html_parts/".$name.".php"); 
}



?>