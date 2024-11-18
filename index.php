<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baza danych</title>
    
</head>
<body>
<?php
echo "<h1>Witamy w wypożyczalni rowerów, dzisiaj jest: ".date("d.m.Y")."</h1>";
?>

    <table>
    <tr >
        <th >
    KLIENCI
</th>
    <th >
    ROWERY
</th>

  </tr>
  <tr>
        <td>
<?php
require "connect.php";
$zapytanie='select count(klienci.id_k) from klienci;';
$wynik=mysqli_query($baza,$zapytanie);
$wiersz=mysqli_fetch_row($wynik);
echo  "Aktualna liczba klientów wynosi: ".$wiersz[0]."<br>";
	 
?>

    <a href="klienci.php">Wyświetl listę klientów</a>
</td>
    <td>  <?php
require "connect.php";
$zapytanie1='SELECT count(rowery.id_r) from rowery;';
$wynik1=mysqli_query($baza,$zapytanie1);
$wiersz1=mysqli_fetch_row($wynik1);
echo  "Aktualna liczba rowerów wynosi: ".$wiersz1[0]."<br>";

?>
    <a href="rowery.php">Wyświetl listę rowerów</a>
	
</td>
  </tr>
</table>

</body>
</html>
