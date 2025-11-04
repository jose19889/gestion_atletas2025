<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="home"><span class="fa fa-area-chart"></span><span class="dashboard_text">Gestor de denuncias</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>

              </li>
              <?php if (session()->get('role_id') == 1): ?>
			         <li class="treeview">
                <a href="#">
                <i class="fa fa-user"></i>
                <span>MODULO DE USUARIOS</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                <li><a href="<?php echo site_url('users-list');?>"><i class="fa fa-angle-right"></i>LISTA DE USUARIOS</a></li>
                  <li><a href="users-create"><i class="fa fa-angle-right"></i>CREAR USUARIO</a></li>
                  <li><a href="roles-list"><i class="fa fa-angle-right"></i> LISTA DSE ROLES</a></li>
                </ul>
              </li>
              <?php endif; ?>
               
              <li class="treeview">
              <li class="treeview">
              <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>MODULO DE DENUNCIAS</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                  <li><a href="reports"><i class="fa fa-angle-right"></i>DENUNCIAS GENERALES</a></li>
                  <li><a href="buttons.html"><i class="fa fa-angle-right"></i> ESTADO DE DENUNCIAS</a></li>
                  <li><a href="reports-assigned"><i class="fa fa-angle-right"></i>DENUNCIAS ASIGNADAS</a></li>
                </ul>
              </li>
		
              <li class="treeview">
                <a href="#">
                <i class="fa fa-edit"></i> <span>ESTADISTICAS</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="reports-stats"><i class="fa fa-angle-right"></i>ESTADISTICA EN NUMEROS</a></li>
                  <li><a href="validation.html"><i class="fa fa-angle-right"></i> ESTADISTICA EN GRAFICOS</a></li>
                </ul>
              </li>
             
             
             
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>