@extends('layouts.app')

@section('content')

<div class="site-blocks-cover" style="background-image: url('images/bg_2.jpg');">
    <div class="nav nav-pills nav-justified">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ action('MenuController@toHome')}}"><img src="images/icon_advice1.png" width="300px" hight="200px"></a>
        </div>
    </div>
    <div class="container">

        <div class="wrapper">

            <div class="one bg-dark">
                <table class="table table-sm table-hover text-md-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < count($users); $i++) <tr>
                            <td>{{$users[$i]->id}}</td>
                            <td>{{$users[$i]->name}}</td>
                            <td>{{$users[$i]->email}}</td>
                            <td>
                                <a href="#">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('advice') }}
                                    </button>
                                </a>
                            </td>
                            @endfor


                    </tbody>
                </table>
            </div>
            <div class="two bg-light">
                <!-- detail -->
            </div>
        </div>
    </div>
</div>
@stop