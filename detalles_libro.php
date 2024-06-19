<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Detalles del libro</title>
</head>

<nav class="topnav">
    <div>
        <a class="active" href="index.php">Home</a>
        <a class="about" href="loteria.php">Loteria</a>
        <a class="about" href="libros.php">Libros</a>
    </div>
</nav>


<body>

    

    <?php

    $libros = [

        "El señor De Los Anillos" => ["Autor" => "J.R.R Tolkien", "Fecha de publicación" => 1954, "Género" => "Fantasía"],
        "Harry potter" => ["Autor" => "J.K. Rowling", "Fecha de publicación" => 1997, "Género" => "Fantasía"],
        "Ulises" => ["Autor" => "James Joyce", "Fecha de publicación" => 1922, "Género" => "Ficción moderna"],
        "Cien años de soledad" => ["Autor" => "Gabriel García Márquez", "Fecha de publicación" => 1967, "Género" => "Novela"],
        "1984" => ["Autor" => "George Orwell", "Fecha de publicación" => 1949, "Género" => "Distopía"],
    ];



    $detalles = $libros[$_GET['nombre']];



    echo "<h1> {$_GET['nombre']} </h1>";



    echo "<p> Autor: {$detalles['Autor']} </p>";
    echo "<p> Fecha de Publicación: {$detalles['Fecha de publicación']} </p>";
    echo "<p> Género: {$detalles['Género']} </p>";


    ?>


<form action="libros.php" method="get">
    <button type="submit" class="btn btn-success">Volver a la biblioteca virtual</button>
    </form>


</body>

</html>