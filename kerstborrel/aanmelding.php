<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #container {
        display: flex;
        background-color: yellowgreen;
        height: 90px;
        
    }
    .tekst {
        display: flex;
        margin-left: 170px;
        margin-top: 20px;
    }


    .image {
            display: flex;
            position: absolute;
            background-color: yellow;
            width: 150px;
            height: 70px;
            margin-top: 10px;
            margin-left: 10px;
            justify-content: center;
    }

    
    img {
        position: absolute;
        width: 35px;
        height: 60px;
        margin-top: 5px;
    }





</style>


<body>
<?php
    $name = $_POST['naam'];
    $email = $_POST['email'];
?>
    
    <div id="container">
    <div class="image">
        <img src="kerstboom.png" alt=""> 
    </div>
    <div class="tekst">
        <?php 
        echo  "Leuk $name, dat jij je hebt aangemeld hebt voor de kerstborrel. <br>";
        echo "Binnenkort ontvang je op: $email een bevestiging van deze aanmelding";
        ?>
    </div>


    
</body>
</html>