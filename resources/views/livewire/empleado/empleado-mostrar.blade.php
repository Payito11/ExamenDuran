<div>
    <div class="container container-fluid mx-auto card center text-white bg-dark" style="width: 18rem;">
        <h2 class="mx-auto d-block text-center">Informacion del Empleado:</h2>
        <div class="card-body mx-auto d-block">
          <p class="card-title">1-. Primer nombre: {{$empleado->nombre}}</p>
          <p class="card-text">2-. Segundo nombre: {{$empleado->segundoNombre}}</p>
          <p class="card-text">3-. Apellido paterno: {{$empleado->apellidoPaterno}}</p>
          <p class="card-text">4-. Apellido materno: {{$empleado->apellidoMaterno}}</p>
          <p class="card-text">5-. Sexo: {{$empleado->sexo}}</p>
          <p class="card-text">6-. Fecha de nacimiento: {{$empleado->fechaNacimiento}}</p>
          <p class="card-text">7-. Puesto de trabajo: {{$empleado->puesto}}</p>
          <p class="card-text">8-. CURP: {{$empleado->curp}}</p>
          <p class="card-text">9-. RFC: {{$empleado->rfc}}</p>
          <p class="card-text">10-. Genero: {{$empleado->estado}}</p>
          <p class="card-text">11-. Codigo postal: {{$empleado->cp}}</p>
          <p class="card-text">12-. Salario: {{$empleado->salario}}</p>
          <p class="card-text">13-. Correo electronico: {{$empleado->correoElectronico}}</p>
          <p class="card-text">14-. Horario: {{$empleado->horario}}</p>
          <p class="card-text">15-. Area: {{$empleado->area}}</p>
          <p class="card-text">16-. Facebook: {{$empleado->facebook}}</p>
          <p class="card-text">17-. Telefono: {{$empleado->telefono}}</p>
          <a href="{{route('empleado.index')}}" class="btn btn-secondary btn-sm mx-auto ">Regresar</a>
        </div>
      </div>
</div>