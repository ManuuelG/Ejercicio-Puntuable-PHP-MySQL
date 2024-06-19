


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="vjewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Loteria y libros</title>

</head>
<nav class="topnav">
<div>
    <a class="active" href="index.php">Home</a>
    <a class="about"  href="loteria.php">Loteria</a>
    <a class="about"  href="libros.php">Libros</a>
</div>
</nav>


<body>


    <h1>¡LoteLibros!</h1>

    <div class="imagenes">

    <img src="assets/img2.rtve.jpeg" alt="Loteria">
    <img src="assets/libros.jpg" alt="Libros">

    </div>

    <h1>¡Comprueba la lotería de hoy o los detalles de un libro!</h1>
    <h3 class="proverbios">

    <?php 
    
    
    $proverbios = [
        "Distintas cerraduras se deben abrir con diferentes llaves",
        "Un caballo ciego siempre se asusta a sí mismo",
        "Debes ingresar a la guarida del tigre para atrapar a sus cachorros",
        "Cava el pozo antes de tener sed",
        "Cuanto más larga es la cuerda, más alto volará la cometa",
        "Una conversación única con un sabio vale tanto como un mes estudiando libros",
        "Las mujeres sostienen la mitad del cielo",
        "El mejor momento para plantar un árbol fue hace 20 años. El segundo mejor momento es ahora.",
        
    ];

    $proverbioRandom = $proverbios[array_rand($proverbios)];

    
    echo " $proverbioRandom";
    
    
    ?>




</h3>

    

    


















</body>

</html>