
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
                <h3 class="card-title">CREAR JUGADOR</h3>
              </div>
              <!-- /.card-header -->
            <?= $this->include('app/alerts') ?>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
          
              <!-- /.card-header -->
              <div class="card-body">
             <!-- Requiere jQuery y DataTables JS/CSS -->
           

<form action="<?= base_url('player-insert') ?>" method="post">
     <!-- <div class="mb-3">
    <label>Foto del Club (opcional)</label>
    <input type="file" name="foto" class="form-control">
  </div> -->
  <div class="row">
   
    <div class="col-md-6">
      <label>Nombre</label>
      <input type="text" name="nombre" class="form-control" required>
    </div>

    <div class="col-md-6">
      <label>Apellido</label>
      <input type="text" name="apellidos" class="form-control" required>
    </div>

    <div class="col-md-4">
      <label>Edad</label>
      <input type="number" name="edad" class="form-control" required>
    </div>

    <div class="col-md-4">
      <label>Posición</label>
      <input type="text" name="posicion" class="form-control" required>
    </div>

    <div class="col-md-4">
      <label>Número</label>
      <input type="number" name="numero" class="form-control" required>
    </div>

    <div class="col-md-6">
      <label>Club</label>
      <select name="club_id" class="form-control" required>
        <option value="">Seleccione un club</option>
        <?php foreach ($clubs as $club): ?>
          <option value="<?= esc($club['id']) ?>"><?= esc($club['nombre_club']) ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="col-md-6">
      <label>Ciudad</label>
      <input type="text" name="ciudad" class="form-control" required>
    </div>

    <div class="col-md-6">
      <label>País</label>
      <input type="text" name="pais" class="form-control" required>
    </div>
   
     <div class="col-md-6">
      <label>posicion</label>
      <input type="text" name="posicion" class="form-control" required>
    </div>

     
    </div>


    <div class="col-md-6">
      <label>Fecha Emisión</label>
      <input type="date" name="fecha_emision" class="form-control" required>
    </div>
<div class="col-md-6">
      <label>Email</label>
      <input type="text" name="email" class="form-control" required>
    </div>
   
     <div class="col-md-6">
      <label>Vence</label>
      <input type="date" name="vence" class="form-control" required>
    </div>


    <div class="col-12 text-end mt-3">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </div>
</form>

</div>

  <?= $this->include('app/footer') ?>
 