mapboxgl.accessToken = 'pk.eyJ1IjoiaXRhcm92YSIsImEiOiJjanplM2c5Mm8wNWp2M2hwYTM0ZHN4cXl3In0.s5bwEOdU6QNcTe6c0w7M-g';
let map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/dark-v10',
    zoom: 15,
    cursor: 'pointer',
    center: [44.681762, 43.024616], 

});
map.addControl(new MapboxLanguage( {defaultLanguage: 'ru'}));

var marker = new mapboxgl.Marker({ draggable: false, color: "green" })

map.on('click', function (e) {
    addMarker(e.lngLat, 'click');
   
});


function getAddress(url) {
    $.ajax({
        url: url,
        success: function (data) {
            if (data.length == 0){
                $.alert({
                    title:"",
                    content: "Выбранный адрес не находится в зоне доставки ",
                })
                document.getElementById("inputAddress").value = ""
                marker.remove()
            } else {
                document.getElementById("inputAddress").value = data[0].display_name;
                
            }
        }
    })
}

function addMarker(ltlng, event) {
    if (event === 'click') {
        let url = `http://85.173.247.7:5040/search?q=${ltlng.lat},${ltlng.lng}&format=json`

        map.flyTo({
            center: ltlng          ,
            essential: true
        });
        getAddress(url);
    }
    if (marker !== null) {
        marker.remove();
    }
    marker = new mapboxgl.Marker({draggable: true, color: "red"})
        .setLngLat(ltlng)
        .addTo(map)
        .on('dragend', onDragEnd);

}

function onDragEnd() {
    let lngLat = marker.getLngLat();
    document.getElementById("lat").value = lngLat.lat;
    document.getElementById("lng").value = lngLat.lng;
    let url =`http://85.173.247.7:5040/search?q=${lngLat.lat},${lngLat.lng}&format=json`
    getAddress(url);
}

