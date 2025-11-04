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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Balance de resgiatro de Atletas
                </h3>
                <br><br>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Balance de registro de Atletas</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Estadistica por tipo de denuncias</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart">
                       <!-- Canvas for Chart.js -->
  <canvas id="denunciaChart" width="400" height="200"></canvas>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
      // Get the data passed from the controller
      const labels = <?= $labels ?>; // This will be an array of tipo_denuncia labels (e.g., ['Fraude', 'Robo', 'Violencia'])
      const data = <?= $data ?>;     // This will be an array of counts (e.g., [10, 5, 7])
      
      // You may have another array with the type names (if not, use the `labels` array for that)
      const tipoDenuncias = <?= $labels ?>; // This should be an array like ['Fraude', 'Robo', 'Violencia']

      // Create a bar chart
      const ctx = document.getElementById('denunciaChart').getContext('2d');
      const denunciaChart = new Chart(ctx, {
          type: 'bar', // You can change this to 'pie', 'line', etc.
          data: {
              labels: labels, // Labels for each bar
              datasets: [{
                  label: 'Count of Denuncias by Tipo',
                  data: data, // Values for each label (count of denuncias)
                  backgroundColor: 'rgba(54, 162, 235, 0.2)',
                  borderColor: 'rgba(54, 162, 235, 1)',
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  y: {
                      beginAtZero: true
                  }
              },
              responsive: true,
              plugins: {
                  legend: {
                      position: 'top',
                  },
                  tooltip: {
                      callbacks: {
                          label: function(tooltipItem) {
                              // Get the index of the tooltip item
                              const index = tooltipItem.dataIndex;
                              const count = tooltipItem.raw; // Count of denuncias
                              const tipo = tipoDenuncias[index]; // Corresponding tipo_denuncia
                              return `${tipo}: ${count} denuncias`; // Show both type and count
                          }
                      }
                  }
              }
          }
      });
</script>
                 </div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                En construccíon
                </div>
              </div>
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->

           
            <!-- /.card -->
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
 