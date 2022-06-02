<div class="mt-5">
    <h3 class="display-4">Eliminar Rol</h3>
</div>
<div class="mt-5">
    <?php
        foreach($roles as $rol){
    ?>
    <form action="<?php echo getUrl("Rol","Rol","delete") ?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="hidden" name="rol_id" value="<?=$rol['rol_id']?>">
                <input type="text" readonly class="form-control" name="rol_nombre" value="<?=$rol['rol_nombre']?>">
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
