<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <style>
 
        #background{
            display: flex; 
            background-color: yellowgreen;
            width: 100%

        }

        #container {
            display: flex;
            flex-direction: column;
            height: 18vh;
            background-color: yellowgreen;

        }

        .image {
            display: flex;
            position: absolute;
            background-color: yellow;
            width: 15%;
            height: 15vh;
            justify-content: center;
        }

        .image1 {
            display: flex;
            margin-left: 84%;
            position: absolute;
            background-color: yellow;
            width: 15%;
            height: 15vh;
            justify-content: center;
        }

        img {
            position: absolute;
            margin-top: 15px;
            width: 60px;
            height: 80px;
            
        }

        #header {
            display: flex;
            justify-content: center;
            height: 15vh;
            font-size: 100px;
            color: white;
            background-color: darkgreen
            
            
        }
        
        #main {
            display: flex;
            background-color: yellowgreen;
            color: black;
            height: 50vh;
            flex-direction: row;
            
        }

        .left {
            display: flex;
            width: 20%;
            justify-content: center;
            margin-left: 1%;
            margin-right: 1%;
            background-color: white;
             
        }

        .middle {
            display: flex;
            width: 40%;
            justify-content: center;
            background-color: white;
        
        }

        .right {
            display: flex;
            justify-content: flex-start;
            width: 40%;
            margin-right: 1%;
            margin-left: 1%;
            background-color: white;
        
        }

        .right table{
            display: flex;
            position: absolute;
            margin-top: 4%;
            margin-right: 50px;
        }
        
        #footer {
            display: flex;
            justify-content: flex-end;
            height: 3vh;
            width: 100%;
            font-size: 30px;
            background-color: yellowgreen;
        }

    </style>
</head>
<body>
    
    
        <div id="container">
            <div id="header">Kerstborrel</div> 
                <div class="image">
                    <img src="kerstboom.png" alt=""> 
                </div>
                <div class="image1">
                    <img src="sneeuw.png" alt=""> 
                </div>
            <div class="header"></div>
        </div>
       
        
        <div id="main">
            <div class="left"> 
                <p>
                    <br> <b>Wanneer</b>
                    <br>vr 20 december 2024
                    <br>16:00 uur - 20:00 uur
                    <br>
                    <br> <b>Waar</b>
                    <br>Deltion college
                    <br>Gebouw groen
                    <br>Lokaal  2.099
                    <br>Mozartlaan 15
                    <br>8031 AA Zwolle 
                </p>
            </div>

            <div class="middle"> 
                <p>
                    <br> <b>SD Kerstborrel</b> 
                    <br>
                    <br>Bij deze bent u van harte uitgenodigd op de jaarlijkse
                    <br>kerstborrel van het ICT-Lyceum. deze word zoal
                    <br>altijd gehouden in 1 van de lokalen van het gebouw groen
                    <br>op de 2de verdieping.
                    <br>we hopen jou graag te zien voor een hapje en een
                    <br>drankje met alle medestudenten.
                    <br>Meldt u zich hiernaast even aan? 
                </p>
            </div>

            <div class="right">
                <p>
                    <br><b>aanmelden voor kerstborrel</b> 
                </p>
                
                <form action="aanmelding.php" method="post">
                    <table>
                        <tr>
                            <td><label for="naam">Naam</label></td>
                            <td><input type="text" name="naam" id="naam" placeholder="Vul hier uw naam in"></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email</label></td>
                            <td><input type="text" name="email" id="email" placeholder="Vul uw email in"></td>
                        </tr>
                        <tr>
                           <td colspan="2">
                                <input type="submit" value="meld mij aan">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

        <div id="footer"></div>
        

</body>
</html>
