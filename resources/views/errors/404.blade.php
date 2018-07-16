@extends('adminlte::page')

@section('title')

@section('content_header')
@stop

@section('content')
  <div class="content-wrapper">
    <section class="content">
      <div class="error-page" style="margin-top: 17%; margin-right: 18%;">
        <h2 class="headline text-yellow"> 404</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Página não encontrada.</h3>

          <p>
            Não conseguimos encontrar a página solicitada. Confira o endereço digitado. Caso o problema persista entre em contato com o suporte. <br>
           
            <small>
                Contatos: <br>
                (49) 3566-9013 <br>
                (49) 3566-9042 <br>
                ti.hernandez@videira.sc.gov.br <br><br>
            </small>
            Para retornar a página principal clique no botão a seguir
          </p>

          <a href="/home" class="btn bg-blue"><i class="fa-tables fa fa-chevron-left" aria-hidden="true"></i> Voltar</a>          

        </div>
      </div>
    </section>
  </div>
@stop

@section('css')
    
@stop

@section('js')
@stop