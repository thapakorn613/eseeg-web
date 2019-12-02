<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- <script src="./../../storage/plotly.min.js"></script> -->
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<center>
    <div class="page-content" style="padding-top: 60px;" align="center">
        <!-- Your content goes here -->
    </div>
    <div class="container">
        <div class="col-md-8">
            <div class="card">
                <div class="col-md-4">
                    <div class="navbar">
                        <span>Real-Time Chart with Plotly.js</span>
                        <select id="select_y" onchange="getmonth()"></select>
                        <select id="select_m" onchange="getday()"></select>
                        <select id="select_d" onchange="gettime()"> </select>
                        <select id="select_t" onchange="pasttime()"> </select>
                        <select id="past_time" onchange="pasttime()">
                            <option value=5>5 Sec</option>
                            <option value=10>10 Sec</option>
                            <option value="all">All</option>
                        </select>
                        <button onclick="gettext()">Submit</button>
                    </div>
                    <div id="graphDiv"></div>
                </div>
            </div>
        </div>
    </div>
</center>
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

    var layout = {
        title: "Electrocardiography",
        autosize: false,
        width: 600,
        height: 200,
        margin: {
            l: 50,
            r: 50,
            b: 30,
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
    }], layout);


    var cnt = 0;
    var count = 0;
    var numOfSet = 3;
    var rangeOfButton = 3;
    var rangeOfTop = 0.5 + (numOfSet * 2);
    var loop;
    //var loop = setInterval(plotinterval, 20);
    function plotinterval() {
        //console.log("test[counttt] : ", count);
        //console.log(textECG_firebase[count].I+"+"+textECG_firebase[count].II)
        Plotly.extendTraces(graphDiv, {
            y: [
                [getData(textECG_firebase[count].I, 0)]
            ]
        }, [0]);

        cnt = cnt + 1;
        // if (cnt > 200) {
        Plotly.relayout(graphDiv, {
            xaxis: {
                range: [0, time_select_20ms]
            },
            yaxis: {
                range: [2, 5]
            }
        });
        // }
        count++;
        console.log(count + ":" + time_select_20ms);
        if (count >= time_select_20ms) {
            count = 0;
            clearInterval(loop);
        }
    }
</script>
<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>

<!--Configure firebase-->
<script>
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
                console.log(year_firebase[i]);
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
                loop = setInterval(plotinterval, 20);
                //$('#ex-table').append(content);
            }
        });
    };
</script>
@stop
