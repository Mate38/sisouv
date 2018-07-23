@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
    @yield('css')
@stop

@section('body_class', 'login-page')

@section('body')
    <div class="content">
        <section style="margin-bottom: 3%;">
            <div class="row">
                <div class="col-md-5 vcenter">
                    <img src="{{url('app_icon.png')}}" alt="denuncia" class="pull-right rounded mx-auto d-block" style="width: 30%; height: 30%;">
                </div>
                <div class="col-md-5 vcenter">
                    <h1 class="titles  align-middle">Ouvidoria de Videira</h1>
                </div>
            </div>
            <h3 class="titles text-center">Tipo da manifestação</h3>
        </section>
        
        <section class="center-block"  style="width: 80%;">
            <div class="row">
                <div class="col-sm-6 col-md-2 col-lg-2 col-xs-6">                    
                    <a href="#" class="btn btn-app bg-red" style="width: 100%; height: 20%;">
                        <img src="{{url('/img/megaphone.png')}}" alt="Denúncia">
                        <span class="info-box-number name-tipo">Denúncia</span>                       
                    </a>    
                </div>
                <div class="col-sm-6 col-md-2 col-lg-2 col-xs-6">                    
                    <a href="#" class="btn btn-app bg-orange" style="width: 100%; height: 20%;">
                        <img src="{{url('/img/like.png')}}" alt="Elogio">
                        <span class="info-box-number name-tipo">Elogio</span>                       
                    </a>    
                </div>
                <div class="col-sm-6 col-md-2 col-lg-2 col-xs-6">                    
                    <a href="#" class="btn btn-app bg-green" style="width: 100%; height: 20%;">
                        <img src="{{url('/img/informacao.png')}}" alt="Informação">
                        <span class="info-box-number name-tipo">Informação</span>                       
                    </a>    
                </div>
                <div class="col-sm-6 col-md-2 col-lg-2 col-xs-6">                    
                    <a href="#" class="btn btn-app bg-blue" style="width: 100%; height: 20%;">
                        <img src="{{url('/img/dislike.png')}}" alt="Reclamação">
                        <span class="info-box-number name-tipo">Reclamação</span>                       
                    </a>    
                </div>
                <div class="col-sm-6 col-md-2 col-lg-2 col-xs-6">                    
                    <a href="#" class="btn btn-app bg-aqua" style="width: 100%; height: 20%;">
                        <img src="{{url('/img/solicitacao.png')}}" alt="Solicitação">
                        <span class="info-box-number name-tipo">Solicitação</span>                       
                    </a>    
                </div>
                <div class="col-sm-6 col-md-2 col-lg-2 col-xs-6">                    
                    <a href="#" class="btn btn-app bg-purple" style="width: 100%; height: 20%;">
                        <img src="{{url('/img/idea.png')}}" alt="Sugestão">
                        <span class="info-box-number name-tipo">Sugestão</span>                       
                    </a>    
                </div>
            </div>
        </section>        
    </div>
@stop

@section('adminlte_js')
    @yield('js')
@stop