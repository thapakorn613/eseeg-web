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
                        <script src="https://d3js.org/d3-time.v1.min.js"></script>
                        <script src="https://d3js.org/d3-time-format.v2.min.js"></script>
                        <br>
                        <br>
                        <div id="myDiv"></div>
                    </div>
                </div>
            </div>
        </div>
    </center>
</body>

<script>
    var formatTime = d3.timeFormat("%X");

    var xData = ['22:23:00','22:24:00','22:25:00','22:26:00','22:27:00','22:28:00','22:29:00','22:30:00','22:31:00','22:32:00','22:33:00'];

    var yData = [74, 82, 80, 74, 73, 72, 74, 70, 70, 66, 66, 69];

    var colors = 'rgba(250,67,67,150)';

    var lineSize = 2;

    var labels = ['Television'];

    var data = [];

    // for (var i = 0; i < xData.length; i++) {
        var result = {
            x: xData,
            y: yData,
            type: 'scatter',
            mode: 'lines',
            line: {
                color: colors,
                width: lineSize
            }
        };
        var result2 = {
            x: [xData[0], xData[11]],
            y: [yData[0], yData[11]],
            type: 'scatter',
            mode: 'markers',
            marker: {
                color: colors,
                size: 12
            }
        };
        data.push(result, result2);
    // }

    var layout = {
        showlegend: false,
        height: 600,
        width: 600,
        xaxis: {
            showline: true,
            showgrid: false,
            showticklabels: true,
            linecolor: 'rgb(204,204,204)',
            linewidth: 2,
            autotick: false,
            ticks: 'outside',
            tickcolor: 'rgb(204,204,204)',
            tickwidth: 2,
            ticklen: 5,
            tickfont: {
                family: 'Arial',
                size: 12,
                color: 'rgb(82, 82, 82)'
            }
        },
        yaxis: {
            showgrid: false,
            zeroline: false,
            showline: false,
            showticklabels: false
        },
        autosize: false,
        margin: {
            autoexpand: false,
            l: 100,
            r: 20,
            t: 100
        },
        annotations: [{
                xref: 'paper',
                yref: 'paper',
                x: 0.0,
                y: 1.05,
                xanchor: 'left',
                yanchor: 'bottom',
                text: 'Main Source for News',
                font: {
                    family: 'Arial',
                    size: 30,
                    color: 'rgb(37,37,37)'
                },
                showarrow: false
            },
            {
                xref: 'paper',
                yref: 'paper',
                x: 0.5,
                y: -0.1,
                xanchor: 'center',
                yanchor: 'top',
                text: 'Source: Pew Research Center & Storytelling with data',
                showarrow: false,
                font: {
                    family: 'Arial',
                    size: 12,
                    color: 'rgb(150,150,150)'
                }
            }
        ]
    };

    // for (var i = 0; i < xData.length; i++) {
        var result = {
            xref: 'paper',
            x: 0.05,
            y: yData[0],
            xanchor: 'right',
            yanchor: 'middle',
            text: labels[0] + ' ' + yData[0] + '%',
            showarrow: false,
            font: {
                family: 'Arial',
                size: 16,
                color: 'black'
            }
        };
        var result2 = {
            xref: 'paper',
            x: 0.95,
            y: yData[11],
            xanchor: 'left',
            yanchor: 'middle',
            text: yData[11] + '%',
            font: {
                family: 'Arial',
                size: 16,
                color: 'black'
            },
            showarrow: false
        };

        layout.annotations.push(result, result2);
    // }

    Plotly.newPlot('myDiv', data, layout);
</script>