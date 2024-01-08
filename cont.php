<?php
    include("database.php");
?>

<?php
$username = isset($_POST["user"]) ? $_POST["user"] : null;
$password = isset($_POST["pass"]) ? $_POST["pass"] : null;
$interogare = "INSERT INTO cont (username, password)
 VALUES ('$username' , '$password')";
mysqli_query($conn,$interogare);

if (mysqli_errno($conn))
 exit('<br>Adaugare esuata: '.mysqli_errno($conn).": ".mysqli_error($conn)."<BR>");

echo "Conectare reusita!";

mysqli_close($conn);
?> 
