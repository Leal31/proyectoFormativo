<div class="mt-5">
    <h3 class="display-4">Consultar Estratos</h3>
</div>
<div class="mt-5">
    <form action="<?=getUrl("Estratos","Estratos","consult")?>" method="POST">
	<label>Nombre</label>
	<input type="text" placeholder="Buscar por Nombre" name="filtro">
	<input type="submit" value="Buscar">
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Estratos</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
		foreach ($estratos as $estr){
		    ?>
		    <tr>
			<td><?=$estr['estr_id']?></td>
			<td><?=$estr['estr_nombre']?></td>
			<td><a href="<?=getUrl('Estratos','Estratos','getUpdate',array('estr_id'=>$estr['estr_id']))?>"><button class="btn btn-primary">Editar</button></a></td>
			<td><a href="<?=getUrl("Estratos","Estratos","getDelete",array("estr_id"=>$estr['estr_id']))?>"><button class="btn btn-danger">Eliminar</button></a></td>
		    </tr>
		    <?php
		}
            ?>
        </tbody>
    </table>
</div>
