<div class="mt-5">
    <h3 class="display-4">Consultar Rol</h3>
</div>
<div class="mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Rol</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
		foreach ($roles as $rol){
		    ?>
		    <tr>
			<td><?=$rol['rol_id']?></td>
			<td><?=$rol['rol_nombre']?></td>
			<td><a href="<?=getUrl('Rol','Rol','getUpdate',array('rol_id'=>$rol['rol_id']))?>"><button class="btn btn-primary">Editar</button></a></td>
			<td><a href="<?=getUrl("Rol","Rol","getDelete",array("rol_id"=>$rol['rol_id']))?>"><button class="btn btn-danger">Eliminar</button></a></td>
		    </tr>
		    <?php
		}
            ?>
        </tbody>
    </table>
</div>