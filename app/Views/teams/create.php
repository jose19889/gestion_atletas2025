<?= $this->include('app/header') ?>
<?= $this->section('content') ?>
< <!-- Main Sidebar Container -->
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
    <!-- render shortcuts area-->
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
     
 
    </section>
    <!-- /.content -->
 <section class="content">
      <div class="container-fluid">
		<?= $this->include('app/alerts') ?>
		<div class="row">
						<h3 class="title1">Crear Usuarios:</h3>
						<div class="form-three widget-shadow">
                            
							
						</div>
					</div>

					  </div>
      <!-- /.container-fluid -->
    </section>

 <form action="<?= site_url('teams-insert') ?>" method="post" class="">
    <?= csrf_field() ?>

    <div class="card-body">
        <div class="row">
            <!-- Nombre del Club -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre_club">Nombre del Club</label>
                    <input type="text" class="form-control" name="nombre_club" value="">
                </div>
            </div>

            <!-- Siglas -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="siglas">Siglas</label>
                    <input type="text" class="form-control" name="siglas" value="">
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Ciudad -->
            <div class="col-md-4">
                <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" name="ciudad" value="">
                </div>
            </div>

            <!-- País -->
            <div class="col-md-4">
                <div class="form-group">
                    <label for="pais">País</label>
                    <input type="text" class="form-control" name="pais" value="">
                </div>
            </div>

            <!-- Teléfono -->
            <div class="col-md-4">
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" class="form-control" name="telefono" value="">
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Correo -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="correo">Correo Electrónico</label>
                    <input type="email" class="form-control" name="correo" value="">
                </div>
            </div>

            <!-- Año Fundación -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="anio_fundacion">Año Fundación</label>
                    <input type="number" class="form-control" name="anio_fundacion" min="1800" max="<?= date('Y') ?>" value="">
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Presidente -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="presidente">Presidente</label>
                    <input type="text" class="form-control" name="presidente" value="">
                </div>
            </div>

            <!-- Entrenador -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="entrenador">Entrenador</label>
                    <input type="text" class="form-control" name="entrenador" value="">
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Estadio -->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="estadio">Estadio</label>
                    <input type="text" class="form-control" name="estadio" value="">
                </div>
            </div>
        </div>

        <!-- Campos de membresía: solo si el rol es Federación -->
      <?php if (in_array(session()->get('role_id'), [1, 3])): ?>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tipo">Tipo de Membresía</label>
                    <select name="tipo" class="form-control select2">
                        <option value="Básica">Básica</option>
                        <option value="Premium">Premium</option>
                        <option value="Honoraria">Honoraria</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="fecha_inicio">Fecha de Inicio</label>
                    <input type="date" name="fecha_inicio" class="form-control" value="<?= date('Y-m-d') ?>">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="fecha_expiracion">Fecha de Expiración</label>
                    <input type="date" name="fecha_expiracion" class="form-control" value="<?= date('Y-m-d', strtotime('+1 year')) ?>">
                </div>
            </div>
        </div>
        <?php endif; ?>


        <!-- Botón Guardar -->
        <div class="form-group text-center">
            <input type="submit" name="submit" value="Guardar Club" class="btn btn-primary" />
        </div>
    </div>

    
</form>

      
  </div>
</section>
  <?= $this->include('app/footer') ?>




