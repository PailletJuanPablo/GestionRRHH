<!-- Bootstrap Core Css -->
<link href="{{ asset('resources/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
</link>
<!-- Custom Css -->
<link href="{{ asset('resources/css/style.css')}}" rel="stylesheet">
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
