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
                <h3 class="card-title">LISTADO DE EQUIPOS DE BALONCESTO</h3>
              </div>
              <!-- /.card-header -->
            <?= $this->include('app/alerts') ?>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
            <a  href="teams-create" class="btn btn-app  small">
                  <span class="badge bg-purple"></span>
                  <i class="fas fa-plus text-success"></i> <b>Agregar nuevo Equipo</b>
                </a>
              <!-- /.card-header -->
              <div class="card-body">
             <!-- Requiere jQuery y DataTables JS/CSS -->

<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre del Club</th>
            <th>Siglas</th>
            <th>Ciudad</th>
            <th>País</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Año Fundación</th>
            <th>Presidente</th>
            <th>Entrenador</th>
            <th>Estadio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($teams) && is_array($teams)) : ?>
            <?php $i = 1; foreach ($teams as $team): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= esc($team['nombre_club']) ?></td>
                    <td><?= esc($team['siglas']) ?></td>
                    <td><?= esc($team['ciudad']) ?></td>
                    <td><?= esc($team['pais']) ?></td>
                    <td><?= esc($team['telefono']) ?></td>
                    <td><?= esc($team['correo']) ?></td>
                    <td><?= esc($team['anio_fundacion']) ?></td>
                    <td><?= esc($team['presidente']) ?></td>
                    <td><?= esc($team['entrenador']) ?></td>
                    <td><?= esc($team['estadio']) ?></td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning">
                            <i class="fa fa-edit"></i> Editar
                        </a>
                        <a href="<?= site_url('/teams/delete/' . $team['id']) ?>" 
                           onclick="return confirm('¿Eliminar este club?');" 
                           class="btn btn-sm btn-danger">
                            <i class="fa fa-trash"></i> Eliminar
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
        $('#tabla_clubes').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json'
            }
        });
    });
</script>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
  </div>
</section>
 
  <?= $this->include('app/footer') ?>
 