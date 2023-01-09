<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laczenie</title>
</head>
<body>
<?php
               $polaczenie=mysqli_connect('localhost','root','','ksiegarnia');
               if ($polaczenie) 
               {
                echo "Połączyliśmy się z bazą danych";
                $zapytanie="Select tytul from ksiazki group by tytul asc";
                $wynik=mysqli_query($polaczenie,$zapytanie);
                while($wiersz=mysqli_fetch_array($wynik)){
                    echo $wiersz['tytul']."<br>";
                }
               }
               else
               {
                exit("Błąd połączenia z bazą");
               }
            ?>
</body>
</html>