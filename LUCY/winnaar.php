<?php

$score1 = readline("wat is de score van speler 1? ");
$score2 = readline("wat is de score van speler 2? ");

if ($score1 > $score2) {
    echo "speler 1 heeft gewonnen! ";
}
else if ($score1 == $score2) {
    echo "het is gelijk spel! ";
}
else {
    echo "speler 2 heeft gewonnen";
}

?>