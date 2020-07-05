 <!-- Sidebar -->
    <ul class="navbar-nav bg-sidebar sidebar sidebar-dark accordion" id="accordionSidebar">

      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('aula.index')}}">
        <div class="sidebar-brand-icon ">
          <img class="img-profile" style="width: 50px;" src="../img/logo.png">
        </div>
        <div class="sidebar-brand-text mx-3">AcademVIT</div>
      </a>

      <hr class="sidebar-divider my-0">

      @can('haveaccess','aula.index')
      <li class="nav-item {{ request()->is('aula*') ? 'active' : ''}}" >
        <a class="nav-link" href="{{route('aula.index')}}">
          <i class="fas fa-fw fa-university"></i>
          <span>Aulas</span></a>
      </li>
      @endcan

      <hr class="sidebar-divider">
      @if(request()->path() == 'curso')
      <div class="sidebar-heading sidebar-aula">
        # Nombre-curso
      </div>

      <li class="nav-item ">
        <a class="nav-link" href="{{route('leccion.index')}}">
          <i class="fas fa-fw fa-chalkboard-teacher"></i>
          <span>Lección</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{route('nota.index')}}">
          <i class="fas fa-fw fa-file-alt"></i>
          <span>Notas</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('participante.index')}}">
          <i class="fas fa-fw fa-users"></i>
          <span>Participantes</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('archivo.index')}}">
          <i class="fas fa-fw fa-folder-open"></i>
          <span>Archivos</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('multimedia.index')}}">
          <i class="fas fa-fw fa-film"></i>
          <span>Multimedia</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('debate.index')}}">
          <i class="fas fa-fw fa-comments"></i>
          <span>Debates</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('tarea.index')}}">
          <i class="fas fa-fw fa-list"></i>
          <span>Tareas</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('examen.index')}}">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Exámenes</span>
        </a>
      </li>
      @endif

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>