<?= $this->include('app/header') ?>

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
            <h1 class="m-0">Dashboard -FEGUIBASKET- </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1 </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
       <?= $this->include('app/shortcut') ?>

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
          <?= $this->include('app/alerts') ?>
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
          <!-- ./col -->
         
          <!-- ./col -->
         
          <!-- ./col -->
         
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Ultimas 50 atletas registardos
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>



                </div>
                <!-- /.card-tools -->
              </div>
           
            
            </div>
       
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
      
            <!-- /.card -->
          </section>
          <!-- right col -->

<section class="col-lg-5 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
           
          <div class="container mt-4">
    <h4>Comparativa de Cantidad de Jugadores por Club</h4>
    <table class="table table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Club</th>
                <th>Cantidad de Jugadores</th>
                <th>Escala</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $clubs = [
                ['nombre' => 'Malabo King', 'jugadores' => 26],
                ['nombre' => 'San Antonio', 'jugadores' => 18],
                ['nombre' => 'Jet 7', 'jugadores' => 12],
                ['nombre' => 'Estrella Roja', 'jugadores' => 20],
                ['nombre' => 'Panteras de Nkoantoma', 'jugadores' => 30],
            ];

            $maxJugadores = max(array_column($clubs, 'jugadores'));
            $i = 1;
            foreach ($clubs as $club) :
                $porcentaje = round(($club['jugadores'] / $maxJugadores) * 100);
            ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= esc($club['nombre']) ?></td>
                    <td><?= $club['jugadores'] ?></td>
                    <td>
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar bg-info" role="progressbar"
                                 style="width: <?= $porcentaje ?>%;" aria-valuenow="<?= $porcentaje ?>"
                                 aria-valuemin="0" aria-valuemax="100">
                                <?= $porcentaje ?>%
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->



        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</section>
          
 
  <?= $this->include('app/footer') ?>
 