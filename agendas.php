<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Agendar Citas</title>
</head>

<body>   
    <?php
        include_once 'php/connectionDB.php';
        
        $res_barbers = $conn->query("SELECT id, name, lastname FROM users WHERE rol = 'barber';");
        $res_services = $conn->query("SELECT * FROM services");

    ?>
    <?php include_once 'sections/header.php' ?>
    <!-- di para colocar el titulo agendar citas -->
    <div class="text-center my-5">
        <h1>Agendar citas</h1>
    </div>
    <section class="py-5 mx-4 mb-5 container-form">
        <!-- se crea un formulario que enlaza con la url a gendasfunctions.php con metodo post -->
        <form class="px-md-4" action="/php/agendasFunctions.php" method="POST">
            <div class="px-4 row">
            <div class="mb-4 col-md-6">
                <!-- se generan los input para llenar los campos -->
                <input type="date" class="form-control input-form" id="fecha" name="fecha" placeholder="Fecha">
            </div>
            <div class="mb-4 col-md-6">
                <input type="time" class="form-control input-form" id="hora" name="hora" placeholder="Hora">
            </div>
            <div class="mb-4 col-md-6">
                <select class="form-select input-form" name="servicio">
                    <!-- se genera opciones para el elemento select  -->
                    <option selected>Seleccione un servicio</option> 
                    <!-- se crea el bucle while para iterar sobre los datos de una consulta a la db  -->
                     <!-- la variable $rest_services es el conjunto de resultados obtenidos a una consulta a la db -->
                    <?php while($row = $res_services->fetch_assoc()): ?>
                        <!-- opcion representada por el elemento option , atributo value representa el valor que se enviará al servidor cuando se especifique cierta opcion -->
                        <!-- valor de la columna id de la fila actual del bloque -->
                         <!-- echo para mostrar cada opcion seguida del precio -->
                        <option value="<?php echo $row['id'] ?>"> <?php echo $row['description'] . ' - ' . '$' .  $row['price']?></option>
                        <!-- final del bucle -->
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="mb-5 col-md-6">
                <!-- se crea ptra opcion de seleccion para "barbero"  -->
                <select class="form-select input-form" name="barbero">
                    <!-- etiqueta opcion para desplegar la seleccion de barbero -->
                    <option selected>Seleccione un barbero</option>
                      <!-- se crea el bucle while para iterar sobre los datos de una consulta a la db  -->
                     <!-- la variable $rest_barbers es el conjunto de resultados obtenidos a una consulta a la db -->
                    <?php while($row = $res_barbers->fetch_assoc()): ?>
                        <!-- se imprime el valor de la columna id, seguido del nombre y apellido -->
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] . ' ' . $row['lastname']?></option>
                        <!-- final del bucle cuando se decida la opcion -->
                    <?php endwhile; ?>
                </select>
            </div>
            <!-- se crea el boton hidden que enviará la informacion retenida en el formulario  -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary boton-oscuro px-5 py-2">Agendar</button>
            </div>
            </div>
        </form>
    </section>
</body>
</html>