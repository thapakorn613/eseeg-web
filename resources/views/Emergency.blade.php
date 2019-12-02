@extends('layouts.app')

@section('content')

    <div class="nav nav-pills nav-justified">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ action('MenuController@toHome')}}"><img src="images/icon_emer1.png" width="300px" hight="200px"></a>
        </div>
    </div>
    <div class="container">
        <div class="wrapper">
            <div class="one bg-dark">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body text-center">
                    PATIENT
                </div>
            </div>
            
                <table class="table table-sm table-hover text-md-center">
                    <thead>
                        <tr>
                            <th scope="col-8">Node </th>
                            <th scope="col-8">Affiliation</th>
                            <th scope="col-1">Fristname</th>
                            <th scope="col-1">Lastname</th>
                            <th scope="col-1">ECG Chart</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < count($patient); $i++) <tr>
                            <td>{{$patient[$i]->id}}</td>
                            <td>{{$patient[$i]->type_disease}}</td>
                            <td>{{$patient[$i]->f_name}} </td>
                            <td>{{$patient[$i]->l_name}}</td>
                            <td>
                                <a href="{{ action('DoctorController@showChart_Realtime',$patient[$i]->id )}}">
                                    <button type="button" class="btn btn-danger">
                                        {{ __('ecg chart') }}
                                    </button>
                                </a>
                            </td>
                            @endfor

                    </tbody>
                </table>
            </div>
            <div class="two bg-light">
            <div id="map"></div>

            </div>

        </div>
    </div>
</div>
<script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-33.863276, 151.207977),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCldq9XLKuwVDj8gLoXXYg3F7jxGMuSnVw&callback=initMap">
    </script>
    
@endsection