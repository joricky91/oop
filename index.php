<?php 
    require ("animal.php");
    require ("ape.php");
    require ("frog.php");

    echo "<h2>Animal</h2>";
    $sheep = new Animal('shaun');
    echo $sheep->name;
    echo "<br>";
    echo $sheep->legs;
    echo "<br>";
    echo $sheep->cold_blooded;
    echo "<br>";

    echo "<h2>Ape</h2>";
    $sungokong = new Ape('kera sakti');
    $sungokong->yell();

    echo "<h2>Frog</h2>";
    $kodok = new Frog("buduk");
    $kodok->jump();
?>