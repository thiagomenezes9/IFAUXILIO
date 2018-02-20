@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Seleção
@stop

@section('contentheader_title')

@stop

@section('contentheader_description')
    Seleção
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
                        <h3 class="box-title">Seleção</h3>
                        {{--<div align="right"><a href="{{route('usuarios.create')}}" class="btn btn-success">Novo</a></div>--}}

                    </div>

                    <div class="box-body">


                        <h3>Seleção</h3>

                        <table class="table table-bordered table-striped" id="tabCoordenacoes">
                            <thead>
                            <tr>
                                <td class="col-md-4"><strong>Aluno</strong></td>
                                <td class="col-md-4"><strong>Bolsa</strong></td>
                                <td class="col-mb-4" align="center"><strong>Ações</strong></td>
                            </tr>
                            </thead>


                            <tbody>
                                  <tr align="center">
                                    <td align="left">Aluno 1</td>
                                    <td align="left">Auxilio Transpote</td>



                                    <td>
                                        <a class="btn btn-small btn-info" href="#" >
                                            <i class="fa fa-search-plus"></i>
                                            Aprovar
                                        </a>



                                            <a href="#" class="btn btn-small btn-warning">
                                                <i class="fa fa-pencil-square-o"></i>Reprovar
                                            </a>





                                    </td>
                                </tr>


                                  <tr align="center">
                                      <td align="left">Aluno 2</td>
                                      <td align="left">Auxilio Permanencia</td>



                                      <td>
                                          <a class="btn btn-small btn-info" href="#" >
                                              <i class="fa fa-search-plus"></i>
                                              Aprovar
                                          </a>



                                              <a href="#" class="btn btn-small btn-warning">
                                                  <i class="fa fa-pencil-square-o"></i>Reprovar
                                              </a>





                                      </td>
                                  </tr>

                                  <tr align="center">
                                      <td align="left">Aluno 3</td>
                                      <td align="left">Auxilio Alimentação</td>



                                      <td>
                                          <a class="btn btn-small btn-info" href="#" >
                                              <i class="fa fa-search-plus"></i>
                                              Aprovar
                                          </a>



                                              <a href="#" class="btn btn-small btn-warning">
                                                  <i class="fa fa-pencil-square-o"></i>Reprovar
                                              </a>





                                      </td>
                                  </tr>
                                  <tr align="center">
                                      <td align="left">Aluno 4</td>
                                      <td align="left">Auxilio Alimentação</td>



                                      <td>
                                          <a class="btn btn-small btn-info" href="#" >
                                              <i class="fa fa-search-plus"></i>
                                              Aprovar
                                          </a>



                                              <a href="#" class="btn btn-small btn-warning">
                                                  <i class="fa fa-pencil-square-o"></i>Reprovar
                                              </a>





                                      </td>
                                  </tr>
                                  <tr align="center">
                                      <td align="left">Aluno 5</td>
                                      <td align="left">Auxilio Alimentação</td>



                                      <td>
                                          <a class="btn btn-small btn-info" href="#" >
                                              <i class="fa fa-search-plus"></i>
                                              Aprovar
                                          </a>



                                              <a href="#" class="btn btn-small btn-warning">
                                                  <i class="fa fa-pencil-square-o"></i>Reprovar
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


