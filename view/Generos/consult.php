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
                <td><a href="<?php getUrl('Generos','Generos','getUpdate',array('gen_id' => $$gene['gen_id']))?>"><button class="btn btn-primary">Editar</button></a></td>
                <td><a href="<?php getUrl('Generos','Generos','getDelete',array('gen_id' => $$gene['gen_id']))?>"><button class="btn btn-primary">Eliminar</button></a></td>
            </tr>
            
            <?php
            }
            ?>
            
        </tbody>
    </table>    
</div>