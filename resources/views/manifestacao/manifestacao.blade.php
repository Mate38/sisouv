@extends('adminlte::clean')

@section('content')
    {{-- <div class="header" style="width: 100%; margin-bottom: 2%;">
        <div class="row row-centered">
            <div class="col-sm-6 col-md-1 col-lg-1 col-xs-1" onclick="selectTipo(0)">
                <img src="{{url('app_icon.png')}}" class="img-tipo" alt="app" class="img-logo pull-right" style="width: 15%;">
            </div>

            <div class="col-sm-6 col-md-2 col-lg-2 col-xs-2">
                <h3 class="pull-left">Ouvidoria de Videira</h3> 
            </div>
        </div>
    </div> --}}
    <div class="row menu-bar">
        <div class="col-xs-2" id="div-aux"></div>
        <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 text-center">
            <img src="{{url('/app_icon.png')}}" id="logo" alt="Denúncia">
        </div>
        <div class="col-xs-0 col-sm-8 col-md-8 col-lg-8 text-center" id="div-title">
            <h1 id="title">OUVIDORIA VIDEIRA</h1>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
            <a href="/login" class="btn btn-success"><i class="fa fa-sign-in"></i> Entrar</a>
        </div>

    </div>
    {{-- <div class="row">
        <div class="menu-bottom-bar">

        </div>
        
    </div> --}}
    <div class="container">  
        <h3 class="text-center"> <small>Agradecemos seu contato. Siga os passos para realizar a manifestação.</small></h3>       
        <div class="stepwizard">
            <div class="stepwizard-row setup-box">
                <div class="stepwizard-step col-xs-3"> 
                    <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                    <p><small>Forma</small></p>
                </div>
                <div class="stepwizard-step col-xs-3"> 
                    <a href="#step-2" type="button" class="btn btn-default btn-circle">2</a>
                    <p><small>Tipo</small></p>
                </div>
                <div class="stepwizard-step col-xs-3"> 
                    <a href="#step-3" type="button" class="btn btn-default btn-circle">3</a>
                    <p><small>Cadastro</small></p>
                </div>
                <div class="stepwizard-step col-xs-3"> 
                    <a href="#step-4" type="button" class="btn btn-default btn-circle">4</a>
                    <p><small>Manifestação</small></p>
                </div>
            </div>
        </div>
        
        <form method="POST" action="/manifestacao" enctype="multipart/form-data">
            @csrf
            <input type="text" name="sigilo" id="input-forma" value="" hidden readonly>
            <input type="text" name="tipo" id="input-tipo" value="" hidden readonly>
            <input type="text" name="latitude" id="input-latitude" value="" hidden readonly>
            <input type="text" name="longitude" id="input-longitude" value="" hidden readonly>
            <div class="setup-content" id="step-1">
                <h3 class="text-center">Forma de manifestação</h3>                
                <div class="row row-centered div-forma">
                    <div class="col-sm-4 col-md-3 col-lg-3 col-xs-6 col-centered">                    
                        <a href="#" class="btn btn-forma btn-padrao" id="btn-anonimo">
                            <div class="align-left center-align">
                                <img src="{{url('/img/anonymous64.png')}}" class="img-tipo" alt="Denúncia">
                                <span class="name-tipo">Anônimo</span>       
                            </div>  
                            <div id="check-anonimo" style="display: none;">
                                <i class="fa fa-check icon-check"></i>
                            </div>              
                        </a>    
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3 col-xs-6 col-centered">                    
                        <a href="#" class="btn btn-forma btn-padrao" id="btn-cadastro">
                            <div class="align-left center-align">
                                <img src="{{url('/img/new64.png')}}" class="img-tipo" alt="Elogio">
                                <span class="name-tipo">Cadastro</span>     
                            </div> 
                            <div id="check-cadastro" style="display: none;">
                                <i class="fa fa-check icon-check"></i>
                            </div>                  
                        </a>    
                    </div>
                </div>
                <button class="btn bg-blue nextBtn pull-right" id="btn-next-forma" type="button" disabled>Próximo</button>
            </div>
            
            <div class="setup-content" id="step-2">
                <h3 class="text-center">Tipo de manifestação</h3>   
                <div class="row div-forma">
                    <div class="col-sm-6 col-md-2 col-lg-2 col-xs-6 col-centered">                    
                        <a href="#" class="btn-padrao btn bg-red1" onclick="selectTipo(0)">
                            <div class="align-left center-align">
                                <img src="{{url('/img/megaphone.png')}}" class="img-tipo" alt="Denúncia">
                                <span class="name-tipo">Denúncia</span> 
                            </div>   
                            <div id="check-denuncia" style="display: none;">
                                <i class="fa fa-check icon-check"></i>
                            </div>                    
                        </a>    
                    </div>
                    <div class="col-sm-6 col-md-2 col-lg-2 col-xs-6">                    
                        <a href="#" class="btn-padrao btn bg-orange1" onclick="selectTipo(1)">
                            <div class="align-left center-align">
                                <img src="{{url('/img/like.png')}}" class="img-tipo" alt="Elogio">
                                <span class="name-tipo">Elogio</span>   
                            </div>     
                            <div id="check-elogio" style="display: none;">
                                <i class="fa fa-check icon-check"></i>
                            </div>               
                        </a>    
                    </div>
                    <div class="col-sm-6 col-md-2 col-lg-2 col-xs-6">                    
                        <a href="#" class="btn-padrao btn bg-green1" onclick="selectTipo(2)">
                            <div class="align-left center-align">
                                <img src="{{url('/img/informacao.png')}}" class="img-tipo" alt="Informação">
                                <span class="name-tipo">Informação</span>  
                            </div>  
                            <div id="check-info" style="display: none;">
                                <i class="fa fa-check icon-check"></i>
                            </div>                   
                        </a>    
                    </div>
                    <div class="col-sm-6 col-md-2 col-lg-2 col-xs-6">                    
                        <a href="#" class="btn-padrao btn bg-blue1" onclick="selectTipo(3)">
                            <div class="align-left center-align">
                                <img src="{{url('/img/dislike.png')}}" class="img-tipo" alt="Reclamação">
                                <span class="name-tipo">Reclamação</span>        
                            </div>  
                            <div id="check-reclamacao" style="display: none;">
                                <i class="fa fa-check icon-check"></i>
                            </div>             
                        </a>    
                    </div>
                    <div class="col-sm-6 col-md-2 col-lg-2 col-xs-6">                    
                        <a href="#" class="btn-padrao btn bg-aqua1" onclick="selectTipo(4)">
                            <div class="align-left center-align">
                                <img src="{{url('/img/solicitacao.png')}}" class="img-tipo" alt="Solicitação">
                                <span class="name-tipo">Solicitação</span>   
                            </div>     
                            <div id="check-solicitacao" style="display: none;">
                                <i class="fa fa-check icon-check"></i>
                            </div>               
                        </a>    
                    </div>
                    <div class="col-sm-6 col-md-2 col-lg-2 col-xs-6" >                    
                        <a href="#" class="btn-padrao btn bg-purple1" onclick="selectTipo(5)">
                            <div class="align-left center-align">
                                <img src="{{url('/img/idea.png')}}" class="" alt="Sugestão"><br>
                                <div class="clear"><span class="name-tipo">Sugestão</span></div>
                            </div>
                            <div id="check-sugestao" style="display: none;">
                                <i class="fa fa-check icon-check"></i>
                            </div>
                        </a>    
                    </div>
                </div>
                <button class="btn bg-blue nextBtn pull-right" type="button" id="btn-next-tipo" type="button" disabled>Próximo</button>
            </div>

            <div class="row" id="tudo">
                <div class="col-md-10 col-md-offset-1">
                    <div class="box box-primary setup-content" id="step-3">
                        <div class="box-header">
                            <h3 class="box-title">Cadastro de Cidadão</h3>
                        </div>
                        <div class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group has-feedback {{ $errors->has('tipo') ? 'has-error' : '' }}">
                                    <label class="control-label col-sm-2">Tipo de Pessoa *</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="tipoPessoa" id="tipoPessoa1" value="1" onchange="verifyTipoPessoa()" checked>
                                        Fisíca 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="tipoPessoa" id="tipoPessoa2" value="2" onchange="verifyTipoPessoa()">
                                        Jurídica
                                    </label>
                                </div>

                                <div id="nomecpf" class="form-group has-feedback {{ $errors->has('cpf') ? 'has-error' : '' }}" >
                                    <label for="cpf"  class="col-sm-2 control-label">CPF *</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="" minlength="11" maxlength="14" value="{{old('cpf')}}" >
                                    </div>
                                    @if ($errors->has('cpf'))
                                        <span class="help-block">
                                            <strong>{{ $errors->get('cpf')[0] }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div id="nomecnpj" class="form-group has-feedback {{ $errors->has('cnpj') ? 'has-error' : '' }}" >
                                    <label for="cnpj" class="col-sm-2 control-label">CNPJ *</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="" minlength="18" maxlength="18" value="{{old('cnpj')}}" >
                                    </div>
                                    @if ($errors->has('cnpj'))
                                        <span class="help-block">
                                            <strong>{{ $errors->get('cnpj')[0] }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group has-feedback {{ $errors->has('nome') ? 'has-error' : '' }}">
                                    <label for="nome" class="col-sm-2 control-label">Nome completo *</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nome" id="nome" placeholder="" minlength="7" maxlength="50" value="{{old('nome')}}" required>
                                    </div>
                                    @if ($errors->has('nome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->get('nome')[0] }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <label for="email" class="col-sm-2 control-label">Email *</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="" minlength="7" maxlength="50" value="{{old('email')}}" required>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->get('email')[0] }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group has-feedback {{ $errors->has('telefone1') ? 'has-error' : '' }}">
                                    <label for="telefone1" class="col-sm-2 control-label">Telefone 1 *</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="telefone1" id="telefone1" placeholder="" minlength="10" maxlength="15" value="{{old('telefone1')}}" required>
                                    </div>
                                    @if ($errors->has('telefone1'))
                                        <span class="help-block">
                                            <strong>{{ $errors->get('telefone1')[0] }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group has-feedback {{ $errors->has('telefone2') ? 'has-error' : '' }}">
                                    <label for="telefone2" class="col-sm-2 control-label">Telefone 2  </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="telefone2" id="telefone2" placeholder="" minlength="10" maxlength="15" value="{{old('telefone2')}}">
                                    </div>
                                    @if ($errors->has('telefone2'))
                                        <span class="help-block">
                                            <strong>{{ $errors->get('telefone2')[0] }}</strong>
                                        </span>
                                    @endif
                                </div>	
                    
                                <div class="box-footer">
                                    <button class="btn bg-blue nextBtn pull-right" type="button" id="btn-submit">Próximo</button>
                                </div>
                            </div>
                        </div>
                    </div>                               
                </div>
            </div>
            
            <div class="box box-primary setup-content" id="step-4" style="display: block;">
                <div class="box-heading">
                    <h3 class="box-title">Manifestação</h3>
                </div>
                <div class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email" class="col-sm-2 control-label">Email </label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" id="email" placeholder="" minlength="7" maxlength="50" value="{{old('email')}}">
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->get('email')[0] }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('unidade') ? 'has-error' : '' }}">
                            <label for="unidade" class="col-sm-2 control-label">Unidade Resposável</label>
                            <div class="col-sm-10">
                                <select id="unidade" class="form-control" name="unidade">
                                    <option value="0">--- Selecione a unidade ---</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="local" class="col-sm-2 control-label">Localização </label>
                            <div class="col-sm-10">
                                <?php echo $map['html']; ?>
                            </div>
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('manifestacao') ? 'has-error' : '' }}">
                            <label for="manifestacao" class="col-sm-2 control-label">Manifestação *</label>
                            <div class="col-sm-10">
                                <textarea id="field" class="form-control" rows="6" name="manifestacao" maxlength="1000" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anexos" class="col-sm-2 control-label">Anexos:</label>
                            <div class="col-sm-10">
                                <input type="file" name="file" value="file" class="form-control-file" multiple>
                            </div>
                        </div>               
                        
                    </div>
                </div>
                <div class="box-body">
                    <button class="btn btn-success pull-right" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>

    {{-- <div class="row footer-content">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <a href="http://www.videira.sc.gov.br/" target="_blank" style="color: #FFF;">Prefeitura Municipal de Videira
                <p style="color: #FFF;">&copy; 2018 Equipe de Desenvolvimento do Setor de Ti.<p>
            </a>
        </div>  
    </div> --}}
