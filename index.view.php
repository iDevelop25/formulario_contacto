<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario contacto</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="wrap">
        <!-- Redirige a la misma pagina luego de enviar el form -->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="">
            <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo:" value="">
            <textarea name="mensaje" id="mensaje" class="form-control" placeholder="Mensaje..."></textarea>



            <input type="submit" name="submit" class="btn btn-primary" value="Enviar correo">
        </form>
    </div>
</body>

</html>