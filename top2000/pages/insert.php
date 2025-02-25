<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="right">
                <p>
                    <br><b>Nieuwe artist invoeren</b> 
                </p>
                
                <form action="select.php" method="post">
                    <table>
                        <tr>
                            <td><label for="name">Naam:</label></td>
                            <td><input type="text" name="naam" id="name" placeholder="naam"></td>
                        </tr>
                        <tr>
                            <td><label for="country">Land:</label></td>
                            <td><input type="text" name="land" id="country" placeholder="land"></td>
                        </tr>
                        <tr>
                           <td colspan="2">
                                <input type="submit" value="Verzenden">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

</html>