<nav class="navbar navbar-secondary navbar-expand-lg">
          <ul class="navbar-nav">

<!--
          <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @lang('dicc.funciones')
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/funciones/verrerporte"> @lang('dicc.DescargarReporte') </a>
                                    <a class="dropdown-item" href="/funciones/verrerporte1"> @lang('dicc.VerArchivoPDF') </a>
                                    <a class="dropdown-item" href="/funciones/subirarchivo"> @lang('dicc.SubirArchivo') </a>
                                    <a class="dropdown-item" href=""> @lang('dicc.SubirImagenes') </a>
                                    <a class="dropdown-item" href=""> @lang('dicc.TomarFoto') </a>
                                    <a class="dropdown-item" href="/funciones/pruebaEmail"> @lang('dicc.EnviarCorreo') </a>
                                    <a class="dropdown-item" href="/funciones/verscroll"> @lang('dicc.VerDataTable') </a>

                                </div>


                            </li>


                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @lang('dicc.Componentes')
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/vercarusel"> @lang('dicc.VerCarusel') </a>
                                    <a class="dropdown-item" href="/buscarmedicos"> @lang('dicc.Buscar_Medicos') </a>
                                    <a class="dropdown-item" href="/verpacientes"> @lang('dicc.Pacientes_por_Atender') </a>
                                </div>

                            </li>

-->



<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @lang('dicc.Choose_a_language')
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('set_language', ['es'])}}">@lang('dicc.Espaniol')</a>
                                    <a class="dropdown-item" href="{{route('set_language', ['en'])}}">@lang('dicc.Ingles')</a>
                                </div>
                            </li>


@foreach ($modulos as $modulo)
<li class="nav-item dropdown">
    

            @foreach ($menues as $menu)
                @if( $modulo->modulo == $menu->modulo)

                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ $menu->menu }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    @foreach ($registros as $registro)
                    
                        @if( $registro->menu == $menu->menu)
                            
                                        <a class="dropdown-item" href="{{ $registro->ruta }}"> 
                                            <img src="{{ $registro->icon }}" />
                                            {{ $registro->submenu }}
                                        </a>
            
                        @endif
                        

                    @endforeach
                    </div>

                    @endif
             @endforeach

             </li>

@endforeach

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        @lang('dicc.Logout')
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>




<!--             <li class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>@lang('dicc.funciones')</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="dropdown-item" href="/funciones/verrerporte"> @lang('dicc.DescargarReporte') </a></li>
                <li class="nav-item"><a class="dropdown-item" href="/funciones/verrerporte1"> @lang('dicc.VerArchivoPDF') </a></li>
                <li class="nav-item"><a class="dropdown-item" href="/funciones/subirarchivo"> @lang('dicc.SubirArchivo') </a></li>
                <li class="nav-item"><a class="dropdown-item" href=""> @lang('dicc.SubirImagenes') </a></li>
                <li class="nav-item"><a class="dropdown-item" href=""> @lang('dicc.TomarFoto') </a></li>
                <li class="nav-item"><a class="dropdown-item" href="/funciones/pruebaEmail"> @lang('dicc.EnviarCorreo') </a></li>
              </ul>
            </li>     -->       

            <!-- <li class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>@lang('dicc.Componentes')</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="dropdown-item" href="/buscarmedicos"> @lang('dicc.Buscar_Medicos') </a></li>
                <li class="nav-item"><a class="dropdown-item" href="/verpacientes"> @lang('dicc.Pacientes_por_Atender') </a></li>
              </ul>
            </li>     -->       

            <!--<li class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>@lang('dicc.Choose_a_language')</span></a>
              <ul class="dropdown-menu">
              <li class="nav-item"><a class="dropdown-item" href="{{route('set_language', ['es'])}}">@lang('dicc.Espaniol')</a></li>
              <li class="nav-item"><a class="dropdown-item" href="{{route('set_language', ['en'])}}">@lang('dicc.Ingles')</a></li>
              </ul>
            </li>            

            <li class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span><img alt="image" src="{{ Auth::user()->avatar }}" class="rounded-circle mr-1" width="50px" height="50px"> {{ Auth::user()->name }}</span></a>
              <ul class="dropdown-menu">
              <li class="nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        @lang('dicc.Logout')
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
              </li>

            </ul>-->
            </li>            


          </ul>
      </nav>


