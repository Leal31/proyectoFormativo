<div class="mt-5">
    <h3 class="display-4 ">Editar Historia de Paciente</h3>
</div>
<?php
foreach ($pacientes as $pac){
$sql2 = "SELECT g.gen_nombre FROM generos as g, pacientes as p WHERE g.gen_id=p.gen_id AND p.pac_id=".$pac['pac_id'];

$genero = $obj -> sentencia($sql2); 
?>
<div class="mt-5">
    
        <div class="row">

        <div class="col-md-4">
		    <b> Documento: </b> 
	    </div>
	    <div class="col-md-4">
                <b>Nombre: </b>
        </div>
		<div class="col-md-4">
                <b>Apellido: </b>
        </div>
        </div>

        <div class="row">
        <div class="col-md-4">
		    <p><?=$pac['pac_id']?></p>
	    </div>
	    <div class="col-md-4">
                <p><?=$pac['pac_nombre']?></p>
        </div>
		<div class="col-md-4">
                <p><?=$pac['pac_apellido']?></p>
        </div>
        </div>
        
        
        <div class="row">
		<div class="col-md-4">
                <b>Direccion Paciente: </b>
        </div>
		<div class="col-md-4">
                <b>Telefono: </b>
        </div>
        <div class="col-md-4">
                <b>Genero: </b>
        </div>
        </div>


        <div class="row">
        <div class="col-md-4">
		        <p><?=$pac['pac_direccion']?></p>
	    </div>
	    <div class="col-md-4">
                <p><?=$pac['pac_telefono']?></p>
        </div>
		<div class="col-md-4">
<?php
foreach ($genero as $g) {
?>
		<p><?=$g['gen_nombre']?></p>
<?php
}
?>
        </div>
        </div>


        <div class="mt-5">
        <form action="<?php echo getUrl("Historias","Historias", "update");?>" method="post">
        <?php foreach ($historias as $hist) {
            
            ?> 
         <input type="hidden" name="pac_id" value="<?=$pac_id?>">
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">Motivo</label>
                <input type="hidden" name="hist_id" value="<?=$hist['hist_id']; ?>">
		<input type="text" name="hist_motv" class="form-control" value="<?=$hist['hist_motv']; ?>" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Esfera Ojo Derecho</label>
                <input type="number" name="hist_esfod" class="form-control" value="<?=$hist['hist_esfod']; ?>" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Circunferencia Ojo Derecho</label>
                <input type="number" name="hist_cilod" class="form-control" value="<?=$hist['hist_cilod']; ?>" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Eje Ojo Derecho</label>
                <input type="number" name="hist_ejeod" class="form-control" value="<?=$hist['hist_ejeod']; ?>" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Esfera Ojo Izquierdo</label>
                <input type="number" name="hist_esfoi" class="form-control" value="<?=$hist['hist_esfoi']; ?>" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Circunferencia Ojo Izquierdo</label>
                <input type="number" name="hist_ciloi" class="form-control" value="<?=$hist['hist_ciloi']; ?>" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Eje Ojo Izquierdo</label>
                <input type="number" name="hist_ejeoi" class="form-control" value="<?=$hist['hist_ejeoi']; ?>" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Diametro Ojo Derecho</label>
                <input type="number" name="hist_diaod" class="form-control" value="<?=$hist['hist_diaod']; ?>" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Diametro Ojo Izquierdo</label>
                <input type="number" name="hist_diaoi" class="form-control" value="<?=$hist['hist_diaoi']; ?>" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Recomendaciones</label>
                <input type="text" name="hist_recom" class="form-control" value="<?=$hist['hist_recom']; ?>" required>
            </div>
            
            
        </div>
        <div class="row">
        <div class="col-md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </div>
        </div>
        <?php } ?>
            <?php
             }
            ?>
    </form>

</div>
