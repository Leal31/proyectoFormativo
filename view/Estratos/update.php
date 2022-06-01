<div class="mt-5">
    <h3 class="display-4">Modificar Estrato</h3>
</div>
<div class="mt-5">
    <?php
        foreach($estratos as $estr){
    ?>
    <form action="<?=getUrl("Estratos","Estratos","update")?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label>Nombre</label>
		<input type="hidden" name="estr_id" value="<?=$estr['estr_id']?>">
                <input type="text" name="estr_nombre" class="form-control" placeholder="Nombre del Estrato" value="<?=$estr['estr_nombre']?>">
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
