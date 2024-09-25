<div class="container my-5">
    <div class="row align-items-center">
        <div class="col">
            <h1>Administrar usuarios</h1>
        </div>
        <div class="col text-end">
            <a href="<?php echo BASE_URL; ?>user/create">
                <button class="btn btn-success">Crear usuario</button>
            </a>
        </div>
    </div>
</div>
<section class="py-6 mx-4 mb-5">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <th scope="row"><?= $user['id']; ?></th>
                        <td><?= $user['name']; ?></td>
                        <td><?= $user['lastname']; ?></td>
                        <td><?= $user['correo']; ?></td>
                        <td><?= $user['rol']; ?></td>
                        <td>
                            <a href="<?php echo BASE_URL; ?>user/show/<?php echo $user['id']; ?>" class="btn btn-small btn-info"><i class="fas fa-eye"></i></a>
                            <a href="<?php echo BASE_URL; ?>user/edit/<?php echo $user['id']; ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="<?php echo BASE_URL; ?>user/delete/<?php echo $user['id']; ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>