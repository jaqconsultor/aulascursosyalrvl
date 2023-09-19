<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts 
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
-->

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  

    <link rel="stylesheet" href="/cdn.datatables.net_1.13.6_css_jquery.dataTables.min.css" crossorigin="anonymous">

    <!-- Scripts 
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    -->
    @livewireStyles
</head>
<body>
    <div id="app">

                        <!-- Authentication Links -->
                        @guest
                       
                        
                        @else
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <img src="/images/TRAUMATOLOGIA_p.jpg" alt="logo" width="100" class="shadow-light  mb-5 mt-2">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }} ({{ config('app.locale', 'es') }})
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <livewire:menu-turbo-component />

                    </ul>
                </div>
            </div>
        </nav>
        @endguest

        <main class="py-4">
            @yield('content')
        </main>

        @include('footer')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!--     <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    </script> -->

   <!--  <script src="https://code.jquery.com/jquery-3.7.0.js">-->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    
<script>

$(document).ready(function(){
   cargarMiTabla();
});
function cargarMiTabla(){
 var tabla = $('#example').DataTable();

}

</script>

<script>

$(document).ready(function(){
   //alert("mensaje");

	$('#scroll').show();
			$('#editar').hide();
			$('#nuevo').hide();
			$('#ver').hide();

});





			
//  $(document).ready(function() {
//  });
      </script>


<script type="text/javascript">


function mostrarver() {
            $('#scroll').hide();
			$('#editar').hide();
			$('#nuevo').hide();
			$('#ver').show();
		
		if ($('#encuadernacion').is(':hidden')) {
		}
   	
		return 1;
	}


function mostrarnuevo() {
            $('#scroll').hide();
			$('#editar').hide();
			$('#nuevo').show();
			$('#ver').hide();
		
		if ($('#encuadernacion').is(':hidden')) {
		}
   	
		return 1;
	}


function mostrareditar() {
            $('#scroll').hide();
			$('#editar').show();
			$('#nuevo').hide();
			$('#ver').hide();
		
		if ($('#encuadernacion').is(':hidden')) {
		}
   	
		return 1;
	}


	function mostrarscroll() {
            $('#scroll').show();
			$('#editar').hide();
			$('#nuevo').hide();
			$('#ver').hide();
		
		if ($('#encuadernacion').is(':hidden')) {
		}
   	
		return 1;
	}

    </script>


      @livewireScripts
</body>
</html>
