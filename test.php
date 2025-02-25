<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        body {
            background-color: lightgreen; /* Achtergrondkleur instellen */
        }
    </style> 
    <form>
        Naam: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Mail adres:
        <br><input type="text" name="naam"> &nbsp;<input type="text" name="mail"><br>
        Achternaam: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Leeftijd: 
        <br><input type="text" name="achternaam"> &nbsp;<input type="text" name="leeftijd"><br>
        <br><input type="submit" value="Verzenden"><br>
        
    <form>
        <?php
        $naam = $_GET["naam"];
        $achternaam = $_GET["achternaam"];
        $mail = $_GET["mail"];
        $leeftijd = $_GET["leeftijd"];
        echo "<br>";
        echo "Volledige naam: ",$naam, " " ,$achternaam, "<br>", "Leeftijd: ",$leeftijd;
        echo "<br>";
        echo "E-Mail adres: ",$mail;
        ?>

    
    


</body>
</html>
 