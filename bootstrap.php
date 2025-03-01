<?php

//Fontion pour inclure les parties html réutilisées du site
function html_parts($name)
{
    require(__DIR__ . "/html_parts/" . $name . ".php");

}

function imgSlider($name, $description)
{
    echo '<img src="/img/' . $name . '.webp" alt="' . $description . '">';
}

function compIndex($name, $description, $title, $texte)
{
    echo '<div class="compIndexCard">
        <div class="compIndexCardImg">
            <div class="filterCard"></div>';
    imgSlider($name, $description);
    echo '</div>
    <div class="textCompCard">
        <h3>' . $title . '</h3>
        <p>' . $texte . '</p>
    </div>
</div>';
}

?>