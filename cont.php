<?php
$username = isset($_POST["user"]) ? $_POST["user"] : null;
$password = isset($_POST["pass"]) ? $_POST["pass"] : null;
$db = mysqli_connect("localhost", "Rares1", "Password_12", "cafenea");
if (!$db) {
 exit('Conectare esuata: ' . mysqli_connect_error ());
}
echo 'Conectare reusita';
$interogare = "INSERT INTO cont (username, password)
 VALUES ('$username' , '$password')";
mysqli_query($db,$interogare);

if (mysqli_errno($db))
 exit('<br>Adaugare esuata: '.mysqli_errno($db).": ".mysqli_error($db)."<BR>");

echo "<br> Conectare reusita!";

mysqli_close($db);
?> 
