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

      <title>Carnet Moderno con Controles</title>
      <!-- Bootstrap CSS CDN -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
      <style>
        .carnet {
          background: #fff;
          border-radius: 16px;
          box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
          overflow: hidden;
          color: #2c3e50;
          margin-top: 20px;
          max-width: 350px;
        }

        .carnet-header {
          background: linear-gradient(135deg, #2980b9, #6dd5fa);
          padding: 20px;
          color: white;
          text-align: center;
          font-weight: 700;
          font-size: 1.3rem;
          letter-spacing: 1.2px;
        }

        .carnet-body {
          display: flex;
          padding: 20px;
          gap: 20px;
        }

        .foto {
          flex-shrink: 0;
          width: 100px;
          height: 130px;
          border-radius: 12px;
          background: #bdc3c7 url('https://i.pravatar.cc/100x130') center/cover no-repeat;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          position: relative;
        }

        /* Contenedor para foto + QR */
        .foto-qr {
          display: flex;
          flex-direction: column;
          gap: 15px;
          align-items: center;
        }

        #qrcode {
          width: 100px;
          height: 100px;
          background: white;
          padding: 13px;
          border-radius: 12px;
          box-shadow: 0 2px 8px rgba(0, 0, 0, 0.12);
        }

        .datos {
          flex-grow: 1;
          display: flex;
          flex-direction: column;
          justify-content: center;
        }

        .datos .nombre {
          font-size: 1.4rem;
          font-weight: 700;
          margin-bottom: 8px;
        }

        .datos .club {
          font-size: 1rem;
          font-weight: 600;
          color: #2980b9;
          margin-bottom: 15px;
        }

        .datos .item {
          margin-bottom: 10px;
          font-size: 0.95rem;
          display: flex;
          justify-content: space-between;
          border-bottom: 1px solid #ecf0f1;
          padding-bottom: 6px;
        }

        .datos .item strong {
          color: #34495e;
        }

        .carnet-footer {
          background: #ecf0f1;
          padding: 12px 20px;
          text-align: center;
          font-size: 0.85rem;
          color: #7f8c8d;
          font-style: italic;
        }

        /* Clases para colores dinámicos */
        .bg-blue {
          background: linear-gradient(135deg, #2980b9, #6dd5fa) !important;
        }

        .bg-green {
          background: linear-gradient(135deg, #27ae60, #2ecc71) !important;
        }

        .bg-red {
          background: linear-gradient(135deg, #c0392b, #e74c3c) !important;
        }
      </style>

      <div class="container">
        <div class="row">
          <!-- Columna para el carnet -->
          <div class="col-12 col-md-3">
            <div class="carnet" role="main" aria-label="Carnet de Jugador">
              <div id="carnet-header" class="carnet-header bg-blue" aria-level="1" role="heading">
                Carnet Oficial de Jugador
              </div>
              <div class="carnet-body">
                <div class="foto-qr">
                  <div class="foto" aria-label="Foto del jugador">
                    <img src="<?= base_url('uploads/img/jose.PNG')?>" alt="Foto jugador" class="img-fluid rounded" style="width:100px; height:130px;">
                  </div>
                  <div id="qrcode" aria-label="Código QR del carnet"></div>
                </div>

                <div class="datos">
                  <div class="nombre" id="nombre">Pedro Obama</div>
                  <div class="club" id="club">Jet 7 Ela Nguema</div>
                  <div class="item"><strong>Licencia:</strong> <span id="licencia">P123456</span></div>
                  <div class="item"><strong>Fecha Emisión:</strong> <span id="emision">01/07/2023</span></div>
                  <div class="item"><strong>Vence:</strong> <span id="vence">01/07/2024</span></div>
                </div>
              </div>
              <div class="carnet-footer">
                Documento válido para la temporada 2023 - 2024<br />
                Emitido por la Federación de Baloncesto de Guinea Ecuatorial
              </div>
            </div>
          </div>

          <!-- Columna para ajustes / controles -->
          <div class="col-12 col-md-8 offset-md-1 mt-4 mt-md-0">
            <h3>Ajustes del Carnet</h3>
            <form>
              <div class="mb-3">
                <label for="colorSelect" class="form-label">Color del encabezado</label>
                <select id="colorSelect" class="form-select" aria-describedby="colorHelp">
                  <option value="bg-blue" selected>Azul</option>
                  <option value="bg-green">Verde</option>
                  <option value="bg-red">Rojo</option>
                </select>
                <div id="colorHelp" class="form-text">Selecciona el color para el encabezado del carnet.</div>
              </div>

              <div class="mb-3">
                <label for="nombreInput" class="form-label">Nombre del Jugador</label>
                <input type="text" id="nombreInput" class="form-control" value="Pedro Obama" />
              </div>

              <div class="mb-3">
                <label for="clubInput" class="form-label">Club</label>
                <input type="text" id="clubInput" class="form-control" value="Jet 7 Ela Nguema" />
              </div>

              <div class="mb-3">
                <label for="licenciaInput" class="form-label">Número de Licencia</label>
                <input type="text" id="licenciaInput" class="form-control" value="P123456" />
              </div>

              <div class="mb-3">
                <label for="emisionInput" class="form-label">Fecha de Emisión</label>
                <input type="date" id="emisionInput" class="form-control" value="2023-07-01" />
              </div>

              <div class="mb-3">
                <label for="venceInput" class="form-label">Fecha de Vencimiento</label>
                <input type="date" id="venceInput" class="form-control" value="2024-07-01" />
              </div>

              <button type="button" id="updateBtn" class="btn btn-primary">Actualizar Carnet</button>
              <button type="button" id="previewBtn" class="btn btn-secondary ms-2">Vista Previa</button>
              <button type="button" id="printBtn" class="btn btn-success ms-2">Imprimir</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Vista Previa -->
      <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="previewModalLabel">Vista Previa del Carnet</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body d-flex justify-content-center">
              <div id="previewContent"></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="button" id="printPreviewBtn" class="btn btn-primary">Imprimir desde Vista Previa</button>
            </div>
          </div>
        </div>
      </div>

      <!-- QRCode.js librería -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
      <!-- Bootstrap JS (Popper + Bootstrap) -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

      <script>
        const colorSelect = document.getElementById('colorSelect');
        const carnetHeader = document.getElementById('carnet-header');

        const nombreInput = document.getElementById('nombreInput');
        const clubInput = document.getElementById('clubInput');
        const licenciaInput = document.getElementById('licenciaInput');
        const emisionInput = document.getElementById('emisionInput');
        const venceInput = document.getElementById('venceInput');

        const nombre = document.getElementById('nombre');
        const club = document.getElementById('club');
        const licencia = document.getElementById('licencia');
        const emision = document.getElementById('emision');
        const vence = document.getElementById('vence');

        const qrcodeContainer = document.getElementById('qrcode');
        let qrcode = new QRCode(qrcodeContainer, {
          width: 100,
          height: 100,
          colorDark: "#000000",
          colorLight: "#ffffff",
        });

        function actualizarQR(text) {
          qrcode.clear(); // Limpia QR previo
          qrcode.makeCode(text);
        }

        document.getElementById('updateBtn').addEventListener('click', () => {
          // Cambiar color del encabezado
          carnetHeader.className = 'carnet-header ' + colorSelect.value;

          // Actualizar datos
          nombre.textContent = nombreInput.value.trim() || 'Nombre';
          club.textContent = clubInput.value.trim() || 'Club';
          licencia.textContent = licenciaInput.value.trim() || 'Licencia';
          emision.textContent = emisionInput.value || 'Fecha Emisión';
          vence.textContent = venceInput.value || 'Fecha Vence';

          // Actualizar QR con la licencia
          actualizarQR(licenciaInput.value.trim());
        });

        // Imprimir y Vista Previa
        const printBtn = document.getElementById('printBtn');
        const previewBtn = document.getElementById('previewBtn');
        const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
        const previewContent = document.getElementById('previewContent');
        const printPreviewBtn = document.getElementById('printPreviewBtn');

        printBtn.addEventListener('click', () => {
          imprimirCarnet();
        });

        previewBtn.addEventListener('click', () => {
          // Clona el carnet actual y lo pone en el modal para vista previa
          const carnet = document.querySelector('.carnet').cloneNode(true);
          previewContent.innerHTML = '';
          previewContent.appendChild(carnet);
          previewModal.show();
        });

        printPreviewBtn.addEventListener('click', () => {
          imprimirCarnet();
          previewModal.hide();
        });

        // Función para imprimir solo el carnet
        function imprimirCarnet() {
          const carnet = document.querySelector('.carnet');
          const ventana = window.open('', '_blank', 'width=400,height=600');
          ventana.document.write(`
            <html>
              <head>
                <title>Imprimir Carnet</title>
                <style>
                  body { margin: 0; font-family: 'Montserrat', sans-serif; }
                  .carnet { box-shadow: none; margin: 20px auto; }
                </style>
              </head>
              <body>
                ${carnet.outerHTML}
              </body>
            </html>
          `);
          ventana.document.close();
          ventana.focus();
          setTimeout(() => {
            ventana.print();
            ventana.close();
          }, 500);
        }

        // Inicializa el QR con la licencia inicial
        actualizarQR(licenciaInput.value.trim());
      </script>
    </div>
  </div>
</section>





         </div>

<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->

</div>
</section>
 
  <?= $this->include('app/footer') ?>
 