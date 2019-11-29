<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="images/EseeG-shortCut.png" />

    <title>ECG PLATFORM &mdash; Colorlib Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body >
      <div class="site-navbar py-2">
        <div class="search-wrap">
          <div class="container">
            <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
            <form action="#" method="post">
              <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
            </form>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-between">
            <a href="/home" ><img src ="images/logo.png" width="150px" hight="200px"></a>
            <div class="icons">
              <div class="main-nav d-none d-lg-block">
              <nav class="site-navigation text-right text-md-center" role="positive">
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active"><a style="color:white" href="index.html">Home</a></li>
                  <li><a style="color:white" href="shop.html">Services</a></li>
                  <li><a style="color:white" href="about.html">About</a></li>
                  <li><a style="color:white" href="contact.html">Contact</a></li> 
                  <li><a href="#" class="icons-btn d-inline-block js-search-open">
                  <span class="icon-search"><img src ="images/btn_search.png" width="20px" hight="20px"></span>
                  </a>
                  </li>
                  <li><a href="#" class="icons-btn d-inline-block js-search-open">
                  <span class="icon-search"><img src ="images/user.png" width="25px" hight="25px" class="icon-search"></span>
                  </a></li>
                </ul>
              
              </nav>
              </div>
            </div>
          </div>
        </div>

          <div class="site-blocks-cover" style="background-image: url('images/bg_2.jpg');">
            <div class="nav nav-pills nav-justified">
              <div class="d-flex align-items-center justify-content-between">
                <a href="index.html" ><img src ="images/icon_patient1.png" width="300px" hight="200px"></a>
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
                </thead>
                  <tbody>
                  </tbody>
               </table>
              </div>
              <div class="two bg-light"> 
              <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
              <div class="navbar text-center">
                            <span>Real-Time Chart with Plotly.js</span>
                        </div>
                <div class="container">
        
                <div class="card">
                    
                        
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

                       

                        Plotly.newPlot(graphDiv3, data, layout);
                    </script>
                </div>
            </div>
        </div>
      
             
              
            </div>
            </div>
          </div>
                   
          

      

  

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>