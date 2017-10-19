$(document).ready(function() {

	$('.button-collapse').sideNav({
	    menuWidth: 220,
	    edge: 'left',
	    closeOnClick: true
	  }
	);


	var map = L.map('map').setView([-23.574, -48.406], 6);

	L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
	    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	L.control.geocoder('search-xYwVRwA').addTo(map);

});