@extends('layouts.layout')

@section('title')
Explore
@stop


@section('body')
 <div class="page-content">
     
     <center>
                <div id = "loading">
                <img src = "{{ URL::asset('theme/loading.gif')}}"><br>
                    Loading..
     </div>
     </center>
                
                <div id="map" style="width: 100%; height: 600px;"></div>
                </div>
@stop


<script>
    setTimeout(function() { loadMap(); }, 5000);
    
    </script>


<script>
    
    function loadMap(){
        
        
        $("#loading").hide();
        
        $.ajax({
              type: 'POST',
              url: "explore",
              success: loadMapResponse,
              async: true
            }).fail(
            function (jqXHR, textStatus) {
              console.log("FAILED===" + JSON.stringify(jqXHR));
            });
    }
    
    function loadMapResponse(res){
    var locations = res;

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(28.631451, 77.216667),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
         alert(locations[i][0]);
        }
      })(marker, i));
    }
    }
    
    </script>