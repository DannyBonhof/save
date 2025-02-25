<?php

$weekdagen = ["maandag","dinsdag","woensdag","donderdag","vrijdag"];

// print_r ($weekdagen); laat de hele array zien

echo "<ul>";
foreach($weekdagen as $dagen)
{
    echo "<li>".$dagen;
}
echo "</ul>";

?> 