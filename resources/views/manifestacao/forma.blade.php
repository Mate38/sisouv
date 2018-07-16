@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
    @yield('css')
@stop

@section('body_class', 'login-page')

@section('body')
    <div class="login-box">

        <a href="{{ url('cadastro') }}" class="btn btn-block btn-primary btn-lg" style="width: 100%;">Utilizar Cadastro</a>
        </br>
        <a href="{{ url('manifestacao') }}" class="btn btn-block btn-primary btn-lg" style="width: 100%;">Manifestação Anônima</a>

    </div>
@stop

@section('adminlte_js')
    @yield('js')
@stop