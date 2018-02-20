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

                        Você considera que os auxílios financeiros têm assegurado aos estudantes igualdade de condição no exercício das atividades acadêmicas?
                        O auxílio tem contribuído no sentido de garantir a sua permanência no IFG?
                        Você já foi vítima de algum tipo de discriminação/crítica por ser usuário da política de assistência estudantil?


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


