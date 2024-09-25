<div class="container my-5">
    <div class="row align-items-center">
        <div class="col">
            <h1>Citas agendadas</h1>
        </div>
        <div class="col text-end">
            <a href="<?php echo BASE_URL; ?>calendar/create">
                <button class="btn btn-success">Nueva cita</button>
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
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Servicio</th>
                    <th scope="col">Barbero</th>
                    <th scope="col">Cliente</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($calendars as $calendar): ?>
                    <tr>
                        <th scope="row"><?= $calendar['id']; ?></th>
                        <td><?= $calendar['date']; ?></td>
                        <td><?= $calendar['hour']; ?></td>
                        <td><?= $calendar['service']; ?></td>
                        <td><?= $calendar['barber']; ?></td>
                        <td><?= $calendar['customer']; ?></td>   
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>