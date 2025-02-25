<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .Studenten
        {
            border : solid 1px green;
            font-family: "Tahoma";
        }    
        tr:nth-child(even) {background: #CCC}
        tr:nth-child(odd) {background: #EEE}
 
 
    </style>
 
</head>
<body>
    <h1>Studenten</h1>
   
    <?php
 
        // 1. Connect
        $con = mysqli_connect("localhost", "root", "", "school");
        // wel checken of het gelukt is, anders niet doorgaan natuurlijk!!!!!!
 
        // 2. Stel een vraag
        $res = mysqli_query($con, "SELECT * FROM leerlingen");
        // $res = mysqli_query($con, "SELECT * FROM leerlingen WHERE klas = 'SD1B'");  // als je alleen de leerlingen van een klas wilt
        // 3. Haal de resultaten op.
        // je krijgt altijd records maar je weet niet hoeveel. => loop?
        // welke type loop => while?
       
        echo "<table class=\"leerlingen\">";
        while ( $row = mysqli_fetch_assoc($res))
        {  
            echo "<tr>"; 
            echo "<td>" . $row['voornaam'] . "</td>";
            echo "<td>" . $row['achternaam'] . "</td>";
            echo "<td>" . $row['leeftijd'] . "</td>";
            echo "<td>" . $row['klas'] . "</td>";
            echo "<td>" . $row['id'] . "</td>";
           
 
            echo "</tr>";
 
        }
        echo "</table>";
 
 
        //4 connectie sluiten.
        mysqli_close($con);
 
    ?>

<?php


// Create connection
$conn = mysqli_connect("localhost", "root", "", "school");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO leerlingen (voornaam, achternaam, leeftijd, klas)
VALUES ('Peter', 'Pan', '33', 'SD1A')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>







</body>
</html>

