<?= $this->extend('app/header') ?>
<?= $this->section('content') ?>
<div id="page-wrapper">
			<div class="main-page">
			
			<br><br><br>
        	
            <?= $this->include('app/shortcut') ?>
				<!-- <div class="charts"> -->
					<!-- <div class="col-md-12 charts-grids widget states-mdl"> -->
						<!-- <div class="card-header"> -->
							<!-- <h3>Balance de tipos de Denuncias</h3> -->
						<!-- </div> -->
						<!-- <div id="chartdiv"></div> -->
					<!-- </div> -->
				<!--  -->
			
					<!-- <div class="clearfix"> </div> -->
				<!-- </div> -->

				<div class="container">

<h2>Tipo Denuncia Statistics</h2>
<hr>

<!-- Canvas for Chart.js -->
<canvas id="denunciaChart" width="400" height="200"></canvas>

<script>
    // Get the data passed from the controller
    const labels = <?= $labels ?>; // This will be an array of tipo_denuncia labels
    const data = <?= $data ?>;     // This will be an array of counts

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
                            return tooltipItem.raw + ' denuncias'; // Adding 'denuncias' text in the tooltip
                        }
                    }
                }
            }
        }
    });
</script>

					
				</div>
<?= $this->endSection() ?>


	



