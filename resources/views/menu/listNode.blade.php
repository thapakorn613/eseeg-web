<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/EseeG-shortCut.png" />
        <title>EseeG - List Node</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.1.0/dist/css/bootstrap.min.css" >

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
        <div class="row bg-light py-3">
            <div class="col text-center">
            All Node List
            </div>
        </div>
        <table class="table table-sm table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Node</th>
            <th scope="col">Affiliation</th>
            <th scope="col">Name</th>
            <th scope="col">ECG Chart</th>
            <th scope="col">Detail</th>            
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>cmu-0101 </td>
                <td>กำลังส่งไปที่ รพ เชียงใหม่ </td>
                <td>นาย ประยุทธ์ อังคารโอชา</td>
                <td>
                    <a href="/ecg-chart">
                        <button type="submit" class="btn btn-success">
                            {{ __('ecg chart') }}
                        </button>
                    </a>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        {{ __('detail') }}
                    </button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>cmu-0102 </td>
                <td>กำลังส่งไปที่ รพ เชียงใหม่ </td>
                <td>นาย ประวิตย์ วงค์สุพรรณ</td>
                <td>
                    <a href="/ecg-chart">
                        <button type="submit" class="btn btn-success">
                            {{ __('ecg chart') }}
                        </button>
                    </a>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        {{ __('detail') }}
                    </button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>cmu-0103 </td>
                <td>กำลังส่งไปที่ รพ เชียงใหม่ </td>
                <td>นาย สมคิด จาตุสีพรรคพรรค</td>
                <td>
                    <a href="/ecg-chart">
                        <button type="submit" class="btn btn-success">
                            {{ __('ecg chart') }}
                        </button>
                    </a>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        {{ __('detail') }}
                    </button>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>cmu-0104 </td>
                <td>กำลังส่งไปที่ รพ เชียงใหม่ </td>
                <td>นาย วิษณุ กล้วยเป็นเครือ</td>
                <td>
                    <a href="/ecg-chart">
                        <button type="submit" class="btn btn-success">
                            {{ __('ecg chart') }}
                        </button>
                    </a>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        {{ __('detail') }}
                    </button>
                </td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>cmu-0105 </td>
                <td>กำลังส่งไปที่ รพ เชียงใหม่ </td>
                <td>นาย อนุทิน จานวีรคูณ</td>
                <td>
                    <a href="/ecg-chart">
                        <button type="submit" class="btn btn-success">
                            {{ __('ecg chart') }}
                        </button>
                    </a>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        {{ __('detail') }}
                    </button>
                </td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>cmu-0106 </td>
                <td>กำลังส่งไปที่ รพ เชียงใหม่ </td>
                <td>นาย อุซึมากิ นารูโตะ</td>
                <td>
                    <a href="/ecg-chart">
                        <button type="submit" class="btn btn-success">
                            {{ __('ecg chart') }}
                        </button>
                    </a>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        {{ __('detail') }}
                    </button>
                </td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>cmu-0107 </td>
                <td>โรงพยาบาลมหาราชนครเชียงใหม่ ห้อง ICU2</td>
                <td>นาย อุจิวะ ซาสึเกะ</td>
                <td>
                    <a href="/ecg-chart">
                        <button type="submit" class="btn btn-success">
                            {{ __('ecg chart') }}
                        </button>
                    </a>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        {{ __('detail') }}
                    </button>
                </td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>cmu-0108 </td>
                <td>โรงพยาบาลมหาราชนครเชียงใหม่ ห้อง ICU1</td>
                <td>นาย ฮารุโนะ ซากุระ</td>
                <td>
                    <a href="/ecg-chart">
                        <button type="submit" class="btn btn-success">
                            {{ __('ecg chart') }}
                        </button>
                    </a>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        {{ __('detail') }}
                    </button>
                </td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td>cmu-0109 </td>
                <td>โรงพยาบาลมหาราชนครเชียงใหม่ ห้อง ICU1</td>
                <td>นาย ฮาตาเกะ คาคาชิ</td>
                <td>
                    <a href="/ecg-chart">
                        <button type="submit" class="btn btn-success">
                            {{ __('ecg chart') }}
                        </button>
                    </a>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        {{ __('detail') }}
                    </button>
                </td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td>cmu-0110 </td>
                <td>โรงพยาบาลมหาราชนครเชียงใหม่ ห้อง ICU2</td>
                <td>นาย ซาอิ</td>
                <td>
                    <a href="/ecg-chart">
                        <button type="submit" class="btn btn-success">
                            {{ __('ecg chart') }}
                        </button>
                    </a>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        {{ __('detail') }}
                    </button>
                </td>
            </tr>
            <tr>
                <th scope="row">11</th>
                <td>cmu-0111 </td>
                <td>โรงพยาบาลมหาราชนครเชียงใหม่ ห้อง ICU2</td>
                <td>นาย ยามาโตะ</td>
                <td>
                    <a href="/ecg-chart">
                        <button type="submit" class="btn btn-success">
                            {{ __('ecg chart') }}
                        </button>
                    </a>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        {{ __('detail') }}
                    </button>
                </td>
            </tr>
            <tr>
                <th scope="row">12</th>
                <td>cmu-0112 </td>
                <td>โรงพยาบาลมหาราชนครเชียงใหม่ ห้อง ICU1</td>
                <td>นาย อุซึมากิ โบรูโตะ</td>
                <td>
                    <a href="/ecg-chart">
                        <button type="submit" class="btn btn-success">
                            {{ __('ecg chart') }}
                        </button>
                    </a>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        {{ __('detail') }}
                    </button>
                </td>
            </tr>
            <tr>
                <th scope="row">13</th>
                <td>cmu-0113 </td>
                <td>โรงพยาบาลมหาราชนครเชียงใหม่ ห้อง R492</td>
                <td>นาย มิตสึกิ</td>
                <td>
                    <a href="/ecg-chart">
                        <button type="submit" class="btn btn-success">
                            {{ __('ecg chart') }}
                        </button>
                    </a>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        {{ __('detail') }}
                    </button>
                </td>
            </tr>
            <tr>
                <th scope="row">14</th>
                <td>cmu-0114 </td>
                <td>โรงพยาบาลมหาราชนครเชียงใหม่ ห้อง R491</td>
                <td>นาย ซารุโทบิ โคโนฮามารุ</td>
                <td>
                    <a href="/ecg-chart">
                        <button type="submit" class="btn btn-success">
                            {{ __('ecg chart') }}
                        </button>
                    </a>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        {{ __('detail') }}
                    </button>
                </td>
            </tr>
            <tr>
                <th scope="row">15</th>
                <td>cmu-0115 </td>
                <td>โรงพยาบาลมหาราชนครเชียงใหม่ ห้อง R405</td>
                <td>นาย โอโรจิมารุ</td>
                <td>
                    <a href="/ecg-chart">
                        <button type="submit" class="btn btn-success">
                            {{ __('ecg chart') }}
                        </button>
                    </a>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        {{ __('detail') }}
                    </button>
                </td>
            </tr>
        </tbody>
        </table>
    </body>
</html>
