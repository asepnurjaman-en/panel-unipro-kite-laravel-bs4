// Resions Selection
$(function(){
	var map,
	markers = [
		{latLng: [-4.61, 115.52], name: 'Indonesia'},
	],
	cityAreaData = [
		887.70,
		755.16,
		310.69,
		405.17,
		248.31,
		207.35,
		217.22,
		280.71,
		210.32,
		325.42
	]

	map = new jvm.Map({
		container: $('#regionSelection'),
		map: 'asia_merc',
		zoomOnScroll: false,
		zoomMin: 1,		
		regionsSelectable: true,
		markersSelectable: true,
		markers: markers,
		markerStyle: {
			initial: {
				fill: '#ffffff'
			},
			selected: {
				fill: '#ffbf05'
			}
		},
		regionStyle: {
			initial: {
				fill: '#1273eb'
			},
			selected: {
				fill: '#333333'
			}
		},
		series: {
			markers: [{
				attribute: 'r',
				scale: [5, 15],
				values: cityAreaData
			}]
		},
		backgroundColor: 'transparent',
		onRegionSelected: function(){
			if (window.localStorage) {
				window.localStorage.setItem(
					'jvectormap-selected-regions',
					JSON.stringify(map.getSelectedRegions())
				);
			}
		},
		onMarkerSelected: function(){
			if (window.localStorage) {
				window.localStorage.setItem(
					'jvectormap-selected-markers',
					JSON.stringify(map.getSelectedMarkers())
				);
			}
		}
	});
	map.setSelectedRegions( JSON.parse( window.localStorage.getItem('jvectormap-selected-regions') || '[]' ) );
	map.setSelectedMarkers( JSON.parse( window.localStorage.getItem('jvectormap-selected-markers') || '[]' ) );
});