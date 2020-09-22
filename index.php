<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="item a">
            <form action="insert.php" method="post">
                <input type="text" placeholder="Podaj imię" name="imie" id=""><br>
                <input type="text" placeholder="Podaj dzial" name="dzial" id=""><br>
                <input type="text" placeholder="Podaj zarobki" name="zarobki" id=""><br>
                <input type="date" name="data" id="">
                <input type="submit" value="Dodaj">
            </form>

            
        </div>
        <div class="item b">
            <?php
                $conn = new mysqli("172.16.131.125", "z_zxc", "tre", "z_zxc");
                $sql = "SELECT * FROM pracownicy";
                $result = mysqli_query($conn, $sql);
                echo("<table>");
                echo("
                <th>Imię</th>
                <th>Dział</th>
                <th>Zarobki</th>
                <th>Data urodzenia</th>
                <th>Usuwanie</th>
                ");
                while($row=mysqli_fetch_assoc($result)){
                    echo("<tr>");
                    echo("<td>");
                    echo($row['imie']);
                    echo("</td>");
                    echo("<td>");
                    echo($row['dzial']);
                    echo("</td>");
                    echo("<td>");
                    echo($row['zarobki']);
                    echo("</td>");
                    echo("<td>");
                    echo($row['data_urodzenia']);
                    echo("</td>");
                    echo("<td>");
                    echo('
                        <form action="delete.php" method="post">
                        <input type="text" name="id_del" style="display: none" value="'.$row["id_pracownicy"].'" id="">
                        <input type="submit" value="Usuń">
                        </form>
                    ');
                    echo("</td>");
                    echo("</tr>");
                };
                echo("</table>");
            ?>
        </div>
    </div>
</body>
</html>