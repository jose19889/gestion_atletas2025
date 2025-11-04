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
                <h3 class="card-title">GENERAR FICHA DE EQUIPOS</h3>
              </div>
              <!-- /.card-header -->
            <?= $this->include('app/alerts') ?>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
            <a  href="users-create" class="btn btn-app  small">
                  <span class="badge bg-purple"></span>
                  <i class="fas fa-plus text-success"></i> <b>Crear Usuario</b>
                </a>
              <!-- /.card-header -->
              <div class="card-body">
             <!-- Requiere jQuery y DataTables JS/CSS -->
                  <section class="content">
        <div class="container-fluid">
           
            <form action="enhanced-results.html">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                               <div class="form-group">
                                    <label>Seleccione Equipo</label>
                                    <select class="select2" style="width: 100%;">
                                        <option selected>Jet 7</option>
                                        <option>San antoniio</option>
                                    </select>
                                </div>
                           
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Seleccione  Temporada:</label>
                                    <select class="select2" style="width: 100%;">
                                        <option selected>2024-2025</option>
                                        <option>2025-2026</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <div class="input-group">
                                    
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                </div>
                       
                    </div>
                </div>
            </form>
        </div>
    </section>
   <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">FICHA DEL EQUIPO</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">

        <div class="team-header">
    <h1>Malabo Kings - Ficha de Jugadores</h1>
  </div>

  <div class="players-grid">

    <div class="player-card">
      <img src="<?= base_url('uploads/img/')?>" class="player-photo brand-image img-circle elevation-3" alt="Jugador 1" style="height:100px; withd:100px;">
      <div class="player-info">
        <h3>Juan Esono</h3>
        <p>Número: 7</p>
        <p>Edad: 23</p>
        <p>Altura: 1.90m</p>
        <span class="position">Base</span>
      </div>
    </div>

    <div class="player-card">
      <img src="<?= base_url('uploads/img/')?>" class="player-photo" alt="Jugador 2">
      <div class="player-info">
        <h3>Pedro Nguema</h3>
        <p>Número: 10</p>
        <p>Edad: 25</p>
        <p>Altura: 2.01m</p>
        <span class="position">Alero</span>
      </div>
    </div>

    <div class="player-card">
      <img src="<?= base_url('uploads/img/')?>" class="player-photo" alt="Jugador 3">
      <div class="player-info">
        <h3>Lucas Obama</h3>
        <p>Número: 5</p>
        <p>Edad: 21</p>
        <p>Altura: 1.85m</p>
        <span class="position">Escolta</span>
      </div>
    </div>

    <div class="player-card">
      <img src="<?= base_url('uploads/img/')?>" class="player-photo" alt="Jugador 4">
      <div class="player-info">
        <h3>Iván Ela</h3>
        <p>Número: 12</p>
        <p>Edad: 26</p>
        <p>Altura: 2.04m</p>
        <span class="position">Pívot</span>
      </div>
    </div>

    <div class="player-card">
      <img src="<?= base_url('uploads/img/')?>" class="player-photo" alt="Jugador 5">
      <div class="player-info">
        <h3>Carlos Ndong</h3>
        <p>Número: 3</p>
        <p>Edad: 22</p>
        <p>Altura: 1.93m</p>
        <span class="position">Ala-Pívot</span>
      </div>
    </div>

    <div class="player-card">
      <img src="<?= base_url('uploads/img/')?>" class="player-photo" alt="Jugador 6">
      <div class="player-info">
        <h3>Simón Obiang</h3>
        <p>Número: 9</p>
        <p>Edad: 24</p>
        <p>Altura: 1.88m</p>
        <span class="position">Base</span>
      </div>
    </div>

  </div>

  </div>
</div>
            <style>
          .team-header {
      text-align: center;
      margin-bottom: 3rem;
    }

    .team-header h1 {
      color: #1e3a8a;
      font-size: 2.5rem;
    }

    .players-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
    }

    .player-card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
      overflow: hidden;
      transition: 0.3s ease;
    }

    .player-card:hover {
      transform: translateY(-5px);
    }

    .player-photo {
      width: 100%;
      height: 280px;
      object-fit: cover;
    }

    .player-info {
      padding: 1rem;
    }

    .player-info h3 {
      margin: 0;
      font-size: 1.2rem;
      color: #1f2937;
    }

    .player-info p {
      margin: 0.2rem 0;
      font-size: 0.95rem;
      color: #4b5563;
    }

    .position {
      background: #2563eb;
      color: white;
      padding: 4px 10px;
      border-radius: 6px;
      display: inline-block;
      font-size: 0.85rem;
      margin-top: 8px;
    }
    </style>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->


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
 