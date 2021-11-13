<div>
    <form wire:submit.prevent="editar">
        <div class="card">
            <div class="card-header bg-dark text-white">
                Modificar Empleado
            </div>
            <div class="card-body">
                @include('livewire.empleado.formulario')
            </div>
            <div class="card-footer text-muted bg-dark text-white">
                <button class="btn btn-success btn-sm"><i class="fa fa-iedit"></i> Modificar</button>
                <a href="{{ route('empleado.index') }}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>

</div>
