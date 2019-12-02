@extends('layouts.app')
@section('content')

<div class="nav nav-pills nav-justified">
    <div class="d-flex align-items-center justify-content-between">
    <a href="{{ action('MenuController@toHome')}}"><img src="{{asset('images/icon_emer1.png')}}" width="300px" hight="200px"></a>
    </div>
</div>
<div class="container">
    <div class="wrapper">
        <div class="one bg-light">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body text-center">
                    USER DATA
                </div>
            </div>
            <table class="table table-sm text-sm-center">
                <thead>
                    
                    <tr>
                        <th scope="col-1">ID</th>
                        <th scope="col-1">Name</th>
                        <th scope="col-1">Surname</th>
                        <th scope="col-8">Detail</th>
                        <th scope="col-8">Advice</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        
                        <td>{{$patient->id}}</td>
                        <td>{{$patient->f_name}}</td>
                        <td>{{$patient->l_name}}</td>
                        <td>รถชน กระดูกหัก</td>
                        <td>
                            <a href="{{ action('DoctorController@showListDoctor') }}">
                                ADVICE
                            </a> 
                        </td>
                        
                    </tr>
                   
                </tbody>
            </table>
            <div class="card text-black bg-light ">
                <div class="card-body  text-lg text-center">
                    Select Lead
                </div>
            </div>
            <table class="table table-sm  text-md-lefe">
    
                <tbody>
                    
                        <tr>
                            @if($status_chart->chart_1 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_1" onclick="checkChart_1()"> - AVR</label>
                                </div>
                            </td>
                            @endif
                            @if($status_chart->chart_2 == 1)
                            <td>
                                <div class="checkbox">
                                <label><input type="checkbox" id="chart_2" onclick="checkChart_2()"> - AVL</label>
                                </div>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            @if($status_chart->chart_3 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_3" onclick="checkChart_3()"> - AVF</label>
                                </div>
                            </td>
                            @endif
                            @if($status_chart->chart_4 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_4" onclick="checkChart_4()"> - I </label>
                                </div>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            @if($status_chart->chart_5 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_5" onclick="checkChart_5()"> - II </label>
                                </div>
                            </td>
                            @endif
                            @if($status_chart->chart_6 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_6" onclick="checkChart_6()"> - III</label>
                                </div>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            @if($status_chart->chart_7 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_7" onclick="checkChart_7()"> - V1 </label>
                                </div>
                            </td>
                            @endif
                            @if($status_chart->chart_8 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_8" onclick="checkChart_8()"> - V2 </label>
                                </div>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            @if($status_chart->chart_9 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_9" onclick="checkChart_9()"> - V3 </label>
                                </div>
                            </td>
                            @endif
                            @if($status_chart->chart_10 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_10" onclick="checkChart_10()"> - V4 </label>
                                </div>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            @if($status_chart->chart_11 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_11" onclick="checkChart_11()"> - V5 </label>
                                </div>
                            </td>
                            @endif
                            @if($status_chart->chart_12 == 1)
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="chart_12" onclick="checkChart_12()"> - V6 </label>
                                </div>
                            </td>
                            @endif
                        </tr>
                    
                </tbody>
            </table>
        </div>
        <div class="two bg-light">
            <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
          
                <div class="card text-white text-center bg-danger mb-3">
                    <h3>Real-Time Chart with Plotly.js</h3>
                </div>
                
                
                <div id="graphDiv_realTime_main1" style="display:none"></div>
                <div id="graphDiv_realTime_main2" style="display:none"></div>
                <div id="graphDiv_realTime_main3" style="display:none"></div>
                <div id="graphDiv_realTime_main4" style="display:none"></div>
                <div id="graphDiv_realTime_main5" style="display:none"></div>
                <div id="graphDiv_realTime_main6" style="display:none"></div>
                <div id="graphDiv_realTime_main7" style="display:none"></div>
                <div id="graphDiv_realTime_main8" style="display:none"></div>
                <div id="graphDiv_realTime_main9" style="display:none"></div>
                <div id="graphDiv_realTime_main10" style="display:none"></div>
                <div id="graphDiv_realTime_main11" style="display:none"></div>
                <div id="graphDiv_realTime_main12" style="display:none"></div>
               
        </div>
    </div>
    <div class= 'container'>
        <div class="wrapper four">
            
                @if($status_chart->chart_1 == 1 )
                <div id="graphDiv_realTime_1"></div>
                @endif
                @if($status_chart->chart_2 == 1)
                <div id="graphDiv_realTime_2"  ></div>
                @endif
                @if($status_chart->chart_3 == 1)
                <div id="graphDiv_realTime_3" ></div>
                @endif
                @if($status_chart->chart_4 == 1)
                <div id="graphDiv_realTime_4" ></div>
                @endif
                @if($status_chart->chart_5 == 1)
                <div id="graphDiv_realTime_5" ></div>
                @endif
                @if($status_chart->chart_6 == 1)
                <div id="graphDiv_realTime_6" ></div>
                @endif
                @if($status_chart->chart_7 == 1)
                <div id="graphDiv_realTime_7" ></div>
                @endif
                @if($status_chart->chart_8 == 1)
                <div id="graphDiv_realTime_8" ></div>
                @endif
                @if($status_chart->chart_9 == 1)
                <div id="graphDiv_realTime_9" ></div>
                @endif
                @if($status_chart->chart_10 == 1)
                <div id="graphDiv_realTime_10" ></div>
                @endif
                @if($status_chart->chart_11 == 1)
                <div id="graphDiv_realTime_11" ></div>
                @endif
                @if($status_chart->chart_12 == 1)
                <div id="graphDiv_realTime_12" ></div>
                @endif
            
        </div>
    </div>
</div>
<script>
    var textECG_firebase = [];
    function checkChart_1() {
        var checkBox_chart_1 = document.getElementById("chart_1");
        var graphDiv_realTime_1 = document.getElementById("graphDiv_realTime_main1");

        if (checkBox_chart_1.checked == true) {
            graphDiv_realTime_1.style.display = "block";
        } else {
            graphDiv_realTime_1.style.display = "none";
        }
    }

    function checkChart_2() {
        var checkBox_chart_2 = document.getElementById("chart_2");
        var graphDiv_realTime_2 = document.getElementById("graphDiv_realTime_main2");

        if (checkBox_chart_2.checked == true) {
            graphDiv_realTime_2.style.display = "block";
        } else {
            graphDiv_realTime_2.style.display = "none";
        }
    }
    function checkChart_3() {
        var checkBox_chart_2 = document.getElementById("chart_3");
        var graphDiv_realTime_2 = document.getElementById("graphDiv_realTime_main3");

        if (checkBox_chart_2.checked == true) {
            graphDiv_realTime_2.style.display = "block";
        } else {
            graphDiv_realTime_2.style.display = "none";
        }
    }
    function checkChart_4() {
        var checkBox_chart_2 = document.getElementById("chart_4");
        var graphDiv_realTime_2 = document.getElementById("graphDiv_realTime_main4");

        if (checkBox_chart_2.checked == true) {
            graphDiv_realTime_2.style.display = "block";
        } else {
            graphDiv_realTime_2.style.display = "none";
        }
    }
    function checkChart_5() {
        var checkBox_chart_2 = document.getElementById("chart_5");
        var graphDiv_realTime_2 = document.getElementById("graphDiv_realTime_main5");

        if (checkBox_chart_2.checked == true) {
            graphDiv_realTime_2.style.display = "block";
        } else {
            graphDiv_realTime_2.style.display = "none";
        }
    }
    function checkChart_6() {
        var checkBox_chart_2 = document.getElementById("chart_6");
        var graphDiv_realTime_2 = document.getElementById("graphDiv_realTime_main6");

        if (checkBox_chart_2.checked == true) {
            graphDiv_realTime_2.style.display = "block";
        } else {
            graphDiv_realTime_2.style.display = "none";
        }
    }
    function checkChart_7() {
        var checkBox_chart_2 = document.getElementById("chart_7");
        var graphDiv_realTime_2 = document.getElementById("graphDiv_realTime_main7");

        if (checkBox_chart_2.checked == true) {
            graphDiv_realTime_2.style.display = "block";
        } else {
            graphDiv_realTime_2.style.display = "none";
        }
    }
    function checkChart_8() {
        var checkBox_chart_2 = document.getElementById("chart_8");
        var graphDiv_realTime_2 = document.getElementById("graphDiv_realTime_main8");

        if (checkBox_chart_2.checked == true) {
            graphDiv_realTime_2.style.display = "block";
        } else {
            graphDiv_realTime_2.style.display = "none";
        }
    }
    function checkChart_9() {
        var checkBox_chart_2 = document.getElementById("chart_9");
        var graphDiv_realTime_2 = document.getElementById("graphDiv_realTime_main9");

        if (checkBox_chart_2.checked == true) {
            graphDiv_realTime_2.style.display = "block";
        } else {
            graphDiv_realTime_2.style.display = "none";
        }
    }
    function checkChart_10() {
        var checkBox_chart_2 = document.getElementById("chart_10");
        var graphDiv_realTime_2 = document.getElementById("graphDiv_realTime_main10");

        if (checkBox_chart_2.checked == true) {
            graphDiv_realTime_2.style.display = "block";
        } else {
            graphDiv_realTime_2.style.display = "none";
        }
    }
    function checkChart_11() {
        var checkBox_chart_2 = document.getElementById("chart_11");
        var graphDiv_realTime_2 = document.getElementById("graphDiv_realTime_main11");

        if (checkBox_chart_2.checked == true) {
            graphDiv_realTime_2.style.display = "block";
        } else {
            graphDiv_realTime_2.style.display = "none";
        }
    }
    function checkChart_12() {
        var checkBox_chart_2 = document.getElementById("chart_12");
        var graphDiv_realTime_2 = document.getElementById("graphDiv_realTime_main12");

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

    // var check_chart_1_on = 1;
    // var check_chart_2_on = 1;
    // var check_chart_3_on = 1;

    // console.log("status_chart_3 : ", status_chart_3);
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



    var layout_main1 = {
        title: "AVR",
        autosize: false,
        width: 700,
        height: 150,
        margin: {
            l: 30,
            r: 0,
            b: 20,
            t: 25,
            pad: 2
        },
        paper_bgcolor: '#ffffff',
        plot_bgcolor: '#ffffff'
    };
    var layout_main2 = {
        title: "AVL",
        autosize: false,
        width: 700,
        height: 150,
        margin: {
            l: 30,
            r: 0,
            b: 20,
            t: 25,
            pad: 2
        },
        paper_bgcolor: '#ffffff',
        plot_bgcolor: '#ffffff'
    };
    var layout_main3 = {
        title: "AVF",
        autosize: false,
        width: 700,
        height: 150,
        margin: {
            l: 30,
            r: 0,
            b: 20,
            t: 25,
            pad: 2
        },
        paper_bgcolor: '#ffffff',
        plot_bgcolor: '#ffffff'
    };
    var layout_main4 = {
        title: "I",
        autosize: false,
        width: 700,
        height: 150,
        margin: {
            l: 30,
            r: 0,
            b: 20,
            t: 25,
            pad: 2
        },
        paper_bgcolor: '#ffffff',
        plot_bgcolor: '#ffffff'
    };
    var layout_main5 = {
        title: "II",
        autosize: false,
        width: 700,
        height: 150,
        margin: {
            l: 30,
            r: 0,
            b: 20,
            t: 25,
            pad: 2
        },
        paper_bgcolor: '#ffffff',
        plot_bgcolor: '#ffffff'
    };
    var layout_main6 = {
        title: "III",
        autosize: false,
        width: 700,
        height: 150,
        margin: {
            l: 30,
            r: 0,
            b: 20,
            t: 25,
            pad: 2
        },
        paper_bgcolor: '#ffffff',
        plot_bgcolor: '#ffffff'
    };
    var layout_main7 = {
        title: "VI",
        autosize: false,
        width: 700,
        height: 150,
        margin: {
            l: 30,
            r: 0,
            b: 20,
            t: 25,
            pad: 2
        },
        paper_bgcolor: '#ffffff',
        plot_bgcolor: '#ffffff'
    };
    var layout_main8 = {
        title: "V2",
        autosize: false,
        width: 700,
        height: 150,
        margin: {
            l: 30,
            r: 0,
            b: 20,
            t: 25,
            pad: 2
        },
        paper_bgcolor: '#ffffff',
        plot_bgcolor: '#ffffff'
    };
    var layout_main9 = {
        title: "V3",
        autosize: false,
        width: 700,
        height: 150,
        margin: {
            l: 30,
            r: 0,
            b: 20,
            t: 25,
            pad: 2
        },
        paper_bgcolor: '#ffffff',
        plot_bgcolor: '#ffffff'
    };
    var layout_main10 = {
        title: "V4",
        autosize: false,
        width: 700,
        height: 150,
        margin: {
            l: 30,
            r: 0,
            b: 20,
            t: 25,
            pad: 2
        },
        paper_bgcolor: '#ffffff',
        plot_bgcolor: '#ffffff'
    };
    var layout_main11 = {
        title: "V5",
        autosize: false,
        width: 700,
        height: 150,
        margin: {
            l: 30,
            r: 0,
            b: 20,
            t: 25,
            pad: 2
        },
        paper_bgcolor: '#ffffff',
        plot_bgcolor: '#ffffff'
    };
    var layout_main12 = {
        title: "V6",
        autosize: false,
        width: 700,
        height: 150,
        margin: {
            l: 30,
            r: 0,
            b: 20,
            t: 25,
            pad: 2
        },
        paper_bgcolor: '#ffffff',
        plot_bgcolor: '#ffffff'
    };
    Plotly.newPlot(graphDiv_realTime_main1, [{
            y: [getData0(textECG_sub_1)],
            type: 'line'
        }], layout_main1);
    Plotly.newPlot(graphDiv_realTime_main2, [{
            y: [getData0(textECG_sub_2)],
            type: 'line'
        }], layout_main2);
    Plotly.newPlot(graphDiv_realTime_main3, [{
            y: [getData0(textECG_sub_3)],
            type: 'line'
        }], layout_main3);
    Plotly.newPlot(graphDiv_realTime_main4, [{
            y: [getData0(textECG_sub_4)],
            type: 'line'
        }], layout_main4);
    Plotly.newPlot(graphDiv_realTime_main5, [{
            y: [getData0(textECG_sub_5)],
            type: 'line'
        }], layout_main5);
    Plotly.newPlot(graphDiv_realTime_main6, [{
            y: [getData0(textECG_sub_6)],
            type: 'line'
        }], layout_main6);
    Plotly.newPlot(graphDiv_realTime_main7, [{
            y: [getData0(textECG_sub_7)],
            type: 'line'
        }], layout_main7);
    Plotly.newPlot(graphDiv_realTime_main8, [{
            y: [getData0(textECG_sub_8)],
            type: 'line'
        }], layout_main8);
    Plotly.newPlot(graphDiv_realTime_main9, [{
            y: [getData0(textECG_sub_9)],
            type: 'line'
        }], layout_main9);
    Plotly.newPlot(graphDiv_realTime_main10, [{
            y: [getData0(textECG_sub_10)],
            type: 'line'
        }], layout_main10);
    Plotly.newPlot(graphDiv_realTime_main11, [{
            y: [getData0(textECG_sub_11)],
            type: 'line'
        }], layout_main11);
    Plotly.newPlot(graphDiv_realTime_main12, [{
            y: [getData0(textECG_sub_12)],
            type: 'line'
        }], layout_main12);

    function getData0(num) {
        return num;
    }

    function getData(num, plus) {
        num = num + plus;
        return num;
    }
    //! Plot MAIN CHART - BEGIN
    

    // Plotly.addTraces(graphDiv_realTime_main, [{
    //     y: [getData(textECG_sub_2,2)],
    //     type: 'line'
    // }]);

    // Plotly.addTraces(graphDiv_realTime_main, [{
    //     y: [getData(textECG_sub_3,4)],
    //     type: 'line'
    // }]);
    //!  Plot MAIN CHART - END

    // ? Plot SUB CHART - BEGIN
    if (status_chart_1 == 1) {
        var layout_chart_1 = {
            title: "Lead 1 - AVR",
            autosize: false,
            width: 320,
            height: 300,
            margin: {
                l: 30,
                r: 30,
                b: 30,
                t: 50,
                pad: 2
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
            title: "Lead 2 - AVL",
            autosize: false,
            width: 320,
            height: 300,
            margin: {
                l: 30,
                r: 30,
                b: 30,
                t: 50,
                pad: 2
            },
            paper_bgcolor: '#ffffff',
            plot_bgcolor: '#ffffff'
        };
        Plotly.newPlot(graphDiv_realTime_2, [{
            y: [getData0(textECG_sub_2)],
            type: 'line'
        }], layout_chart_2);
    }
    if (status_chart_3 == 1) {
        var layout_chart_3 = {
            title: "Lead 3 - AVF",
            autosize: false,
            width: 320,
            height: 300,
            margin: {
                l: 30,
                r: 30,
                b: 30,
                t: 50,
                pad: 2
            },
            paper_bgcolor: '#ffffff',
            plot_bgcolor: '#ffffff'
        };
        Plotly.newPlot(graphDiv_realTime_3, [{
            y: [getData0(textECG_sub_3)],
            type: 'line'
        }], layout_chart_3);
    }
    if (status_chart_4 == 1) {
        var layout_chart_4 = {
            title: "Lead 4 - I",
            autosize: false,
            width: 320,
            height: 300,
            margin: {
                l: 30,
                r: 30,
                b: 30,
                t: 10,
                pad: 2
            },
            paper_bgcolor: '#ffffff',
            plot_bgcolor: '#ffffff'
        };
        Plotly.newPlot(graphDiv_realTime_4, [{
            y: [getData0(textECG_sub_4)],
            type: 'line'
        }]);
    }
    if (status_chart_5 == 1) {
        var layout_chart_5 = {
            title: "Lead 5 - II",
            autosize: false,
            width: 320,
            height: 300,
            margin: {
                l: 30,
                r: 30,
                b: 30,
                t: 10,
                pad: 2
            },
            paper_bgcolor: '#ffffff',
            plot_bgcolor: '#ffffff'
        };
        Plotly.newPlot(graphDiv_realTime_5, [{
            y: [getData0(textECG_sub_5)],
            type: 'line'
        }]);
    }
    if (status_chart_6 == 1) {
        var layout_chart_6 = {
            title: "Lead 6 - III",
            autosize: false,
            width: 320,
            height: 300,
            margin: {
                l: 30,
                r: 30,
                b: 30,
                t: 10,
                pad: 2
            },
            paper_bgcolor: '#ffffff',
            plot_bgcolor: '#ffffff'
        };
        Plotly.newPlot(graphDiv_realTime_6, [{
            y: [getData0(textECG_sub_6)],
            type: 'line'
        }]);
    }
    if (status_chart_7 == 1) {
        var layout_chart_3 = {
            title: "Lead 7 - V1",
            autosize: false,
            width: 320,
            height: 300,
            margin: {
                l: 30,
                r: 30,
                b: 30,
                t: 50,
                pad: 2
            },
            paper_bgcolor: '#ffffff',
            plot_bgcolor: '#ffffff'
        };
        Plotly.newPlot(graphDiv_realTime_7, [{
            y: [getData0(textECG_sub_1)],
            type: 'line'
        }]);
    }
    if (status_chart_8 == 1) {
        var layout_chart_8 = {
            title: "Lead 8 - V2",
            autosize: false,
            width: 320,
            height: 300,
            margin: {
                l: 30,
                r: 30,
                b: 30,
                t: 50,
                pad: 2
            },
            paper_bgcolor: '#ffffff',
            plot_bgcolor: '#ffffff'
        };
        Plotly.newPlot(graphDiv_realTime_8, [{
            y: [getData0(textECG_sub_1)],
            type: 'line'
        }]);
    }
    if (status_chart_9 == 1) {
        var layout_chart_9 = {
            title: "Lead 9 - V3",
            autosize: false,
            width: 320,
            height: 300,
            margin: {
                l: 30,
                r: 30,
                b: 30,
                t: 50,
                pad: 2
            },
            paper_bgcolor: '#ffffff',
            plot_bgcolor: '#ffffff'
        };
        Plotly.newPlot(graphDiv_realTime_9, [{
            y: [getData0(textECG_sub_1)],
            type: 'line'
        }]);
    }
    if (status_chart_10 == 1) {
        var layout_chart_10 = {
            title: "Lead 10 - V4",
            autosize: false,
            width: 320,
            height: 300,
            margin: {
                l: 30,
                r: 30,
                b: 30,
                t: 50,
                pad: 2
            },
            paper_bgcolor: '#ffffff',
            plot_bgcolor: '#ffffff'
        };
        Plotly.newPlot(graphDiv_realTime_10, [{
            y: [getData0(textECG_sub_1)],
            type: 'line'
        }]);
    }
    if (status_chart_11 == 1) {
        var layout_chart_11 = {
            title: "Lead 11 - V5",
            autosize: false,
            width: 320,
            height: 300,
            margin: {
                l: 30,
                r: 30,
                b: 30,
                t: 50,
                pad: 2
            },
            paper_bgcolor: '#ffffff',
            plot_bgcolor: '#ffffff'
        };
        Plotly.newPlot(graphDiv_realTime_11, [{
            y: [getData0(textECG_sub_1)],
            type: 'line'
        }]);
    }
    if (status_chart_12 == 1) {
        var layout_chart_12 = {
            title: "Lead 12 - V6",
            autosize: false,
            width: 320,
            height: 300,
            margin: {
                l: 30,
                r: 30,
                b: 30,
                t: 50,
                pad: 2
            },
            paper_bgcolor: '#ffffff',
            plot_bgcolor: '#ffffff'
        };
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
        Plotly.extendTraces(graphDiv_realTime_main1, {
            y: [
                [getData(textECG_firebase[count].I, 0)]
            ]
        }, [0]);
        
        Plotly.relayout(graphDiv_realTime_main1, {
            xaxis: {
                range: [cnt - 200, cnt]
            },
            yaxis: {
                range: [3, 5]
            }
        });

        Plotly.extendTraces(graphDiv_realTime_main2, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
        Plotly.relayout(graphDiv_realTime_main2, {
            xaxis: {
                range: [cnt - 200, cnt]
            },
            yaxis: {
                range: [3, 5]
            }
        });
        Plotly.extendTraces(graphDiv_realTime_main3, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
        Plotly.relayout(graphDiv_realTime_main3, {
            xaxis: {
                range: [cnt - 200, cnt]
            },
            yaxis: {
                range: [3, 5]
            }
        });
        Plotly.extendTraces(graphDiv_realTime_main4, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
        Plotly.relayout(graphDiv_realTime_main4, {
            xaxis: {
                range: [cnt - 200, cnt]
            },
            yaxis: {
                range: [3, 5]
            }
        });
        Plotly.extendTraces(graphDiv_realTime_main5, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
        Plotly.relayout(graphDiv_realTime_main5, {
            xaxis: {
                range: [cnt - 200, cnt]
            },
            yaxis: {
                range: [3, 5]
            }
        });
        Plotly.extendTraces(graphDiv_realTime_main6, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
        Plotly.relayout(graphDiv_realTime_main6, {
            xaxis: {
                range: [cnt - 200, cnt]
            },
            yaxis: {
                range: [3, 5]
            }
        });
        Plotly.extendTraces(graphDiv_realTime_main7, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
        Plotly.relayout(graphDiv_realTime_main7, {
            xaxis: {
                range: [cnt - 200, cnt]
            },
            yaxis: {
                range: [3, 5]
            }
        });
        Plotly.extendTraces(graphDiv_realTime_main8, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
        Plotly.relayout(graphDiv_realTime_main8, {
            xaxis: {
                range: [cnt - 200, cnt]
            },
            yaxis: {
                range: [3, 5]
            }
        });
        Plotly.extendTraces(graphDiv_realTime_main9, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
        Plotly.relayout(graphDiv_realTime_main9, {
            xaxis: {
                range: [cnt - 200, cnt]
            },
            yaxis: {
                range: [3, 5]
            }
        });Plotly.extendTraces(graphDiv_realTime_main10, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
        Plotly.relayout(graphDiv_realTime_main10, {
            xaxis: {
                range: [cnt - 200, cnt]
            },
            yaxis: {
                range: [3, 5]
            }
        });
        Plotly.extendTraces(graphDiv_realTime_main11, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
        Plotly.relayout(graphDiv_realTime_main11, {
            xaxis: {
                range: [cnt - 200, cnt]
            },
            yaxis: {
                range: [3, 5]
            }
        });
        Plotly.extendTraces(graphDiv_realTime_main12, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
        Plotly.relayout(graphDiv_realTime_main12, {
            xaxis: {
                range: [cnt - 200, cnt]
            },
            yaxis: {
                range: [3, 5]
            }
        });
        //! Chart Main - END

        //? Chart sub - 1
        if (status_chart_1 == 1) {
            // Chart sub - 3
            Plotly.extendTraces(graphDiv_realTime_1, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
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
                    [getData(textECG_firebase[count].I, 0)]
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
                    [getData(textECG_firebase[count].I, 0)]
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
        if (status_chart_4 == 1) {
            // Chart sub - 3
            Plotly.extendTraces(graphDiv_realTime_4, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
            Plotly.relayout(graphDiv_realTime_4, {
                xaxis: {
                    range: [cnt - 100, cnt]
                },
                yaxis: {
                    range: [3, 5]
                }
            });
        }
        if (status_chart_5 == 1) {
            // Chart sub - 3
            Plotly.extendTraces(graphDiv_realTime_5, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
            Plotly.relayout(graphDiv_realTime_5, {
                xaxis: {
                    range: [cnt - 100, cnt]
                },
                yaxis: {
                    range: [3, 5]
                }
            });
        }
        if (status_chart_6 == 1) {
            // Chart sub - 3
            Plotly.extendTraces(graphDiv_realTime_6, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
            Plotly.relayout(graphDiv_realTime_6, {
                xaxis: {
                    range: [cnt - 100, cnt]
                },
                yaxis: {
                    range: [3, 5]
                }
            });
        }
        if (status_chart_7 == 1) {
            // Chart sub - 3
            Plotly.extendTraces(graphDiv_realTime_7, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
            Plotly.relayout(graphDiv_realTime_7, {
                xaxis: {
                    range: [cnt - 100, cnt]
                },
                yaxis: {
                    range: [3, 5]
                }
            });
        }
        if (status_chart_8 == 1) {
            // Chart sub - 3
            Plotly.extendTraces(graphDiv_realTime_8, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
            Plotly.relayout(graphDiv_realTime_8, {
                xaxis: {
                    range: [cnt - 100, cnt]
                },
                yaxis: {
                    range: [3, 5]
                }
            });
        }
        if (status_chart_9 == 1) {
            // Chart sub - 3
            Plotly.extendTraces(graphDiv_realTime_9, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
            Plotly.relayout(graphDiv_realTime_9, {
                xaxis: {
                    range: [cnt - 100, cnt]
                },
                yaxis: {
                    range: [3, 5]
                }
            });
        }
        if (status_chart_10 == 1) {
            // Chart sub - 3
            Plotly.extendTraces(graphDiv_realTime_10, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
            Plotly.relayout(graphDiv_realTime_10, {
                xaxis: {
                    range: [cnt - 100, cnt]
                },
                yaxis: {
                    range: [3, 5]
                }
            });
        }
        if (status_chart_11 == 1) {
            // Chart sub - 3
            Plotly.extendTraces(graphDiv_realTime_11, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
            Plotly.relayout(graphDiv_realTime_11, {
                xaxis: {
                    range: [cnt - 100, cnt]
                },
                yaxis: {
                    range: [3, 5]
                }
            });
        }
        if (status_chart_12 == 1) {
            // Chart sub - 3
            Plotly.extendTraces(graphDiv_realTime_12, {
                y: [
                    [getData(textECG_firebase[count].I, 0)]
                ]
            }, [0]);
            Plotly.relayout(graphDiv_realTime_12, {
                xaxis: {
                    range: [cnt - 100, cnt]
                },
                yaxis: {
                    range: [3, 5]
                }
            });
        }
       
        count++;
        if (count >= textECG_firebase.length) {
            count = 0;
        }
    }, 20);
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
      var date = new Date();
      var year = date.getFullYear();
      var month = date.getMonth()+1;
      var day = date.getDate();
      var hour = date.getHours();
      var min = date.getMinutes();
      console.log(day + ":" + month + ":" + year + "  " + hour + ":" + min)
      database.ref("101/"+year+"/"+month+"/"+day).on('value', function(snapshot){
            if(snapshot.exists()){
                var content = '';
                snapshot.forEach(function(data){
                    var val = data.val();
                    console.log("zz",data.val());
                    console.log("yy",data.getKey());
                    textECG_firebase.push(val);
                    
                });
                var theDiv = document.getElementById("ex-table");
                theDiv.innerHTML += content; 
                //$('#ex-table').append(content);
            }
      });
      
      database.ref("101/"+year+"/"+month+"/"+day+"/11:00/1ecglog").on('value', function(snapshot){
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
                theDiv.innerHTML += content; 
                //$('#ex-table').append(content);
            }
      });
    </script>


@stop