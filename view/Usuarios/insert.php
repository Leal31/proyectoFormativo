<div class="mt-5">
    <h3 class="display-4">Registrar Usuario</h3>
</div>
<div class="mt-5">
    <form action="<?=getUrl("Usuarios","Usuarios","postInsert")?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label>Numero Documento: </label>
                <input required type="number" name="usu_docum" class="form-control" placeholder="Numero de Documento">
	    </div>
	    <div class="col-md-4">
                <label>Nombre: </label>
                <input required type="text" name="usu_nombre" class="form-control" placeholder="Nombre de Usuario">
            </div>
	    <div class="col-md-4">
                <label>Clave</label>
                <input required type="password" name="usu_clave" class="form-control" placeholder="Clave">
	    </div>
	    <div class="col-md-4">
	      <label>Rol: </label>
	      <select class="form-control" name="rol_id" required>
	      <option value="" selected>-----------</option>
	      <?php
		foreach ($roles as $rol) {
		  ?>
		    <option value="<?= $rol['rol_id']?>"><?=$rol['rol_nombre']?></option>
		<?php
		  }
		?>
	      </select>
	    </div>
            <div class="col-md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </div>
        </div>
    </form>
</div>
