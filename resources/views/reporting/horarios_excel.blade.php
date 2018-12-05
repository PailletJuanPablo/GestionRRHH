<table class="table table-striped">
    <thead>
       
            <tr>
                    <th colspan="12" style="text-align: center">
                            <h1 style="text-align: center"> Informe de Horarios 2018 </h1>
                    </th>
           
                </tr>

            <tr>
                <th colspan="4" >Nombre Agente</th>
                <th colspan="2">Horas Salidas Particulares</th>
                <th colspan="2">Horas Extras Realizadas</th>
                <th colspan="2">Francos Compensatorios</th>
                <th colspan="2"> Total </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td colspan="4">{{$empleado->apellido_nombre}}</td>
            <td  colspan="2">{{$empleado->salidasParticulares->count()}}</td>
            <td colspan="2">{{$empleado->horasExtras->count()}}</td>
            <td colspan="2">{{ $empleado->francosCompensatorios->count() }} </td>
            <td colspan="2"> {{ $empleado->getReportingTotal() }}</td>
        </tr>

        @endforeach
            
            
        </tbody>
    </table>
