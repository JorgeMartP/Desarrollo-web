<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creando cookies</title>
</head>
<body>
<?php
setcookie("micookie", "LOS DATOS DE LA COOKIE", time()+45,"desarrollo%20web%/parte%202/cookies/");
echo $_COOKIE["micookie"];

setcookie("sel_idioma",$_GET["idioma"], time()+ 2629750);
header("Location:cookie_idioma.php")
?>
</body>
</html>
