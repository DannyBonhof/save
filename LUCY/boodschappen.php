<?php
function vraagAantalProducten() {
    while (true) {
        echo "Hoeveel producten wil je toevoegen? ";
        $input = trim(fgets(STDIN));
        if (is_numeric($input) && (int)$input > 0) {
            return (int)$input;
        } else {
            echo "Ongeldige invoer. Voer een positief getal in.\n";
        }
    }
}

function vraagProducten($aantal) {
    $producten = [];

    for ($i = 1; $i <= $aantal; $i++) {
        echo "Product $i van $aantal: ";
        $product = trim(fgets(STDIN));
        $producten[] = $product;
    }

    return $producten;
}

function printBoodschappenLijst($producten) {
    echo "De volgende producten staan op je boodschappenlijst:\n";

    foreach ($producten as $product) {
        echo "$product\n";
    }
}

$aantalProducten = vraagAantalProducten();
$producten = vraagProducten($aantalProducten);
printBoodschappenLijst($producten);

?>
 