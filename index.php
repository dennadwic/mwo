

<!DOCTYPE html>
<html>
  <head>
    <?php include "include/header.php" ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Management Work Order</title>
  </head>
  <body>
    <?php include "include/wrapper.php" ?>
    <div class="content-wrapper">
      <div class="main-panel">
        <div class="content">
          <div class="page-inner">
            <div class="page-header">
              <h4 class="page-title">Dashboard</h4>
          </div>

          <div class="row">
            <div class="col-md-8">
              <div class="card full-height">
                <div class="card-body">
                  <div class="card-title">Overall statistics</div>
                  <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                    <div class="px-2 pb-2 pb-md-0 text-center">
                      <div id="circles-1"></div>
                      <h6 class="fw-bold mt-3 mb-0">Open</h6>
                    </div>
                    <div class="px-2 pb-2 pb-md-0 text-center">
                      <div id="circles-2"></div>
                      <h6 class="fw-bold mt-3 mb-0">Proses Pengerjaan</h6>
                    </div>
                    <div class="px-2 pb-2 pb-md-0 text-center">
                      <div id="circles-3"></div>
                      <h6 class="fw-bold mt-3 mb-0">Belum Close</h6>
                    </div>
                    <div class="px-2 pb-2 pb-md-0 text-center">
                      <div id="circles-4"></div>
                      <h6 class="fw-bold mt-3 mb-0">Close</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="col-md-4">
              <div class="card card-primary bg-primary-gradient">
                <div class="card-body">
                  <h4 class="mb-4 fw-bold">Total</h4>
                  <div class="px-4 pb-4 pb-md-0 text-center">
                    <div id="circles-5"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="card">
								<div class="card-header">
									<div class="card-title">Work Order by Years</div>
								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="lineChart"></canvas>
									</div>
								</div>
							</div>
            </div>

            <div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Work Order by Month</div>
								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="multipleBarChart"></canvas>
									</div>
								</div>
							</div>
						</div>
          </div>
        </div>
      </div>
    </div>

    <script>
    Circles.create({
      id:'circles-1',
      radius:45,
      value:60,
      maxValue:100,
      width:7,
      text: 5,
      colors:['#f1f1f1', '#F25961'],
      duration:400,
      wrpClass:'circles-wrp',
      textClass:'circles-text',
      styleWrapper:true,
      styleText:true
    })

    Circles.create({
      id:'circles-2',
      radius:45,
      value:70,
      maxValue:100,
      width:7,
      text: 4,
      colors:['#f1f1f1', '#FF9E27'],
      duration:400,
      wrpClass:'circles-wrp',
      textClass:'circles-text',
      styleWrapper:true,
      styleText:true
    })

    Circles.create({
      id:'circles-3',
      radius:45,
      value:40,
      maxValue:100,
      width:7,
      text: 20,
      colors:['#f1f1f1', '#2BB930'],
      duration:400,
      wrpClass:'circles-wrp',
      textClass:'circles-text',
      styleWrapper:true,
      styleText:true
    })

    Circles.create({
      id:'circles-4',
      radius:45,
      value:40,
      maxValue:100,
      width:7,
      text: 36,
      colors:['#f1f1f1', '#3b69fa'],
      duration:400,
      wrpClass:'circles-wrp',
      textClass:'circles-text',
      styleWrapper:true,
      styleText:true
    })

    Circles.create({
      id:'circles-5',
      radius:45,
      value:40,
      maxValue:100,
      width:5,
      text: 65,
      colors:['#4b71ea', '#f1f1f1'],
      duration:400,
      wrpClass:'circles-wrp',
      textClass:'circles-text',
      styleWrapper:true,
      styleText:true
    });

    var myMultipleBarChart = new Chart(multipleBarChart, {
			type: 'bar',
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				datasets : [{
					label: "Hardware",
					backgroundColor: '#59d05d',
					borderColor: '#59d05d',
					data: [10, 15, 18, 17, 15, 10, 14, 11, 18, 12, 22, 11],
				},{
					label: "Software",
					backgroundColor: '#fdaf4b',
					borderColor: '#fdaf4b',
					data: [14, 12, 24, 23, 10, 29, 17, 16, 17, 19, 22, 13],
				}, {
					label: "Email",
					backgroundColor: '#177dff',
					borderColor: '#177dff',
					data: [15, 17, 23, 18, 23, 12, 22, 16, 14, 18, 16, 19],
				}, {
					label: "Network",
					backgroundColor: '#884ea0',
					borderColor: '#884ea0',
					data: [25, 17, 23, 28, 23, 12, 12, 16, 14, 28, 16, 19],
				}],
			},
			options: {
				responsive: true, 
				maintainAspectRatio: false,
				legend: {
					position : 'bottom'
				},
				title: {
					display: true,
					text: 'Traffic Stats'
				},
				tooltips: {
					mode: 'index',
					intersect: false
				},
				responsive: true,
				scales: {
					xAxes: [{
						stacked: true,
					}],
					yAxes: [{
						stacked: true
					}]
				}
			}
		});

    var myLineChart = new Chart(lineChart, {
			type: 'line',
			data: {
				labels: ["2017", "2018", "2019", "2020"],
				datasets: [{
					label: "Traffic Stats",
					borderColor: "#1d7af3",
					pointBorderColor: "#FFF",
					pointBackgroundColor: "#1d7af3",
					pointBorderWidth: 2,
					pointHoverRadius: 4,
					pointHoverBorderWidth: 1,
					pointRadius: 4,
					backgroundColor: 'transparent',
					fill: true,
					borderWidth: 2,
					data: [177, 200, 256, 245]
				}]
			},
			options : {
				responsive: true, 
				maintainAspectRatio: false,
				legend: {
					position: 'bottom',
					labels : {
						padding: 10,
						fontColor: '#1d7af3',
					}
				},
				tooltips: {
					bodySpacing: 4,
					mode:"nearest",
					intersect: 0,
					position:"nearest",
					xPadding:10,
					yPadding:10,
					caretPadding:10
				},
				layout:{
					padding:{left:15,right:15,top:15,bottom:15}
				}
			}
		});


    $('#lineChart').sparkline([105,103,123,100,95,105,115], {
      type: 'line',
      height: '70',
      width: '100%',
      lineWidth: '2',
      lineColor: '#ffa534',
      fillColor: 'rgba(255, 165, 52, .14)'
    });
  </script>
  </body>
</html>