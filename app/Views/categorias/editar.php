<h1 class="mt-4">
    <?= $titulo ?>
</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        <!-- <a href="<?= base_url(); ?>/categorias/nuevo" class="btn btn-success" type="submit">Agregar</a> -->
        <a href="<?= base_url(); ?>/categorias/eliminados" class="btn btn-warning" type="button">Eliminados</a>
    </div>
    <div class="card-body">
        <form method="post" action="<?= base_url() ?>/categorias/actualizar" autocomplete="off">
            <input type="hidden" value="<?php echo $datos['id']; ?>" name="id"/>
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Nombre:</label>
                        <input class="form-control" id="nombre" name="nombre" type="text"
                            value="<?php echo $datos['nombre']; ?>" autofocus required>

                    </div>
                </div>
            </div>


            <a href="<?= base_url(); ?>/categorias/" class="btn btn-primary" type="submit">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>

        </form>
    </div>
</div>