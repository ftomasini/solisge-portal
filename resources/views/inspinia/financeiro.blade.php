@extends(env('TEMA').'.layouts.base')

@section('titulo')
    Financeiro
@endsection

@section('ignorecss')
    false
@endsection

@section('css')
    <link href="/inspinia/css/bootstrap.min.css" rel="stylesheet">
    <link href="/inspinia/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/inspinia/css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="/inspinia/css/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="/inspinia/css/plugins/fullcalendar/fullcalendar.print.css" rel='stylesheet' media='print'>

    <link href="/inspinia/css/animate.css" rel="stylesheet">
    <link href="/inspinia/css/style.css" rel="stylesheet">
@endsection

@section('content')
    <div class="row col-xs-12 cabecalho-tipo-titulo">
        <i class="fa fa-caret-right"></i>
        TÍTULOS EM ABERTO
    </div>
    <div class="col-lg-12 row">
        <div class="ibox float-e-margins caixa-titulo">
            <a class="collapse-link">
            <div class="ibox-title">
                <h5>11/06/2018 - 93337 - MENSALIDADE</h5>
                <div class="ibox-tools">
                    <i class="fa fa-chevron-down"></i>
                </div>
            </div>
            </a>
            <div class="ibox-content" style="display: none">
                <div class="row">
                    <div class="col-lg-3 col-xs-12 text-center ">
                        <div class="valor-titulo">R$ 291,97</div>
                        <div class="col-lg-12 col-xs-12 linha-divisao-titulo-info"><hr width="65%" align="center"></div>
                        <div class="infos-titulo">
                            MENSALIDADE<br>
                            VENC 11/06/2018
                        </div>
                        <div class="text-danger">
                            JUROS/MULTA DISCRIMINADOS NO BOLETO
                        </div>
                    </div>
                    <div class="col-lg-9 col-xs-12">
                        <div class="col-md-4 col-xs-12">
                            <div class="col-lg-12 col-xs-12 botao-titulo primeiro-botao-titulo">
                                <i class="fa fa-lg fa-copy"></i>
                                Copiar nosso número
                            </div>
                            <div class="col-lg-12 col-xs-12 botao-titulo">
                                <i class="fa fa-lg fa-barcode"></i>
                                Imprimir boleto
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="col-lg-12 col-xs-12 botao-titulo">
                                <i class="fa fa-lg fa-envelope-o"></i>
                                Enviar para meu e-mail
                            </div>
                            <div class="col-lg-12 col-xs-12 botao-titulo">
                                <i class="fa fa-lg fa-credit-card"></i>
                                Pagar com cartão
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="col-lg-12 col-xs-12 botao-titulo">
                                <i class="fa fa-lg fa-list-ul"></i>
                                Imprimir carnê
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 row">
        <div class="ibox float-e-margins caixa-titulo">
            <a class="collapse-link">
                <div class="ibox-title">
                    <h5>15/07/2018 - 8738 - PROTOCOLO</h5>
                    <div class="ibox-tools">
                        <i class="fa fa-chevron-down"></i>
                    </div>
                </div>
            </a>
            <div class="ibox-content" style="display: none">
                <div class="row">
                    <div class="col-lg-3 col-xs-12 text-center ">
                        <div class="valor-titulo">R$ 70,00</div>
                        <div class="col-lg-12 col-xs-12 linha-divisao-titulo-info"><hr width="65%" align="center"></div>
                        <div class="infos-titulo">
                            PROTOCOLO<br>
                            VENC 15/07/2018
                        </div>
                        <div class="text-navy">
                            DESCONTOS DISCRIMINADOS NO BOLETO
                        </div>
                    </div>
                    <div class="col-lg-9 col-xs-12">
                        <div class="col-md-4 col-xs-12">
                            <div class="col-lg-12 col-xs-12 botao-titulo primeiro-botao-titulo">
                                <i class="fa fa-lg fa-copy"></i>
                                Copiar nosso número
                            </div>
                            <div class="col-lg-12 col-xs-12 botao-titulo">
                                <i class="fa fa-lg fa-barcode"></i>
                                Imprimir boleto
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="col-lg-12 col-xs-12 botao-titulo">
                                <i class="fa fa-lg fa-envelope-o"></i>
                                Enviar para meu e-mail
                            </div>
                            <div class="col-lg-12 col-xs-12 botao-titulo">
                                <i class="fa fa-lg fa-credit-card"></i>
                                Pagar com cartão
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="col-lg-12 col-xs-12 botao-titulo">
                                <i class="fa fa-lg fa-list-ul"></i>
                                Imprimir carnê
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row col-xs-12 cabecalho-tipo-titulo">
        <i class="fa fa-caret-right"></i>
        TÍTULOS FECHADOS
    </div>
    <div class="col-lg-12 row">
        <div class="ibox float-e-margins caixa-titulo">
            <a class="collapse-link">
                <div class="ibox-title">
                    <h5>20/04/2018 - 41026 - MENSALIDADE</h5>
                    <div class="ibox-tools">
                        <i class="fa fa-chevron-down"></i>
                    </div>
                </div>
            </a>
            <div class="ibox-content" style="display: none">
                <div class="row">
                    <div class="col-lg-3 col-xs-12 text-center ">
                        <div class="valor-titulo">R$ 300,00</div>
                        <div class="col-lg-12 col-xs-12 linha-divisao-titulo-info"><hr width="65%" align="center"></div>
                        <div class="infos-titulo">
                            MENSALIDADE<br>
                            VENC 20/04/2018
                        </div>
                        <div class="text-success">
                            PAGO VIA BANCO NO DIA 19/04/2018
                        </div>
                    </div>
                    <div class="col-lg-9 col-xs-12">
                        <div class="col-md-4 col-xs-12">
                            <div class="col-lg-12 col-xs-12 botao-titulo primeiro-botao-titulo">
                                <i class="fa fa-lg fa-print"></i>
                                Imprimir nota fiscal
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12"></div>
                        <div class="col-md-4 col-xs-12"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
