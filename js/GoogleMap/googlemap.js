function initMap() {
    var iim = {lat: 48.896031, lng: 2.235908};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 18,
        center: iim
    });
    var marker = new google.maps.Marker({
        position: iim,
        map: map
    });
}