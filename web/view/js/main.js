// ---------
// -- map --
// ---------
function initMap() {
    var uluru = {lat: 38.8102874, lng: -0.6043017};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 11,
      center: uluru
    });

    var contentString = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading">Ontinyent</h1>'+
        '<div id="bodyContent">'+
        '<p><b>Ontinyent</b>, és una ciutat del País Valencià. Capital de la comarca de la Vall d\'Albaida, consta d\'uns 38.000 habitants.</p>'+
        '<p>Attribution: Ontinyent, <a href="https://ca.wikipedia.org/wiki/Ontinyent">'+
        'Ontinyent</a> </p>'+
        '</div>'+
        '</div>';

    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });

    var marker = new google.maps.Marker({
      position: uluru,
      map: map,
      title: 'Ontinyent'
    });
    marker.addListener('click', function() {
      infowindow.open(map, marker);
    });
  }

// end map

// searcher datepicker

$(document).ready(function () {
  $('#available_input').datepicker({
    dateFormat: 'dd/mm/yy', 
    changeMonth: true, 
    changeYear: true, 
    yearRange: '1900:2100',
    minDate: -1000000,
    showOptions: { direction: "up" } // drop datepicker to botside
  });

  
});

 
