<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1></h1>

<table>
    <tr> 
    <td><b>selecteer artiesten</b></td>
    </tr>


    <?php
    $con = mysqli_connect("localhost","root"," ","top2000");
    $res = mysqli_query($con, "SELECT * FROM artist");
    // echo "<table class=\"cameras\">";
    
    while ( $row = mysqli_fetch_assoc($res))
    {  
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['country'] . "</td>";
        echo "</tr>";

    }
    echo "</table>";
    
    mysqli_close($con);
    ?>



    
</body>
</html>