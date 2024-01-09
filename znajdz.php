<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>Grupa Polskich Kwiaciarni</h1>
    </header>
<section id="flexy">
    <section id="lewy">
        <h2>Menu</h2>
        <ol>
            <li><a href="index.html">Strona Główna</a></li>
            <li><a href="http://kwiaty.pl">Rozpoznaj kwiaty</a></li>
            <li>
                <a href="znajdz.php">Znajdź kwiaciarnię</a>
                <ul>
                    <li>w Warszawie</li>
                    <li>w Malborku</li>
                    <li>w Poznaniu</li>
                </ul>
            </li>
        </ol>
    </section>

    <section id="prawy">
        <h2>Znajdź kwiaciarnię</h2>
        <form action="" method="post">
        Podaj nazwę miasta:<input type="text" name="nazwa" id="">
        <input type="submit" value="SPRAWDŹ">
        <?php
            $polaczenie = mysqli_connect("localhost", "root", "", "kwiaciarnia");
            $nazwa = $_POST['nazwa'];
            $zapytanie = mysqli_query($polaczenie, "SELECT nazwa, ulica FROM `kwiaciarnie` WHERE miasto='$nazwa'");
            if(!empty($nazwa)){
                while($row = mysqli_fetch_row($zapytanie)){
                    echo "<h3>";
                    echo $row[0];
                    echo ", ";
                    echo $row[1];
                    echo "</h3>";
                }
            }
            mysqli_close($polaczenie);

        ?>
        </form>
    </section>
</section>
    <footer>
        <p>Stronę wykonał: 000000000000</p>
    </footer>

</body>
</html>