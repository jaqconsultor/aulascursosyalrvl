<div class="card">
                <div class="card-header">Ver Pacientes</div>

                <div class="card-body">
                         
                <div>

                    <button wire:click.prevent="buscar" > Refrescar </button>
                    <hr>
                    @if( $cita == 1 )         
                        @if( $registros != null )         
                            @foreach($registros as $p)
                            <strong>Victor Jose</strong>
                                - Medico Dr Virtor Garcia - Ginecologia
                                <br>
                                <button wire:click.prevent="atender" > Atender </button>
                                <hr>
                            @endforeach
                        @endif
                    @endif
                    @if( $cita == 2 )
                        <h3>Paciente Atendido</h3>
                        <hr>
                    @endif

                    </div>

                </div>
</div>


