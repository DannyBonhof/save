<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"> 

</head>

<body>
    <div id="container">
        <div id="header">header</div>
        <div id="menu">
            <div><a href="index.php?p=home">home</a></div>
            <div><a href="index.php?p=insert">insert</a></div>
            <div><a href="index.php?p=select">select</a></div>
        </div>
        <div id="content">
            <?php
            if (isset($_GET["p"])) {
                include "pages/".$_GET["p"].".php";
            }
            ?>
        </div>
        <div id="footer">footer</div>
    </div>
</body>
</html>