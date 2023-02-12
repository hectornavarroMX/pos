<div class="container-fluid px-4">
    <h4 class="mt-4">
        <?php echo $titulo; ?>
    </h4>
    <div class="card mb-4">
        <div>
            <p>
                <a href="<?php echo base_url(); ?>/unidades/nuevo" class="btn btn-success">Agregar</a>
                <a href="<?php echo base_url(); ?>/unidades/nuevo" class="btn btn-warning">Eliminados</a>
            </p>
        </div>
        <!-- <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div> -->
        <!-- <div class="card-body"> -->
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Abreviación</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Abreviación</th>
                </tr>
            </tfoot>
            <tbody>

                <?php foreach ($datos as $dato) { ?>
                    <tr>
                        <td>
                            <?php echo $dato['nombre']; ?>
                        </td>
                        <td>
                            <?php echo $dato['nombre_corto']; ?>
                        </td>
                        <td>
                            <a href="<?php echo base_url(); ?>/unidades/editar" class="btn btn-secondary">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="<?php echo base_url(); ?>/unidades/editar" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>


                <?php } ?>
            </tbody>
        </table>
        <!-- </div> -->
    </div>