@extends('layouts.app')

@section('page-id', 'report')

@section('page-title', 'REVENUE VS EXPENSES')

@section('content')

<div class="card">
	<div class="card-header form-horizontal">
		<div class="row">
			<div class="col-sm-8">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group m-b-0 has-feedback">
							<label for="dFrom" class="col-sm-3 control-label">Date from</label>
							<div class="col-sm-9">
								<input type="text" name="dFrom" class="form-control" />
								<span class="form-control-feedback">
									<i class="sprite calendar-ico"></i>
								</span>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group m-b-0 has-feedback">
							<label for="dTo" class="col-sm-3 control-label">Date to</label>
							<div class="col-sm-9">
								<input type="text" name="dTo" class="form-control" />
								<span class="form-control-feedback">
									<i class="sprite calendar-ico"></i>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<ul class="action-btns pull-right">
					<li>
						<a href="#">
							<i class="sprite forward-ico"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="sprite printer-ico"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="card-body">
		<canvas id="chart"></canvas>
	</div>
</div>

@endsection


@section('otherJSLibrary')
	<script src="{{ asset('js/vendor/Chart.bundle.js') }}"></script>
	<script type="text/javascript">
		window.randomScalingFactor = function() {
			return Math.floor(Math.random() * (100000 - 1 + 1)) + 1;
		}

		Chart.defaults.global.pointHitDetectionRadius = 1;

		var customTooltips = function(tooltip) {
			// Tooltip Element
			var tooltipEl = document.getElementById('chartjs-tooltip');

			if (!tooltipEl) {
				tooltipEl = document.createElement('div');
				tooltipEl.id = 'chartjs-tooltip';
				tooltipEl.innerHTML = '<table></table>';
				this._chart.canvas.parentNode.appendChild(tooltipEl);
			}

			// Hide if no tooltip
			if (tooltip.opacity === 0) {
				tooltipEl.style.opacity = 0;
				return;
			}

			// Set caret Position
			tooltipEl.classList.remove('above', 'below', 'no-transform');
			if (tooltip.yAlign) {
				tooltipEl.classList.add(tooltip.yAlign);
			} else {
				tooltipEl.classList.add('no-transform');
			}

			function getBody(bodyItem) {
				return bodyItem.lines;
			}

			// Set Text
			if (tooltip.body) {
				var titleLines = tooltip.title || [];
				var bodyLines = tooltip.body.map(getBody);
				var dp = tooltip.dataPoints;

				var innerHtml = '<thead>';

				titleLines.forEach(function(title) {
					innerHtml += '<tr><th colspan="2" style="text-align: center;">' + title + '</th></tr>';
				});
				innerHtml += '</thead><tbody><tr>';
console.log(tooltip);
				bodyLines.forEach(function(body, i) {
					var colors = tooltip.labelColors[i];
					var style = 'background:' + colors.backgroundColor;
					style += '; border-color:' + colors.borderColor;
					style += '; border-width: 2px';
					var span = '<span class="chartjs-tooltip-key" style="' + style + '"></span>';
					innerHtml += '<td>' + span + dp[i].xLabel + " => " + dp[i].yLabel + '</td>';
				});
				innerHtml += '</tr></tbody>';

				var tableRoot = tooltipEl.querySelector('table');
				tableRoot.innerHTML = innerHtml;
			}

			var positionY = this._chart.canvas.offsetTop;
			var positionX = this._chart.canvas.offsetLeft;

			// Display, position, and set styles for font
			tooltipEl.style.opacity = 1;
			tooltipEl.style.left = positionX + tooltip.caretX + 'px';
			tooltipEl.style.top = positionY + tooltip.caretY + 'px';
			tooltipEl.style.fontFamily = tooltip._bodyFontFamily;
			tooltipEl.style.fontSize = tooltip.bodyFontSize + 'px';
			tooltipEl.style.fontStyle = tooltip._bodyFontStyle;
			tooltipEl.style.padding = tooltip.yPadding + 'px ' + tooltip.xPadding + 'px';
		};

		var lineChartData = {
			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
			datasets: [{
				label: 'Expenses',
				borderColor: '#e21147',
				pointBackgroundColor: '#e21147',
				fill: false,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				]
			}, {
				label: 'Revenue',
				borderColor: "#a2e835",
				pointBackgroundColor: "#a2e835",
				fill: false,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				]
			}]
		};

		window.onload = function() {
			var chartEl = document.getElementById('chart');
			window.myLine = new Chart(chartEl, {
				type: 'line',
				data: lineChartData,
				options: {
					title: {
						display: true,
						text: 'Chart.js Line Chart - Custom Tooltips'
					},
					tooltips: {
						enabled: false,
						mode: 'index',
						position: 'nearest',
						custom: customTooltips
					},
					scales: {
						yAxes: [{gridLines: { display: false }}]
					}
				}
			});
		};
	</script>
@endsection