@extends('layouts.app')
@section('content')

<div class="nav nav-pills nav-justified">
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ action('MenuController@toHome')}}"><img src="{{ asset('images/icon_patient1.png') }}" width="300px" hight="200px"></a>
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
            
                <div class="navbar">
                    <span>Real-Time Chart with Plotly.js</span>
                </div>
                <a href="{{ action('DoctorController@showListDoctor') }}"> art</a>
                <div id="graphDiv_Log_1"></div>
        </div>   
    </div>

    <div class="wrapper">
        <table class="table table-sm table-hover text-md-center">
            <div id="graphDiv_Log_2"></div>
            <div id="graphDiv_Log_3"></div>
            <div id="graphDiv_Log_4"></div>
        </table>
    </div>
    
</div>

<script>
    var trace1_log = {
        x: [
            1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
            11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
            21, 22, 23, 24, 25, 26, 27, 28, 29, 30,
            31, 32, 33, 34, 35, 36, 37, 38, 39, 40,
            41, 42, 43, 44, 45, 46, 47, 48, 49, 50

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
            1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
            11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
            21, 22, 23, 24, 25, 26, 27, 28, 29, 30,
            31, 32, 33, 34, 35, 36, 37, 38, 39, 40,
            41, 42, 43, 44, 45, 46, 47, 48, 49, 50

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
        title: "Graph ECG log",
        autosize: false,
        width: 500,
        height: 400,
        margin: {
            l: 30,
            r: 30,
            b: 30,
            t: 50,
            pad: 4
        },
        paper_bgcolor: '#7f7f7f',
        plot_bgcolor: '#c7c7c7'
    };

    Plotly.plot(graphDiv_Log_1, data1, layout);
    Plotly.plot(graphDiv_Log_2, data2, layout);
    Plotly.plot(graphDiv_Log_3, data2, layout);
    Plotly.plot(graphDiv_Log_4, data2, layout);
</script>
@stop