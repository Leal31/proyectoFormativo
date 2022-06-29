<div class="contenedor">
<div class="mt-5">
    <h3 class="display-4">Eliminar Estrato</h3>
</div>
<div class="mt-5">
    <?php
        foreach($estratos as $estr){
    ?>
    <form action="<?php echo getUrl("Estratos","Estratos","delete") ?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="hidden" name="estr_id" value="<?=$estr['estr_id']?>">
                <input type="text" readonly class="form-control" name="estr_nombre" value="<?=$estr['estr_nombre']?>">
            </div>
            <div class="col-md-4 mt-4">
                <input type="submit" value="Eliminar" class="btn btn-danger mt-2">
            </div>
        </div>
    </form>
    <?php
        }
    ?>
</div>
</div>
