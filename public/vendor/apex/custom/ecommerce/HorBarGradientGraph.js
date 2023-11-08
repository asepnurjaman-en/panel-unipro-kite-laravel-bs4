var options = {
	chart: {
		height: 100,
		type: 'bar',
		toolbar: {
			show: false,
		}
	},
	dataLabels: {
		enabled: false,
	},
	plotOptions: {
		bar: {
			horizontal: true,
		},
	},
	stroke: {
		show: true,
		width: 1,
		lineCap: 'square'
	},
	series: [{
		name: 'Orders',
		data: [2000, 3000, 4000, 5000]
	}],
	theme: {
		monochrome: {
			enabled: true,
			color: '#007ae1',
			shadeIntensity: 0.2
		},
	},
	xaxis: {
		axisBorder: {
			show: false
		},
		categories: ["Week 1", "Week 2", "Week 3", "Week 4"],
		axisTicks: {
			show: false
		},
		labels: {
			show: false
		}
	},
	yaxis: {
		show: false
	},
	grid: {
		borderColor: '#ced1e0',
		strokeDashArray: 5,
		xaxis: {
			lines: {
				show: true
			}
		},   
		yaxis: {
			lines: {
				show: false,
			}	
		},
		padding: {
			top: 0,
			right: 15,
			bottom: 0,
			left: 0
		}, 
	},
	fill: {
		type:"gradient",
		gradient: {
			type: "horizontal",
			shadeIntensity: 1,
			inverseColors: !1,
			opacityFrom: .3,
			opacityTo: .05,
			stops: [35, 100]
		}
	},
}

var chart = new ApexCharts(
	document.querySelector("#HorBarGradientGraph"),
	options
);

chart.render();