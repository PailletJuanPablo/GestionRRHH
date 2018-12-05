<!-- Bootstrap Material Datetime Picker Css -->
<link href="{{ asset('resources/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
</link>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<!-- Bootstrap Core Css -->
<link href="{{ asset('resources/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
</link>
<link href="{{ asset('resources/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet">
</link>
<!-- Waves Effect Css -->
<link href="{{ asset('resources/plugins/node-waves/waves.css')}}" rel="stylesheet">
</link>
<!-- Animation Css -->
<link href="{{ asset('resources/plugins/animate-css/animate.css')}}" rel="stylesheet">
</link>
<!-- Morris Chart Css-->
<link href="{{ asset('resources/plugins/morrisjs/morris.css')}}" rel="stylesheet">
</link>
<!-- Custom Css -->
<link href="{{ asset('resources/css/style.css')}}" rel="stylesheet">
</link>
<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="{{ asset('resources/css/themes/theme-light-blue.css')}}" rel="stylesheet">
</link>

<table class="table table-striped">
    <thead>
       
            <tr>
                    <th colspan="5" style="text-align: center">
                            <h1 style="text-align: center"> Informe de Horarios 2018 </h1>
                    </th>
           
                </tr>

            <tr>
                <th>Nombre Agente</th>
                <th>Horas Salidas Particulares</th>
                <th>Horas Extras Realizadas</th>
                <th>Francos Compensatorios</th>
                <th> Total </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{$empleado->apellido_nombre}}</td>
            <td>{{$empleado->salidasParticulares->count()}}</td>
            <td>{{$empleado->horasExtras->count()}}</td>
            <td>{{ $empleado->francosCompensatorios->count() }} </td>
            <td> {{ $empleado->getReportingTotal() }}</td>
        </tr>

        @endforeach
            
            
        </tbody>
    </table>
