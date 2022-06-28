<div class="mt-5">
    <h3 class="display-4">Modificar Rol</h3>
</div>
<div class="mt-5">
    <?php
        foreach($roles as $rol){
    ?>
    <form action="<?=getUrl("Rol","Rol","update")?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label>Nombre</label>
		<input type="hidden" name="rol_id" value="<?=$rol['rol_id']?>">
                <input type="text" name="rol_nombre" class="form-control" placeholder="Nombre del rol" value="<?=$rol['rol_nombre']?>" required>
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
