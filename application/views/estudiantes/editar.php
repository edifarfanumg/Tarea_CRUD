<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estudiante</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
</head>
<body>
    <div class="container">
        <h1>Editar Estudiante</h1>
        <form method="post" action="<?= site_url('estudiantes/actualizar') ?>" class="form">
            <input type="hidden" name="id" value="<?= $estudiante['id'] ?>">

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="<?= $estudiante['nombre'] ?>" required>

            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" class="form-control" value="<?= $estudiante['apellido'] ?>" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control" value="<?= $estudiante['telefono'] ?>">

            <label for="direccion">Dirección:</label>
            <textarea name="direccion" id="direccion" class="form-control"><?= $estudiante['direccion'] ?></textarea>

            <label for="correo_electronico">Correo Electrónico:</label>
            <input type="email" name="correo_electronico" id="correo_electronico" class="form-control" value="<?= $estudiante['correo_electronico'] ?>">

            <label for="curso">Curso:</label>
            <input type="text" name="curso" id="curso" class="form-control" value="<?= $estudiante['curso'] ?>">

            <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad" class="form-control" value="<?= $estudiante['edad'] ?>">

            <input type="submit" value="Actualizar" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
