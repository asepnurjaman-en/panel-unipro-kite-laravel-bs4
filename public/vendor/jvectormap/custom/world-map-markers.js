// Markers on the world map
$(function(){
	$('#world-map-markers').vectorMap({
		map: 'world_mill_en',
		normalizeFunction: 'polynomial',
		hoverOpacity: 0.7,
		hoverColor: false,
		zoomOnScroll: false,
		markerStyle: {
			initial: {
				fill: '#333333',
				stroke: '#FFFFFF',
				r: 6
			}
		},
		zoomMin: 1,
		hoverColor: true,
		series: {
			regions: [{
				values: gdpData,
				scale: ['#1273eb'],
				normalizeFunction: 'polynomial'
			}]
		},
		backgroundColor: 'transparent',
		markers: [
			{latLng: [33.55, 35.27], name: 'Palestine'},
			{latLng: [-4.61, 115.52], name: 'Indonesia'},
		]
	});
});