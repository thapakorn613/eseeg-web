@extends('layouts.appShowChart')
@section('content')
<div class="site-blocks-cover" style="background-image: url('images/bg_2.jpg');">
    <div class="nav nav-pills nav-justified">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ action('MenuController@toHome')}}"><img src="images/icon_patient1.png" width="300px" hight="200px"></a>
        </div>
    </div>
    <div class="container">
        <div class="wrapper">
            <div class="one bg-light">
                <table class="table table-sm table-hover text-md-center">
                    <thead>
                        <tr>
                            <th scope="col">DATA USER</th>
                        </tr>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$patient->id}}</td>
                            <td>{{$patient->f_name}}</td>
                            <td>{{$patient->l_name}}</td>
                            <td>
                                <a href="#">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('advice') }}
                                    </button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="two bg-light">
                <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
                <center>
                    <div class="navbar">
                        <span>Real-Time Chart with Plotly.js</span>
                    </div>
                    <a href="{{ action('DoctorController@showListDoctor') }}"> art
                    </a>
                    @if ( $patient->status_realtime == 1)

                    <div id="graphDiv_realTime"></div>
                    @endif
                    <div id="graphDiv_Log_1"></div>
                    <div id="graphDiv_Log_2"></div>
            </div>
            </center>
        </div>
    </div>
</div>

<script>
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

    Plotly.newPlot(graphDiv_realTime, [{
        y: [getData0(textECG)],
        type: 'line'
    }]);

    Plotly.addTraces(graphDiv_realTime, [{
        y: [getData0(textECG2)],
        type: 'line'
    }]);

    var cnt = 0;
    var count = 0;
    var numOfSet = 3;
    var rangeOfButton = 3;
    var rangeOfTop = 0.5 + (numOfSet * 2);
    setInterval(function() {
        console.log("test[count] : ", textECG.y[count]);
        Plotly.extendTraces(graphDiv_realTime, {
            y: [
                [getData(textECG.y[count], 0)],
                [getData(textECG2.y[count], 2)]
            ]
        }, [0, 1]);

        cnt = cnt + 1;
        // if (cnt > 200) {
        Plotly.relayout(graphDiv_realTime, {
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
    }, 20);
    var trace1_log = {
        x: [
            1,2,3,4,5,6,7,8,9,10,
            11,12,13,14,15,16,17,18,19,20,
            21,22,23,24,25,26,27,28,29,30,
            31,32,33,34,35,36,37,38,39,40,
            41,42,43,44,45,46,47,48,49,50
            
        ],
        y: [
            3.794, 3.575, 3.908, 3.922, 3.755, 3.699, 3.742, 3.641, 3.673, 3.621,
            3.578, 3.673, 3.637, 3.699, 3.761, 3.758, 3.690, 3.807, 3.755, 3.641,
            3.719, 3.818, 3.590, 4.624, 3.912, 3.748, 3.611, 3.670, 3.667, 3.673,
            3.680, 3.970, 3.580, 3.784, 3.853, 3.944, 3.892, 3.755, 3.748, 3.670,
            3.693, 3.086, 3.527, 3.667, 3.641, 3.611, 3.657, 3.709, 3.712, 3.748
        ]
    };

    var data1 = [trace1_log];
    var trace2_log = {
        x: [
            1,2,3,4,5,6,7,8,9,10,
            11,12,13,14,15,16,17,18,19,20,
            21,22,23,24,25,26,27,28,29,30,
            31,32,33,34,35,36,37,38,39,40,
            41,42,43,44,45,46,47,48,49,50
            
        ],
        y: [
            3.794, 3.775, 3.908, 3.922, 3.755, 3.699, 3.742, 3.641, 3.673, 3.621,
            3.578, 3.673, 3.637, 3.699, 3.761, 3.758, 3.690, 3.807, 3.755, 3.641,
            3.719, 3.618, 3.490, 4.624, 3.912, 3.748, 3.611, 3.670, 3.667, 3.673,
            3.680, 3.670, 3.680, 3.784, 3.853, 3.944, 3.892, 3.755, 3.748, 3.670,
            3.693, 3.686, 3.627, 3.667, 3.641, 3.611, 3.657, 3.709, 3.712, 3.748
        ]
    };

    var data2 = [trace2_log];

    var layout = {
        title: "Graph ECG log"
    };

    Plotly.plot(graphDiv_Log_1, data1, layout);
    Plotly.plot(graphDiv_Log_2, data2, layout);

</script>
@stop