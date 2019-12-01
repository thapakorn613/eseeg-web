@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ action('MenuController@toHome')}}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
    @endif
</div>
<div class="site-wrap">
    <div class="site-blocks-cover" style="background-image: url('images/bg_2.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
                    <div class="site-block-cover-content text-center">
                        <h2 class="sub-title" style="color:DodgerBlue;">Effective Medicine, New Medicine Everyday</h2>
                        <h1 style="color:DodgerBlue;">ECG WEP</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-navbar py-2">
        <div class="site-block-cover-content text-center">
            <div class="content">
                <div class="card-body">
                    <a href="{{ action('MenuController@toHome')}}" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection