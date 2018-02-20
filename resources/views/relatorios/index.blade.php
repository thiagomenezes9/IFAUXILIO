@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Relatórios
@stop

@section('contentheader_title')

@stop

@section('contentheader_description')
    Relatórios
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
                        <h3 class="box-title">Relatórios</h3>
                        {{--<div align="right"><a href="{{route('usuarios.create')}}" class="btn btn-success">Novo</a></div>--}}

                    </div>

                    <div class="box-body">


                        <h3>Relatórios</h3>

                        <table class="table table-bordered table-striped" id="tabCoordenacoes">
                            <thead>
                            <tr>
                                <td class="col-md-8"><strong>Relatório</strong></td>
                                {{--<td class="col-md-4"><strong>Bolsa</strong></td>--}}
                                <td class="col-mb-4" align="center"><strong>Ações</strong></td>
                            </tr>
                            </thead>


                            <tbody>
                            <tr align="center">
                                <td align="left">Alunos Cadastrados</td>

                                <td>
                                    <a class="btn btn-small btn-info" href="#" >
                                        <i class="fa fa-search-plus"></i>
                                        Visualizar
                                    </a>

                                </td>
                            </tr>


                            <tr align="center">
                                <td align="left">Alunos Com Auxilio</td>

                                <td>
                                    <a class="btn btn-small btn-info" href="#" >
                                        <i class="fa fa-search-plus"></i>
                                        Visualizar
                                    </a>

                                </td>
                            </tr>


                            <tr align="center">
                                <td align="left">Alunos esperando Auxilio</td>

                                <td>
                                    <a class="btn btn-small btn-info" href="#" >
                                        <i class="fa fa-search-plus"></i>
                                        Visualizar
                                    </a>

                                </td>
                            </tr>



                            <tr align="center">
                                <td align="left">Auxilios deferidos</td>

                                <td>
                                    <a class="btn btn-small btn-info" href="#" >
                                        <i class="fa fa-search-plus"></i>
                                        Visualizar
                                    </a>

                                </td>
                            </tr>



                            <tr align="center">
                                <td align="left">Relatório 1</td>

                                <td>
                                    <a class="btn btn-small btn-info" href="#" >
                                        <i class="fa fa-search-plus"></i>
                                        Visualizar
                                    </a>

                                </td>
                            </tr>



                            <tr align="center">
                                <td align="left">Relatório 2</td>

                                <td>
                                    <a class="btn btn-small btn-info" href="#" >
                                        <i class="fa fa-search-plus"></i>
                                        Visualizar
                                    </a>

                                </td>
                            </tr>



                            </tbody>
                        </table>







                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


