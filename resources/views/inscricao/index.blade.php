@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Inscrição
@stop

@section('contentheader_title')

@stop

@section('contentheader_description')
    Inscrição
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

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Inscrição</h3>
                        {{--<div align="right"><a href="{{route('usuarios.create')}}" class="btn btn-success">Novo</a></div>--}}

                    </div>

                    <div class="box-body">


                        <h3>Inscrição</h3>

                        <form class="form-horizontal" action="{{route('inscricao.store')}}" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}

                        <div class="form-group">
                            <label for="sigla" class="col-sm-2 control-label" >Auxilio</label>
                            <div class="col-sm-10">
                                <select name="tipo" id="tipo" class="form-control">
                                    <option>Auxilio Alimentação</option>
                                    <option>Auxilio Transporte</option>
                                    <option>Auxilio Permanencia</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label" >Nome</label>
                            <div class="col-sm-10">
                                <input name="title" type="text" class="form-control input-lg"
                                       id="title" autofocus>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="conteudo" class="col-sm-2 control-label" >CPF</label>

                            <div class="col-sm-10">

                                <input name="conteudo"  type="text" class="form-control input-lg"
                                       id="conteudo"  autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label" >Nome do Pai</label>
                            <div class="col-sm-10">
                                <input name="title" type="text" class="form-control input-lg"
                                       id="title"  autofocus>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label" >Nome da Mãe</label>
                            <div class="col-sm-10">
                                <input name="title" type="text" class="form-control input-lg"
                                       id="title"  autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label" >Telefone</label>
                            <div class="col-sm-10">
                                <input name="title" type="text" class="form-control input-lg"
                                       id="title"  autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label" >Endereço</label>
                            <div class="col-sm-10">
                                <input name="title" type="text" class="form-control input-lg"
                                       id="title"  autofocus>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right btn-lg">
                                Salvar</button>

                        </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


