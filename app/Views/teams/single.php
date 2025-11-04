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
         <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?= base_url('uploads/img/logo-app.png')?>"
                       alt="User profile picture">
                </div>


                <h3 class="profile-username text-center"><?= esc($club['nombre_club']) ?></h3>

                <p class="text-muted text-center">Entrenador: Manu martin</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                    <b>Presidente</b> <a class="float-right">lorem ipsum</a>
                  </li>
                  <li class="list-group-item">
                    <b><?= esc($club['telefono']) ?></b> <a class="float-right">22202220222</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?= esc($club['correo']) ?></a>
                  </li>
                
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Editar</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Datos de equipo</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> <?= esc($club['nombre_club']) ?></strong>

                <p class="text-muted">
                  
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted"><?= esc($club['ciudad']) ?></p>

                <hr>

                <!-- <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong> -->

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Documentos Adjuntos</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-8">
            <div class="card">
              <div class="card-header p-2">
                
              </div><!-- /.card-header -->
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
                                  <a href="" 
                                    onclick="return confirm('¿Eliminar este club?');" 
                                    class="btn btn-sm btn-info">
                                      <i class="fa fa-key"></i>
                                  </a>
                                   <a href="" 
                                    onclick="return confirm('¿Eliminar este club?');" 
                                    class="btn btn-sm btn-info">
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
              $(document).ready(function () {
                  $('#example1').DataTable({
                      language: {
                          url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json'
                      }
                  });
              });
          </script>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
          <!-- right col -->


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
 