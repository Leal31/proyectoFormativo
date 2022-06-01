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
            <li><a class="dropdown-item" href="#">Consultar Usuario</a></li>
            <li><a class="dropdown-item" href="<?= getUrl("Usuarios", "Usuarios", "cerrarSesion") ?>">Cerrar Sesion</a></li>
            
          </ul>
        </li>
	<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Rol
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Consultar Roles</a></li>
            <li><a class="dropdown-item" href="#">Registrar Roles</a></li>
          </ul>
        </li>
	<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Generos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Consultar Generos</a></li>
            <li><a class="dropdown-item" href="#">Registrar Generos</a></li>
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

        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <b>Bienvenido, Señor <?= $_SESSION['usu_nombre']?></b>
      </ul>
      
    </div>
  </div>
</nav>
