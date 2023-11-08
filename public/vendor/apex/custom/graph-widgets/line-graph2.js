var options = {
	chart: {
		height: 300,
		type: 'area',
		toolbar: {
			show: false,
		},
	},
	colors: ['#007ae1', '#ed5937'],
	dataLabels: {
		enabled: false,
	},
	legend: {
  	show: false,
  },
	stroke: {
		show: true,
		curve: 'smooth',
		width: 3,
		lineCap: 'square'
	},
	series: [{
		name: 'Revenue',
		data: [5000, 15000, 30000, 45000, 60000, 75000, 90000]
	},{
    name: 'Sales',
    data: [2500, 10000, 20000, 30000, 40000, 50000, 60000]
  }],
	xaxis: {
		axisBorder: {
			show: false
		},
		categories: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
		axisTicks: {
			show: true
		},
		crosshairs: {
			show: true
		},
		labels: {
			offsetX: 0,
			offsetY: 5,
		}
	},
	yaxis: {
		labels: {
			formatter: function(value, index) {
				return (value / 1000) + 'K'
			},
			offsetX: -15,
			offsetY: 20,
		}
	},
	grid: {
		borderColor: '#e0e6ed',
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
			right: 0,
			bottom: 0,
			left: 0
		}, 
	}, 
	fill: {
		type:"gradient",
		gradient: {
			type: "vertical",
			shadeIntensity: 1,
			inverseColors: !1,
			opacityFrom: .3,
			opacityTo: .05,
			stops: [15, 100]
		}
	},
}

var chart = new ApexCharts(
	document.querySelector("#lineGraph2"),
	options
);

chart.render();