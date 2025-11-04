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

 <form  action="<?php echo site_url('users-insert');?>" method="post" class="">
        
       <div class="card-body">
            <div class="row">
              <div class="col-md-6">
               <div class="form-group">
                    <label for="formData">Nombre y apellidos</label>
                    <input type="text" class="form-control" name="username"  value="">
                   
                  </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
               <div class="form-group">
                    <label for="formData">Correo Electromico</label>
                   <input type="email" class="form-control "  name="email" placeholder="">
                  </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
             <div class="row">
              <div class="col-md-4">
               <div class="form-group">
                    <label for="formData">Contacto</label>
                   <input type="text" class="form-control"  name="contacto" placeholder="">
                  </div>
              </div>

              <div class="col-md-4">
               <div class="form-group">
                    <label for="formData">Contraseña </label>
                   <input type="text" class="form-control"  name="password"  placeholder="Password">
                  </div>
              </div>

               <div class="col-md-4">
                <div class="form-group">
                  <label>Seleccione role</label>
              
                <select name="role_id"  class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <?php foreach ($roles as $role) :?>
                <option value="<?php echo $role['id'];?>"><?php echo $role['role_name'];?></option> 
                
                <?php endforeach;?>

                </select>

                  </div>
              </div>

               
              </div>
              <!-- /.col -->
             

           

              <!-- /.col -->
            </div>

               <div class="form-group text-center">
                <input type="submit" turno="submit" value="Guardar " />
            </div>

            <!-- /.row -->
        
          
            <!-- /.row -->
          </div>
          </form>
      
  </div>
</section>
  <?= $this->include('app/footer') ?>




