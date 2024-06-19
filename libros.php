<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Biblioteca virtual</title>
</head>

<nav class="topnav">
    <div>
        <a class="active" href="index.php">Home</a>
        <a class="about" href="loteria.php">Loteria</a>
        <a class="about" href="libros.php">Libros</a>
    </div>
</nav>

<body>

    <h1>¡Bienvenido a la librería virtual!</h1>
    <h2>Aquí podrás encontrar detalles de libros, poco a poco iremos actualizando la lista.</h2>


    <table>
        <tr>
            
            <th>Título</th>
            <th>Autor</th>
            <th>Fecha de publicación</th>
            <th>Género</th>


        </tr>

        <?php

        $libros = [

            "El señor De Los Anillos" => ["Autor" => "J.R.R Tolkien", "Fecha de publicación" => 1954, "Género" => "Fantasía"],
            "Harry potter" => ["Autor" => "J.K. Rowling", "Fecha de publicación" => 1997, "Género" => "Fantasía"],
            "Ulises" => ["Autor" => "James Joyce", "Fecha de publicación" => 1922, "Género" => "Ficción moderna"],
            "Cien años de soledad" => ["Autor" => "Gabriel García Márquez", "Fecha" => 1967, "Género" => "Novela"],
            "1984" => ["Autor" => "George Orwell", "Fecha de publicación" => 1949, "Género" => "Distopía"],
        ];



        foreach ($libros as $libro => $dato) {

            echo "<tr>";
            echo "<td>";
            echo "<a href='detalles_libro.php?nombre={$libro}'</a>";
            echo $libro;
            echo "</td>";

            foreach ($dato as $detalles => $info) {

                echo "<td>";
                echo $info;
                echo "</td>";
            }
        }

        ?>

    </table>

    <form action="index.php" method="get">
    <button type="submit" class="btn btn-primary">Volver a la pagina inicial</button>
    </form>
    

</body>

</html>