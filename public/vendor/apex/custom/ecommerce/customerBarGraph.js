var options = {
	chart: {
		height: 120,
		type: 'bar',
		toolbar: {
			show: false,
		},
	},
	plotOptions: {
		bar: {
			horizontal: true,
			barHeight: '20px',
		}
	},
	dataLabels: {
		enabled: false
	},
	series: [{
		name: "Customers",
		data: [200, 430]
	}],
	xaxis: {
		axisBorder: {
			show: true
		},
		labels: {
			show: false
		},
		categories: ["Free Members", "Prime Members"],
	},
	yaxis: {
		labels: {
			show: false
		}
	},
	tooltip: {
		y: {
			formatter: function(val) {
				return val + "k"
			}
		}
	},
	grid: {
		borderColor: '#1b8cea',
		strokeDashArray: 5,
	},
	colors: ['#ffffff'],
}

var chart = new ApexCharts(
	document.querySelector("#customerBarGraph"),
	options
);

chart.render();