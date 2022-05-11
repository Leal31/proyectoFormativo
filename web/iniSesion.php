<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
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
</body>
</html>

