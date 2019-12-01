@extends('Patient_Log')

@section('realtimeChart')
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<center>
    <div class="navbar">
        <span>Real-Time Chart with Plotly.js</span>
    </div>
    <a href="{{ action('DoctorController@showListDoctor') }}"> art
    </a>
    <div id="graphDiv"></div>
    </div>
    
<script>
    var textECG_firebase = [];
    var textECG = {
        y: [
            3.794, 3.775, 3.908, 3.922, 3.755, 3.699, 3.742, 3.641, 3.673, 3.621,
            3.578, 3.673, 3.637, 3.699, 3.761, 3.758, 3.690, 3.807, 3.755, 3.641,
            3.719, 3.618, 3.490, 4.624, 3.912, 3.748, 3.611, 3.670, 3.667, 3.673,
            3.680, 3.670, 3.680, 3.784, 3.853, 3.944, 3.892, 3.755, 3.748, 3.670,
            3.693, 3.686, 3.627, 3.667, 3.641, 3.611, 3.657, 3.709, 3.712, 3.748,
        ],
        type: "scatter"
    }

    var textECG2 = {
        y: [
            3.794, 3.575, 3.908, 3.922, 3.755, 3.699, 3.742, 3.641, 3.673, 3.621,
            3.578, 3.673, 3.637, 3.699, 3.761, 3.758, 3.690, 3.807, 3.755, 3.641,
            3.719, 3.818, 3.590, 4.624, 3.912, 3.748, 3.611, 3.670, 3.667, 3.673,
            3.680, 3.970, 3.580, 3.784, 3.853, 3.944, 3.892, 3.755, 3.748, 3.670,
            3.693, 3.086, 3.527, 3.667, 3.641, 3.611, 3.657, 3.709, 3.712, 3.748,
        ],
        type: "scatter"
    }

    function getData0(num) {
        return num;
    }

    function getData(num, plus) {
        num = num + plus;
        return num;
    }

    Plotly.newPlot(graphDiv, [{
        y: [getData0(textECG)],
        type: 'line'
    }]);

    Plotly.addTraces(graphDiv, [{
        y: [getData0(textECG2)],
        type: 'line'
    }]);

    var cnt = 0;
    var count = 0;
    var numOfSet = 3;
    var rangeOfButton = 3;
    var rangeOfTop = 0.5 + (numOfSet * 2);
    setInterval(function() {
        
        Plotly.extendTraces(graphDiv, {
            y: [
                // [getData(textECG.y[count], 0)],
                // [getData(textECG2.y[count], 2)]
                [getData(textECG_firebase[count].I, 0)],
                [getData(textECG_firebase[count].II, 2)]
            ]
        }, [0, 1]);

        cnt = cnt + 1;
        // if (cnt > 200) {
        Plotly.relayout(graphDiv, {
            xaxis: {
                range: [cnt - 200, cnt]
            },
            yaxis: {
                range: [rangeOfButton, rangeOfTop]
            }
        });
        // }
        count++;
        if (count >= 50) {
            count = 0;
        }
    }, 1000);
</script>

<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>
      
      <!--Configure firebase-->
      <script>
      var txt_title,txt_content,txt_img ='';
      var config = {
        apiKey: "AIzaSyCRkA7lUQPN7RnetG0238geK6BwTiCUrpQ",
        authDomain: "ecg-261405.firebaseapp.com",
        databaseURL: "https://ecg-261405.firebaseio.com",
        projectId: "ecg-261405",
        storageBucket: "ecg-261405.appspot.com",
        messagingSenderId: "727005807636",
        appId: "1:727005807636:web:6ff5055249f7fb06a79301",
        measurementId: "G-5PSDECTKDX"
      };
      firebase.initializeApp(config);
      var database = firebase.database();
      var today = new Date();
      var year =  today.getFullYear();
      var month = today.getMonth() + 1;
      var day = today.getDate();
      console.log("Year : ",year,"Month : ",month,"Day : ",day);

      database.ref("101"+"/"+year+"/"+month+"/"+day+"/1ecglog").on('value', function(snapshot){
            if(snapshot.exists()){
                var content = '';
                snapshot.forEach(function(data){
                    var val = data.val();
                    console.log("row",data.val());
                    console.log("title",data.getKey());
                    textECG_firebase.push(val);
                  
                    content +='<tr>';
                    content += '<td>' + data.getKey() + '</td>';
                    content += '<td>' + val.time + '</td>';
                    content += '<td>' + val.content + '</td>';
                    content += '<td><a href="'+val.thumbnail+'" target="_blank"> Click for Preview</a></td>';
                    content += '<td><a href="edit.html?id='+data.getKey()+'" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">Edit</a></td>';
                    content += '</tr>';
                    
                });
                var theDiv = document.getElementById("ex-table");
                //theDiv.innerHTML += content; 
                //$('#ex-table').append(content);
            }
      });
    </script>
</center>
@stop