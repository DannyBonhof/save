<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
        /* .Cameras
        {
            border : solid 1px green;
            font-family: "Tahoma";
        }    
        tr:nth-child(even) {background: #CCC}
        tr:nth-child(odd) {background: #EEE}
        
     */

table {
  
  border-collapse: collapse;
  width: 35%;
}

th, td {
  text-align: left;
  padding: 4px;
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}

</style>
 
<body>
    <h1>Flitspalen</h1>

<table>
    <tr> 
    <td><b>ID</b></td>
    <td><b>Address</b></td>
    <td><b>City</b></td>
    <td><b>Max Speed</b></td> 
    </tr>



    <?php
    $con = mysqli_connect("localhost","root","","test");
    $res = mysqli_query($con, "SELECT * FROM cameras");
    // echo "<table class=\"cameras\">";
    
    while ( $row = mysqli_fetch_assoc($res))
    {  
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['city'] . "</td>";
        echo "<td>" . $row['max_speed'] . "</td>";
        echo "</tr>";

    }
    echo "</table>";
    
    
    
    
    mysqli_close($con);
    ?>
</table>


<h1>50 kmh boetes</h1>
<table>
    <tr> 
    <td><b>ID</b></td>
    <td><b>Speed lmit</b></td>
    <td><b>Fine</b></td>
    <td><b>Date</b></td> 
    </tr>



    <?php
    $con = mysqli_connect("localhost","root","","test");
    $res = mysqli_query($con, "SELECT * FROM fines WHERE speed_limit = '50'");
    // echo "<table class=\"cameras\">";
    
    while ( $row = mysqli_fetch_assoc($res))
    {  
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['speed_limit'] . "</td>";
        echo "<td>" . $row['fine'] . "</td>";
        echo "<td>" . $row['created_at'] . "</td>";
        echo "</tr>";

    }
    echo "</table>";
    
    
    
    
    mysqli_close($con);
    ?>

</table>

<h1>Overtredingen van kenteken XN-88-88</h1>
<table>
    <tr> 
    <td><b>ID</b></td>
    <td><b>camera id</b></td>
    <td><b>license</b></td>
    <td><b>speed</b></td> 
    <td><b>expdate</b></td> 
    </tr>



    <?php
    $con = mysqli_connect("localhost","root","","test");
    $res = mysqli_query($con, "SELECT * FROM flashes WHERE license ='XN-88-88'");
    // echo "<table class=\"cameras\">";
    
    while ( $row = mysqli_fetch_assoc($res))
    {  
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['camera_id'] . "</td>";
        echo "<td>" . $row['license'] . "</td>";
        echo "<td>" . $row['speed'] . "</td>";
        echo "<td>" . $row['expdate'] . "</td>";
        echo "</tr>";

    }
    echo "</table>";
    
    
    
    
    mysqli_close($con);
    ?>

</table>

<h1>Hoogste overtredingen top 10</h1>
<table>
    <tr> 
    <td><b>ID</b></td>
    <td><b>speed limit</b></td>
    <td><b>fine</b></td>
    <td><b>license</b></td> 
    </tr>



    <?php
    $con = mysqli_connect("localhost","root","","test");
    // $res = mysqli_query($con, "SELECT * FROM fines WHERE fine BETWEEN 2184 AND 2211");
    $res = mysqli_query($con, "SELECT * FROM fines ORDER BY fine DESC LIMIT 10");
    $kenteken = mysqli_query($con, "SELECT * FROM flashes ORDER BY license DESC LIMIT 10");
    // echo "<table class=\"cameras\">";
    
    while ($row = mysqli_fetch_assoc($res))
    {
        $ken = mysqli_fetch_assoc($kenteken);
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['speed_limit'] . "</td>";
        echo "<td>" . $row['fine'] . "</td>";
        echo "<td>" . $ken['license'] . "</td>";
        echo "</tr>";

    }
    echo "</table>";
    
    
    
    
    mysqli_close($con);
    ?>

</table>

<h1>Cameras meeste overtredingen top 10</h1>
<table>
    <tr> 
    <td><b>ID</b></td>
    <td><b>speed limit</b></td>
    <td><b>driver speed</b></td>
    <td><b>fine</b></td> 
    </tr>



    <?php
    $con = mysqli_connect("localhost","root","","test");
    // $res = mysqli_query($con, "SELECT * FROM fines WHERE fine BETWEEN 2184 AND 2211");
    $res = mysqli_query($con, "SELECT * FROM flashes ORDER BY camera_id DESC LIMIT 10");
    // echo "<table class=\"cameras\">";
    
    while ( $row = mysqli_fetch_assoc($res))
    {  
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['camera_id'] . "</td>";
        echo "<td>" . $row['license'] . "</td>";
        echo "<td>" . $row['speed'] . "</td>";
        echo "</tr>";

    }
    echo "</table>";
    
    
    
    
    mysqli_close($con);
    ?>

</table>







</body>
</html>