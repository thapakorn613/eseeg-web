@extends('layouts.app')
@section('content')


<div class="site-blocks-cover" style="background-image: url('images/bg_2.jpg');">
    <div class="nav nav-pills nav-justified">
        <div class="d-flex align-items-center justify-content-between">
            <a href="home"><img src="images/icon_patient1.png" width="300px" hight="200px"></a>
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
                @yield('realtimeChart')
            </div>
        </div>
    </div>
</div>
@stop