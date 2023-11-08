var options = {
	chart: {
		height: 120,
		type: 'bar',
		toolbar: {
			show: false,
		},
	},
	dataLabels: {
		enabled: false,
	},
	plotOptions: {
		bar: {
			horizontal: false,
			columnWidth: '20px',
		},
	},
	colors: ['#ffffff'],
	stroke: {
		show: false,
	},
	series: [{
		name: 'Sales',
		data: [3, 4, 6, 7, 5, 8, 4]
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
	fill: {
		opacity: 1
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
	document.querySelector("#salesColumnGraph"),
	options
);
chart.render();
