<div class="mt-5">
    <h3 class="display-4">Eliminar Genero</h3>
</div>
<div class="mt-5">
    <?php
        foreach($generos as $gene){
    ?>
    <form action="<?php echo getUrl("Generos","Generos","delete") ?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="hidden" name="gen_id" value="<?=$gene['gen_id']?>">
                <input type="text" readonly class="form-control" name="gen_nombre" value="<?=$gene['gen_nombre']?>">
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
