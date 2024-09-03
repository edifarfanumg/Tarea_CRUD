<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Estudiante</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
</head>
<body>
    <div class="container">
        <h1>Agregar Estudiante</h1>
        <form method="post" action="<?= site_url('estudiantes/guardar') ?>" class="form">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>

            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" class="form-control" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control">

            <label for="direccion">Dirección:</label>
            <textarea name="direccion" id="direccion" class="form-control"></textarea>

            <label for="correo_electronico">Correo Electrónico:</label>
            <input type="email" name="correo_electronico" id="correo_electronico" class="form-control">

            <label for="curso">Curso:</label>
            <input type="text" name="curso" id="curso" class="form-control">

            <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad" class="form-control">

            <input type="submit" value="Guardar" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
