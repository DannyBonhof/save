<?php


for ($i = 0; $i <100; $i++) {
    if ($i <10) {
        echo "0";
    }
    echo "$i";
    if ($i <99) {
        echo ", ";
    }
}