@extends('layouts.app')
@section('content')

<div class="nav nav-pills nav-justified">
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ action('MenuController@toHome')}}"><img src="{{ asset('images/icon_patient1.png') }}" width="300px" hight="200px"></a>
    </div>
</div>
<div class="container">
    <center>
        <div class="wrapper">
            <div class="one bg-light">
                <table class="table table-sm table-hover text-md-center">
                <div class="card text-black bg-light ">
                    <div class="card-body  text-lg text-center">
                    DATA USER
                    </div>
                </div>
                    <thead>
                        
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
                            <a href="{{ action('DoctorController@showListDoctor') }}">
                                ADVICE
                            </a> 
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-sm table-hover text-md-center">
                <div class="card text-black bg-light ">
                    <div class="card-body  text-lg text-center">
                     SELECT LEAD
                    </div>
                </div>
                    <tbody>
                        <tr>
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_test" onclick="checkChart_test()"> - test <'0'></label>
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            @if($status_chart->chart_1 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_1" onclick="checkChart_1()"> - AVF <'1'></label>
                                </div>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            @if($status_chart->chart_2 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_2" onclick="checkChart_2()"> - AVF <'2'></label>
                                </div>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            @if($status_chart->chart_3 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_3" onclick="checkChart_3()"> - AVR <'3'> </label>

                                </div>
                            </td>
                            @endif
                            
                        </tr>
                        <tr>
                            @if($status_chart->chart_4 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_4" onclick="checkChart_4()"> - I <'4'> </label>
                                </div>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            @if($status_chart->chart_5 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_5" onclick="checkChart_5()"> - II <'5'> </label>
                                </div>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            @if($status_chart->chart_6 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_6" onclick="checkChart_6()"> - III <'6'> </label>
                                </div>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            @if($status_chart->chart_7 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_7" onclick="checkChart_7()"> - V1 <'7'> </label>
                                </div>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            @if($status_chart->chart_8 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_8" onclick="checkChart_8()"> - V2 <'8'> </label>
                                </div>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            @if($status_chart->chart_9 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_9" onclick="checkChart_9()"> - V3 <'9'> </label>
                                </div>
                            </td>
                            @endif
                            @if($status_chart->chart_10 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_10" onclick="checkChart_10()"> - V4 <'10'> </label>
                                </div>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            @if($status_chart->chart_11 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_11" onclick="checkChart_11()"> - V5 <'11'> </label>
                                </div>
                            </td>
                            @endif
                            </tr>
                        <tr>
                            @if($status_chart->chart_12 == 1)
                        
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_12" onclick="checkChart_12()"> - V6 <'12'> </label>
                                </div>
                            </td>
                            @endif
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="two bg-light">
                <div class="card text-black bg-light ">
                    <div class="card-body  text-lg text-center">
                    Real-Time Chart with Plotly.js
                    </div>
                </div>
                <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
               
                <div id="graphDiv_Log_test" style="display:none"></div>
                <div id="graphDiv_Log_1" style="display:none"></div>
                <div id="graphDiv_Log_2" style="display:none"></div>
                <div id="graphDiv_Log_3" style="display:none"></div>
                <div id="graphDiv_Log_4" style="display:none"></div>
                <div id="graphDiv_Log_5" style="display:none"></div>
                <div id="graphDiv_Log_6" style="display:none"></div>
                <div id="graphDiv_Log_7" style="display:none"></div>
                <div id="graphDiv_Log_8" style="display:none"></div>
                <div id="graphDiv_Log_9" style="display:none"></div>
                <div id="graphDiv_Log_10" style="display:none"></div>
                <div id="graphDiv_Log_11" style="display:none"></div>
                <div id="graphDiv_Log_12" style="display:none"></div>
            </div>
        </div>

        <div class="wrapper">
            <table class="table table-sm table-hover text-md-center">
            </table>
        </div>
    </center>
</div>

<script>
    var trace_log_test = {
        x: ['2013-10-04 22:23:00', '2013-10-04 22:24:00', '2013-10-04 22:25:00', '2013-10-04 22:26:00', '2013-10-04 22:27:00'],
        y: [
            1, 2, 3, 4, 5
        ]
    };
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

    var data1 = [trace1_log];
    var data2 = [trace2_log];
    var data_test = [trace_log_test];

    var layout_test = {
        autosize: false,
        width: 500,
        height: 300,
        margin: {
            l: 30,
            r: 1,
            b: 20,
            t: 0,
            pad: 4
        },
        paper_bgcolor: '#FFFFFF',
        plot_bgcolor: '#FFFFFF'
    };
    var layout_main = {
        autosize: false,
        width: 500,
        height: 300,
        margin: {
            l: 30,
            r: 1,
            b: 20,
            t: 0,
            pad: 4
        },
        paper_bgcolor: '#FFFFFF',
        plot_bgcolor: '#FFFFFF'
    };


    var layout_sub = {
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
        paper_bgcolor: '#ffffff',
        plot_bgcolor: '#ffffff'
    };

    Plotly.plot(graphDiv_Log_test, data_test, layout_test);
    Plotly.plot(graphDiv_Log_1, data1, layout_main);
    Plotly.plot(graphDiv_Log_2, data2, layout_main);
    Plotly.plot(graphDiv_Log_3, data2, layout_main);
    Plotly.plot(graphDiv_Log_4, data2, layout_main);
    Plotly.plot(graphDiv_Log_5, data2, layout_main);
    Plotly.plot(graphDiv_Log_6, data2, layout_main);
    Plotly.plot(graphDiv_Log_7, data2, layout_main);
    Plotly.plot(graphDiv_Log_8, data2, layout_main);
    Plotly.plot(graphDiv_Log_9, data2, layout_main);
    Plotly.plot(graphDiv_Log_10, data2, layout_main);
    Plotly.plot(graphDiv_Log_11, data2, layout_main);
    Plotly.plot(graphDiv_Log_12, data2, layout_main);

    function checkChart_test() {
        var checkBox_chart_test = document.getElementById("chart_test");
        var graphDiv_Log_test = document.getElementById("graphDiv_Log_test");
        if (checkBox_chart_test.checked == true) {
            graphDiv_Log_test.style.display = "block";
        } else {
            graphDiv_Log_test.style.display = "none";
        }

    }
    function checkChart_1() {

        var checkBox_chart_1 = document.getElementById("chart_1");
        var graphDiv_Log_1 = document.getElementById("graphDiv_Log_1");

        if (checkBox_chart_1.checked == true) {
            graphDiv_Log_1.style.display = "block";
        } else {
            graphDiv_Log_1.style.display = "none";
        }

    }
    function checkChart_2() {

        var checkBox_chart_2 = document.getElementById("chart_2");
        var graphDiv_Log_2 = document.getElementById("graphDiv_Log_2");
        if (checkBox_chart_2.checked == true) {
            graphDiv_Log_2.style.display = "block";
        } else {
            graphDiv_Log_2.style.display = "none";
        }
    }
    function checkChart_3() {
        var checkBox_chart_3 = document.getElementById("chart_3");
        var graphDiv_Log_3 = document.getElementById("graphDiv_Log_3");
        if (checkBox_chart_3.checked == true) {
            graphDiv_Log_3.style.display = "block";
        } else {
            graphDiv_Log_3.style.display = "none";
        }
    }
    function checkChart_4() {
        var checkBox_chart_4 = document.getElementById("chart_4");
        var graphDiv_Log_4 = document.getElementById("graphDiv_Log_4");
        if (checkBox_chart_4.checked == true) {
            graphDiv_Log_4.style.display = "block";
        } else {
            graphDiv_Log_4.style.display = "none";
        }
    }
    function checkChart_5() {
        var checkBox_chart_5 = document.getElementById("chart_5");
        var graphDiv_Log_5 = document.getElementById("graphDiv_Log_5");
        if (checkBox_chart_5.checked == true) {
            graphDiv_Log_5.style.display = "block";
        } else {
            graphDiv_Log_5.style.display = "none";
        }
    }
    function checkChart_6() {
        var checkBox_chart_6 = document.getElementById("chart_6");
        var graphDiv_Log_6 = document.getElementById("graphDiv_Log_6");
        if (checkBox_chart_6.checked == true) {
            graphDiv_Log_6.style.display = "block";
        } else {
            graphDiv_Log_6.style.display = "none";
        }
    }
    function checkChart_7() {
        var checkBox_chart_7 = document.getElementById("chart_7");
        var graphDiv_Log_7 = document.getElementById("graphDiv_Log_7");
        if (checkBox_chart_7.checked == true) {
            graphDiv_Log_7.style.display = "block";
        } else {
            graphDiv_Log_7.style.display = "none";
        }
    }
    function checkChart_8() {
        var checkBox_chart_8 = document.getElementById("chart_8");
        var graphDiv_Log_8 = document.getElementById("graphDiv_Log_8");
        if (checkBox_chart_8.checked == true) {
            graphDiv_Log_8.style.display = "block";
        } else {
            graphDiv_Log_8.style.display = "none";
        }
    }
    function checkChart_9() {
        var checkBox_chart_9 = document.getElementById("chart_9");
        var graphDiv_Log_9 = document.getElementById("graphDiv_Log_9");
        if (checkBox_chart_9.checked == true) {
            graphDiv_Log_9.style.display = "block";
        } else {
            graphDiv_Log_9.style.display = "none";
        }
    }
    function checkChart_10() {
        var checkBox_chart_10 = document.getElementById("chart_10");
        var graphDiv_Log_10 = document.getElementById("graphDiv_Log_10");
        if (checkBox_chart_10.checked == true) {
            graphDiv_Log_10.style.display = "block";
        } else {
            graphDiv_Log_10.style.display = "none";
        }
    }
    function checkChart_11() {
        var checkBox_chart_11 = document.getElementById("chart_11");
        var graphDiv_Log_11 = document.getElementById("graphDiv_Log_11");
        if (checkBox_chart_11.checked == true) {
            graphDiv_Log_11.style.display = "block";
        } else {
            graphDiv_Log_11.style.display = "none";
        }
    }
    function checkChart_12() {
        var checkBox_chart_12 = document.getElementById("chart_12");
        var graphDiv_Log_12 = document.getElementById("graphDiv_Log_12");
        if (checkBox_chart_12.checked == true) {
            graphDiv_Log_12.style.display = "block";
        } else {
            graphDiv_Log_12.style.display = "none";
        }
    }
</script>
@stop