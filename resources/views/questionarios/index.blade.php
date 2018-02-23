@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Questionário Socioeconômico
@stop

@section('contentheader_title')

@stop

@section('contentheader_description')
    Questionário Socioeconômico
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
                        <h3 class="box-title">Questionário Socioeconômico</h3>
                        {{--<div align="right"><a href="{{route('posts.create')}}" class="btn btn-success">Novo</a></div>--}}
                    </div>

                    <div class="box-body">

                        <div role="tabpanel">

                            <ul class="nav nav-tabs" role="tablist">


                                <li role="presentation" class="active"><a href="#section1" aria-controls="section1"
                                                                          data-toggle="tab" role="tab">Parte 1 </a></li>
                                <li role="presentation"><a href="#section2" aria-controls="section2" data-toggle="tab"
                                                           role="tab">Parte 2 </a></li>
                                <li role="presentation"><a href="#section3" aria-controls="section3" data-toggle="tab"
                                                           role="tab">Parte 3 </a></li>
                                <li role="presentation"><a href="#section4" aria-controls="section4" data-toggle="tab"
                                                           role="tab">Parte 4 </a></li>
                                <li role="presentation"><a href="#section5" aria-controls="section5" data-toggle="tab"
                                                           role="tab">Parte 5 </a></li>

                            </ul>

                            <form class="form-horizontal" action="{{route('inscricao.store')}}" method="post"
                                  enctype="multipart/form-data">

                                {{ csrf_field() }}


                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="section1">

                                        <h3>Dados Pessoais</h3>

                                        <div class="form-group">
                                            <label for="title" class="col-sm-2 control-label">Nome</label>
                                            <div class="col-sm-10">
                                                <input name="title" type="text" class="form-control input-lg"
                                                       id="title" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputDataNasc" class="col-sm-2 control-label">Data
                                                Expiração</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control input-lg" id="data_expiracao"
                                                       name="data_expiracao" min="{{\Carbon\Carbon::now()}}"
                                                       value="{{old('data_expiracao')}}"
                                                       placeholder="Data de Expiração">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="sigla" class="col-sm-2 control-label">Estado Civil</label>
                                            <div class="col-sm-10">
                                                <select name="tipo" id="tipo" class="form-control">
                                                    <option>Solteiro</option>
                                                    <option>Amasiado</option>
                                                    <option>Casado</option>
                                                    <option>Divorciado</option>
                                                    <option>Viuvo</option>

                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="sigla" class="col-sm-2 control-label">Sexo</label>
                                            <div class="col-sm-10">
                                                <select name="tipo" id="tipo" class="form-control">
                                                    <option>Masculino</option>
                                                    <option>Feminino</option>


                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="sigla" class="col-sm-2 control-label">Cor / Raça</label>
                                            <div class="col-sm-10">
                                                <select name="tipo" id="tipo" class="form-control">
                                                    <option>Branco</option>
                                                    <option>Negro</option>
                                                    <option>Pardo</option>
                                                    <option>Amarelo</option>
                                                    <option>Indigeno</option>

                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">CPF</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">RG</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">Banco</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">Agencia</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">Conta</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>


                                        <h3>Endereço</h3>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">Logradouro</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">Numero</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">Complemento</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">CEP</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">Bairro</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">Estado</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">Cidade</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>

                                        <h3>Contato</h3>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">DDD</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">Numero</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">Email</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="email" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>


                                        <h3>Curso</h3>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">Curso</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">Matricula</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">Turno</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">Periodo</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">Ano de Ingresso</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>
                                        </div>


                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="section2">

                                        <h3>Situação Acadêmica</h3>


                                        <div class="form-group">
                                            <label for="sigla" class="col-sm-12">Possuí algum tipo de deficiência ou
                                                necessidade educacional especial?</label>
                                            <div class="col-sm-12">
                                                <select name="tipo" id="tipo" class="form-control">
                                                    <option>Sim</option>
                                                    <option>Nao</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title" class="col-sm-2 control-label">Especifique</label>
                                            <div class="col-sm-10">
                                                <input name="title" type="text" class="form-control input-lg" id="title"
                                                       autofocus>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="sigla" class="col-sm-12 ">Na série/período anterior:</label><br>
                                            <div class="col-sm-12">
                                                <select name="tipo" id="tipo" class="form-control">
                                                    <option>Fui Aprovado</option>
                                                    <option>Fui Aprovado com dependencia</option>
                                                    <option>Reprovado</option>
                                                    <option>Tranquei matricula</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="sigla" class="col-sm-12 ">Cursou maior parte do ensino
                                                fundamental</label>
                                            <div class="col-sm-12">
                                                <select name="tipo" id="tipo" class="form-control">
                                                    <option>Escola Pública</option>
                                                    <option>Parte escola pública parte escola particular</option>
                                                    <option>Particular com bolsa parcial</option>
                                                    <option>Particular com bolsa integral</option>
                                                    <option>Particular sem bolsa</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="sigla" class="col-sm-12 ">Cursou maior parte do ensino
                                                medio</label>
                                            <div class="col-sm-12">
                                                <select name="tipo" id="tipo" class="form-control">
                                                    <option>Escola Pública</option>
                                                    <option>Parte escola pública parte escola particular</option>
                                                    <option>Particular com bolsa parcial</option>
                                                    <option>Particular com bolsa integral</option>
                                                    <option>Particular sem bolsa</option>

                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="sigla" class="col-sm-12 ">Ja cursou faculdade</label>
                                            <div class="col-sm-12">
                                                <select name="tipo" id="tipo" class="form-control">
                                                    <option>Não</option>
                                                    <option>Sim, Particular</option>
                                                    <option>Sim, Pública</option>


                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="sigla" class="col-sm-12">Atividades que pratica?</label>
                                            <div class="col-sm-12">
                                                <select name="tipo" id="tipo" class="form-control">
                                                    <option>Esporte</option>
                                                    <option>Arte/Cultura</option>
                                                    <option>Religiosa</option>
                                                    <option>Outra</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title" class="col-sm-2 control-label">Especifique</label>
                                            <div class="col-sm-10">
                                                <input name="title" type="text" class="form-control input-lg" id="title"
                                                       autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="sigla" class="col-sm-12">Lê com qual frequência</label>
                                            <div class="col-sm-12">
                                                <select name="tipo" id="tipo" class="form-control">
                                                    <option>Sempre</option>
                                                    <option>Ocasionalmente</option>
                                                    <option>nunca</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="sigla" class="col-sm-12">Utiliza a biblioteca com qual
                                                frequência</label>
                                            <div class="col-sm-12">
                                                <select name="tipo" id="tipo" class="form-control">
                                                    <option>Sempre</option>
                                                    <option>Ocasionalmente</option>
                                                    <option>nunca</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="title" class="col-sm-12">Meio de comunicação que tem
                                                acesso: </label>
                                            <div class="col-sm-12">
                                                <input name="title" type="text" class="form-control input-lg" id="title"
                                                       autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="title" class="col-sm-12">Cursos que realizou: </label>
                                            <div class="col-sm-12">
                                                <input name="title" type="text" class="form-control input-lg" id="title"
                                                       autofocus>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-12">
                                                Qual situação abaixo melhor descreve sua situação financeira:
                                            </label>
                                            <div class="col-sm-12">
                                                <select name="" class="form-control">
                                                    <option>Não trabalho e meus gastos são financiados pela família
                                                    </option>
                                                    <option>Trabalho e sou o principal responsável pelo sustento da
                                                        família
                                                    </option>
                                                    <option>Trabalho e contribuo com o sustento da família</option>
                                                    <option>Trabalho e recebo ajuda da família</option>
                                                    <option>Trabalho e me sustento</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-12">Em relação ao trabalho, qual a sua
                                                situação?</label>
                                        </div>
                                        <table cellspacing="0">


                                            <tr>
                                                <td><input type="radio" name="trabalho" id="empregado"/>Empregado(a)
                                                </td>
                                                <td>
                                                    <input type="text" name="local" value="Local do Trabalho"
                                                           onblur="if(this.value=='')this.value='Local do Trabalho';"/>
                                                    <input type="text" name="cargo" value="Cargo/Função"
                                                           onfocus="if(this.value=='Cargo/Função')this.value='';"
                                                           onblur="if(this.value=='')this.value='Cargo/Função';"/>
                                                    <input type="text" name="salario" size="7" value="Salário R$"
                                                           onfocus="if(this.value=='Salário R$')this.value='';"
                                                           onblur="if(this.value=='')this.value='Salário R$';"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="trabalho" id="desempregado"/>Desempregado(a)
                                                </td>
                                                <td>
                                                    <input type="text" name="quando" value="Desde quando?"
                                                           onblur="if(this.value=='')this.value='Desde quando?';"/>
                                                    <input type="text" name="exCargo" value="Cargo que exercia"
                                                           onfocus="if(this.value=='Cargo que exercia')this.value='';"
                                                           onblur="if(this.value=='')this.value='Cargo que exercia';"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><input type="radio" name="trabalho"
                                                                       id="nuncaTrabalhou"/>Nunca trabalhou com vínculo
                                                    empregatício
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="trabalho" id="bicos"/>Exerce atividade sem
                                                    vínculo empregatício
                                                </td>
                                                <td>
                                                    <input type="text" name="qual" value="Qual?"
                                                           onblur="if(this.value=='')this.value='Qual?';"/>
                                                    <input type="text" name="renda" value="Renda mensal R$"
                                                           onfocus="if(this.value=='Renda mensal R$')this.value='';"
                                                           onblur="if(this.value=='')this.value='Renda mensal R$';"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="trabalho" id="inss"/>Aposentado ou
                                                    afastado por doença
                                                </td>
                                                <td>
                                                    <input type="text" name="cargoExercia" value="Cargo que exercia"
                                                           onblur="if(this.value=='')this.value='Cargo que exercia';"/>
                                                    <input type="text" name="valorINSS" value="Valor do INSS R$"
                                                           onfocus="if(this.value=='Valor do INSS R$')this.value='';"
                                                           onblur="if(this.value=='')this.value='Valor do INSS R$';"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="trabalho" id="pensionista"/>Pensionista
                                                </td>
                                                <td>
                                                    <input type="text" name="valorPensao" value="Valor da pensão R$"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="trabalho" id="bolsista"/>Bolsista</td>
                                                <td>
                                                    <select id="CampoTipoBolsa">
                                                        <option selected="selected"> *Qual tipo de bolsa?</option>
                                                        <option>CNPQ</option>
                                                        <option>PIBIC</option>
                                                        <option>PIBID</option>
                                                        <option>Monitoria</option>
                                                        <option>Estágio</option>
                                                    </select>
                                                    <input type="text" name="valorBolsa" value="Quanto recebe? R$"
                                                           onfocus="if(this.value=='Quanto recebe? R$')this.value='';"
                                                           onblur="if(this.value=='')this.value='Quanto recebe? R$';"/>
                                                </td>
                                            </tr>


                                        </table>


                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="section3">

                                        <h3>Informações da Família</h3>


                                        <div class="form-group">
                                            <label class="col-sm-12">Seus pais são:</label>
                                            <div class="col-sm-12">
                                                <select id="CampoSituacaoPais" class="form-control">
                                                    <option selected="selected">-Selecione-</option>
                                                    <option>Casados</option>
                                                    <option>Separados</option>
                                                    <option>Pai falecido</option>
                                                    <option>Mãe falecida</option>
                                                </select>
                                            </div>
                                        </div>
                                        Se separados, você mora com:
                                        <select id="CampoMoradia">
                                            <option selected="selected">-Selecione-</option>
                                            <option>Pai</option>
                                            <option>Mãe</option>
                                            <option>Outro (Especificar)</option>
                                        </select> &nbsp;
                                        Quem? <input type="text" name="comQuemMora" size="25"/>
                                        <p/><br/>

                                        <div class="form-group">
                                            <label class="col-sm-12">IDENTIFICAÇÃO DO PAI DO ALUNO(A)</label>
                                        </div>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">Nome</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>


                                            <label for="conteudo" class="col-sm-2 control-label">Idade</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-2 control-label">Endereço</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-2 control-label">Telefone</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-2 control-label">Estado</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-2 control-label">Cidade</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-2 control-label">Profisão</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-2 control-label">Atividade que
                                                exerce</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label class="col-sm-12 ">Local de Trabalho</label>

                                            <div class="col-sm-12">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-12 ">Renda Mensal</label>

                                            <div class="col-sm-12">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>


                                            {{--<div class="form-group">--}}
                                                <p class="col-sm-12">Outra situação</p>
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label for="sigla" class="col-sm-2 control-label" ></label>--}}
                                                <div class="col-sm-12">
                                                    <select name="tipo" id="tipo" class="form-control">
                                                        <option>Separado</option>
                                                        <option>Desempregado</option>
                                                        <option>Aposentado</option>
                                                        <option>Falecido</option>
                                                    </select>
                                                </div>
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                <label for="title"
                                                       class="col-sm-2 control-label">Comente</label>
                                                <div class="col-sm-10">
                                    <textarea name="title" type="text" class="form-control input-lg"
                                              id="title" autofocus></textarea>
                                                {{--</div>--}}
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-12">IDENTIFICAÇÃO DA MÃE ALUNO(A)</label>
                                        </div>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">Nome</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>


                                            <label for="conteudo" class="col-sm-2 control-label">Idade</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-2 control-label">Endereço</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-2 control-label">Telefone</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-2 control-label">Estado</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-2 control-label">Cidade</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-2 control-label">Profisão</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-2 control-label">Atividade que
                                                exerce</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label class="col-sm-12 ">Local de Trabalho</label>

                                            <div class="col-sm-12">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-12 ">Renda Mensal</label>

                                            <div class="col-sm-12">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>


                                            {{--<div class="form-group">--}}
                                                <p class="col-sm-12">Outra situação</p>
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label for="sigla" class="col-sm-2 control-label" ></label>--}}
                                                <div class="col-sm-12">
                                                    <select name="tipo" id="tipo" class="form-control">
                                                        <option>Separado</option>
                                                        <option>Desempregado</option>
                                                        <option>Aposentado</option>
                                                        <option>Falecido</option>
                                                    </select>
                                                </div>
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                <label for="title"
                                                       class="col-sm-2 control-label">Comente</label>
                                                <div class="col-sm-10">
                                    <textarea name="title" type="text" class="form-control input-lg"
                                              id="title" autofocus></textarea>
                                                </div>
                                            {{--</div>--}}

                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-12">IDENTIFICAÇÃO DO CÔNJUGE OU COMPANHEIRO(A) DO(A)
                                                ALUNO(A) (Se for casado ou amasiado)</label>
                                        </div>

                                        <div class="form-group">
                                            <label for="conteudo" class="col-sm-2 control-label">Nome</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>


                                            <label for="conteudo" class="col-sm-2 control-label">Idade</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-2 control-label">Endereço</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-2 control-label">Telefone</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-2 control-label">Estado</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-2 control-label">Cidade</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-2 control-label">Profisão</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-2 control-label">Atividade que
                                                exerce</label>

                                            <div class="col-sm-10">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label class="col-sm-12 ">Local de Trabalho</label>

                                            <div class="col-sm-12">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>

                                            <label for="conteudo" class="col-sm-12 ">Renda Mensal</label>

                                            <div class="col-sm-12">

                                                <input name="conteudo" type="text" class="form-control input-lg"
                                                       id="conteudo" autofocus>
                                            </div>


                                            {{--<div class="form-group">--}}
                                                <p class="col-sm-12">Outra situação</p>
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label for="sigla" class="col-sm-2 control-label" ></label>--}}
                                                <div class="col-sm-12">
                                                    <select name="tipo" id="tipo" class="form-control">
                                                        <option>Separado</option>
                                                        <option>Desempregado</option>
                                                        <option>Aposentado</option>
                                                        <option>Falecido</option>
                                                    </select>
                                                </div>
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                <label for="title"
                                                       class="col-sm-2 control-label">Comente</label>
                                                <div class="col-sm-10">
                                    <textarea name="title" type="text" class="form-control input-lg"
                                              id="title" autofocus></textarea>
                                                </div>
                                            {{--</div>--}}


                                        </div>


                                    </div>


                                    <div role="tabpanel" class="tab-pane" id="section4">

                                        <h3>Resposta 04</h3>

                                        casa da familia e
                                        Na cidade em que o câmpus escolar está localizado, como você mora?
                                        transporte ate a escola
                                        familia recebe beneficil do governo
                                        saude procura
                                        despesas da familia
                                        despesas do estudante
                                        bens q a familia possui


                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="section5">

                                        <h3>Resposta 05</h3>

                                        pessoas q mora com vc

                                        pessoas q tem doença

                                        quantos faz faculdade

                                        pq precisa da bolsa


                                    </div>


                                </div>


                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection




@section('scriptlocal')

@endsection