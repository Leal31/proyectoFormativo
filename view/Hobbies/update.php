<div class="mt-5">
    <h3 class="display-4">Modificar Hobbies</h3>
</div>
<div class="mt-5">
    <?php
        foreach($hobbies as $hob){
    ?>
    <form action="<?=getUrl("Hobbies","Hobbies","update")?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label>Nombre</label>
		<input type="hidden" name="hob_id" value="<?=$hob['hob_id']?>">
                <input type="text" name="hob_nombre" class="form-control" placeholder="Nombre del hobbie" value="<?=$hob['hob_nombre']?>" required maxlength="30">
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
