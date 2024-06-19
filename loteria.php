<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>El Lotero</title>
</head>

<nav class="topnav">
<div>
    <a class="active" href="index.php">Home</a>
    <a class="about"  href="loteria.php">Loteria</a>
    <a class="about"  href="libros.php">Libros</a>
</div>
</nav>


<body>
    
<H1>Escoja que lotería le gustaría comprobar:</H1>

<form action="generador_loteria.php" method="get">
<button type="submit" name="pais" value="España" class="btn btn-info">Loteria Española</button>
<button type="submit" name="pais" value="Alemania" class="btn btn-warning">Loteria Alemana</button>
<button type="submit" name="pais" value="Francia" class="btn btn-danger">Loteria Francesa</button>
<button type="submit" name="pais" value="Italia" class="btn btn-dark">Loteria Italiana</button>

</form>



</body>
</html>