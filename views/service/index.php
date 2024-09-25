<div class="container my-5">
    <div class="row align-items-center">
        <div class="col">
            <h1>Servicios</h1>
        </div>
        <div class="col text-end">
            <a href="<?php echo BASE_URL; ?>service/create">
                <button class="btn btn-success">Crear servicio</button>
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
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($services as $service): ?>
                    <tr>
                        <th scope="row"><?= $service['id']; ?></th>
                        <td><?= $service['description']; ?></td>
                        <td><?= $service['price']; ?></td>
                        <td>
                            <a href="<?php echo BASE_URL; ?>service/edit/<?php echo $service['id']; ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="<?php echo BASE_URL; ?>service/delete/<?php echo $service['id']; ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>  
</section>