<div>

       

        <table class="table table-hover table-dark text-center table-striped text-center table-bordered">
            <thead>
                <tr>
                    <th scope="col-sm-1">Nombre </th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Puesto de trabajo</th>
                    <th scope="col">CURP</th>
                    <th scope="col">RFC</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Codigo postal</th>
                    <th scope="col">Salario</th>
                    <th scope="col">Email</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Area</th>
                    <th scope="col">Facebok</th>
                    <th scope="col">Telefono</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($empleado as $emp)
                    <tr>
                        <td>{{ $emp->nombre.$emp->segundoNombre.$emp->apellidoPaterno.$emp->apellidoMaterno }}</td>
                        <td>{{ $emp->sexo }}</td>
                        <td>{{ $emp->fechaNacimiento }}</td>
                        <td>{{ $emp->puesto }}</td>
                        <td>{{ $emp->curp }}</td>
                        <td>{{ $emp->rfc }}</td>
                        <td>{{ $emp->estado }}</td>
                        <td>{{ $emp->cp }}</td>
                        <td>{{ $emp->salario }}</td>
                        <td>{{ $emp->correoElectronico }}</td>
                        <td>{{ $emp->horario }}</td>
                        <td>{{ $emp->area }}</td>
                        <td>{{ $emp->facebook }}</td>
                        <td>{{ $emp->telefono }}</td>
                        <td>
                            <a href="{{ route('empleado.edit', $emp) }}" title="Editar Empleado"
                                class="btn-sm btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('empleado.delete', $emp) }}" title="Borrar Empleado"
                                class="btn-sm btn btn-danger"><i class="fa fa-trash"></i></a>
                            <a href="{{ route('empleado.mostrar', $emp) }}" title="Mostrar Empleado"
                                class="btn-sm btn btn-info"><i class="fa fa-eye"></i></a>
                                
                                <!-- /.ejemplo-class -->
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        {{ $empleado->links() }}
        <div class="float-right mb-2">
            <a href="{{ route('empleado.create') }}" type="button" class="btn-sm btn btn-success"><i
                    class="fa fa-plus-circle"></i> Agregar Empleado</a>
        </div>

</div>
