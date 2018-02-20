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

                        Qual alxilio deseja

                        Nome
                        Cpf
                        nome Pai
                        nome mae
                        telefone
                        endereco



                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


