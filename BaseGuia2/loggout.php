<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<?php

echo "Hasta pronto " . $_SESSION["nombre"];

session_destroy();

echo "<br><br>";
echo "Sesion cerrada correctamente";

?>
</body>
</html>