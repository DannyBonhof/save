<?php

$knikkers = readline("hoeveel knikkers heb je gegooit? = ");
$totaal = 10;

if($knikkers >10){
echo "zoveel knikkers heb je niet";
}
else{
echo "aantal knikkers over = ";
echo $totaal - $knikkers;
}

?>