<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-body">
  <div class="flex-shrink-0 p-3 bg-white">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
      <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-5 fw-semibold">Menu Principal</span>
    </a>
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#paciente-collapse" aria-expanded="false">
          Paciente
        </button>
        <div class="collapse" id="paciente-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="<?=getUrl('Pacientes','Pacientes','getInsert')?>" class="link-dark rounded">Registrar</a></li>
            <li><a href="<?=getUrl('Pacientes','Pacientes','consult')?>" class="link-dark rounded">Consultar</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#historia-collapse" aria-expanded="false">
          Historia
        </button>
        <div class="collapse" id="historia-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="<?=getUrl('Historias','Historias','consult')?>" class="link-dark rounded">Consultar</a></li>
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          <?= $_SESSION['usu_nombre']?>
        </button>
        <div class="collapse" id="account-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="<?= getUrl("Login", "Login", "cerrarSesion") ?>" class="link-dark rounded">Cerrar Sesion</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
  </div>
</div>
