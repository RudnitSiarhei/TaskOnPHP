<?php
    echo "<span> Цикл №1: </span>"; 
    $i = 1;
    while($i <= 5)
    {
        echo $i++ . ' ';
    }
    echo '<br>';
    echo "<span> Цикл №2: </span>";
    $i = 1;
    while($i < 10)
    {
        echo $i . ' ';
        $i += 2;
    }
    echo '<br>';
    echo "<span> Цикл №3: </span>";
    $i = -6;
    while($i < 10)
    {
        echo $i . ' ';
        $i += 3;
    }
    echo '<br>';
    echo "<span> Цикл №4: </span>";
    $i = 5;
    while($i > 0)
    {
        echo $i . ' ';
        $i--;
    }
    echo '<br>';
    echo "<span> Цикл №5: </span>";
    $i = 2;
    while($i <= 32)
    {
        echo $i . ' ';
        $i *= 2;
    }
?>