<h1 class="mt-4">
        <?= $titulo ?>
    </h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            <a href="<?= base_url(); ?>/categorias/" class="btn btn-primary" type="button">Regresar</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <!-- <th>id</th> -->
                        <th>Categoría</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $dato) { ?>
                        <tr>
                            <!-- <td>
                                <?php echo $dato['id'] ?>
                            </td> -->
                            <td>
                                <?php echo $dato['nombre'] ?>
                            </td>
                            <td>
                                <a href="<?php echo base_url().'/categorias/reingresar/'.$dato['id']?>" class="btn btn-primary"
                                    type="submit"><i class="fas fa-arrow-alt-circle-up"></i></a>
                            </td>

                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>