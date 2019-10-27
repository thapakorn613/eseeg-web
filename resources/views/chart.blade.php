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
        <div class="container">
            <div class="col-md-8">
                <div class="card">
                    <div class="col-md-4">
                        <div class="navbar">
                            <span>Real-Time Chart with Plotly.js</span>
                        </div>
                        <div class="wrapper">
                            <div id="chart">
                                <script>
                                    function getData() {
                                        // return num;
                                        return Math.random(); 
                                    } 
                                    Plotly.plot('chart',[{
                                        y:[getData()],
                                        type:'line'
                                    }]);
                                    
                                    var cnt = 0;

                                    setInterval(function(){
                                        // Plotly.extendTraces('chart', {y: [getData()]}, [0, 1], 10)
                                        Plotly.extendTraces('chart',{ y:[[getData()]]}, [0]);
                                        cnt = cnt + 1;
                                        if(cnt > 250) {
                                            Plotly.relayout('chart',{
                                                xaxis: {
                                                    range: [cnt-250,cnt]
                                                },
                                                yaxis: {
                                                    range: [-1,1]
                                                }
                                            });
                                        }
                                    },40);
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
