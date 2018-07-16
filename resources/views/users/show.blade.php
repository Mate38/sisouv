@extends('adminlte::page')

@section('title')

@section('content_header')
	<p class="header-title">Visualização de Usuários</p>
@stop

@section('content')

    <div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Dados do usuário</h3>
				</div>
				
				<form class="form-horizontal" >   

					<div class="box-body">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tipo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{$tipos->find($user->tipo_id)->nome}}" readonly>
                            </div>
                        </div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Usuário</label>
							<div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $user->name }}" readonly>
							</div>
						</div>
                        
                        <div class="form-group">
							<label class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $user->email }}" readonly>
							</div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Cidadão</label>
							<div class="col-sm-10">
                                <input type="text" class="form-control" value="{{$cidadaos->find($user->cidadao_id)->nome}}" readonly>
							</div>
						</div>
					
					</div>

					<div class="box-footer">
                        <a href="/usuarios" type="button" class="btn btn-primary pull-left"> <i class="fa-back fa fa-chevron-left" aria-hidden="true"></i>Voltar</a>                        

						<a href="/cidadaos/{{$user->cidadao_id}}" type="button" class="btn btn-primary pull-right"><i class="fa-tables fa fa-user" aria-hidden="true"></i> Visualizar página do cidadão</a>                        
					</div>

				</form>
			</div>
		</div>
	</div>

@stop

@section('css')
    
@stop

@section('js')

@stop

