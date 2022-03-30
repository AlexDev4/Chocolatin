<!doctype html>
<html lang="fr">
<link rel="stylesheet" href="style.css"/>
<title>
    <?php
    if (isset ($title))
        {
            echo $title;
        }
    else
        {
            echo 'erreur';
        }
    ?>
</title>
<img id="headerimg" src="/assets/header.jpg"
     alt="en-tête">
<nav>
    <ul class = "menu">
        <li>
            <a href="">Accueil</a
        </li>
        <li>
            <a href="">Gamme</a>
        </li>
        <li>
            <a href="">Horaires</a>
        </li>
        <li>
            <a href="">Plan d'accès</a>
        </li>
        <li>
            <a href ="">Nous Contacter</a>
        </li>
        <li>
            <a href="">Facebook</a>
        </li>
    </ul>
</nav>