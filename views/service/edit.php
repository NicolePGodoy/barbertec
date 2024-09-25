<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-6 text-start">
            <h1>Editar servicio</h1>
        </div>
        <div class="col-6 text-end">
        <a href="<?php echo BASE_URL; ?>service">
            <button type="submit" class="btn btn-primary boton-oscuro px-5 py-2">
                Ir a servicios
            </button>
        </a>
        </div>
    </div>
</div>
<section class="py-5 mx-4 mb-5 container-form">
    <form class="px-4 row" method="post" action="<?php echo BASE_URL; ?>service/edit/<?php echo $service['id']; ?>">
        <div class="mb-4 col-4">
            <label class="form-label" for="price">Precio</label>
            <input class="form-control" name="price" id="price" type="text" value="<?= $service['price']?>">
        </div>
        <div class="mb-4 col-md-12">
            <label class="form-label" for="description">Descripción</label>
            <textarea class="form-control" name="description" id="description" rows="8"><?= $service['description']; ?></textarea>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary boton-oscuro px-5 py-2">Editar</button>
        </div>
    </form>
</section>
