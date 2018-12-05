@extends('layouts.header') 
@section('title', 'Registrar Ausencia') 
@section('content')
    <div class="row"> 
        <div class="col-md-12"> 
    <div class="card">
        <div class="header bg-blue">
            <h3 class="title"> Informe de Cambio de Horarios 2018</h3>
            <a target="_blank" href="{{ route('reporte_horas_pdf') }}" class="btn bg-red" style="width:300px"> Exportar PDF </a>
            <br>
            <br>

            <a target="_blank" href="{{ route('reporte_horas_excel') }}" class="btn bg-green " style="width:300px"> Exportar Excel </a>
            <br>

        </div>
        <div class="body">
            <table class="table responsive table-striped">
                <thead>
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
        </div>
    </div>
</div>
@endsection
