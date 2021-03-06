@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Noticia
@stop

@section('contentheader_title')

@stop

@section('contentheader_description')
    Lista das Noticias
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
                        <h3 class="box-title">Noticias</h3>
                        @if(Auth::user()->type == 'ADMIN')
                        <div align="right"><a href="{{route('posts.create')}}" class="btn btn-success">Novo</a></div>
                            @endif
                    </div>

                    <div class="box-body">

                        <table class="table table-bordered table-striped" id="tabCoordenacoes">
                            <thead>
                            <tr>
                                <td class="col-md-5"><strong>Titulo</strong></td>
                                <td class="col-mb-4" align="center"><strong>Ações</strong></td>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($posts as $post)
                                <tr align="center">
                                    <td align="left">{{ $post->title}}</td>

                                    <td>
                                        <a class="btn btn-small btn-info" href="{{route('posts.show',$post->id)}}" >
                                            <i class="fa fa-search-plus"></i>
                                            Visualizar
                                        </a>


                                        @can('edit', $post)
                                            <a href="{{route('posts.edit', $post->id)}}" class="btn btn-small btn-warning">
                                                <i class="fa fa-pencil-square-o"></i>Editar
                                            </a>
                                        @endcan




                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{--<div class="text-center">--}}
                        {{--{!! $coordenacoes->links() !!}--}}
                        {{--</div>--}}


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection




@section('scriptlocal')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#tabCoordenacoes').DataTable( {
                "language": {
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Próxima"
                    },
                    "sSearch": "<span>Pesquisar</span> _INPUT_", //search
                    "lengthMenu": "Exibir _MENU_ registros por página",
                    "zeroRecords": "Não há resultados para esta busca",
                    "info": "Exibindo página _PAGE_ de _PAGES_",
                    "infoEmpty": "Nenhum registro disponível",
                    "infoFiltered": "(Filtrado de _MAX_ registros)"

                }
            } );
        })
    </script>
@endsection