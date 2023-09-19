@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
				<h5 class="card-header">
					@lang('dicc.ListadoDeRoles')
				</h5>
				<div class="card-body">
                    <embed src="/archivo.pdf" type="application/pdf" width="100%" height="500px;" id="reportePDF" toolbar="false"></embed>
				</div>
				<div class="card-footer">
                    <a href="{{ route('roles.index') }}" class="btn btn-default" >
                    <img src="/bootstrap-icons/icons/list.svg" />
                    <span class="d-none d-xl-inline-block">@lang('dicc.VerLista')</span> 
                    </a>
				</div>
			</div>
</div>
</div>

@endsection


