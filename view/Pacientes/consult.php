<div class="mt-5">
    <h3 class="display-4">Consultar Pacientes</h3>
</div>
<div class="mt-5">
    <form action="<?=getUrl("Usuarios","Usuarios","consult")?>" method="POST">
	<label>Documento</label><br>
	<input type="number" name="usu_docum" placeholder="N° Documento">
	<label>Nombre</label>
	<input type="text" name="usu_nombre" placeholder="Nombre">
	<label>Rol</label>
	<select name="rol_id">
	    <option value="">-Seleccionar-</option>
	    <?php
		foreach($roles as $rol){
		    ?>
		    <option value="<?=$rol['rol_id']?>"><?=$rol['rol_nombre']?></option>
		    <?php
		}
	    ?>
	</select>
	<input type="submit" value="Filtrar">
    </form>
</div>
<div class="mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>Id usuario</th>
		<th>Documento</th>
		<th>Nombre</th>
		<th>Rol</th>
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
			<td><?=$usu['rol_id']?></td>
			<td><a href="<?=getUrl('Usuarios','Usuarios','getUpdate',array('usu_id'=>$usu['usu_id']))?>"><button class="btn btn-primary">Editar</button></a></td>
			<td><a href="<?=getUrl("Usuarios","Usuarios","getDelete",array("usu_id"=>$usu['usu_id']))?>"><button class="btn btn-danger">Eliminar</button></a></td>
		    </tr>
		    <?php
		}
            ?>
        </tbody>
    </table>
</div>
