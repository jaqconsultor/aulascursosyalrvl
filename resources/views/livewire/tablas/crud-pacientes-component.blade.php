<div>


<div id="scroll">
<h1>Pacientes</h1>
  <!--  <button type="button" wire:click.prevent="nuevo()" class="btn btn-primary">Nuevo</button>
-->
    <button onclick="mostrarnuevo()" wire:click.prevent="nuevo()" class="btn light">
                        <i class="fa fa-plus-circle mr-1"></i>
                        <img src="/bootstrap-icons/icons/plus.svg" />
                        <span class="d-none d-xl-inline-block">Nuevo</span>
                        </button>

                        <a class="btn light" href="/tablas/verformulario">
                            Formulario
                        </a>   

    <button onclick="mostrarscroll()"  class="btn light">
    <i class="fa fa-plus-circle mr-1"></i>
    <img src="/bootstrap-icons/icons/list.svg" />
    <span class="d-none d-xl-inline-block">Lista</span>
    </button>

    <button onclick="mostrareditar()" class="btn light">
    <i class="fa fa-plus-circle mr-1"></i>
    <img src="/bootstrap-icons/icons/newspaper.svg" />
    <span class="d-none d-xl-inline-block">Detalle</span>
    </button>

    <button wire:click.prevent="nuevo()" class="btn light">
    <i class="fa fa-plus-circle mr-1"></i>
    <img src="/bootstrap-icons/icons/printer.svg" />
    <span class="d-none d-xl-inline-block">Generar PDF</span>
    </button>

    <button wire:click.prevent="nuevo()" class="btn light">
    <i class="fa fa-plus-circle mr-1"></i>
    <img src="/bootstrap-icons/icons/download.svg" />
    <span class="d-none d-xl-inline-block">Generar EXCEL</span>
    </button>

    <button wire:click.prevent="nuevo()" class="btn light">
    <i class="fa fa-plus-circle mr-1"></i>
    <img src="/bootstrap-icons/icons/upload.svg" />
    <span class="d-none d-xl-inline-block">Importar Datos</span>
    </button>

   <!-- 
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>

<button type="button" class="btn btn-link">Link</button>
-->


    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Cedula</th>
                <th>Historia</th>
                <th>Nombre</th>
                <th>Sexo</th>
                <th>Opciones</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
                    <td>{{ $registro->nac }} {{ $registro->cedula }}</td>
                    <td>{{ $registro->numhistoria }}</td>
                    <td>{{ $registro->apellidos }} {{ $registro->nombres }}</td>
                    <td>{{ $registro->sexo }}</td>
                    <td>
                        <a href="" class="btn btn-light" onclick="mostrarver()" wire:click.prevent="edit({{ $registro->id }})">
                                                <i class="fa fa-eye mr-2"></i>
                                                <img src="/bootstrap-icons/icons/eye.svg" />
                                                <span class="d-none d-xl-inline-block">Ver </span>
                                            </a>

                                            <a  onclick="mostrareditar()" class="btn btn-light" href="" wire:click.prevent="edit({{ $registro->id }})">
                                                <i class="fa fa-edit mr-2"></i>
                                                <img src="/bootstrap-icons/icons/newspaper.svg" />
                                                <span class="d-none d-xl-inline-block">Editar </span>
                                            </a><br>


                    </td>
                    <td>                      
                        <a href="" class="btn btn-light" wire:click.prevent="eliminar({{ $registro->id }})">
                            <img src="/bootstrap-icons/icons/trash.svg" />
                            <i class="fa fa-trash text-danger"></i>    <i class="fa-solid fa-trash"></i>
                            <span class="d-none d-xl-inline-block">Eliminar</span>
                        </a>                    
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Cedula</th>
                <th>Historia</th>
                <th>Nombre</th>
                <th>Sexo</th>
                <th>Opciones</th>
                <th></th>
            </tr>
        </tfoot>
    </table>

</div>

<div id="editar">
    <hr>
    <h1>Editar</h1>

	<div class="row">
		<div class="col-md-12">
			<form role="form">
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Email address
					</label>
					<input type="email" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Password
					</label>
					<input type="password" class="form-control" id="exampleInputPassword1" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputFile">
						File input
					</label>
					<input type="file" class="form-control-file" id="exampleInputFile" />
					<p class="help-block">
						Example block-level help text here.
					</p>
				</div>
				<div class="checkbox">
					 
					<label>
						<input type="checkbox" /> Check me out
					</label>
				</div> 
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>

    <a href="" wire:click.prevent="buscar()" onclick="mostrarscroll()">
                            Regresar
                        </a>        
     <hr>
     </div>
   
     <div id="nuevo">
     <h1>Nuevo</h1>
        <div class="row">
		<div class="col-md-12">
			<form role="form">
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Email address
					</label>
					<input type="email" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Password
					</label>
					<input type="password" class="form-control" id="exampleInputPassword1" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputFile">
						File input
					</label>
					<input type="file" class="form-control-file" id="exampleInputFile" />
					<p class="help-block">
						Example block-level help text here.
					</p>
				</div>
				<div class="checkbox">
					 
					<label>
						<input type="checkbox" /> Check me out
					</label>
				</div> 
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>

        <a href="" wire:click.prevent="buscar()" onclick="mostrarscroll()">
                            Regresar
                        </a>        
     <hr>

    </div>


     <div id="ver">

     <hr>
    <h1>Mostrar</h1>

	<div class="row">
		<div class="col-md-12">
			<form role="form">
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Email address
					</label>
					<input type="email" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Password
					</label>
					<input type="password" class="form-control" id="exampleInputPassword1" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputFile">
						File input
					</label>
					<input type="file" class="form-control-file" id="exampleInputFile" />
					<p class="help-block">
						Example block-level help text here.
					</p>
				</div>
				<div class="checkbox">
					 
					<label>
						<input type="checkbox" /> Check me out
					</label>
				</div> 
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>

    <a href="" wire:click.prevent="buscar()" onclick="mostrarscroll()">
                            Regresar
                        </a>        
     <hr>

    </div>
    




</div>


