<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/EseeG-shortCut.png" />
    <title>EseeG - ecg chart</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }
    </style>
    <div class="topnav">
        <a class="active" href="/">ECG</a>
        <a href="/list-node">All node</a>
        <a href="/contact">Contact</a>
        <a href="/about">About</a>
    </div>
</head>

<body>
    <!-- <script src="./../../storage/plotly.min.js"></script> -->
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <center>
        <div class="container">
            <div class="col-md-8">
                <div class="card">
                    <div class="col-md-4">
                        <div class="navbar">
                            <span>Real-Time Chart with Plotly.js</span>
                        </div>
                        <div id="graphDiv"></div>
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
                                console.log("test[count] : ", textECG.y[count]);
                                Plotly.extendTraces(graphDiv, {
                                    y: [
                                        [getData(textECG.y[count], 0)],
                                        [getData(textECG2.y[count], 2)]
                                    ]
                                }, [0, 1]);

                                cnt = cnt + 1;
                                if (cnt > 200) {
                                    Plotly.relayout(graphDiv, {
                                        xaxis: {
                                            range: [cnt - 200, cnt]
                                        },
                                        yaxis: {
                                            range: [rangeOfButton, rangeOfTop]
                                        }
                                    });
                                }
                                count++;
                                if (count >= 50) {
                                    count = 0;
                                }
                            }, 20);
                        </script>
                    </div>
                    <div id="graphDiv3"></div>
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
                        var data = [textECG];

                        var layout = {
                            title: "Electrocardiography",
                            autosize: false,
                            width: 1000,
                            height: 500,
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

                        Plotly.newPlot(graphDiv3, data, layout);
                    </script>
                </div>
            </div>
        </div>
        </div>
    </center>
</body>

</html>