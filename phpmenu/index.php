<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        #header, #footer {
            background-color: navy;
            color: white;
        }

        #content {
            background-color: yellow;
        }

        #menu{
            display:flex;
        }

        #menu div{
            border: 1px solid gray;
            width: 200px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="header">header</div>
        <div id="menu">
            <div><a href="index.php?p=home">home</a></div>
            <div><a href="index.php?p=chris">chris</a></div>
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