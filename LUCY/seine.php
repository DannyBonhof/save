<?php

echo "| leeftijd  |     | prijs 
| 3 t/m 16  |     | 6 euro
| t/m 3     |     | gratis
| 17 t/m 64 |     | 12 euro
| 65+       |     | 9 euro\n";

$leeftijd = readline("wat is de leeftijd: ");

if ($leeftijd < 3) {
echo "kinderen onder de 3 zijn gratis";
}
else if ($leeftijd >= 3 && $leeftijd <= 16) {
echo "Kinderen 3 t/m 16 jaar krijgen 50% korting, het kaartje kost: 6 euro";
}
else if ($leeftijd >= 17 && $leeftijd <= 64) {
echo "Normaal kaartje kost 12 euro";
} 
else {
echo "Ouderen 65+ krijgen 25% korting, het kaartje kost: 9 euro";
}

?>