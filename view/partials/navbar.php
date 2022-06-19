<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuario
          </a>
	  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
	    <li><a class="dropdown-item" href="<?= getUrl("Usuarios", "Usuarios", "consult")?>">Consultar Usuario</a></li>
      <li><a class="dropdown-item" href="<?= getUrl("Usuarios", "Usuarios", "getInsert")?>">Registrar Usuario</a></li>
      <li><a class="dropdown-item" href="<?= getUrl("Login", "Login", "cerrarSesion") ?>">Cerrar Sesion</a></li>
            
          </ul>
        </li>
	<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Rol
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="<?=getUrl("Rol","Rol","consult")?>">Consultar Roles</a></li>
            <li><a class="dropdown-item" href="<?=getUrl("Rol","Rol","getInsert")?>">Registrar Roles</a></li>
          </ul>
        </li>
	<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Generos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="<?=getUrl("Generos","Generos","consult")?>">Consultar Generos</a></li>
            <li><a class="dropdown-item" href="<?=getUrl("Generos","Generos","getInsert")?>">Registrar Generos</a></li>
          </ul>
        </li>
	<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Estratos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
	  <li><a class="dropdown-item" href="<?=getUrl("Estratos","Estratos","consult")?>">Consultar Estratos</a></li>
	  <li><a class="dropdown-item" href="<?=getUrl("Estratos","Estratos","getInsert")?>">Registrar Estratos</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hobbies
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="<?=getUrl("Hobbies","Hobbies","consult")?>">Consultar Hobbies</a></li>
            <li><a class="dropdown-item" href="<?=getUrl("Hobbies","Hobbies","getInsert")?>">Registrar Hobbies</a></li>
          </ul>
	</li>
	<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pacientes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="<?=getUrl("Hobbies","Hobbies","consult")?>">Consultar Pacientes</a></li>
            <li><a class="dropdown-item" href="<?=getUrl("Pacientes","Pacientes","getInsert")?>">Registrar Pacientes</a></li>
          </ul>
        </li>

        </li>
        <b>Bienvenido, Señor <?= $_SESSION['usu_nombre']?></b>
      </ul>
      
    </div>
  </div>
</nav>
