// Africa
$(function(){
	$('#mapAsia').vectorMap({
		map: 'asia_mill',
		backgroundColor: 'transparent',
		scaleColors: ['#FF7E39'],
		zoomOnScroll:false,
		zoomMin: 1,
		hoverColor: true,
		series: {
			regions: [{
				values: gdpData,
				scale: ['#1273eb'],
				normalizeFunction: 'polynomial'
			}]
		},
	});
});