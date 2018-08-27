@extends('adminlte::master')

@section('body')
    {{-- <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper"> --}}
            {{-- @if(config('adminlte.layout') == 'top-nav')
            <div class="container">
            @endif

            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('content_header')
            </section> --}}

            <!-- Main content -->
            <section class="conteudo">

                @yield('content')

            </section>
            {{-- <!-- /.content -->
            @if(config('adminlte.layout') == 'top-nav')
            </div>
            <!-- /.container -->
            @endif --}}
        {{-- </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper --> --}}
@stop

@yield('css')

@yield('js')
