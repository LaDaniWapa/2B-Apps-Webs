<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio2</title>
</head>

<body>
    <a href="http://localhost/intro">Back</a>
    <?php
    print "<h1>Numeros del 1 al 100</h1>";

    for ($i = 1; $i <= 100; $i++) {
        print $i;
        print "<br>";
    }
    ?>
</body>

</html>