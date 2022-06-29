<div class="wrapper">
<form class="login" action="<?=getUrl("Login", "Login", "validar")?>" method="post">
    <p class="title">Inicio de sesion</p>
    <input type="number" placeholder="Documento Usuario" name="usu_docum" autofocus/>
    <i class="fa fa-user"></i>
    <input type="password" placeholder="Contraseña" name="usu_clave"/>
    <i class="fa fa-key"></i>
    <select class="form-select form-select-lg mb-3" name="rol_id" required>
      <option value="" selected>Por favor, seleccione un rol</option>
      <option value="1">Administrador</option>
      <option value="2">Optometra</option>
    </select>
    <button>
      <i class="spinner"></i>
      <span class="state">Acceder</span>
    </button>
  </form>
  <footer><a target="blank" href="http://boudra.me/">boudra.me</a></footer>
  </p>
</div>


