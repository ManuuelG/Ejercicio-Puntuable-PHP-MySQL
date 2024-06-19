<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Generador de lotería</title>
</head>

<nav class="topnav">
<div>
    <a class="active" href="index.php">Home</a>
    <a class="about"  href="loteria.php">Loteria</a>
    <a class="about"  href="libros.php">Libros</a>
</div>
</nav>
<body>

<div class="container">

<?php 


function generadorNumeros($inicio,$fin,$cantidad){

    $numeros = range($inicio, $fin);
    shuffle($numeros);

    return array_slice ($numeros, 0, $cantidad);
} 

$rangos = [
    "España" => ["inicio" => 1, "fin" => 49, "cantidad" => 6],
    "Alemania" => ["inicio" => 1, "fin" => 49, "cantidad" => 6],
    "Francia" => ["inicio" => 1, "fin" => 49, "cantidad" => 5],
    "Italia" => ["inicio" => 1, "fin" => 90, "cantidad" => 6],
];

$pais = $_GET['pais'];

$rango = $rangos[$pais];



echo "<h1>La combinación ganadora para {$pais} es:</h1>";

$numeros = generadorNumeros($rango['inicio'], $rango['fin'], $rango['cantidad']);



 echo "<div class='loteria-numeros'>";
    foreach ($numeros as $numero) {
        echo "<span class='loteria-numero'>{$numero}</span>";
    }
    echo "</div>";


?>


<form action="loteria.php" method="get">
    <button type="submit" class="btn btn-secondary">Volver a la lotería</button>
    </form>
    </div>
</body>
</html>