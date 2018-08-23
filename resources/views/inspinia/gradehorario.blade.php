@extends(env('TEMA').'.layouts.base')

@section('titulo')
    Grade de horário
@endsection

@section('ignorecss')
    true
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
        <div class="wrapper wrapper-content">
            <div class="row animated fadeInDown">
                <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Eventos da semana</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div id='external-events'>
                                <div class='fc-h-event fc-event fc-start fc-end external-event aula-calendario'>ADMINISTRAÇÃO DE SISTEMAS PRODUTIVOS</div>
                                <div class='fc-h-event fc-event fc-start fc-end external-event navy-bg evento-com-aula-calendario'>PROVA - DISCIPLINA DE TESTE</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Calendário </h5>
                        </div>
                        <div class="ibox-content">
                            <div id="calendar"></div>
                            <div class="calendario-legenda">
                                <div><span class="calendario-item aula-calendario"></span><span class="legenda">Aula</span></div>
                                <div><span class="calendario-item evento-com-aula-calendario"></span><span class="legenda">Evento</span></div>
                                <div><span class="calendario-item evento-sem-aula-calendario"></span><span class="legenda">Evento (Não haverá aula)</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('js')
<script>

    $(document).ready(function() {

        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green'
        });


        /* initialize the calendar
         -----------------------------------------------------------------*/
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        //.fc-event

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            axisFormat: 'HH:mm',
            timeFormat: 'HH:mm',
            monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Aug', 'Set', 'Out', 'Nov', 'Dez'],
            dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
            dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
            titleFormat: {
                month: 'MMMM YYYY',
                week: "MMM D YYYY",
                day: 'dddd, d MMM YYYY'
            },
            allDayText: 'Dia inteiro',
            buttonText: {
                today: 'Hoje',
                month: 'Mês',
                week: 'Semana',
                day: 'Dia'
            },
            events: [
                {
                    id: 'event1',
                    title: 'ADMINISTRAÇÃO DE SISTEMAS PRODUTIVOS',
                    start: new Date(y, m, d-3, 16, 0),
                    allDay: false,
                    className: 'aula-calendario'
                },
                {
                    id: 'event2',
                    title: 'ADMINISTRAÇÃO DE SISTEMAS PRODUTIVOS',
                    start: new Date(y, m, d+4, 16, 0),
                    allDay: false,
                    className: 'aula-calendario'
                },
                {
                    id: 'event3',
                    title: 'PALESTRA SOBRE SEGURANÇA NO TRABALHO',
                    start: new Date(y, m, d+6, 15, 0),
                    allDay: false,
                    className: 'evento-sem-aula-calendario'
                },
                {
                    id: 'event4',
                    title: 'PROVA - ADMINISTRAÇÃO DE SISTEMAS PRODUTIVOS',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    className: 'evento-com-aula-calendario',
                    allDay: false
                }
            ],
        });
    });
</script>
@endsection
