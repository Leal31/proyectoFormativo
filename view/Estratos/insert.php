<div class="mt-5">
    <h3 class="display-4">Registrar Estrato</h3>
</div>
<div class="mt-5">
    <form action="<?=getUrl("Estratos","Estratos","insert")?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label>Nombre</label>
                <input required type="text" name="estr_nombre" class="form-control" placeholder="Nombre del Estrato">
            </div>
            <div class="col-md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </div>
        </div>
    </form>
</div>
