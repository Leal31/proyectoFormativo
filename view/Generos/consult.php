<div class="mt-5">
    <h3 class="display-4">Consultar Generos</h3>
</div>
<div class="mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Generos</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($generos as $gene) {
            ?>
            <tr>
                <td><?= $gene['gen_id']?></td>
                <td><?= $gene['gen_nombre']?></td>
                <td><a href="<?= getUrl('Generos','Generos','getUpdate',array('gen_id' => $gene['gen_id']))?>"><button class="btn btn-success">Editar</button></a></td>
                <td><a href="<?= getUrl('Generos','Generos','getDelete',array('gen_id' => $gene['gen_id']))?>"><button class="btn btn-danger">Eliminar</button></a></td>
            </tr>
            
            <?php
            }
            ?>
            
        </tbody>
    </table>    
</div>