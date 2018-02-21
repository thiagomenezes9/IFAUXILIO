<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        {{--<!-- search form (Optional) -->--}}
        {{--<form action="#" method="get" class="sidebar-form">--}}
            {{--<div class="input-group">--}}
                {{--<input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>--}}
              {{--<span class="input-group-btn">--}}
                {{--<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>--}}
              {{--</span>--}}
            {{--</div>--}}
        {{--</form>--}}
        {{--<!-- /.search form -->--}}

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li>

                <a href="{{route('posts.index')}}">
                    <i class="fa fa-newspaper-o"></i>
                    <span>Noticias / Editais</span>

                </a>



                <a href="{{route('questionarios.index')}}">
                    <i class="fa fa-comment-o"></i>
                    <span>Questionario</span>

                </a>

                <a href="{{route('inscricao.index')}}">
                    <i class="fa fa-edit"></i>
                    <span>Inscricao</span>

                </a>

                <a href="{{route('avaliacao.index')}}">
                    <i class="fa fa-balance-scale"></i>
                    <span>Avaliação</span>

                </a>



                @if(Auth::user()->type == 'ADMIN')

                    <a href="{{route('usuarios.index')}}">
                        <i class="fa fa-group"></i>
                        <span>Alunos / Usuarios</span>

                    </a>

                    <a href="{{route('selecao.index')}}">
                        <i class="fa fa-hdd-o"></i>
                        <span>selecao</span>

                    </a>

                    <a href="{{route('relatorios.index')}}">
                        <i class="fa fa-area-chart"></i>
                        <span>relatorios</span>

                    </a>



                @endif


            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
