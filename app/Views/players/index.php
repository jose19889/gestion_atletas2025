<?= $this->include('app/header') ?>
<?php
if (!isset($roleId)) {
    $session = session();
    $user = $session->get('user');
    $roleId = $user['role_id'] ?? null;
}
?>
<?= $this->section('content') ?>
  <!-- Main Sidebar Container -->
<section class="content">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
    
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
         
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">LISTADO DE JUGADORES REGISTARDOS</h3>
              </div>
              <!-- /.card-header -->
            <?= $this->include('app/alerts') ?>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
            <a  href="player-create" class="btn btn-app  small">
                  <span class="badge bg-purple"></span>
                  <i class="fas fa-plus text-success"></i> <b>Agregar neuvo jugador</b>
                </a>
              <!-- /.card-header -->
              <div class="card-body">
             <!-- Requiere jQuery y DataTables JS/CSS -->
                    

          <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Edad</th>
                  <th>Posición</th>
                  <th>Número</th>
                  <th>Club</th>
                  
                  <th>Nacionaliadd</th>
                  <th>Licencia</th>
                   <th>Esatdo Licencia</th>
                  <th>Fecha Emisión</th>
                  <th>Vence</th>
                  <th>Acciones</th>
                </tr>
              </thead>

              <tbody>
                  <?php if (!empty($players) && is_array($players)) : ?>
                      <?php $i = 1; foreach ($players as $player): ?>
                          <tr>
                              <td><?= $i++ ?></td>
                              <td><?= esc($player['nombre']) ?></td>
                              <td><?= esc($player['apellidos']) ?></td>
                              <td><?= esc($player['edad']) ?></td>
                              <td><?= esc($player['posicion']) ?></td>
                              <td><?= esc($player['numero']) ?></td>
                              <td><?= esc($player['club_nombre']) ?></td>
                             
                              <td><?= esc($player['pais']) ?></td>
                               <td>01256vdgdh</td>
                             
                              <td class="btn btn-sm btn-warning"><p><?= esc($player['estado_licencia']) ?></p></td>
                              
                              <td clas="text-warning"> 2026-07-24</td>
                                <td clas="text-warning"> 2026-07-25</td>
                              <td>
                                  <a href="" class="btn btn-sm btn-warning">
                                      <i class="fa fa-edit"></i> 
                                  </a>
                                  <a href="" 
                                    onclick="return confirm('¿Eliminar este club?');" 
                                    class="btn btn-sm btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </a>

                                   <?php if (isset($roleId) && in_array($roleId, [ 1,3,4])): ?>

                                   <a href="<?php echo base_url('player-edit/'.$player['id']); ?>" class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="Gestioar licenia">
                                    <i class="fa fa-key"></i>
                                  </a>
                                  
                                  <a href="<?= site_url('player-card') ?>" class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="Generar carnet">
                                    <i class="fa fa-credit-card"></i>
                                  </a>

                                   <?php endif ?>

                                  <a href="#" class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="veer detalels">
                                    <i class="fa fa-file"></i>
                                  </a>
                                    
                                 
                                 
                              </td>
                          </tr>
                      <?php endforeach ?>
                  <?php else : ?>
                      <tr><td colspan="12">No hay equipos registrados</td></tr>
                  <?php endif ?>
              </tbody>
          </table>


          <script>
              $(document).ready(function () {
                  $('#example1').DataTable({
                      language: {
                          url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json'
                      }
                  });
              });
          </script>
          <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
              return new bootstrap.Tooltip(tooltipTriggerEl);
            });
          </script>

        
  <?= $this->include('app/footer') ?>
 