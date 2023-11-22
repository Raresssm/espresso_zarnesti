<?php
$nume = $_GET["nume"]; $prenume = $_GET["prenume"]; $telefon = $_GET["telefon"];

$db = mysqli_connect("localhost", "Rares", "Password_12", "persoane");
if (!$db) {
 exit('Conectare esuata: ' . mysqli_connect_error ());
}
echo 'Conectare reusita';
$interogare = "INSERT INTO Agenda (Nume, Prenume, Telefon)
 VALUES ('$nume' , '$prenume' , '$telefon' )";
mysqli_query($db,$interogare);

if (mysqli_errno($db))
 exit('<br>Adaugare esuata: '.mysqli_errno($db).": ".mysqli_error($db)."<BR>");

echo "<br> $prenume $nume a fost adaugat in agenda.";

mysqli_close($db);
?> 
