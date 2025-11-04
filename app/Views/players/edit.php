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
       <?= $this->include('app/shortcut') ?>
 
    </section>
    <!-- /.content -->
 <section class="content">
      <div class="container-fluid">
		<?= $this->include('app/alerts') ?>
		<div class="row">
					

                        
						<div class="form-three widget-shadow">
                            
							
						</div>

                        
					</div>

					  </div>
      <!-- /.container-fluid -->
    </section>
<div class="container mt-4">
    <h3>Gestionar Licencia - <?= esc($player['nombre']) . ' ' . esc($player['apellidos']) ?></h3>

    <form action="<?= site_url('players/licencia/actualizar/' . $player['id']) ?>" method="post">
        <?= csrf_field() ?>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="estado_licencia" class="form-label">Estado de la Licencia</label>
                <select name="estado_licencia" id="estado_licencia" class="form-control" required>
                    <option value="en_espera" <?= $player['estado_licencia'] == 'en_espera' ? 'selected' : '' ?>>En espera</option>
                    <option value="aprobada" <?= $player['estado_licencia'] == 'aprobada' ? 'selected' : '' ?>>Aprobada</option>
                    <option value="rechazada" <?= $player['estado_licencia'] == 'rechazada' ? 'selected' : '' ?>>Rechazada</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="fecha_expiracion" class="form-label">Fecha de Expiración</label>
                <input type="date" name="fecha_expiracion" id="fecha_expiracion" class="form-control"
                       value="<?= esc($player['fecha_expiracion'] ?? date('Y-m-d')) ?>" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="numero_licencia" class="form-label">Número de Licencia</label>
                <input type="text" name="numero_licencia" id="numero_licencia" class="form-control"
                       value="<?= esc($player['numero_licencia'] ?? '') ?>" placeholder="Ej. LIC-2025-00123">
            </div>

            <div class="col-md-6 mb-3">
                <label for="observaciones" class="form-label">Observaciones</label>
                <textarea name="observaciones" id="observaciones" class="form-control" rows="3"
                          placeholder="Notas u observaciones internas"><?= esc($player['observaciones'] ?? '') ?></textarea>
            </div>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="<?= site_url('players') ?>" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>



      
  </div>
</section>
  <?= $this->include('app/footer') ?>




