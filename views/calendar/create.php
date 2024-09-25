<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-6 text-start">
            <h1>Agendar cita</h1>
        </div>
        <div class="col-6 text-end">
        <a href="<?php echo BASE_URL; ?>calendar">
            <button type="submit" class="btn btn-primary boton-oscuro px-5 py-2">
                Ir a agendas
            </button>
        </a>
        </div>
    </div>
</div>
<section class="py-5 mx-4 mb-5 container-form">
    <!-- se crea un formulario que enlaza con la url a gendasfunctions.php con metodo post -->
    <form class="px-md-4" method="POST" action="<?php echo BASE_URL; ?>calendar/create">
        <div class="px-4 row">
        <div class="mb-4 col-md-6">
            <!-- se generan los input para llenar los campos -->
            <label class="form-label" for="date">Fecha</label>
            <input type="date" class="form-control input-form" id="date" name="date" placeholder="date">
        </div>
        <div class="mb-4 col-md-6">
            <label class="form-label" for="time">Hora</label>
            <input type="time" class="form-control input-form" id="time" name="time" placeholder="time">
        </div>
        <div class="mb-4 col-md-6">
            <label class="form-label" for="service">Servicio</label>
            <select class="form-select input-form" id="service" name="service">
                <!-- se genera opciones para el elemento select  -->
                <option selected>Seleccione un servicio</option> 
                <!-- se crea el bucle while para iterar sobre los datos de una consulta a la db  -->
                    <!-- la variable $rest_services es el conjunto de resultados obtenidos a una consulta a la db -->
                <?php foreach ($services as $service): ?>
                    <!-- opcion representada por el elemento option , atributo value representa el valor que se enviará al servidor cuando se especifique cierta opcion -->
                    <!-- valor de la columna id de la fila actual del bloque -->
                        <!-- echo para mostrar cada opcion seguida del precio -->
                    <option value="<?php echo $service['id'] ?>"> <?php echo $service['description'] . ' - ' . '$' .  $service['price']?></option>
                    <!-- final del bucle -->
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-5 col-md-6">
            <!-- se crea ptra opcion de seleccion para "barbero"  -->
            <label class="form-label" for="barber">Barbero</label>
            <select class="form-select input-form" id="barber" name="barber">
                <!-- etiqueta opcion para desplegar la seleccion de barbero -->
                <option selected>Seleccione un barbero</option>
                    <!-- se crea el bucle while para iterar sobre los datos de una consulta a la db  -->
                    <!-- la variable $rest_barbers es el conjunto de resultados obtenidos a una consulta a la db -->
                <?php foreach ($barbers as $barber): ?>
                    <option value="<?php echo $barber['id']?>"><?php echo $barber['name'] . ' ' . $barber['lastname']; ?></option>
                    
                <?php endforeach; ?>
            </select>
        </div>
        <!-- se crea el boton hidden que enviará la informacion retenida en el formulario  -->
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary boton-oscuro px-5 py-2">Agendar</button>
        </div>
        </div>
    </form>
</section>
