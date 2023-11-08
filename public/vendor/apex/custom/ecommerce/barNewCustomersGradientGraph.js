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
	stroke: {
		show: true,
		width: 1,
		lineCap: 'square'
	},
	series: [{
		name: 'Customers',
		data: [2000, 4000, 5000, 9000, 15000, 8500, 5500]
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
		categories: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
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
			stops: [35, 100]
		}
	},
}

var chart = new ApexCharts(
	document.querySelector("#barNewCustomersGraph"),
	options
);

chart.render();