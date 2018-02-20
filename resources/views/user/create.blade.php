@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Aluno
@stop

@section('contentheader_title')

@stop

@section('contentheader_description')
    Novo Aluno
@stop


@section('main-content')

    {{--@if(\Illuminate\Support\Facades\Session::has('mensagem'))--}}
        {{--<div class="alert alert-success">{{\Illuminate\Support\Facades\Session::get('mensagem')}}</div>--}}
    {{--@endif--}}


    @if (Session::has('mensagem'))
        <div class="alert alert-info">{{ Session::get('mensagem') }}</div>
    @endif

    @if($errors->any())
        <div class="box alert alert-danger">
            <div class="box-header with-border">
                <h3 class="box-title text-gray">Opss! Alguma coisa errada</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool"
                            data-widget="remove" data-toggle="tooltip" title="Fechar">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        </div>
    @endif



    <div class="container-fluid spark-screen">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Novo Aluno</h3>
                        <div align="right"><a href="{{route('usuarios.index')}}" class="btn btn-info">Voltar</a></div>
                        {{--<div align="right"><a href="{{route('pais.create')}}" class="btn btn-success">Novo</a></div>--}}
                    </div>

                    <div class="box-body">

                        <form class="form-horizontal" action="{{route('usuarios.store')}}" method="post" enctype="multipart/form-data">




                            {{csrf_field()}}

                            <input type="hidden" value="0" name="perfil" id="perfil">



                            <div class="form-group">
                                <label for="nome" class="col-sm-2 control-label" >Nome</label>
                                <div class="col-sm-10">
                                    <input name="nome"  type="text" class="form-control input-lg"
                                           id="nome" placeholder="Nome do Usuário" autofocus>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="nome" class="col-sm-2 control-label" >CPF</label>
                                <div class="col-sm-10">
                                    <input name="cpf"  type="text" class="form-control input-lg"
                                           id="cpf" placeholder="CPF" autofocus>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="nome" class="col-sm-2 control-label" >Matricula</label>
                                <div class="col-sm-10">
                                    <input name="matricula"  type="text" class="form-control input-lg"
                                           id="matricula" placeholder="matricula" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nome" class="col-sm-2 control-label" >Senha</label>
                                <div class="col-sm-10">
                                    <input name="senha"  type="text" class="form-control input-lg"
                                           id="senha" placeholder="Senha" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sigla" class="col-sm-2 control-label" >Curso</label>
                                <div class="col-sm-10">
                                    <select name="curso" id="curso" class="form-control">
                                        <option value="curso1" >TADS</option>
                                        <option value="curso2" >Engenharia eletrica</option>
                                        <option value="curso2" >Engenharia Civil</option>
                                        <option value="curso2" >Engenharia florestal</option>

                                    </select>
                                </div>
                            </div>


                            {{--Ativo, Resp--}}






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