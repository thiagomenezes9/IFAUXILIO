@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Questionário Socioeconômico
@stop

@section('contentheader_title')

@stop

@section('contentheader_description')
    Questionário Socioeconômico
@stop


@section('main-content')



    @if (Session::get('fail'))
        <div class="box alert alert-danger">
            <div class="box-header with-border">
                <h3 class="box-title text-gray">Atenção</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool"
                            data-widget="remove" data-toggle="tooltip" title="Fechar">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
            </div>
        </div>
    @endif


    <div class="container-fluid spark-screen">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Questionário Socioeconômico</h3>
                        {{--<div align="right"><a href="{{route('posts.create')}}" class="btn btn-success">Novo</a></div>--}}
                    </div>

                    <div class="box-body">

                        <div role="tabpanel">

                            <ul class="nav nav-tabs" role="tablist">


                                <li role="presentation" class="active"><a href="#section1" aria-controls="section1" data-toggle="tab" role="tab">Parte 1 </a></li>
                                <li role="presentation"><a href="#section2" aria-controls="section2" data-toggle="tab" role="tab">Parte 2 </a></li>
                                <li role="presentation"><a href="#section3" aria-controls="section3" data-toggle="tab" role="tab">Parte 3 </a></li>
                                <li role="presentation"><a href="#section4" aria-controls="section4" data-toggle="tab" role="tab">Parte 4 </a></li>
                                <li role="presentation"><a href="#section5" aria-controls="section5" data-toggle="tab" role="tab">Parte 5 </a></li>

                            </ul>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="section1">

                                    <h3>Resposta 01</h3>
                                    nome
                                    data nascimento
                                    estado civil
                                    sexo
                                    cor
                                    cpf
                                    rg
                                    banco
                                    agencia
                                    conta


                                    logradouro
                                    numero
                                    complemento
                                    cep
                                    bairro
                                    estado
                                    cidade


                                    ddd
                                    numero
                                    email


                                    curso
                                    matricula
                                    turno
                                    ano de ingresso
                                    periodo





                                </div>

                                <div role="tabpanel" class="tab-pane" id="section2">

                                    <h3>Resposta 02</h3>


                                    possui necessidade
                                    no periodo anterior
                                    cursou maior parte do ensino fundamental
                                    cursou maior parte do ensino medio
                                    ja cursou faculdade
                                    atividades q pratica
                                    le com q frequencia
                                    utiliza a biblioteca com qual frequencia
                                    meio de comunicação tem acesso
                                    cursos q realiza ou realizou

                                    situação financeira da familia

                                    qual situação em relação a trabalho




                                </div>

                                <div role="tabpanel" class="tab-pane" id="section3">

                                    <h3>Resposta 03</h3>

                                    pais são

                                    indentificação do pai
                                        nome
                                        endereço
                                        idade
                                        telefone
                                        profisão
                                        renda mensal
                                        atividade q exerce
                                        local de trabalho
                                        estado
                                        cidade

                                    identificação da mae

                                    identificação do CÔNJUGE



                                </div>


                                <div role="tabpanel" class="tab-pane" id="section4">

                                    <h3>Resposta 04</h3>

                                   casa da familia e
                                    Na cidade em que o câmpus escolar está localizado, como você mora?
                                    transporte ate a escola
                                    familia recebe beneficil do governo
                                    saude procura
                                    despesas da familia
                                    despesas do estudante
                                    bens q a familia possui


                                </div>

                                <div role="tabpanel" class="tab-pane" id="section5">

                                    <h3>Resposta 05</h3>

                                    pessoas q mora com vc

                                    pessoas q tem doença

                                    quantos faz faculdade

                                    pq precisa da bolsa




                                </div>


                            </div>



                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection




@section('scriptlocal')

@endsection