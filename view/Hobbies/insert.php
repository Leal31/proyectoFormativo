<div class="mt-5">
    <h3 class="display-4">Registrar Hobbie</h3>
</div>
<div class="mt-5">
    <form action="<?=getUrl("Hobbies","Hobbies","insert")?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label>Nombre</label>
                <input required type="text" name="hob_nombre" class="form-control" placeholder="Nombre del Hobbie">
            </div>
            <div class="col-md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </div>
        </div>
    </form>
</div>
