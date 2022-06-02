<div class="mt-5">
    <h3 class="display-4">Consultar Usuarios</h3>
</div>
<div class="mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>Id usuario</th>
		<th>Documento</th>
		<th>Nombre</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
		foreach ($usuarios as $usu){
		    ?>
		    <tr>
			<td><?=$usu['usu_id']?></td>
			<td><?=$usu['usu_docum']?></td>
			<td><?=$usu['usu_nombre']?></td>
			<td><a href="<?=getUrl('Usuarios','Usuarios','getUpdate',array('usu_id'=>$usu['usu_id']))?>"><button class="btn btn-primary">Editar</button></a></td>
			<td><a href="<?=getUrl("Usuarios","Usuarios","getDelete",array("usu_id"=>$usu_id['usu_id']))?>"><button class="btn btn-danger">Eliminar</button></a></td>
		    </tr>
		    <?php
		}
            ?>
        </tbody>
    </table>
</div>
