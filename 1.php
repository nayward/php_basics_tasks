<?php
$name = Stas;
$age =n;
    echo "My name is $name <br />";
    echo "I'm $age years old";
        if ($age >= 18 && $age<=59) echo "<br/>You should working yet";
            else if ($age > 59) echo "<br/> You have to retire";
             else if ($age < 0 ^ is_string($age)) echo "<br/> Unknown age";
                else if ($age >=0 && $age <=18) echo "<br/> You're too early to work";
                  

$day = 22;
    switch ($day) {
        case 1 : echo "<br/> It is a working day!"; break;
        case 2 : echo "<br/> It is a working day!"; break;
        case 3 : echo "<br/> It is a working day!"; break;
        case 4 : echo "<br/> It is a working day!"; break;
        case 5 : echo "<br/> It is a working day!"; break;
        case 6 : echo "<br/> It is a holiday!"; break;
        case 7 : echo "<br/> It is a holiday!"; break;
               default: echo " <br/> Unknown day";

$s = 1000;
$t = 20;
$sp_km_h = $s / $t;
$sp_m_s = $sp_km_h*1000/3600;
    echo "<br/>$sp_km_h km/hour = $sp_m_s m/sec";
    }
?>