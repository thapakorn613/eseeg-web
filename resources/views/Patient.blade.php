@extends('layouts.app')

@section('content')
<div class="site-blocks-cover" style="background-image: url('images/bg_2.jpg');">
    <div class="nav nav-pills nav-justified">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ action('MenuController@toHome')}}"><img src="images/icon_patient1.png" width="300px" hight="200px"></a>
        </div>
    </div>
    <div class="container">
            <div class="bg-dark">
                <table class="table table-sm table-hover text-md-center">
                    <thead>
                        <tr>
                            <th scope="col-2" style="color:white">Node</th>
                            <th scope="col-2" style="color:white">Affiliation</th>
                            <th scope="col-2" style="color:white">Name</th>
                            <th scope="col-2" style="color:white">ECG Chart</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < count($patients_EM); $i++) <tr>
                            <td style="color:white">{{$patients_EM[$i]->id}}</td>
                            <td style="color:white">{{$patients_EM[$i]->type_disease}}</td>
                            <td style="color:white">{{$patients_EM[$i]->f_name}} {{$patients_EM[$i]->f_name}}</td>
                            <td style="color:white">
                                <a href="{{ action('DoctorController@showChart_Log',$patients_EM[$i]->id)}}">
                                    <button type="submit" class="btn btn-danger btn-sm" style="color:white">
                                        {{ __('ECG Chart') }}
                                    </button>
                                </a>
                            </td>
                            @endfor
                            @for ($i = 0; $i < count($patients_NM); $i++) <tr>
                                <td style="color:white">{{$patients_NM[$i]->id}}</td>
                                <td style="color:white">{{$patients_NM[$i]->type_disease}}</td>
                                <td style="color:white">{{$patients_NM[$i]->f_name}} {{$patients_NM[$i]->l_name}}</td>
                                <td style="color:white">
                                    <a href="{{ action('DoctorController@showChart_Log_test')}}">
                                        <button type="submit" class="btn btn-warning btn-sm" style="color:white">
                                            {{ __('ECG Chart') }}
                                        </button>
                                    </a>
                                </td>
                                @endfor
                                @for ($i = 0; $i < count($patients_NT); $i++) <tr>
                                    <td style="color:white">{{$patients_NT[$i]->id}}</td>
                                    <td style="color:white">{{$patients_NT[$i]->type_disease}}</td>
                                    <td style="color:white">{{$patients_NT[$i]->f_name}} {{$patients_NT[$i]->l_name}}</td>
                                    <td style="color:white">
                                        <a href="#">
                                            <button type="submit" class="btn btn-primary btn-sm" style="color:white">
                                                {{ __('ECG Chart') }}
                                            </button>
                                        </a>
                                    </td>
                                    @endfor
                    </tbody>
                </table>
        </div>
    </div>
</div>
<script>
    function chart_1() {
        var checkBox = document.getElementById("chart_1");
        var text = document.getElementById("text");
        if (checkBox.checked == true) {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }
</script>
@endsection