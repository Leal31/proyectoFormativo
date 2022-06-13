<div class="mt-5">
    <h3 class="display-4">Eliminar Hobbie</h3>
</div>
<div class="mt-5">
    <?php
        foreach($hobbies as $hob){
    ?>
    <form action="<?php echo getUrl("Hobbies","Hobbies","delete") ?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="hidden" name="hob_id" value="<?=$hob['hob_id']?>">
                <input type="text" readonly class="form-control" name="hob_nombre" value="<?=$hob['hob_nombre']?>">
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
