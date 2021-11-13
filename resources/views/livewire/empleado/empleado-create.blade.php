<div>
    <form wire:submit.prevent="crear">
        <div class="card">
            <div class="card-header bg-dark text-white">
                Agregar Empleado
            </div>
            <div class="card-body bg-light text-white">
                @include('livewire.empleado.formulario')
            </div>
            <div class="card-footer text-muted bg-dark  ">
                <button class="btn btn-success btn-sm"><i class="fa fa-save"></i> Guardar</button>
                <a href="{{ route('empleado.index') }}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>

</div>
