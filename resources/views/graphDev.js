

var trace1 = {
    x: [1, 2, 3, 4],
    y: [4, 6, 3, 5],
    type: "scatter"
};

var data = [trace1];

var layout = {
    title: "Graph Title"
};

Plotly.newPlot(graphDiv, data, layout);

Plotly.addTraces(graphDiv, { x: [1, 2, 3, 4], y: [12, 3, 14, 4] });
