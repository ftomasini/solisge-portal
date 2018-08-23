@extends(env('TEMA').'.layouts.base')

@section('titulo')
    Home
@endsection

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-3">
                <div class="contact-box center-version">
                    <a href="{{ route('view', 'frequenciasnotas') }}">
                        <i class="fa fa-line-chart fa-5x"></i>

                        <h3 class="m-b-xs"><strong>Frequências e notas</strong></h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="contact-box center-version">
                    <a href="{{ route('view', 'financeiro') }}">
                        <i class="fa fa-calculator fa-5x"></i>

                        <h3 class="m-b-xs"><strong>Financeiro</strong></h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="contact-box center-version">
                    <a href="#">
                        <i class="fa fa-file fa-5x"></i>

                        <h3 class="m-b-xs"><strong>Documentos</strong></h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="contact-box center-version">
                    <a href="#">
                        <i class="fa fa-file-text-o fa-5x"></i>

                        <h3 class="m-b-xs"><strong>Protocolos</strong></h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="contact-box center-version">
                    <a href="#">
                        <i class="fa fa-book fa-5x"></i>

                        <h3 class="m-b-xs"><strong>Biblioteca</strong></h3>
                    </a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="contact-box center-version">
                    <a href="{{ route('view', 'gradehorario') }}">
                        <i class="fa fa-calendar fa-5x"></i>

                        <h3 class="m-b-xs"><strong>Grade de horários</strong></h3>
                    </a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="contact-box center-version">
                    <a href="#">
                        <i class="fa fa-pencil fa-5x"></i>

                        <h3 class="m-b-xs"><strong>Matricula</strong></h3>
                    </a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="contact-box center-version">
                    <a href="#">
                        <i class="fa fa-pie-chart fa-5x"></i>

                        <h3 class="m-b-xs"><strong>Avaliação institucional</strong></h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="contact-box center-version">
                    <a href="{{ route('view', 'historico') }}">
                        <i class="fa fa-history fa-5x"></i>

                        <h3 class="m-b-xs"><strong>Historico</strong></h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="contact-box center-version">
                    <a href="{{ route('view', 'historico') }}">
                        <i class="fa fa-envelope fa-5x"></i>

                        <h3 class="m-b-xs"><strong>Mensagens</strong></h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="contact-box center-version">
                    <a href="{{ route('view', 'historico') }}">
                        <i class="fa fa-university fa-5x"></i>

                        <h3 class="m-b-xs"><strong>Ambiente virtual</strong></h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="contact-box center-version">
                    <a href="{{ route('view', 'historico') }}">
                        <i class="fa fa-thumb-tack fa-5x"></i>

                        <h3 class="m-b-xs"><strong>Mural</strong></h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
