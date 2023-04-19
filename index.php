<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Video On Demand</title>
</head>

<body>
    <div class="title-sm">
        <h1>Internetowa wypożyczalnia filmów</h1>
    </div>
    <div class="title-sm-sec">
        <table>
            <tr>
                <th>Kryminał</th>
                <th>Horror</th>
                <th>Przygodowy</th>
            </tr>
            <tr>
                <td>
                    20
                </td>
                <td>
                    30
                </td>
                <td>
                    20
                </td>
            </tr>
        </table>
    </div>
    <div class="qrr1">
        <h3>Polecamy</h3>
        <?php
            $polaczenie = new mysqli("127.0.0.1","root","","dane3");
            $sql = "SELECT id,nazwa,opis,zdjecie FROm produkty WHERE id=18 OR id=22 OR id=23 OR ID=25;";
            $res = $polaczenie->query($sql);
            $rows = $res->fetch_all(MYSQLI_ASSOC);

            for($i=0;$i<count($rows);$i++)
            {
                echo "<div class='blok'><h4>".$rows[$i]["id"]." ".$rows[$i]["nazwa"]."</h4>";
                echo "<div class='img' style='background: url(".$rows[$i]["zdjecie"].")' alt='film'></div>";
                echo "".$rows[$i]["opis"]."</div>";
            }

            $polaczenie->close();
        ?>
         
    </div>
    <div class="qrr2">
        <h3>Filmy fantastyczne</h3>
        <?php
            $polaczenie = new mysqli("127.0.0.1","root","","dane3");
            $sql = "SELECT id,nazwa,opis,zdjecie FROM produkty WHERE Rodzaje_id=12;";
            $res = $polaczenie->query($sql);
            $rows = $res->fetch_all(MYSQLI_ASSOC);

            for($i=0;$i<count($rows);$i++)
            {
                echo "<div class='blok'><h4>".$rows[$i]["id"]." ".$rows[$i]["nazwa"]."</h4>";
                echo "<div class='img' style='background: url(".$rows[$i]["zdjecie"].")' alt='film'></div>";
                echo "".$rows[$i]["opis"]."</div>";
            }

            $polaczenie->close();
        ?>
        
    </div>
    <div class="footer">
        <form action="index.php" method="post">
            Usuń film nr.:<input type="number" name="liczba" id="liczba">
            <input type="submit" value="Usuń film">
        </form>
        
        Stronę wykonał:
        <a href="mailto:ja@poczta.com">Adamek</a>
    </div>
</body>

</html>



































