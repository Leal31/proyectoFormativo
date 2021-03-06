<div class="mt-5">
    <h3 class="display-4 ">Historia de Paciente</h3>
</div>
<?php
foreach ($pacientes as $pac){
  $sql2 = "SELECT g.gen_nombre FROM generos as g, pacientes as p WHERE g.gen_id=p.gen_id AND p.pac_id=".$pac['pac_id'];

  $genero = $obj -> sentencia($sql2); 
?>
<div class="mt-5">
    
        <div class="row">
            <div class="col-md-4">
                <label>Documento</label>
		<input type="text" name="pac_docum" class="form-control" placeholder="Documento" value="<?=$pac['pac_id']?>" readonly>
	    </div>
	    <div class="col-md-4">
                <label>Nombre</label>
		<input type="text" name="pac_nombre" class="form-control" placeholder="Nombre del Paciente" value="<?=$pac['pac_nombre']?>"readonly>
        </div>
		<div class="col-md-4">
                <label>Apellido</label>
		<input type="text" name="pac_apellido" class="form-control" value="<?=$pac['pac_apellido']?>"readonly>
        </div>
		<div class="col-md-4">
                <label>Direccion Paciente</label>
		<input type="text" name="pac_direccion" class="form-control" value="<?=$pac['pac_direccion']?>"readonly>
        </div>
		<div class="col-md-4">
                <label>Telefono</label>
		<input type="number" name="pac_tel" class="form-control" value="<?=$pac['pac_telefono']?>"readonly>
        </div>
        <div class="col-md-4">
		<label>Genero</label>
<?php
  foreach($genero as $g) {
?>
		<input type="text" name="gen_id" class="form-control" value="<?=$g['gen_nombre']?>" readonly>
<?php
  }
?>
        </div>
        <?php
         }
        ?>
        </div>

        <div class="mt-5">
        <form action="<?php echo getUrl("Historias","Historias", "insert");?>" method="post">

         <input type="hidden" name="pac_id" value="<?=$pac_id?>">
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">Motivo</label>
                <input type="text" name="hist_motv" class="form-control" placeholder="Motivo" required="required">
            </div>

            <div class="col-md-4">
                <label class="form-label">Esfera Ojo Derecho</label>
                <input type="number" name="hist_esfod" class="form-control" required="required" maxlength="50">
            </div>

            <div class="col-md-4">
                <label class="form-label">Circunferencia Ojo Derecho</label>
                <input type="number" name="hist_cilod" class="form-control" required="required" maxlength="50">
            </div>

            <div class="col-md-4">
                <label class="form-label">Eje Ojo Derecho</label>
                <input type="number" name="hist_ejeod" class="form-control" required="required" maxlength="50">
            </div>

            <div class="col-md-4">
                <label class="form-label">Esfera Ojo Izquierdo</label>
                <input type="number" name="hist_esfoi" class="form-control" required="required" maxlength="50">
            </div>

            <div class="col-md-4">
                <label class="form-label">Circunferencia Ojo Izquierdo</label>
                <input type="number" name="hist_ciloi" class="form-control" required="required" maxlength="50">
            </div>

            <div class="col-md-4">
                <label class="form-label">Eje Ojo Izquierdo</label>
                <input type="number" name="hist_ejeoi" class="form-control" required="required" maxlength="50">
            </div>

            <div class="col-md-4">
                <label class="form-label">Diametro Ojo Derecho</label>
                <input type="number" name="hist_diaod" class="form-control" required="required" maxlength="50">
            </div>

            <div class="col-md-4">
                <label class="form-label">Diametro Ojo Izquierdo</label>
                <input type="number" name="hist_diaoi" class="form-control" required="required" maxlength="50">
            </div>

            <div class="col-md-4">
                <label class="form-label">Recomendaciones</label>
                <textarea name="hist_recom" class="form-control" id="floatingTextarea2" required style="height: 100px"></textarea>
            </div>
            <div class="col-md-4">
                <label class="form-label">Recetario</label>
                <input type="hidden" name="rec_fecha" value="<?=date('Y-m-d')?>">
                <textarea name="rec_observacion" class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
            </div>
        </div>
        <div class="row">
        <div class="col-md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </div>
        </div>

    </form>

</div>
