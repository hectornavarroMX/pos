<h1 class="mt-4">
        <?= $titulo ?>
    </h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            <a href="<?= base_url(); ?>/unidades/nuevo" class="btn btn-success" type="submit">Agregar</a>
            <a href="<?= base_url(); ?>/unidades/eliminados" class="btn btn-warning" type="button">Eliminados</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Descripción</th>
                        <th>Abreviación</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $dato) { ?>
                        <tr>
                            <td>
                                <?php echo $dato['id'] ?>
                            </td>
                            <td>
                                <?php echo $dato['nombre'] ?>
                            </td>
                            <td>
                                <?php echo $dato['nombre_corto'] ?>
                            </td>
                            <td>
                                <a href="<?php echo base_url().'/unidades/editar/'.$dato['id']?>" class="btn btn-primary"
                                    type="submit"><i class="fas fa-pencil-alt"></i></a>
                                <a href="<?php echo base_url().'/unidades/eliminar/'.$dato['id']?>" class="btn btn-danger"
                                    type="submit"><i class="fas fa-trash"></i></a>
                            </td>

                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>