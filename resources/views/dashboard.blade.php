@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection





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

    @if (Session::get('success'))
        <div class="box success alert-success">
            <div class="box-header with-border">
                <h3 class="box-title text-gray">PARABENS</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool"
                            data-widget="remove" data-toggle="tooltip" title="Fechar">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="success success">{{ Session::get('success') }}</div>
            </div>
        </div>
    @endif





    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                {{--@if((Auth::user()->ativo))--}}

                {{--<h1>Bem Vindo</h1>--}}

                {{--@else--}}

                <div class="row">

                    <div class="panel panel-default">
                        <div class="panel-body">


                            <h4>Bem Vindo</h4>

                            <br>
                            <br>
                            <br>
                            <p>O IFAUXÍLIO (Sistema de Auxílio ao Setor de Assistência Estudantil do IFG)
                                foi proposto para auxiliar o profissional responsável do Instituto Federal de Goiás - Câmpus Jataí,
                                para cadastrar e selecionar os estudantes interessados nos programas,
                                projetos e ações da política de assistência estudantil do câmpus.</p><br>

                            <p>O principal objetivo da Política de Assistência Estudantil é garantir o acesso,
                                a permanência e a conclusão de curso dos estudantes na instituição,
                                buscando melhorias no desempenho acadêmico e na redução dos índices de evasão
                                decorrentes de dificuldades de ordem socioeconômica.</p>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

