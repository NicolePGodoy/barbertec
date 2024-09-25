<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-6 text-start">
            <h1>Reporte</h1>
        </div>
        <div class="col-6 text-end">
        <a href="<?php echo BASE_URL; ?>report">
            <button type="submit" class="btn btn-primary boton-oscuro px-5 py-2">
                Ir a reportes
            </button>
        </a>
        </div>
    </div>
</div>
<section class="py-5 mx-4 mb-5 container-form">
    <form class="px-4 row" method="post" action="<?php echo BASE_URL; ?>report/create/<?php echo $report['id']; ?>">
        <div class="mb-4 col-12">
            <label class="form-label" for="title">Titulo</label>
            <input class="form-control" id="title" type="text" readonly value="<?php echo $report['title']; ?>">
        </div>
        <div class="mb-4 col-md-6">
            <label class="form-label" for="description">Descripcion</label>
            <textarea class="form-control" name="description" id="description" rows="8" readonly> <?php echo $report['description']; ?> </textarea>
        </div>
        <div class="mb-4 col-md-6">
            <label class="form-label" for="query">Consulta</label>
            <textarea class="form-control" name="query" id="query" rows="8" readonly><?php echo $report['query']; ?></textarea>
        </div>
    </form>
</section>
