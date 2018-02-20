@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Avaliação
@stop

@section('contentheader_title')

@stop

@section('contentheader_description')
    Avaliação
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
                        <h3 class="box-title">Avaliação</h3>
                        {{--<div align="right"><a href="{{route('usuarios.create')}}" class="btn btn-success">Novo</a></div>--}}

                    </div>

                    <div class="box-body">


                        <h3>Avaliação</h3>

                        <form class="form-horizontal">



                            <div class="form-group">
                                <p class="col-sm-12">Você considera que os auxílios financeiros têm assegurado aos estudantes igualdade de condição no exercício das atividades acadêmicas?</p>
                            </div>
                            <div class="form-group">
                                <label for="sigla" class="col-sm-2 control-label" ></label>
                                <div class="col-sm-10">
                                    <select name="tipo" id="tipo" class="form-control">
                                        <option>Sim</option>
                                        <option>Nao</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label" >Justifique</label>
                                <div class="col-sm-10">
                                    <textarea name="title" type="text" class="form-control input-lg"
                                              id="title" autofocus></textarea>
                                </div>
                            </div>



                            <div class="form-group">
                                <p class="col-sm-12">O auxílio tem contribuído no sentido de garantir a sua permanência no IFG?</p>
                            </div>
                            <div class="form-group">
                                <label for="sigla" class="col-sm-2 control-label" ></label>
                                <div class="col-sm-10">
                                    <select name="tipo" id="tipo" class="form-control">
                                        <option>Sim</option>
                                        <option>Nao</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label" >Justifique</label>
                                <div class="col-sm-10">
                                    <textarea name="title" type="text" class="form-control input-lg"
                                              id="title" autofocus></textarea>
                                </div>
                            </div>



                            <div class="form-group">
                                <p class="col-sm-12">Você já foi vítima de algum tipo de discriminação/crítica por ser usuário da política de assistência estudantil?</p>
                            </div>
                            <div class="form-group">
                                <label for="sigla" class="col-sm-2 control-label" ></label>
                                <div class="col-sm-10">
                                    <select name="tipo" id="tipo" class="form-control">
                                        <option>Sim</option>
                                        <option>Nao</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label" >Justifique</label>
                                <div class="col-sm-10">
                                    <textarea name="title" type="text" class="form-control input-lg"
                                              id="title" autofocus></textarea>
                                </div>
                            </div>


                            <div class="box-footer">
                                <button  class="btn btn-info pull-right btn-lg">
                                    Salvar</button>

                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


