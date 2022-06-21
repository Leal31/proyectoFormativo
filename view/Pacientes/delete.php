<div class="mt-5">
    <h3 class="display-4">Eliminar Paciente</h3>
</div>
<div class="mt-5">
    <?php
        foreach($paciente as $pac){
    ?>
    <form action="<?=getUrl("Pacientes","Pacientes","delete")?>" method="post">
	<div class="row">
	  <div class="col-md-4">
                <label>Documento Paciente: </label>
		<input required type="text" name="pac_id" class="form-control" placeholder="Documento de paciente" value="<?=$pac['pac_id']?>" readonly>
	    </div>

            <div class="col-md-4">
                <label>Nombre Paciente: </label>
		<input required type="text" name="pac_nombre" class="form-control" placeholder="Nombre de paciente" value="<?=$pac['pac_nombre']?>" readonly>
	    </div>
	    
	    <div class="col-md-4">
                <label>Apellido Paciente: </label>
		<input required type="text" name="pac_apellido" class="form-control" placeholder="Apellido de paciente" value="<?=$pac['pac_apellido']?>" readonly>
            </div>
	    <div class="col-md-4">
                <label>Dirección Paciente: </label>
		<input required type="text" name="pac_direccion" class="form-control" placeholder="Direccion de paciente" value="<?=$pac['pac_direccion']?>" readonly>
	    </div>
	    <div class="col-md-4">
                <label>Telefono Paciente: </label>
		<input required type="text" name="pac_telefono" class="form-control" placeholder="Telefono de paciente" value="<?=$pac['pac_telefono']?>" readonly>
	    </div>
	    <div class="col-md-4">
	      <label>Hobbies: </label><br>
		<?php 
		foreach($hobbies as $hob) {

		foreach ($paciente_hobbies as $pac_hob) {
		  $checked = "";
		  if ($pac_hob['hob_id'] == $hob['hob_id']) {
		      $checked = "checked";
		    ?>
		      <input type="checkbox" name="hobbies[]" value="<?= $hob['hob_id']?>" onclick="return false;" <?=$checked?>>
		      <label><?= $hob['hob_nombre']?></label><br>
		<?php
		}
		} }
		?>      
	    </div>
	    <div class="col-md-4">
	      <label>Genero: </label>
	      <select class="form-control" name="gen_id" disabled>
	      <option value="">-----------</option>
	      <?php
		foreach ($generos as $gen) {
		  $selected = "";
		  if ($pac['gen_id'] == $gen['gen_id']) {
		    $selected = "selected";
		  }
		  ?>
		    <option value="<?= $gen['gen_id']?>" <?=$selected?>><?=$gen['gen_nombre']?></option >
		<?php
		  }
		?>
	      </select>
	    </div>
	    <div class="col-md-4">
	      <label>Estrato: </label><br>
	      <?php
		  
		foreach ($estratos as $estr) {
		  $checked = "";
		  if ($pac['estr_id'] == $estr['estr_id']) {
		    $checked = "checked";
		  }
		  ?>
		    <input type="radio" name="estr_id" value="<?= $estr['estr_id']?>" <?=$checked?> disabled>
		    <label><?=$estr['estr_nombre']?></label><br>
	      <?php
		}
	      ?>
	    </div>
            <div class="col-md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </div>
        </div>
    </form>
    <?php
        }
    ?>
</div>
