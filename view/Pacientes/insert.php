<div class="mt-5">
    <h3 class="display-4">Registrar Paciente</h3>
</div>
<div class="mt-5">
    <form action="<?=getUrl("Pacientes","Pacientes","insert")?>" method="post">
	<div class="row">
	  <div class="col-md-4">
                <label>Documento Paciente: </label>
                <input required type="text" name="pac_id" class="form-control" placeholder="Documento de paciente">
	    </div>

            <div class="col-md-4">
                <label>Nombre Paciente: </label>
                <input required type="text" name="pac_nombre" class="form-control" placeholder="Nombre de paciente">
	    </div>
	    
	    <div class="col-md-4">
                <label>Apellido Paciente: </label>
                <input required type="text" name="pac_apellido" class="form-control" placeholder="Apellido de paciente">
            </div>
	    <div class="col-md-4">
                <label>Dirección Paciente: </label>
                <input required type="text" name="pac_direccion" class="form-control" placeholder="Direccion de paciente">
	    </div>
	    <div class="col-md-4">
                <label>Telefono Paciente: </label>
                <input required type="number" name="pac_telefono" class="form-control" placeholder="Telefono de paciente">
	    </div>
	    <div class="col-md-4">
	      <label>Hobbies: </label><br>
		<?php 
		  
		  foreach($hobbies as $hob) {
		    ?>
		      <input type="checkbox" name="hobbies[]" value="<?= $hob['hob_id']?>">
		      <label><?= $hob['hob_nombre']?></label><br>
		<?php
		  }

		?>      
	    </div>
	    <div class="col-md-4">
	      <label>Genero: </label>
	      <select class="form-control" name="gen_id" required>
	      <option value="" selected>-----------</option>
	      <?php
		foreach ($generos as $gen) {
		  ?>
		    <option value="<?= $gen['gen_id']?>"><?=$gen['gen_nombre']?></option>
		<?php
		  }
		?>
	      </select>
	    </div>
	    <div class="col-md-4">
	      <label>Estrato: </label><br>
	      <?php
		  
		foreach ($estratos as $estr) {
		  ?>
		    <input type="radio" name="estr_id" value="<?= $estr['estr_id']?>">
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
</div>
