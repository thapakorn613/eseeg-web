@extends('layouts.app')

@section('content')

<div class="site-blocks-cover" style="background-image: url('images/bg_2.jpg');">
    <div class="nav nav-pills nav-justified">
        <div class="d-flex align-items-center justify-content-between">
            <a href="home"><img src="images/icon_emer1.png" width="300px" hight="200px"></a>
        </div>
    </div>
    <div class="container">
        <div class="wrapper">
            <div class="one bg-dark">
                <table class="table table-sm table-hover text-md-center">
                    <thead>
                        <tr>
                            <th scope="col">Node</th>
                            <th scope="col">Affiliation</th>
                            <th scope="col">Name</th>
                            <th scope="col-3">ECG Chart</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < count($patient); $i++) <tr>
                            <td>{{$patient[$i]->id}}</td>
                            <td>{{$patient[$i]->type_disease}}</td>
                            <td>{{$patient[$i]->f_name}} {{$patient[$i]->l_name}}</td>
                            <td>
                                <a href="/ecg-chart">
                                    <button type="submit" class="btn btn-danger">
                                        {{ __('ecg chart') }}
                                    </button>
                                </a>
                            </td>
                            @endfor

                    </tbody>
                </table>
            </div>
            <div class="two bg-light">

            </div>

        </div>
    </div>
</div>
@endsection