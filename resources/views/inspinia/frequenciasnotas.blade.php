@extends(env('TEMA').'.layouts.base')

@section('titulo')
    Frequências e notas
@endsection

@section('content')
    <h1>Frequências e Notas</h1>

    <div class="row ibox">
        <div class="col-md-4">
            <p>
                Selecione o curso, contrato e período.
            </p>
            <select class="select2_demo_3 form-control select2-hidden-accessible col-md-4" tabindex="-1" aria-hidden="true">
                <option></option>
                <option value="616161">ENGENHARIA DE SOFTWARE/616161 - 2017A</option>
                <option value="626262">ENGENHARIA DE SOFTWARE/626262 - 2017B</option>
                <option value="666666">ENGENHARIA DE SOFTWARE/666666 - 2018B</option>
            </select>
        </div>
    </div>

    <div id="3452207" class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>3452207 - ADMINISTRAÇÃO DE SISTEMAS PRODUTIVOS</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Professor(a):</strong><br>
                            PROFESSOR DA SILVA<br>
                            <br>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <strong>Dia:</strong>
                                    Segunda-Feira
                                </div>
                                <div class="col-sm-6">
                                    <strong>Turno:</strong>
                                    Noturno
                                </div>
                                <div class="col-sm-6">
                                    <strong>Sala:</strong>
                                    304-3
                                </div>
                                <div class="col-sm-6">
                                    <strong>Estado:</strong>
                                    Matriculado
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 disciplina-frequencia">
                            <h3>Frequência <span class="h5">(clique na data para detalhes)</span></h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="frequencia-calendario">
                                        <div class="frequencia-mes clearfix">
                                            <span class="frequencia-mes-nome">fev</span>
                                            <span class="frequencia-dia frequencia-falta-2"><span>19</span></span>
                                            <span class="frequencia-dia frequencia-falta-2"><span>26</span></span>
                                        </div>
                                        <div class="frequencia-mes clearfix">
                                            <span class="frequencia-mes-nome">mar</span>
                                            <span class="frequencia-dia frequencia-falta-2"><span>05</span></span>
                                            <span class="frequencia-dia frequencia-falta-2"><span>12</span></span>
                                            <span id="666" class="frequencia-dia frequencia-falta-1"><span>19</span></span>
                                            <span class="frequencia-dia frequencia-falta-2"><span>26</span></span>
                                        </div>
                                        <div class="frequencia-mes clearfix">
                                            <span class="frequencia-mes-nome">abr</span>
                                            <span class="frequencia-dia frequencia-falta-0"><span>02</span></span>
                                            <span class="frequencia-dia frequencia-falta-2"><span>09</span></span>
                                            <span class="frequencia-dia frequencia-falta-2"><span>16</span></span>
                                            <span class="frequencia-dia frequencia-falta-0"><span>23</span></span>
                                        </div>
                                    </div>
                                    <div class="frequencia-legenda">
                                        <div><span class="frequencia-dia frequencia-falta-2"></span><span class="legenda">Presença</span></div>
                                        <div><span class="frequencia-dia frequencia-falta-0"></span><span class="legenda">Ausência</span></div>
                                        <div><span class="frequencia-dia frequencia-falta-1"></span><span class="legenda">Meia Presença</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3>Notas</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered tabela-notas">
                                            <thead>
                                            <tr>
                                                <th>Nota 1</th>
                                                <th>Nota 2</th>
                                                <th>Nota 3</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>4.4</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                                <h3>Média</h3>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-5 col-xs-offset-5">
                                    <span data-toggle="modal" data-target="#myModal">
                                        <a class="h1-media">5.8</a>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 col-xs-offset-4">
                                    <button data-toggle="modal" data-target="#myModal" class="btn btn-info btn-outline" type="button">Visualizar avaliaçoes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Notas</h4>
                </div>
                <div class="modal-body">
                    <div id="nota1" class="row">
                        <div>
                            <div class="col-md-10 col-xs-10 left cabecalho-nota">Nota 1</div>
                            <div class="col-md-2 col-xs-2 right cabecalho-nota" title="Clique para ver as avaliações">4.4</div>
                        </div>
                        <div class="tabela-avaliacao">
                            <div class="col-md-3 col-xs-3 linha-avaliacao">
                                Avaliação 1<br>2.4
                            </div>
                            <div class="col-md-3 col-xs-3 linha-avaliacao">
                                Avaliação 2<br>5
                            </div>
                            <div class="col-md-3 col-xs-3 linha-avaliacao">
                                Avaliação 3<br>6
                            </div>
                            <div class="col-md-3 col-xs-3 linha-avaliacao">
                                Avaliação 4<br>27
                            </div>
                        </div>
                    </div>

                    <div id="nota2" class="row">
                        <div>
                            <div class="col-md-10 col-xs-10 left cabecalho-nota">Nota 2</div>
                            <div class="col-md-2 col-xs-2 right cabecalho-nota" title="Clique para ver as avaliações">4.4</div>
                        </div>
                        <div class="tabela-avaliacao">
                            <div class="col-md-4 col-xs-4 linha-avaliacao">
                                Avaliação 1<br>2.4
                            </div>
                            <div class="col-md-4 col-xs-4 linha-avaliacao">
                                Avaliação 2<br>5
                            </div>
                            <div class="col-md-4 col-xs-4 linha-avaliacao">
                                Avaliação 3<br>6
                            </div>
                        </div>
                    </div>

                    <div id="nota3" class="row">
                        <div>
                            <div class="col-md-10 col-xs-10 left cabecalho-nota">Nota 3</div>
                            <div class="col-md-2 col-xs-2 right cabecalho-nota" title="Clique para ver as avaliações">4.4</div>
                        </div>
                        <div class="tabela-avaliacao">
                            <div class="col-md-3 col-xs-3 linha-avaliacao">
                                Avaliação 1<br>2.4
                            </div>
                            <div class="col-md-3 col-xs-3 linha-avaliacao">
                                Avaliação 2<br>5
                            </div>
                            <div class="col-md-3 col-xs-3 linha-avaliacao">
                                Avaliação 3<br>6
                            </div>
                            <div class="col-md-3 col-xs-3 linha-avaliacao">
                                Avaliação 4<br>27
                            </div>
                        </div>
                    </div>

                    <div class="nota nota-final">
                        <strong>Nota final:</strong> -
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="3452666" class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins border-bottom">
                <div class="ibox-title">
                    <h5>3452666 - ADMINISTRAÇÃO DE PRODUTOS<span class="disciplina-cancelada"> (CANCELADA PELA INSTITUIÇÃO)</span></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content" style="display: none;">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Professor(a):</strong><br>
                            A CONFIRMAR<br>
                            <br>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <strong>Dia:</strong>
                                    Segunda-Feira
                                </div>
                                <div class="col-sm-6">
                                    <strong>Turno:</strong>
                                    Noturno
                                </div>
                                <div class="col-sm-6">
                                    <strong>Sala:</strong>
                                    304-3
                                </div>
                                <div class="col-sm-6">
                                    <strong>Estado:</strong>
                                    Cancelada
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 disciplina-frequencia">
                            <h3>Frequência</h3>
                            <div class="frequencia-calendario">
                                <div class="frequencia-mes clearfix">
                                </div>
                            </div>
                            <div class="frequencia-legenda">
                                <div><span class="frequencia-dia frequencia-falta-2"></span><span class="legenda">Presença</span></div>
                                <div><span class="frequencia-dia frequencia-falta-0"></span><span class="legenda">Ausência</span></div>
                                <div><span class="frequencia-dia frequencia-falta-1"></span><span class="legenda">Meia Presença</span></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3>Notas</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered tabela-notas">
                                            <thead>
                                            <tr>
                                                <th>Nota 1</th>
                                                <th>Nota 2</th>
                                                <th>Nota 3</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <h3>Média</h3>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-5">
                                    <a class="h1" data-toggle="modal" data-target="#myModal666" title="Sem notas disponíveis">-</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(".select2_demo_3").select2({
            placeholder: "Selecione contrato - período",
            allowClear: true
        });

        $('.select2-container').css('width', '100%');

        $(document).ready(function(){
            $("#666").popover({
                content : "<div id=\"popover_content_wrapper\"><div><div class=\"clearfix\"><span class=\"frequencia-dia frequencia-horario frequencia-falta-2\"><span>10:00 - 10:45</span></span><span class=\"frequencia-dia frequencia-horario frequencia-falta-0\"><span>10:45 - 11:30</span></span></div></div></div>",
                html: true,
                placement : 'top'
            });
        });

        $(document).on('click', function(e) {
            $('[data-toggle="popover"],[data-original-title]').each(function() {
                //the 'is' for buttons that trigger popups
                //the 'has' for icons within a button that triggers a popup
                if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                    $(this).popover('hide').data('bs.popover').inState.click = false // fix for BS 3.3.6
                }

            });
        });

        $('.cabecalho-nota.right').click(mudarCorNotas);
        var corAtiva = false;
        function mudarCorNotas(e) {
            if (!corAtiva) {
                corAtiva = true;
                $(e.target).closest('.row').children('.tabela-avaliacao').children('.linha-avaliacao').toggleClass('avaliacoes-ativas');;
            }
            else {
                corAtiva = false;
                $(e.target).closest('.row').children('.tabela-avaliacao').children('.linha-avaliacao').removeClass('avaliacoes-ativas');;
            }
        }
    </script>
@endsection
