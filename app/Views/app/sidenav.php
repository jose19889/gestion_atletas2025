<?php
if (!isset($roleId)) {
    $session = session();
    $user = $session->get('user');
    $roleId = $user['role_id'] ?? null;
}
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= site_url('home') ?>" class="brand-link">
    <img src="<?= base_url('uploads/img/logo-app.png') ?>" alt="Logo-app" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Gestor de Atletas</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <!-- puedes agregar avatar o nombre del usuario aquí si lo deseas -->
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Dashboard -->
        <li class="nav-item">
          <a href="<?= site_url('home') ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <!-- Estadísticas -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Estadísticas
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Estadísticas en Gráficos</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Usuarios y roles (solo para rol 1 y 3) -->
        <?php if (isset($roleId) && in_array($roleId, [1, 3, 4])): ?>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users-cog"></i>
            <p>Usuarios y Roles <i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= site_url('users-list') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Listado de Usuarios</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= site_url('roles-list') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Roles</p>
              </a>
            </li>
          </ul>
        </li>
        <?php endif; ?>

        <!-- Clubes -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-building"></i>
            <p>Gestionar Clubes <i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <?php if (isset($roleId) && in_array($roleId, [ 2])): ?>
            <li class="nav-item">
              <a href="<?= site_url('team-info') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Info del Club</p>
              </a>
            </li>
             <?php endif; ?>
            <li class="nav-item">
             <?php if (isset($roleId) && in_array($roleId, [ 1,3,4])): ?>
              <a href="<?= site_url('team-list') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Listado de Clubes</p>
              </a>
            </li>
           
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Generar Enlace</p>
              </a>
            </li>
             <li class="nav-item">
              <a href="<?= site_url('team-list-generate') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Generar Ficha</p>
              </a>
            </li>
            <?php endif; ?>
          </ul>
        </li>

        <!-- Atletas -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-friends"></i>
            <p>Gestionar Atletas <i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= site_url('player-list') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lista de Atletas</p>
              </a>
            </li>
            <?php if (isset($roleId) && in_array($roleId, [1, 3 ,4])): ?>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Generar Carnet</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Transferir Jugador</p>
              </a>
            </li>
            <?php endif; ?>
          </ul>
        </li>

        <!-- Membresías -->
        <?php if (isset($roleId) && in_array($roleId, [1, 3 ,4])): ?>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-id-card"></i>
            <p>Membresías <i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= site_url('player-list') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Renovar Membresía</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Historiales</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Licencias -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>Licencias <i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= site_url('player-list') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Renovar Licencia</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Historiales</p>
              </a>
            </li>
          </ul>
        </li>
        <?php endif; ?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
