@extends('prueba')
    @section('content')
        <h1>images</h1>
        <p><b>{{$id}}</b></p>
        <img src="{{asset('images/logo.png')}}" />
    @endsection