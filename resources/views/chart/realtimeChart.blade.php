@extends('layouts.appShowChart')
@section('content')

<div class="nav nav-pills nav-justified">
    <div class="d-flex align-items-center justify-content-between">
    <a href="{{ action('MenuController@toHome')}}"><img src="images/icon_emer1.png" width="300px" hight="200px"></a>
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
            <table class="table table-sm table-hover text-md-center">
                <thead>
                    <tr>
                        <th scope="col">Select Lead to Doo</th>
                    </tr>
                </thead>
                <tbody>
                    <left>
                        <tr>
                            @if($status_chart->chart_1 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_1" onclick="checkChart_1()"> - AVF</label>
                                </div>
                            </td>
                            @endif
                            @if($status_chart->chart_2 == 1)
                            <td>
                                <div class="checkbox">
                                <label><input type="checkbox" id="chart_2" onclick="checkChart_2()"> - AVF</label>
                                </div>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            @if($status_chart->chart_3 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" value=""> - AVR</label>
                                </div>
                            </td>
                            @endif
                            @if($status_chart->chart_4 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" value=""> - I </label>
                                </div>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            @if($status_chart->chart_5 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" value=""> - II </label>
                                </div>
                            </td>
                            @endif
                            @if($status_chart->chart_6 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" value=""> - III</label>
                                </div>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            @if($status_chart->chart_7 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" value=""> - V1 </label>
                                </div>
                            </td>
                            @endif
                            @if($status_chart->chart_8 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" value=""> - V2 </label>
                                </div>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            @if($status_chart->chart_9 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" value=""> - V3 </label>
                                </div>
                            </td>
                            @endif
                            @if($status_chart->chart_10 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" value=""> - V4 </label>
                                </div>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            @if($status_chart->chart_11 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" value=""> - V5 </label>
                                </div>
                            </td>
                            @endif
                            @if($status_chart->chart_12 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" value=""> - V6 </label>
                                </div>
                            </td>
                            @endif
                        </tr>
                    </left>
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
                <!--  -->

                @endif
                <div id="graphDiv_realTime_main"></div>
        </div>
        </center>
    </div>
    <div class="wrapper">
        <table class="table table-sm table-hover text-md-center">
            @if($status_chart->chart_1 == 1 )
            <div id="graphDiv_realTime_1" ></div>
            @endif
            @if($status_chart->chart_2 == 1)
            <div id="graphDiv_realTime_2" ></div>
            @endif
            @if($status_chart->chart_3 == 1)
            <div id="graphDiv_realTime_3" ></div>
            @endif
        </table>
    </div>
</div>
<script>
    var textECG_firebase = [];
    function checkChart_1() {
        var checkBox_chart_1 = document.getElementById("chart_1");
        var graphDiv_realTime_1 = document.getElementById("graphDiv_realTime_1");

        if (checkBox_chart_1.checked == true) {
            graphDiv_realTime_1.style.display = "block";
        } else {
            graphDiv_realTime_1.style.display = "none";
        }
    }

    function checkChart_2() {
        var checkBox_chart_2 = document.getElementById("chart_2");
        var graphDiv_realTime_2 = document.getElementById("graphDiv_realTime_2");

        if (checkBox_chart_2.checked == true) {
            graphDiv_realTime_2.style.display = "block";
        } else {
            graphDiv_realTime_2.style.display = "none";
        }
    }
    
    var status_chart_1 = '<?php echo $status_chart->chart_1; ?>';
    var status_chart_2 = '<?php echo $status_chart->chart_2; ?>';
    var status_chart_3 = '<?php echo $status_chart->chart_3; ?>';
    var status_chart_4 = '<?php echo $status_chart->chart_4; ?>';
    var status_chart_5 = '<?php echo $status_chart->chart_5; ?>';
    var status_chart_6 = '<?php echo $status_chart->chart_6; ?>';
    var status_chart_7 = '<?php echo $status_chart->chart_7; ?>';
    var status_chart_8 = '<?php echo $status_chart->chart_8; ?>';
    var status_chart_9 = '<?php echo $status_chart->chart_9; ?>';
    var status_chart_10 = '<?php echo $status_chart->chart_10; ?>';
    var status_chart_11 = '<?php echo $status_chart->chart_11; ?>';
    var status_chart_12 = '<?php echo $status_chart->chart_12; ?>';

    var check_chart_1_on = 1;
    var check_chart_2_on = 1;
    var check_chart_3_on = 1;

    console.log("status_chart_3 : ", status_chart_3);
    var textECG_main = {
        y: [
            3.794, 3.775, 3.908, 3.922, 3.755, 3.699, 3.742, 3.641, 3.673, 3.621,
            3.578, 3.673, 3.637, 3.699, 3.761, 3.758, 3.690, 3.807, 3.755, 3.641,
            3.719, 3.618, 3.490, 4.624, 3.912, 3.748, 3.611, 3.670, 3.667, 3.673,
            3.680, 3.670, 3.680, 3.784, 3.853, 3.944, 3.892, 3.755, 3.748, 3.670,
            3.693, 3.686, 3.627, 3.667, 3.641, 3.611, 3.657, 3.709, 3.712, 3.748,
        ],
        type: "scatter"
    }
    
    var textECG_sub_1 = {
        y: [
            3.794, 3.775, 3.908, 3.922, 3.755, 3.699, 3.742, 3.641, 3.673, 3.621,
            3.578, 3.673, 3.637, 3.699, 3.761, 3.758, 3.690, 3.807, 3.755, 3.641,
            3.719, 3.618, 3.490, 4.624, 3.912, 3.748, 3.611, 3.670, 3.667, 3.673,
            3.680, 3.670, 3.680, 3.784, 3.853, 3.944, 3.892, 3.755, 3.748, 3.670,
            3.693, 3.686, 3.627, 3.667, 3.641, 3.611, 3.657, 3.709, 3.712, 3.748,
        ],
        type: "scatter"
    }
    
    var textECG_sub_2 = {
        y: [
            3.794, 3.575, 3.908, 3.922, 3.755, 3.699, 3.742, 3.641, 3.673, 3.621,
            3.578, 3.673, 3.637, 3.699, 3.761, 3.758, 3.690, 3.807, 3.755, 3.641,
            3.719, 3.818, 3.590, 4.624, 3.912, 3.748, 3.611, 3.670, 3.667, 3.673,
            3.680, 3.970, 3.580, 3.784, 3.853, 3.944, 3.892, 3.755, 3.748, 3.670,
            3.693, 3.086, 3.527, 3.667, 3.641, 3.611, 3.657, 3.709, 3.712, 3.748,
        ],
        type: "scatter"
    }

    var textECG_sub_3 = {
        y: [
            3.794, 3.575, 3.908, 3.922, 3.755, 3.699, 3.742, 3.641, 3.673, 3.621,
            3.578, 3.673, 3.637, 3.699, 3.761, 3.758, 3.690, 3.807, 3.755, 3.641,
            3.719, 3.818, 3.590, 4.624, 3.912, 3.748, 3.611, 3.670, 3.667, 3.673,
            3.680, 3.970, 3.580, 3.784, 3.853, 3.944, 3.892, 3.755, 3.748, 3.670,
            3.693, 3.086, 3.527, 3.667, 3.641, 3.611, 3.657, 3.709, 3.712, 3.748,
        ],
        type: "scatter"
    }

    
    var textECG_sub_4 = {
        y: [
            3.794, 3.575, 3.908, 3.922, 3.755, 3.699, 3.742, 3.641, 3.673, 3.621,
            3.578, 3.673, 3.637, 3.699, 3.761, 3.758, 3.690, 3.807, 3.755, 3.641,
            3.719, 3.818, 3.590, 4.624, 3.912, 3.748, 3.611, 3.670, 3.667, 3.673,
            3.680, 3.970, 3.580, 3.784, 3.853, 3.944, 3.892, 3.755, 3.748, 3.670,
            3.693, 3.086, 3.527, 3.667, 3.641, 3.611, 3.657, 3.709, 3.712, 3.748,
        ],
        type: "scatter"
    }

    
    var textECG_sub_5 = {
        y: [
            3.794, 3.575, 3.908, 3.922, 3.755, 3.699, 3.742, 3.641, 3.673, 3.621,
            3.578, 3.673, 3.637, 3.699, 3.761, 3.758, 3.690, 3.807, 3.755, 3.641,
            3.719, 3.818, 3.590, 4.624, 3.912, 3.748, 3.611, 3.670, 3.667, 3.673,
            3.680, 3.970, 3.580, 3.784, 3.853, 3.944, 3.892, 3.755, 3.748, 3.670,
            3.693, 3.086, 3.527, 3.667, 3.641, 3.611, 3.657, 3.709, 3.712, 3.748,
        ],
        type: "scatter"
    }

    var textECG_sub_6 = {
        y: [
            3.794, 3.575, 3.908, 3.922, 3.755, 3.699, 3.742, 3.641, 3.673, 3.621,
            3.578, 3.673, 3.637, 3.699, 3.761, 3.758, 3.690, 3.807, 3.755, 3.641,
            3.719, 3.818, 3.590, 4.624, 3.912, 3.748, 3.611, 3.670, 3.667, 3.673,
            3.680, 3.970, 3.580, 3.784, 3.853, 3.944, 3.892, 3.755, 3.748, 3.670,
            3.693, 3.086, 3.527, 3.667, 3.641, 3.611, 3.657, 3.709, 3.712, 3.748,
        ],
        type: "scatter"
    }

    var textECG_sub_7 = {
        y: [
            3.794, 3.575, 3.908, 3.922, 3.755, 3.699, 3.742, 3.641, 3.673, 3.621,
            3.578, 3.673, 3.637, 3.699, 3.761, 3.758, 3.690, 3.807, 3.755, 3.641,
            3.719, 3.818, 3.590, 4.624, 3.912, 3.748, 3.611, 3.670, 3.667, 3.673,
            3.680, 3.970, 3.580, 3.784, 3.853, 3.944, 3.892, 3.755, 3.748, 3.670,
            3.693, 3.086, 3.527, 3.667, 3.641, 3.611, 3.657, 3.709, 3.712, 3.748,
        ],
        type: "scatter"
    }

    var textECG_sub_8 = {
        y: [
            3.794, 3.575, 3.908, 3.922, 3.755, 3.699, 3.742, 3.641, 3.673, 3.621,
            3.578, 3.673, 3.637, 3.699, 3.761, 3.758, 3.690, 3.807, 3.755, 3.641,
            3.719, 3.818, 3.590, 4.624, 3.912, 3.748, 3.611, 3.670, 3.667, 3.673,
            3.680, 3.970, 3.580, 3.784, 3.853, 3.944, 3.892, 3.755, 3.748, 3.670,
            3.693, 3.086, 3.527, 3.667, 3.641, 3.611, 3.657, 3.709, 3.712, 3.748,
        ],
        type: "scatter"
    }
    
    var textECG_sub_9 = {
        y: [
            3.794, 3.575, 3.908, 3.922, 3.755, 3.699, 3.742, 3.641, 3.673, 3.621,
            3.578, 3.673, 3.637, 3.699, 3.761, 3.758, 3.690, 3.807, 3.755, 3.641,
            3.719, 3.818, 3.590, 4.624, 3.912, 3.748, 3.611, 3.670, 3.667, 3.673,
            3.680, 3.970, 3.580, 3.784, 3.853, 3.944, 3.892, 3.755, 3.748, 3.670,
            3.693, 3.086, 3.527, 3.667, 3.641, 3.611, 3.657, 3.709, 3.712, 3.748,
        ],
        type: "scatter"
    }
       
    var textECG_sub_10 = {
        y: [
            3.794, 3.575, 3.908, 3.922, 3.755, 3.699, 3.742, 3.641, 3.673, 3.621,
            3.578, 3.673, 3.637, 3.699, 3.761, 3.758, 3.690, 3.807, 3.755, 3.641,
            3.719, 3.818, 3.590, 4.624, 3.912, 3.748, 3.611, 3.670, 3.667, 3.673,
            3.680, 3.970, 3.580, 3.784, 3.853, 3.944, 3.892, 3.755, 3.748, 3.670,
            3.693, 3.086, 3.527, 3.667, 3.641, 3.611, 3.657, 3.709, 3.712, 3.748,
        ],
        type: "scatter"
    }
    var textECG_sub_11 = {
        y: [
            3.794, 3.575, 3.908, 3.922, 3.755, 3.699, 3.742, 3.641, 3.673, 3.621,
            3.578, 3.673, 3.637, 3.699, 3.761, 3.758, 3.690, 3.807, 3.755, 3.641,
            3.719, 3.818, 3.590, 4.624, 3.912, 3.748, 3.611, 3.670, 3.667, 3.673,
            3.680, 3.970, 3.580, 3.784, 3.853, 3.944, 3.892, 3.755, 3.748, 3.670,
            3.693, 3.086, 3.527, 3.667, 3.641, 3.611, 3.657, 3.709, 3.712, 3.748,
        ],
        type: "scatter"
    }

    var textECG_sub_12 = {
        y: [
            3.794, 3.575, 3.908, 3.922, 3.755, 3.699, 3.742, 3.641, 3.673, 3.621,
            3.578, 3.673, 3.637, 3.699, 3.761, 3.758, 3.690, 3.807, 3.755, 3.641,
            3.719, 3.818, 3.590, 4.624, 3.912, 3.748, 3.611, 3.670, 3.667, 3.673,
            3.680, 3.970, 3.580, 3.784, 3.853, 3.944, 3.892, 3.755, 3.748, 3.670,
            3.693, 3.086, 3.527, 3.667, 3.641, 3.611, 3.657, 3.709, 3.712, 3.748,
        ],
        type: "scatter"
    }



    var layout_main = {
        title: "Main ECG Chart Realtime",
        autosize: false,
        width: 700,
        height: 500,
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

    function getData0(num) {
        return num;
    }

    function getData(num, plus) {
        num = num + plus;
        return num;
    }
    //! Plot MAIN CHART - BEGIN
    Plotly.newPlot(graphDiv_realTime_main, [{
        y: [getData0(textECG_sub_1)],
        type: 'line'
    }], layout_main);

    Plotly.addTraces(graphDiv_realTime_main, [{
        y: [getData(textECG_sub_2,2)],
        type: 'line'
    }]);

    Plotly.addTraces(graphDiv_realTime_main, [{
        y: [getData(textECG_sub_3,4)],
        type: 'line'
    }]);
    //!  Plot MAIN CHART - END

    // ? Plot SUB CHART - BEGIN
    if (status_chart_1 == 1) {
        var layout_chart_1 = {
            title: "ECG Chart: Lead 1 - AVF -",
            autosize: false,
            width: 400,
            height: 300,
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
        Plotly.newPlot(graphDiv_realTime_1, [{
            y: [getData0(textECG_sub_1)],
            type: 'line'
        }], layout_chart_1);
    }
    if (status_chart_2 == 1) {
        var layout_chart_2 = {
            title: "ECG Chart: Lead 2 - AVL -",
            autosize: false,
            width: 400,
            height: 300,
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
        Plotly.newPlot(graphDiv_realTime_2, [{
            y: [getData0(textECG_main)],
            type: 'line'
        }], layout_chart_2);
    }
    if (status_chart_3 == 1) {
        var layout_chart_3 = {
            title: "ECG Chart: Lead 3 - AVR -",
            autosize: false,
            width: 400,
            height: 300,
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
        Plotly.newPlot(graphDiv_realTime_3, [{
            y: [getData0(textECG_sub_1)],
            type: 'line'
        }], layout_chart_3);
    }
    if (status_chart_4 == 1) {
        Plotly.newPlot(graphDiv_realTime_4, [{
            y: [getData0(textECG_sub_1)],
            type: 'line'
        }]);
    }
    if (status_chart_5 == 1) {
        Plotly.newPlot(graphDiv_realTime_5, [{
            y: [getData0(textECG_sub_1)],
            type: 'line'
        }]);
    }
    if (status_chart_6 == 1) {
        Plotly.newPlot(graphDiv_realTime_6, [{
            y: [getData0(textECG_sub_1)],
            type: 'line'
        }]);
    }
    if (status_chart_7 == 1) {
        Plotly.newPlot(graphDiv_realTime_7, [{
            y: [getData0(textECG_sub_1)],
            type: 'line'
        }]);
    }
    if (status_chart_8 == 1) {
        Plotly.newPlot(graphDiv_realTime_8, [{
            y: [getData0(textECG_sub_1)],
            type: 'line'
        }]);
    }
    if (status_chart_9 == 1) {
        Plotly.newPlot(graphDiv_realTime_9, [{
            y: [getData0(textECG_sub_1)],
            type: 'line'
        }]);
    }
    if (status_chart_10 == 1) {
        Plotly.newPlot(graphDiv_realTime_10, [{
            y: [getData0(textECG_sub_1)],
            type: 'line'
        }]);
    }
    if (status_chart_11 == 1) {
        Plotly.newPlot(graphDiv_realTime_11, [{
            y: [getData0(textECG_sub_1)],
            type: 'line'
        }]);
    }
    if (status_chart_12 == 1) {
        Plotly.newPlot(graphDiv_realTime_12, [{
            y: [getData0(textECG_sub_1)],
            type: 'line'
        }]);
    }
    //? Plot SUB CHART - END


    var cnt = 0;
    var count = 0;
    var numOfSet = 3;
    var rangeOfButton = 3;
    var rangeOfTop = 4 + (numOfSet * 2);
    var setECG = [];

    setInterval(function() {
    
        cnt = cnt + 1;
        //! Chart Main - BEGIN
        Plotly.extendTraces(graphDiv_realTime_main, {
            y: [
                [getData(textECG_main.y[count], 0)],
                [getData(textECG_sub_1.y[count], 2)],
                [getData(textECG_sub_1.y[count], 4)]

            ]
        }, [0, 1, 2]);
        
        Plotly.relayout(graphDiv_realTime_main, {
            xaxis: {
                range: [cnt - 200, cnt]
            },
            yaxis: {
                range: [rangeOfButton, rangeOfTop]
            }
        });
        //! Chart Main - END

        //? Chart sub - 1
        if (status_chart_1 == 1) {
            // Chart sub - 3
            Plotly.extendTraces(graphDiv_realTime_1, {
                y: [
                    [getData(textECG_main.y[count], 0)]
                ]
            }, [0]);
            Plotly.relayout(graphDiv_realTime_1, {
                xaxis: {
                    range: [cnt - 100, cnt]
                },
                yaxis: {
                    range: [3, 5]
                }
            });
        }
        if (status_chart_2 == 1) {
            // Chart sub - 3
            Plotly.extendTraces(graphDiv_realTime_2, {
                y: [
                    [getData(textECG_main.y[count], 0)]
                ]
            }, [0]);
            Plotly.relayout(graphDiv_realTime_2, {
                xaxis: {
                    range: [cnt - 100, cnt]
                },
                yaxis: {
                    range: [3, 5]
                }
            });
        }
        if (status_chart_3 == 1) {
            // Chart sub - 3
            Plotly.extendTraces(graphDiv_realTime_3, {
                y: [
                    [getData(textECG_main.y[count], 0)]
                ]
            }, [0]);
            Plotly.relayout(graphDiv_realTime_3, {
                xaxis: {
                    range: [cnt - 100, cnt]
                },
                yaxis: {
                    range: [3, 5]
                }
            });
        }
        count++;
        if (count >= 50) {
            count = 0;
        }
    }, 20);
</script>

</center>

@stop