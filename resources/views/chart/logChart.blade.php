@extends('layouts.app')
@section('content')




<script>
</script>
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
                        <div class="card text-white bg-success mb-3">
                            <div class="card-body text-white text-center">
                                USER DATA
                            </div>
                        </div>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">Node</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$patient->id}}</td>
                            <td>{{$patient->f_name}}</td>
                            <td>{{$patient->l_name}}</td>
                            <td>
                                {{$patient->node_id}}
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
                                <select id="select_y" onchange="getmonth()"></select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select id="select_m" onchange="getday()"></select>
                            </td>
                        </tr>
                        <tr>
                            <td><select id="select_d" onchange="gettime()"> </select>
                            </td>
                        </tr>
                        <tr>
                            <td><select id="select_t" onchange="pasttime()"> </select>
                            </td>
                        </tr>
                        <tr>
                            <td><select id="past_time" onchange="pasttime()">
                                    <option value=5>5 Sec</option>
                                    <option value=10>10 Sec</option>
                                    <option value="all">All</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-sm table-hover text-md-center">
                    <thead>
                        <tr>
                            <th scope="col">Select LEAD</th>
                        </tr>
                    </thead>
                    <tbody>
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
                        <tr>
                            <td>
                                <button onclick="gettext()">Submit</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="two bg-light">
                <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
                <div class="card text-black bg-light ">
                    <div class="card-body  text-lg text-center">
                    <span> ECG Chart type Log </span>
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
        y: [
            3.794, 3.575, 3.908, 3.922, 3.755, 3.699, 3.742, 3.641, 3.673, 3.621,
            3.578, 3.673, 3.637, 3.699, 3.761, 3.758, 3.690, 3.807, 3.755, 3.641,
            3.719, 3.818, 3.590, 4.624, 3.912, 3.748, 3.611, 3.670, 3.667, 3.673,
            3.680, 3.970, 3.580, 3.784, 3.853, 3.944, 3.892, 3.755, 3.748, 3.670,
            3.693, 3.086, 3.527, 3.667, 3.641, 3.611, 3.657, 3.709, 3.712, 3.748
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

<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>
<script>
    var dd = {
        y_selected: null,
        m_selected: null,
        d_selected: null,
        t_selected: null,
        past_selected: null
    }
    var textECG_firebase = [];
    var year_firebase = [];
    var select_year = document.getElementById("select_y");
    var month_firebase = [];
    var select_month = document.getElementById("select_m");
    var day_firebase = [];
    var select_day = document.getElementById("select_d");
    var time_firebase = [];
    var select_time = document.getElementById("select_t");
    var time_select_20ms;
    var time_select;


    var txt_title, txt_content, txt_img = '';
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
    database.ref("101/").on('value', function(snapshot) {
        if (snapshot.exists()) {
            var content = '';
            year_firebase.push("select year");
            snapshot.forEach(function(data) {
                var val = data.val();
                console.log("row", data.val());
                console.log("title", data.getKey());
                year_firebase.push(data.getKey());

            });
            for (var i = 0; i < year_firebase.length; i++) {
                var yr = year_firebase[i];
                console.log(i + "+" + year_firebase[i]);
                var el = document.createElement("option");
                el.textContent = yr;
                el.value = yr;
                select_year.appendChild(el);
            }
        }
    });

    function getmonth() {
        console.log("hiM");
        var e = document.getElementById("select_y");
        //select_day.innerHTML = "";
        dd.y_selected = e.options[e.selectedIndex].value;
        console.log(dd.y_selected);
        database.ref("101/" + dd.y_selected).on('value', function(snapshot) {
            //select_year.innerHTML = "";
            if (snapshot.exists()) {
                var content = '';
                month_firebase = [];
                month_firebase.push("select month");
                snapshot.forEach(function(data) {
                    var val = data.val();
                    console.log("row", data.val());
                    console.log("title", data.getKey());
                    month_firebase.push(data.getKey());
                });
                select_month.innerHTML = "";
                for (var i = 0; i < month_firebase.length; i++) {
                    var mnt = month_firebase[i];
                    console.log(month_firebase[i]);
                    el = document.createElement("option");
                    el.textContent = mnt;
                    el.value = mnt;
                    select_month.appendChild(el);
                }
            }
        });
    };

    function getday() {
        console.log("hiD");
        var e = document.getElementById("select_m");
        //select_day.innerHTML = "";
        dd.m_selected = e.options[e.selectedIndex].value;
        console.log(dd.m_selected);
        database.ref("101/" + dd.y_selected + "/" + dd.m_selected).on('value', function(snapshot) {
            select_day.innerHTML = "";
            if (snapshot.exists()) {
                var content = '';
                day_firebase = [];
                day_firebase.push("select day");
                snapshot.forEach(function(data) {
                    var val = data.val();
                    console.log("row", data.val());
                    console.log("title", data.getKey());
                    day_firebase.push(data.getKey());
                });
                select_day.innerHTML = "";
                for (var i = 0; i < day_firebase.length; i++) {
                    var day = day_firebase[i];
                    console.log(day_firebase[i]);
                    el = document.createElement("option");
                    el.textContent = day;
                    el.value = day;
                    select_day.appendChild(el);
                }
            }
        });
    };

    function gettime() {
        console.log("hiT");
        var e = document.getElementById("select_d");
        dd.d_selected = e.options[e.selectedIndex].value;
        console.log(dd.d_selected);
        database.ref("101/" + dd.y_selected + "/" + dd.m_selected + "/" + dd.d_selected).on('value', function(snapshot) {
            if (snapshot.exists()) {
                var content = '';
                time_firebase = [];
                time_firebase.push("select time");
                snapshot.forEach(function(data) {
                    var val = data.val();
                    console.log("row", data.val());
                    console.log("title", data.getKey());
                    time_firebase.push(data.getKey());

                });
                select_time.innerHTML = "";
                for (var i = 0; i < time_firebase.length; i++) {
                    var time = time_firebase[i];
                    console.log(time_firebase[i]);
                    var el = document.createElement("option");
                    el.textContent = time;
                    el.value = time;
                    select_time.appendChild(el);
                }
            }
        });
    };

    function pasttime() {
        console.log("hipasttime");
        var e = document.getElementById("past_time");
        dd.past_selected = e.options[e.selectedIndex].value;
        console.log(dd.past_selected);
        var count_ecg;
        time_select = dd.past_selected;
        if (time_select == "all") {
            time_select_20ms = 0;
        } else {
            time_select_20ms = (time_select * 1000) / 20;
        }



    };

    function gettext() {
        console.log("hiData");
        var e = document.getElementById("select_t");
        dd.t_selected = e.options[e.selectedIndex].value;
        database.ref("101/" + dd.y_selected + "/" + dd.m_selected + "/" + dd.d_selected + "/" + dd.t_selected + "/1ecglog").on('value', function(snapshot) {
            console.log("101/" + dd.y_selected + "/" + dd.m_selected + "/" + dd.d_selected + "/" + dd.t_selected + "/1ecglog")
            if (snapshot.exists()) {
                var content = '';
                textECG_firebase = [];
                snapshot.forEach(function(data) {
                    var val = data.val();
                    console.log("row", data.val());
                    console.log("title", data.getKey());
                    textECG_firebase.push(val);

                });
                if (time_select == "all") {
                    time_select_20ms = textECG_firebase.length;
                }
                var loop_1 = setInterval(plotinterval_1, 20);
                var loop_2 = setInterval(plotinterval_2, 20);
                var loop_3 = setInterval(plotinterval_3, 20);
                var loop_4 = setInterval(plotinterval_4, 20);
                var loop_5 = setInterval(plotinterval_5, 20);
                var loop_6 = setInterval(plotinterval_6, 20);
                var loop_7 = setInterval(plotinterval_7, 20);
                var loop_8 = setInterval(plotinterval_8, 20);
                var loop_9 = setInterval(plotinterval_9, 20);
                var loop_10 = setInterval(plotinterval_10, 20);
                var loop_11 = setInterval(plotinterval_11, 20);
                var loop_12 = setInterval(plotinterval_12, 20);
            }
        });
    };


    var layout_1 = {
        title: "Electrocardiography - AVF ",
        autosize: false,
        width: 700,
        height: 250,
        margin: {
            l: 30,
            r: 30,
            b: 20,
            t: 30,
            pad: 4
        },
        paper_bgcolor: '#FFFFCC',
        plot_bgcolor: '#FFFFFF'
    };

    var layout_2 = {
        title: "Electrocardiography - AVL",
        autosize: false,
        width: 700,
        height: 250,
        margin: {
            l: 30,
            r: 30,
            b: 20,
            t: 30,
            pad: 4
        },
        paper_bgcolor: '#FFFFCC',
        plot_bgcolor: '#FFFFFF'
    };
    var layout_3 = {
        title: "Electrocardiography - AVR",
        autosize: false,
        width: 700,
        height: 250,
        margin: {
            l: 30,
            r: 30,
            b: 20,
            t: 30,
            pad: 4
        },
        paper_bgcolor: '#FFFFCC',
        plot_bgcolor: '#FFFFFF'
    };

    var layout_4 = {
        title: "Electrocardiography - I",
        autosize: false,
        width: 700,
        height: 250,
        margin: {
            l: 30,
            r: 30,
            b: 20,
            t: 30,
            pad: 4
        },
        paper_bgcolor: '#FFFFCC',
        plot_bgcolor: '#FFFFFF'
    };
    var layout_5 = {
        title: "Electrocardiography - II",
        autosize: false,
        width: 700,
        height: 250,
        margin: {
            l: 30,
            r: 30,
            b: 20,
            t: 30,
            pad: 4
        },
        paper_bgcolor: '#FFFFCC',
        plot_bgcolor: '#FFFFFF'
    };
    var layout_6 = {
        title: "Electrocardiography - III",
        autosize: false,
        width: 700,
        height: 250,
        margin: {
            l: 30,
            r: 30,
            b: 20,
            t: 30,
            pad: 4
        },
        paper_bgcolor: '#FFFFCC',
        plot_bgcolor: '#FFFFFF'
    };
    var layout_7 = {
        title: "Electrocardiography - V1",
        autosize: false,
        width: 700,
        height: 250,
        margin: {
            l: 30,
            r: 30,
            b: 20,
            t: 30,
            pad: 4
        },
        paper_bgcolor: '#FFFFCC',
        plot_bgcolor: '#FFFFFF'
    };
    var layout_8 = {
        title: "Electrocardiography - V2",
        autosize: false,
        width: 700,
        height: 250,
        margin: {
            l: 30,
            r: 30,
            b: 20,
            t: 30,
            pad: 4
        },
        paper_bgcolor: '#FFFFCC',
        plot_bgcolor: '#FFFFFF'
    };
    var layout_9 = {
        title: "Electrocardiography - V3",
        autosize: false,
        width: 700,
        height: 250,
        margin: {
            l: 30,
            r: 30,
            b: 20,
            t: 30,
            pad: 4
        },
        paper_bgcolor: '#FFFFCC',
        plot_bgcolor: '#FFFFFF'
    };
    var layout_10 = {
        title: "Electrocardiography - V4",
        autosize: false,
        width: 700,
        height: 250,
        margin: {
            l: 30,
            r: 30,
            b: 20,
            t: 30,
            pad: 4
        },
        paper_bgcolor: '#FFFFCC',
        plot_bgcolor: '#FFFFFF'
    };

    var layout_11 = {
        title: "Electrocardiography - V5",
        autosize: false,
        width: 700,
        height: 250,
        margin: {
            l: 30,
            r: 30,
            b: 20,
            t: 30,
            pad: 4
        },
        paper_bgcolor: '#FFFFCC',
        plot_bgcolor: '#FFFFFF'
    };
    var layout_12 = {
        title: "Electrocardiography - V6",
        autosize: false,
        width: 700,
        height: 250,
        margin: {
            l: 30,
            r: 30,
            b: 20,
            t: 30,
            pad: 4
        },
        paper_bgcolor: '#FFFFCC',
        plot_bgcolor: '#FFFFFF'
    };

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

    function getData0(num) {
        return num;
    }

    function getData(num, plus) {
        num = num + plus;
        return num;
    }

    Plotly.newPlot(graphDiv_Log_1, [{
        y: [getData0(textECG)],
        type: 'line'
    }], layout_1);

    Plotly.newPlot(graphDiv_Log_2, [{
        y: [getData0(textECG)],
        type: 'line'
    }], layout_2);

    Plotly.newPlot(graphDiv_Log_3, [{
        y: [getData0(textECG)],
        type: 'line'
    }], layout_3);
    Plotly.newPlot(graphDiv_Log_4, [{
        y: [getData0(textECG)],
        type: 'line'
    }], layout_4);
    Plotly.newPlot(graphDiv_Log_5, [{
        y: [getData0(textECG)],
        type: 'line'
    }], layout_5);
    Plotly.newPlot(graphDiv_Log_6, [{
        y: [getData0(textECG)],
        type: 'line'
    }], layout_6);


    Plotly.newPlot(graphDiv_Log_7, [{
        y: [getData0(textECG)],
        type: 'line'
    }], layout_7);


    Plotly.newPlot(graphDiv_Log_8, [{
        y: [getData0(textECG)],
        type: 'line'
    }], layout_8);

    Plotly.newPlot(graphDiv_Log_9, [{
        y: [getData0(textECG)],
        type: 'line'
    }], layout_9);

    Plotly.newPlot(graphDiv_Log_10, [{
        y: [getData0(textECG)],
        type: 'line'
    }], layout_10);

    Plotly.newPlot(graphDiv_Log_11, [{
        y: [getData0(textECG)],
        type: 'line'
    }], layout_11);

    Plotly.newPlot(graphDiv_Log_12, [{
        y: [getData0(textECG)],
        type: 'line'
    }], layout_12);



    var cnt = 0;
    var count = 0;
    var numOfSet = 3;
    var rangeOfButton = 3;
    var rangeOfTop = 0.5 + (numOfSet * 2);
    //var loop = setInterval(plotinterval, 20);


    function plotinterval_1() {
        Plotly.extendTraces(graphDiv_Log_1, {
            y: [
                [getData(textECG_firebase[count].AVF, 0)]
            ]
        }, [0]);

        cnt = cnt + 1;
        // if (cnt > 200) {
        Plotly.relayout(graphDiv_Log_1, {
            xaxis: {
                range: [0, 250]
            },
            yaxis: {
                range: [-2, 4]
            }
        });
        // }
        count++;
        if (count >= textECG_firebase.length) {
            count = 0;
            clearInterval(loop_1);
        }
    }

    function plotinterval_2() {
        Plotly.extendTraces(graphDiv_Log_2, {
            y: [
                [getData(textECG_firebase[count].II, 0)]
            ]
        }, [0]);

        cnt = cnt + 1;
        Plotly.relayout(graphDiv_Log_2, {
            xaxis: {
                range: [0, 250]
            },
            yaxis: {
                range: [2, 5]
            }
        });
        count++;
        if (count >= textECG_firebase.length) {
            count = 0;
            clearInterval(loop_2);
        }
    }

    function plotinterval_3() {
        Plotly.extendTraces(graphDiv_Log_3, {
            y: [
                [getData(textECG_firebase[count].I, 0)]
            ]
        }, [0]);

        cnt = cnt + 1;
        // if (cnt > 200) {
        Plotly.relayout(graphDiv_Log_3, {
            xaxis: {
                range: [0, 250]
            },
            yaxis: {
                range: [2, 5]
            }
        });
        // }
        count++;
        if (count >= textECG_firebase.length) {
            count = 0;
            clearInterval(loop_3);
        }
    }

    function plotinterval_4() {
        Plotly.extendTraces(graphDiv_Log_4, {
            y: [
                [getData(textECG_firebase[count].I, 0)]
            ]
        }, [0]);

        cnt = cnt + 1;
        // if (cnt > 200) {
        Plotly.relayout(graphDiv_Log_4, {
            xaxis: {
                range: [0, 250]
            },
            yaxis: {
                range: [2, 5]
            }
        });
        // }
        count++;
        if (count >= textECG_firebase.length) {
            count = 0;
            clearInterval(loop_4);
        }
    }

    function plotinterval_5() {
        Plotly.extendTraces(graphDiv_Log_5, {
            y: [
                [getData(textECG_firebase[count].I, 0)]
            ]
        }, [0]);

        cnt = cnt + 1;
        // if (cnt > 200) {
        Plotly.relayout(graphDiv_Log_5, {
            xaxis: {
                range: [0, 250]
            },
            yaxis: {
                range: [2, 5]
            }
        });
        // }
        count++;
        if (count >= textECG_firebase.length) {
            count = 0;
            clearInterval(loop_5);
        }
    }

    function plotinterval_6() {
        Plotly.extendTraces(graphDiv_Log_6, {
            y: [
                [getData(textECG_firebase[count].I, 0)]
            ]
        }, [0]);

        cnt = cnt + 1;
        // if (cnt > 200) {
        Plotly.relayout(graphDiv_Log_6, {
            xaxis: {
                range: [0, 250]
            },
            yaxis: {
                range: [2, 5]
            }
        });
        // }
        count++;
        if (count >= textECG_firebase.length) {
            count = 0;
            clearInterval(loop_6);
        }
    }
</script>>
@stop