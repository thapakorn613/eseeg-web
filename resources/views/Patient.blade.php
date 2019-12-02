@extends('layouts.app')

@section('content')
<div class="site-blocks-cover" style="background-image: url('images/bg_2.jpg');">
    <div class="nav nav-pills nav-justified">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ action('MenuController@toHome')}}"><img src="images/icon_patient1.png" width="300px" hight="200px"></a>
        </div>
    </div>
    <div class="container">

        <div class="wrapper">
            <div class="one bg-dark">
                <table class="table table-sm table-hover text-md-center">
                    <thead>
                        <tr>
                            <th scope="col-2" style="color:white">Node</th>
                            <th scope="col-2" style="color:white">Affiliation</th>
                            <th scope="col-2" style="color:white">Name</th>
                            <th scope="col-2" style="color:white">ECG Chart</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < count($patients_EM); $i++) <tr>
                            <td style="color:white">{{$patients_EM[$i]->id}}</td>
                            <td style="color:white">{{$patients_EM[$i]->type_disease}}</td>
                            <td style="color:white">{{$patients_EM[$i]->f_name}} {{$patients_EM[$i]->f_name}}</td>
                            <td style="color:white">
                                <a href="{{ action('DoctorController@showChart_Log',$patients_EM[$i]->id)}}">
                                    <button type="submit" class="btn btn-danger btn-sm" style="color:white">
                                        {{ __('ECG Chart') }}
                                    </button>
                                </a>
                            </td>
                            @endfor
                            @for ($i = 0; $i < count($patients_NM); $i++) <tr>
                                <td style="color:white">{{$patients_NM[$i]->id}}</td>
                                <td style="color:white">{{$patients_NM[$i]->type_disease}}</td>
                                <td style="color:white">{{$patients_NM[$i]->f_name}} {{$patients_NM[$i]->l_name}}</td>
                                <td style="color:white">
                                    <a href="{{ action('DoctorController@showChart_Log_test')}}">
                                        <button type="submit" class="btn btn-warning btn-sm" style="color:white">
                                            {{ __('ECG Chart') }}
                                        </button>
                                    </a>
                                </td>
                                @endfor
                                @for ($i = 0; $i < count($patients_NT); $i++) <tr>
                                    <td style="color:white">{{$patients_NT[$i]->id}}</td>
                                    <td style="color:white">{{$patients_NT[$i]->type_disease}}</td>
                                    <td style="color:white">{{$patients_NT[$i]->f_name}} {{$patients_NT[$i]->l_name}}</td>
                                    <td style="color:white">
                                        <a href="#">
                                            <button type="submit" class="btn btn-primary btn-sm" style="color:white">
                                                {{ __('ECG Chart') }}
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
    function chart_1() {
        var checkBox = document.getElementById("chart_1");
        var text = document.getElementById("text");
        if (checkBox.checked == true) {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }
</script>
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