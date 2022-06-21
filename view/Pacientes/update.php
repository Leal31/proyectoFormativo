<div class="mt-5">
    <h3 class="display-4">Modificar Paciente</h3>
</div>
<div class="mt-5">
    <?php
      foreach($pacientes as $pac){
      #$clave = $this -> decryptPassword($usu['usu_clave']);
    ?>
    <form action="<?=getUrl("Pacientes","Pacientes","update")?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label>Documento</label>
		<input type="hidden" name="pac_id" value="<?=$pac['pac_id']?>">
		<input type="text" name="pac_id" class="form-control" placeholder="documento" value="<?=$pac['pac_id']?>">
	    </div>
	    <div class="col-md-4">
                <label>Nombre Paciente</label>
		<input type="text" name="pac_nombre" class="form-control" placeholder="Nombre Paciente" value="<?=$pac['pac_nombre']?>">
            </div>
		<div class="col-md-4">
                <label>Apellido Paciente</label>
		<input type="text" name="pac_apellido" class="form-control" placeholder="Apellido Paciente" value="<?=$pac['pac_apellido']?>">
            </div>
		<div class="col-md-4">
                <label>Direccion Paciente</label>
		<input type="text" name="pac_direccion" class="form-control" placeholder="Direccion Paciente" value="<?=$pac['pac_direccion']?>">
            </div>
		<div class="col-md-4">
                <label>Telefono Paciente</label>
		<input type="number" name="pac_telefono" class="form-control" placeholder="Telefono Paciente" value="<?=$pac['pac_telefono']?>">
            </div>

		



			<div class="container">
				<div class="row">
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
			<div class="col-4">
						<label for="updategenero" class="form-label">Paciente Genero: </label>
						<select class="form-select" aria-label="-------" name="gen_id">
							<option selected>---------------</option>
							<option value="1">Masculino</option>
							<option value="2">Femenino</option>
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
			<div class="col-md-4 mt-4 mx-auto">
                <input type="submit" value="Registrar Paciente" class="btn btn-success mt-4 d-flex p-2">
            </div>
		</div>
			</div>
		</div>
    </form>
    <?php
        }
    ?>
</div>
