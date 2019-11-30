@extends('layouts.app')
@section('content')
<div class="wrapper">
    <div class="one bg-light">
        <table class="table table-sm table-hover text-md-center">
            <thead>
                <tr>
                    <th scope="col">DATA USER</th>
                </tr>
            </thead>
            <tbody>
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
            <div id="graphDiv"></div>
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
            // if (cnt > 200) {
            Plotly.relayout(graphDiv, {
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
    </script>
    </center>
</div>
</div>
@stop