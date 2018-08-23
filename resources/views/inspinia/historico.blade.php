@extends(env('TEMA').'.layouts.base')

@section('titulo')
    Historico
@endsection

@section('content')

    <h1>Historico</h1>

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




        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>1º SEMESTRE </h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>

                </div>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>Descriçao</th>
                            <th>Periodo</th>
                            <th>Nota</th>
                            <th>Freq.</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>ÁLGEBRA LINEAR E GEOMETRIA ANALÍTICA</td>
                            <td>2017/1</td>
                            <td>9.7</td>
                            <td>90%</td>
                        </tr>
                        <tr>
                            <td>ALGORITMOS E PROGRAMAÇÃO</td>
                            <td>2017/2</td>
                            <td>10</td>
                            <td>80%</td>
                        </tr>
                        <tr>
                            <td>CÁLCULO I</td>
                            <td>2017/2</td>
                            <td>10</td>
                            <td>80%</td>
                        </tr>
                        <tr>
                            <td>INTRODUÇÃO À COMPUTAÇÃO E INFORMÁTICA </td>
                            <td>2017/2</td>
                            <td>10</td>
                            <td>80%</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>2º SEMESTRE </h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>

            </div>
        </div>
        <div class="ibox-content">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>Descriçao</th>
                        <th>Periodo</th>
                        <th>Nota</th>
                        <th>Freq.</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>CÁLCULO II</td>
                        <td>2017/1</td>
                        <td>9.7</td>
                        <td>90%</td>
                    </tr>
                    <tr>
                        <td>CIRCUITOS ELÉTRICOS I</td>
                        <td>2017/2</td>
                        <td>10</td>
                        <td>80%</td>
                    </tr>
                    <tr>
                        <td>FÍSICA - ELETROMAGNETISMO [FÍSICA PARA ENGENHARIA I]</td>
                        <td>2017/2</td>
                        <td>10</td>
                        <td>80%</td>
                    </tr>
                    <tr>
                        <td>QUÍMICA PARA ENGENHARIA</td>
                        <td>2017/2</td>
                        <td>10</td>
                        <td>80%</td>
                    </tr>
                    </tbody>
                </table>
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
    </script>
@endsection
