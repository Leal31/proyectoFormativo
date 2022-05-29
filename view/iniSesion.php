  <form action="" method="post">
    <div class="container">
      <h1>Inicio de Sesion</h1>
      <div class="mb-3">
	<label for="ingresoDocumento" class="form-label">Documento: </label>
	<input type="number" class="form-control" id="ingresoDocumento" placeholder="Ingrese su documento: ">
      </div>
      <div class="mb-3">
	<label for="ingresoContra" class="form-label">Contraseña: </label>
	<input type="password" class="form-control" id="ingresoContra" placeholder="Ingrese su contraseña: ">
      </div>
      <div class="mb-3">
	<label for="ingresoRol" class="form-label">Rol: </label>
	<select class="form-select" aria-label="-------">
	  <option selected>---------------</option>
	  <option value="0">Administrador</option>
	  <option value="1">Optometra</option>
	</select>
      </div>
      <input type="submit" class="btn btn-primary" value="Ingresar">
    </div>
  </form>

