<div class="card">
                <div class="card-header">Buscar Medicos</div>

                <div class="card-body">
                         
                <div>

                    <input class="form-control" id="buscar" type="search" placeholder="Search" aria-label="Search" data-width="250">
                    <button wire:click.prevent="buscar" > Buscar </button>
                    <button wire:click.prevent="borrar" > Limpiar </button>
                    <hr>
                    @if( $cita == 1 )         
                        @if( $registros != null )         
                            @foreach($registros as $p)
                                <h2>Dr. Victor Jose</h2>
                                Medico Ginecologia<br>
                                Cumana - Sucre - Venezuela
                                <br>
                                <button wire:click.prevent="nuevacita" > Nueva Cita </button>
                                <hr>
                            @endforeach
                        @endif
                    @endif
                    @if( $cita == 2 )         
                        <label for="birthdaytime">Cita (date and time):</label>
                        <input type="datetime-local" id="birthdaytime" name="birthdaytime">
                        <button wire:click.prevent="hacercita" > Hacer Cita </button>
                        <hr>
                    @endif

                    @if( $cita == 3 )
                        <h3>Cita Realizada</h3>
                        <button wire:click.prevent="nuevabusqueda" > Nueva Busqueda </button>
                        <hr>
                    @endif

                    </div>

                </div>
</div>


