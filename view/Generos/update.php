<div class="mt-5">
    <h3 class="display-4">Modificar Genero</h3>
</div>
<div class="mt-5">
    <?php
        foreach($generos as $gene){
    ?>
    <form action="<?=getUrl("Generosgen_id","Generosgen_id","update")?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label>Nombre</label>
		<input type="hidden" name="gen_id" value="<?=$gene['gen_id']?>">
                <input type="text" name="gen_nombre" class="form-control" placeholder="Nombre del Genero" value="<?=$estr['gen_nombre']?>">
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