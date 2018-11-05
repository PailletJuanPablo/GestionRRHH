<table>
    <thead>
        <tr>
            <th>Apellido y Nombre</th>
            <th>Antiguedad</th>
            <th>Área</th>
            <th>Horario</th>
            <th>Domicilio</th>
            <th>Telefono</th>
            <th>Cuil</th>
            <th>Situación de Revista</th>
            <th>Fecha de Ingreso</th>


        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $e)
        <tr>
            <td>{{ $e->apellido_nombre }}</td>
            <td> {{ $e->antiguedad() }}</td>
            <td>{{ $e->area }}</td>
            <td>{{ $e->horario }}</td>
            <td>{{ $e->domicilio }}</td>
            <td>
                {{ $e->tel }}
            </td>
            <td>{{ $e->cuil }}</td>
            <td>{{ $e->situacion_revista }}</td>
            <td>
                <?php
                echo date("d-m-Y", strtotime($e->fecha_ingreso));
                    ?>
            </td>


        </tr>
        @endforeach
    </tbody>
</table>
