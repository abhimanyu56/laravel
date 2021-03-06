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
     
     
                <div id="js-grid-juicy-projects" class="cbp display-none">
            <div class="cbp-item graphic">
             <a href="{{ URL::asset('academy')}}" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" id = "loadAcademyPage" rel="nofollow">more info</a>
             </div>
     </div>
     
                </div>
@stop


<script>
var x = 0;
var intervalID = setInterval(function () {

   if(window.jQuery){
       window.clearInterval(intervalID);
        loadMap();
    }

   if (++x === 10) {
       window.clearInterval(intervalID);
   }
}, 2000);
    
    
    
    //setTimeout(function() { loadMap(); }, 5000);
    
    
    
    //loadMap();
    
    
    
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
         $("#loadAcademyPage").attr("href", "academy/" + locations[i][0]);    
         $( "#loadAcademyPage" ).click();
        }
      })(marker, i));
    }
    }
    
    </script>