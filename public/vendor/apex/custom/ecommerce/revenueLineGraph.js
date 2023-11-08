var options = {
	chart: {
		height: 120,
		type: 'line',
		zoom: {
			enabled: false
		},
		toolbar: {
			show: false,
		},
	},
	dataLabels: {
		enabled: false
	},
	colors: ['#ffffff'],
	stroke: {
		curve: 'smooth',
		width: 3,
	},
	series: [{
		name: "Revenue",
		data: [10, 41, 35, 51, 49, 62]
	}],
	xaxis: {
		axisBorder: {
			show: true
		},
		labels: {
			show: false
		},
		categories: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
	},
	yaxis: {
		labels: {
			show: false
		}
	},
	tooltip: {
		y: {
			formatter: function(val) {
				return "$" + val + "k"
			}
		}
	},
	grid: {
		borderColor: '#1b8cea',
		strokeDashArray: 5,
	},
}

var chart = new ApexCharts(
	document.querySelector("#revenueLineGraph"),
	options
);

chart.render();