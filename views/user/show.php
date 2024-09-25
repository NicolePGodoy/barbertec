<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-6 text-start">
            <h1>Usuarios</h1>
        </div>
        <div class="col-6 text-end">
        <a href="<?php echo BASE_URL; ?>user">
            <button type="submit" class="btn btn-primary boton-oscuro px-5 py-2">
                Ir a usuarios
            </button>
        </a>
        </div>
    </div>
</div>
<section class="py-5 mx-4 mb-5 container-form">
    <form class="px-4 row" method="post" action="<?php echo BASE_URL; ?>user/create/<?php echo $user['id']; ?>">
    <div class="mb-4 col-6">
            <label class="form-label" for="name">Nombre</label>
            <input class="form-control" name="name" id="name" type="text" readonly value="<?php echo $user['name']; ?>">
        </div>
        <div class="mb-4 col-6"> 
            <label class="form-label" for="lastname">Apellido</label>
            <input class="form-control" name="lastname" id="lastname" type="text"readonly value="<?php echo $user['lastname']; ?>">
        </div>
        <div class="mb-4 col-6">
            <label class="form-label" for="correo">Correo</label>
            <input class="form-control" name="correo" id="correo" type="text" readonly value="<?php echo $user['correo']; ?>">
        </div>
        <div class="mb-4 col-6">
            <label class="form-label" for="rol">Rol</label>
            <input class="form-control input-form" id="rol" name="rol" readonly value="<?php echo $user['rol']; ?>">
        </div>
    </div>   
    </form>
</section>


