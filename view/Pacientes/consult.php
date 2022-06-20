<div class="mt-5">
    <h3 class="display-4">Consultar Pacientes</h3>
</div>
<div class="mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Telefono</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
		foreach ($pacientes as $pac){
		    ?>
		    <tr>
			<td><?=$pac['pac_id']?></td>
			<td><?=$pac['pac_nombre']?></td>
			<td><?=$pac['pac_apellido']?></td>
			<td><?=$pac['pac_telefono']?></td>
			<td><a href="<?=getUrl("Pacientes","Pacientes","detalle",array("pac_id"=>$pac['pac_id']))?>"><button class="btn btn-info">Ver Detalle</button></a></td>
			<td><a href="<?=getUrl('Pacientes','Pacientes','getUpdate',array('pac_id'=>$pac['pac_id']))?>"><button class="btn btn-warning">Editar</button></a></td>
			<td><a href="<?=getUrl("Pacientes","Pacientes","getDelete",array("pac_id"=>$pac['pac_id']))?>"><button class="btn btn-danger">Eliminar</button></a></td>
		    </tr>
		    <?php
		}
            ?>
        </tbody>
    </table>
</div>
