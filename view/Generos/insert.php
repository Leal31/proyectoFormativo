<div class="mt-5">
    <h3 class="display-4">Registrar Generos</h3>
</div>
<div class="mt-5">
    <form action="<?=getUrl("Generos","Generos","insert")?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label>Nombre</label>
                <input required type="text" name="gen_nombre" class="form-control" placeholder="Nombre del Genero" maxlength="30">
            </div>
            <div class="col-md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </div>
        </div>
    </form>
</div>
