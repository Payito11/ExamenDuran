<div>
    <div class="mx-auto card center text-white bg-dark" style="width: 18rem;">
        <h2 class="mx-auto d-block text-center">Deseas eliminar al Empleado?</h2>
        <div class="card-body mx-auto d-block">
          <h5 class="card-title">Primer nombre: {{$empleado->nombre}}</h5>
          <p class="card-text">Segundo nombre: {{$empleado->segundoNombre}}</p>
          <p class="card-text">Apellido paterno: {{$empleado->apellidoPaterno}}</p>
          <p class="card-text">Apellido materno: {{$empleado->apellidoMaterno}}</p>
          <p class="card-text">sexo: {{$empleado->sexo}}</p>
          <p class="card-text">Fecha de nacimiento: {{$empleado->fechaNacimiento}}</p>
          <p class="card-text">Puesto de trabajo: {{$empleado->puesto}}</p>
          <p class="card-text">CURP: {{$empleado->curp}}</p>
          <p class="card-text">RFC: {{$empleado->rfc}}</p>
          <p class="card-text">Genero: {{$empleado->estado}}</p>
          <p class="card-text">Codigo postal: {{$empleado->cp}}</p>
          <p class="card-text">Salario: {{$empleado->salario}}</p>
          <p class="card-text">Correo electronico: {{$empleado->correoElectronico}}</p>
          <p class="card-text">Horario: {{$empleado->horario}}</p>
          <p class="card-text">Area: {{$empleado->area}}</p>
          <p class="card-text">Facebook: {{$empleado->facebook}}</p>
          <p class="card-text">Telefono: {{$empleado->telefono}}</p>

          <button wire:click="delete" class="btn btn-danger btn-sm mx-auto ">Confirmar</button>
          <a href="{{route('empleado.index')}}" class="btn btn-secondary btn-sm mx-auto ">Cancelar</a>
        </div>
      </div>
</div>
