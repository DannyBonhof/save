<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="wrapper">
        <nav>
            <a class="active" href="index.php">home</a>
            <a class="not_active" href="toevoegen.php">toevoegen</a>
            <a class="not_active" href="herstel.php">herstellen</a>
        </nav>
        <h1>Onze helden van 1974!</h1>
        <tbody>
            <tr>Foto</tr>
            <tr>Voornaam</tr>
            <tr>Achternaam</tr>
            <tr>geboortedatum</tr>
            <tr>Aanpassen</tr>
            <tr>Delete</tr>
        </tbody>
</body>

<style>

body {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    background-image: url(images/de_helden3.jpg);
    background-size: cover;
}

body {
    display: block;
    margin: 8px;
}

#wrapper {
    width: 800px;
    margin: auto;
    background-color: antiquewhite;
    padding: 0px;
    padding-bottom: 10px;
    background-color: rgba(255, 255, 255, 0.8);
}


div {
    display: block;
    unicode-bidi: isolate;
}

nav {
    background-color: rgb(252, 185, 77);
    padding: 15px;
    padding-bottom: 3px;
    border-bottom: 5px solid rgb(255, 149, 0);
    margin-bottom: 20px;
}

nav {
    display: block;
    unicode-bidi: isolate;
}

.active {
    color: rgb(4, 68, 14);
    background-color: rgb(255, 149, 0);
}

a {
    text-decoration: none;
    padding: 8px;
    border-radius: 5px;
}

.not_active {
    color: rgb(142, 10, 26);
}

a {
    text-decoration: none;
    padding: 8px;
    border-radius: 5px;
}

nav {
    background-color: rgb(252, 185, 77);
    padding: 15px;
    padding-bottom: 3px;
    border-bottom: 5px solid rgb(255, 149, 0);
    margin-bottom: 20px;
}


nav {
    display: block;
    unicode-bidi: isolate;
}

h1 {
    text-align: center;
}


h1 {
    display: block;
    font-size: 2em;
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    unicode-bidi: isolate;
}

table, td {
    border-collapse: collapse;
    margin: auto;
    padding: 10px;
    border: 1px solid black;
    opacity: 1;
}

table {
    display: table;
    border-collapse: separate;
    box-sizing: border-box;
    text-indent: initial;
    unicode-bidi: isolate;
    border-spacing: 2px;
    border-color: gray;
}

th {
    display: table-cell;
    vertical-align: inherit;
    font-weight: bold;
    text-align: internal-center;
    unicode-bidi: isolate;
}

</style>

<?php
 

 $con = mysqli_connect("localhost", "root", "", "voetbal");
 $res = mysqli_query($con, "SELECT * FROM voetballers");

 echo "<table class=\"leerlingen\">";
 while ( $row = mysqli_fetch_assoc($res))
 {  
    $fotoUrl = "<img src=\"afbeeldingen/". $row["foto_url"] . "\" alt=\"" . $row["foto_url"] . "\" style=\"width:50px;\">";

     echo "<tr>"; 
     echo "<td>" . $fotoUrl . "</td>";
     echo "<td>" . $row['voornaam'] . "</td>";
     echo "<td>" . $row['achternaam'] . "</td>";
     echo "<td>" . $row['geboortedatum'] . "</td>";
     echo "</tr>";

 }
 echo "</table>";

 mysqli_close($con);



?>

</html>