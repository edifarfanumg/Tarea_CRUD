<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
</head>
<body>
    <div class="container">
        <h1>Lista de Estudiantes</h1>
        <a href="<?= site_url('estudiantes/crear') ?>" class="btn btn-primary">Agregar Estudiante</a>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Correo Electrónico</th>
                    <th>Curso</th>
                    <th>Edad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiantes as $estudiante): ?>
                <tr>
                    <td><?= $estudiante['nombre'] ?></td>
                    <td><?= $estudiante['apellido'] ?></td>
                    <td><?= $estudiante['telefono'] ?></td>
                    <td><?= $estudiante['direccion'] ?></td>
                    <td><?= $estudiante['correo_electronico'] ?></td>
                    <td><?= $estudiante['curso'] ?></td>
                    <td><?= $estudiante['edad'] ?></td>
                    <td>
                        <a href="<?= site_url('estudiantes/editar/'.$estudiante['id']) ?>" class="btn btn-secondary">Editar</a>
                        <a href="<?= site_url('estudiantes/eliminar/'.$estudiante['id']) ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este estudiante?')">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

