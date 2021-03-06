<div class="mt-5">
    <h3 class="display-4">Eliminar Usuario</h3>
</div>
<div class="mt-5">
    <?php
        foreach($usuario as $usu){
    ?>
    <form action="<?=getUrl("Usuarios","Usuarios","postDelete")?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label>Documento</label>
		<input type="hidden" name="usu_id" value="<?=$usu['usu_id']?>">
		<input type="text" name="usu_docum" class="form-control" placeholder="Nombre del Estrato" value="<?=$usu['usu_docum']?>" readonly>
	    </div>
	    <div class="col-md-4">
                <label>Nombre</label>
		<input type="text" name="usu_nombre" class="form-control" placeholder="Nombre del Estrato" value="<?=$usu['usu_nombre']?>" readonly>
            </div>
	    <div class="col-md-4">
                <label>Clave</label>
		<input type="password" name="usu_clave" class="form-control" placeholder="Nombre del Estrato" value="<?=$usu['usu_clave']?>" readonly>
	    </div>
	    <div class="col-md-4">
		<label>Rol</label>
		<select class="form-control" name="rol_id" readonly>
<?php
	  foreach ($roles as $rol) {
	    if ($usu['rol_id'] == $rol['rol_id']) {
	      $select = "selected";
	    } else {
	      $select = "";
	    }
	    ?>
	      <option value="<?= $rol['rol_id']?>" <?=$select?> ><?=$rol['rol_nombre']?></option>
	    <?php

	  }
?>
		</select>
	    </div>
            <div class="col-md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-danger mt-2">
            </div>
        </div>
    </form>
    <?php
        }
    ?>
</div>