@stop

@section('css')
    
@stop

@section('js')
    
    <script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
    <?php echo $map['js']; ?>
    <script>
    $(document).ready(function () {

        var navListItems = $('div.setup-box div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            var sigilo
            $('.conteudo').css('height', '100%');
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            var sigilo = localStorage.getItem('sigilo');

            //console.log(sigilo);
            if(
                ($target[0].id == 'step-3' && sigilo == 1) || 
                (($target[0].id == 'step-2' || $target[0].id == 'step-3' || $target[0].id == 'step-4') && $("#input-forma").val() == "") || 
                (($target[0].id == 'step-3' || $target[0].id == 'step-4') && $("#input-tipo").val() == "") ||
                (($target[0].id == 'step-4') && verifyCadastro())
            ){
                //console.log($target[0].id);
            }else if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-success').addClass('btn-default');
                $item.addClass('btn-success');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function () {
            var sigilo = localStorage.getItem('sigilo');
            var curStep = $(this).closest(".setup-content");
            var curStepBtn = curStep.attr("id");
            if(curStepBtn == 'step-2' && sigilo == 1){
                var nextStepWizard = $('div.setup-box div a[href="#step-3"]').parent().next().children("a");
            }else{
                var nextStepWizard = $('div.setup-box div a[href="#' + curStepBtn + '"]').parent().next().children("a");
            }
            var curInputs = curStep.find("input[type='text'],input[type='url']");
            var isValid = true;

            console.log(curStepBtn);

            $(".form-group").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                if (!curInputs[i].validity.valid) {
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-box div a.btn-success').trigger('click');
    });

    function verifyCadastro(){
        var tipo = document.querySelector('input[name="tipoPessoa"]:checked').value;
		if(tipo == 1){
            if($("#cpf").val() == ""){
                return false;
            }
        }else{
            if($("#cnpj").val() == ""){
                return false;
            }
        }
        if( $("#nome").val() == ""){
            return false;
        }
        if( $("#email").val() == ""){
            return false;
        }
        if( $("#telefone1").val() == ""){
            return false;
        }

        return true;
    }
    </script>
    <script>
        function verifyTipoPessoa(){
			var tipo = document.querySelector('input[name="tipoPessoa"]:checked').value;
			if(tipo == 1){
				$("#nomecpf").css("display","block");
				$("#nomecnpj").css("display","none");
				$("#cnpj").val("");
				$("#cpf").prop("required", true);
				$("#cnpj").prop("required", false);
				$("#cpf").prop("disabled", false);
				$("#cnpj").prop("disabled", true);
			}else if(tipo == 2){
				$("#nomecpf").css("display","none");
				$("#nomecnpj").css("display","block");
				$("#cpf").val("");
				$("#cnpj").prop("required", true);
				$("#cpf").prop("required", false);
				$("#cpf").prop("disabled", true);
				$("#cnpj").prop("disabled", false);
			}
		}

        function selectTipo(id){
            $("#input-tipo").val(id);
            $("#btn-next-tipo").prop('disabled', false);
            $(".bg-red1").css('background-color', 'rgba(221, 75, 57, 0.6)'); 
            $("#check-denuncia").css('display', 'none');
            $(".bg-orange1").css('background-color', 'rgba(255, 133, 27, 0.6)'); 
            $("#check-elogio").css('display', 'none');
            $(".bg-green1").css('background-color', 'rgba(0, 166, 90, 0.6)'); 
            $("#check-info").css('display', 'none');
            $(".bg-blue1").css('background-color', 'rgba(0, 115, 183, 0.6)'); 
            $("#check-reclamacao").css('display', 'none');
            $(".bg-aqua1").css('background-color', 'rgba(0, 192, 239, 0.6)'); 
            $("#check-solicitacao").css('display', 'none');
            $(".bg-purple1").css('background-color', 'rgba(96, 92, 168, 0.6)'); 
            $("#check-sugestao").css('display', 'none');
            if(id == 0){
                $(".bg-red1").css('background-color', 'rgba(221, 75, 57, 1)'); 
                $("#check-denuncia").css('display', 'block');
            }else if(id == 1){
                $(".bg-orange1").css('background-color', 'rgba(255, 133, 27, 1)'); 
                $("#check-elogio").css('display', 'block');
            }else if(id == 2){
                $(".bg-green1").css('background-color', 'rgba(0, 166, 90, 1)'); 
                $("#check-info").css('display', 'block');
            }else if(id == 3){
                $(".bg-blue1").css('background-color', 'rgba(0, 115, 183, 1)'); 
                $("#check-reclamacao").css('display', 'block');
            }else if(id == 4){
                $(".bg-aqua1").css('background-color', 'rgba(0, 192, 239, 1)'); 
                $("#check-solicitacao").css('display', 'block');
            }else if(id == 5){
                $(".bg-purple1").css('background-color', 'rgba(96, 92, 168, 1)'); 
                $("#check-sugestao").css('display', 'block');
            }
        }
        function verifyScreen(){
            $('.conteudo').css('height', '100%');
            if($( window ).width() <= 770){
                $(".footer-content").css('display', 'none');
                $("#div-title").css('display', 'none');
                $("#div-aux").css('display', 'block');
                
            }else if($( window ).width() >= 771){
                $(".footer-content").css('display', 'block');
                $("#div-title").css('display', 'block');
                $("#div-aux").css('display', 'none');
            }
        }
        $(document).ready(function() {
            verifyTipoPessoa();
            verifyScreen();
            $("#btn-anonimo").click(function(){
                $("#input-forma").val("1");
                $("#btn-anonimo").css('background-color', 'rgba(31, 101, 173, 1)');  
                $("#check-anonimo").css('display', 'block');
                $("#btn-cadastro").css('background-color', '#68abf9');  
                $("#check-cadastro").css('display', 'none');
                $("#btn-next-forma").prop('disabled', false);
                $("#cnpj").prop("required", false);
				$("#cpf").prop("required", false);
                $("#nome").prop("required", false);
                $("#email").prop("required", false);
                $("#telefone1").prop("required", false);
                localStorage.setItem('sigilo', 1);
            });
            $("#btn-cadastro").click(function(){
                $("#input-forma").val("0"); 
                $("#btn-cadastro").css('background-color', 'rgba(31, 101, 173, 1)');  
                $("#check-cadastro").css('display', 'block');
                $("#btn-anonimo").css('background-color', '#68abf9');  
                $("#check-anonimo").css('display', 'none');
                $("#btn-next-forma").prop('disabled', false);
                $("#cnpj").prop("required", true);
				$("#cpf").prop("required", true);
                $("#nome").prop("required", true);
                $("#email").prop("required", true);
                $("#telefone1").prop("required", true);
                localStorage.setItem('sigilo', 0);
            });
            
        });
        $( window ).resize(function() {
            verifyScreen();
        });
    </script>
    {{-- Mascara de conteudo --}}
	<script>
        jQuery(function ($) {
            $("#telefone1").mask("(99) 9999-99999");
            $("#telefone2").mask("(99) 9999-99999");
            $("#cpf").mask('000.000.000-00', {reverse: true});
            $("#cnpj").mask('00.000.000/0000-00', {reverse: true});
        });
    </script>
@stop