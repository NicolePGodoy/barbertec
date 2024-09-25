<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-6 text-start">
            <h1>Crear Usuario</h1>
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
    <form class="px-4 row" method="post" action="<?php echo BASE_URL; ?>user/create">
        <div class="mb-4 col-6">
            <label class="form-label" for="name">Nombre</label>
            <input class="form-control" name="name" id="name" type="text">
        </div>
        <div class="mb-4 col-6">
            <label class="form-label" for="lastname">Apellido</label>
            <input class="form-control" name="lastname" id="lastname" type="text">
        </div>
        <div class="mb-4 col-6">
            <label class="form-label" for="correo">Correo</label>
            <input class="form-control" name="correo" id="correo" type="text">
        </div>
        <div class="mb-4 col-6">
            <label class="form-label" for="passwprd">Contraseña</label>
            <input type="password" class="form-control input-form" id="" name="password" placeholder="password">
        </div>
        <div class="mb-5 col-6">
                            <select class="form-select input-form" id="rol" name="rol">
                                <option value="user">Usuario</option>
                                <option value="barber">Barbero</option>
                                <option value="admin">Administrador</option>
                            </select>
                        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary boton-oscuro px-5 py-2">Crear usuario</button>
        </div>
    </form>
</section>



            

