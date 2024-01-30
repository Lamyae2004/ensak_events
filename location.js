var map = L.map('map').setView([34.24753, -6.58407], 18);//coordonnes:
var OpenStreetMap_Mapnik = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});//la carte a utilisée
OpenStreetMap_Mapnik.addTo(map);//l'ajouter a map
var marker = L.marker([34.24753, -6.58407]).addTo(map);//popup