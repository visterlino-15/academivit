 <!-- navbar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar static-top">

          <!-- Sidebar Toggle (Topbar) -->
          <ul class="navbar-nav mr-auto"> 
            <li class="boton-sidebar nav-item">
              <i class="fa fa-bars"></i>
            </li>
            <!--<li class="boton-sidebar nav-item" id="sidebarToggleTop">
              <i class="fa fa-bars"></i>
            </li>-->
          </ul>

          

          <ul class="navbar-nav ml-auto"> 

          @guest
            <li class="nav-item mr-auto">
              <a class="d-flex align-items-center justify-content-center" href="/">
                  <img class="img-profile" style="width: 50px;" src="../img/logo.png">
                  <h1 class="text-white h3 ml-2 d-md ">ACADEMVIT</h1>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="{{ request()->is('login') ? '/' :'login' }}" >{{ request()->is('login') ? 'Inicio': 'Iniciar sesión' }}</a>
            </li>
          @else
                <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-sign-in-alt fa-sm"> </i> Iniciar sesión
              </a>

              <div class="dropdown-menu dropdown-menu-right p-0 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form method="POST" class="form-inline mr-auto w-100 navbar-search" action="{{ route('login') }}">
                        @csrf
                  <div class="input-group col">
                    <input type="email" class="col-4 form-control bg-light border-1 small" placeholder="Correo electronico" aria-label="Search">
                    <input type="password" class="col-4 form-control bg-light border-1 small" placeholder="Contraseña" >
                    <div class="input-group-append">
                      <button class="btn btn-success" type="submit">
                      <i class="fas fa-sign-in-alt fa-sm"></i> Iniciar sesión
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
              
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-bell fa-fw"></i>

                <span class="badge badge-danger badge-counter">3+</span> 
                
              </a>

              <div class="dropdown-list dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Notificaciones
                </h6>

                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <p class="dropdown-item text-center small text-gray-500 mb-0">No tiene notificaciones . .</p>
              </div>
            </li>

            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-envelope fa-fw"></i>
              </a>

              <div class="dropdown-list dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Mensajes
                </h6>

                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                <p class="dropdown-item text-center small text-gray-500 mb-0">No tiene mensajes . .</p>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="{{ asset('img/user.png') }}">
              </a>

              <div class="dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-header ">{{ Auth::user()->name }}</div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configuraciones
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Actividad
                </a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logout">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar sesion
                </a>
              </div>
            </li>
          </ul>
          @endguest
          
        </nav>