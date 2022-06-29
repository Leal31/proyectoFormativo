<div class="mt-5">
    <h3 class="display-4">Modificar Paciente</h3>
</div>
<div class="mt-5">
    <?php
      foreach($pacientes as $pac){
      //$clave = $this -> decryptPassword($pac['usu_clave']);
    ?>
    <form action="<?=getUrl("Pacientes","Pacientes","update")?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label>Documento</label>
		<input type="hidden" name="pac_id" value="<?=$pac['pac_id']?>">
		<input type="text" name="pac_docum" class="form-control" placeholder="Documento" value="<?=$pac['pac_id']?>" readonly>
	    </div>
	    <div class="col-md-4">
                <label>Nombre</label>
		<input type="text" name="pac_nombre" class="form-control" placeholder="Nombre del Paciente" value="<?=$pac['pac_nombre']?>" required maxlength="50">
        </div>
		<div class="col-md-4">
                <label>Apellido</label>
		<input type="text" name="pac_apellido" class="form-control" placeholder="Apellido del Paciente" value="<?=$pac['pac_apellido']?>" required maxlength="50">
        </div>
		<div class="col-md-4">
                <label>Direccion Paciente</label>
		<input type="text" name="pac_direccion" class="form-control" placeholder="Direccion del Paciente" value="<?=$pac['pac_direccion']?>" required maxlength="70">
        </div>
		<div class="col-md-4">
                <label>Telefono</label>
		<input type="number" name="pac_tel" class="form-control" placeholder="Telefono del Paciente" value="<?=$pac['pac_telefono']?>" required maxlength="20">
        </div>

        </div>
	<?php
	}
	?>
	<div class="container">
		<div class="row">
			
			<div class="col-4">Hobbies:<br>
			<?php 
			
			
			foreach($hobbies as $hob) {
 			$hobid= $hob['hob_id'];
			$sql4 = "SELECT * FROM pacientes_hobbies WHERE pac_id = $pac_id AND hob_id = '$hobid' ";
			$paciente_hobbiess = $obj->sentencia($sql4);
			$num2 = mysqli_num_rows($paciente_hobbiess);
			if ($num2 == 0){
				?>
					<input type="checkbox" name="<?=$hob['hob_id']?>" value="<?= $hob['hob_id']?>">
					<label><?= $hob['hob_nombre']?></label><br>
				<?php
			}
			foreach ($paciente_hobbiess as $pac_hob) {
		 	$checked = "";
			
			if ($pac_hob['hob_id'] == $hob['hob_id']) {
		      $checked = "checked";
			 ?>
		    <input type="checkbox" name="<?=$hob['hob_id']?>" value="<?= $hob['hob_id']?>" <?=$checked?>>
		      <label><?= $hob['hob_nombre']?></label><br>
		<?php
		
		} }}
		
		?>    
	      	</div>	
		<div class="col-4">
		<label for="ingresoGenero" class="form-label">Genero: </label>
		<select class="form-select" aria-label="-------" name="gen_id" required>
		    <option value="">---------------</option>
<?php
		  foreach($generos as $gen) {
		    if ($gen['gen_id'] == $pac['gen_id']) {
		      $selected = "selected";
		    } else {
		      $selected = "";
		    }

?>
		      <option value="<?=$gen['gen_id']?>" <?=$selected?>><?=$gen['gen_nombre']?></option>
<?php
		  }
?>
		</select>
      			</div>
		  		<div class="col-4">
				<label for="ingresoGenero" class="form-label">Estrato: </label><br>
<?php
			foreach($estratos as $estr) {
			  if ($estr['estr_id'] == $pac['estr_id']) {
			    $checked = "checked";
			  } else {
			    $checked = "";
			  }
?>
  <input type="radio" name="estr_id" value="<?=$estr['estr_id']?>" <?=$checked?> required>
  <label><?=$estr['estr_nombre']?></label><br>
<?php
			}
?>
		<div class="col-md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </div>
      			</div>
	  		</div>
		</div>
    </form>
    <?php
        
    ?>
</div>
