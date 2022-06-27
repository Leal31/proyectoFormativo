    <div class="mt-5">
    <h3 class="display-4">Consultar Historias</h3>
</div>
<div class="mt-5">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id Historia</th>
                <th>Nombre Paciente</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($id as $idpac){
            $pac_id = $idpac['pac_id'];
            ?>
            <tr>
                <td><?=$idpac['hist_id']?></td>
                <td><?php
                    $sql1 = "SELECT * FROM pacientes WHERE pac_id = $pac_id";
                    $nombre = $obj->sentencia($sql1);
                    $row = mysqli_fetch_array($nombre);
                    echo $row['pac_nombre']. " ". $row['pac_apellido'];   
                ?></td>

                <td><a href="<?= getUrl('Historias','Historias','detalle',array('pac_id' => $idpac['pac_id'], 'hist_id'=>$idpac['hist_id']))?>"><button class="btn btn-primary"> Ver Detalles</button></a></td>
                <td><a href="<?= getUrl('Historias','Historias','getUpdate',array('pac_id' => $idpac['pac_id'], 'hist_id'=>$idpac['hist_id']))?>"><button class="btn btn-success">Editar</button></a></td>
                <td><a href="<?= getUrl('Generos','Generos','getDelete',array('gen_id' => $gene['gen_id']))?>"><button class="btn btn-danger">Eliminar</button></a></td>
           
            </tr>
            <?php
            }
            ?>
           
                
            
            <?php
            
            ?>
            
        </tbody>
    </table>    
</div>
    <?php

?>
