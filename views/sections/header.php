<?php 
    $modulo = basename($_SERVER['REQUEST_URI'], '.php');
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-marron">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://barbertec.test/agendas.php"> <img src="http://barbertec.test/imagenes/LOGO-removebg-preview.png" atl="logo barbertec" width="100" weight="50" tittle="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= $modulo == 'agendas' ? 'active' : ''; ?>" aria-current="page" href="http://barbertec.test/calendar">Agendas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $modulo == 'rate' ? 'active' : ''; ?>" aria-current="page" href="http://barbertec.test/user/barbers">Puntuaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $modulo == 'report' ? 'active' : ''; ?>" aria-current="page" href="http://barbertec.test/report">Reportes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $modulo == 'service' ? 'active' : ''; ?>" aria-current="page" href="http://barbertec.test/service">Administrar servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $modulo == 'user' ? 'active' : ''; ?>" aria-current="page" href="http://barbertec.test/user">Administrar usuarios</a>
                </li>
            </ul>
        </div>
    </div>
</nav>