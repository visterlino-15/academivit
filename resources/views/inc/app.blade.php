
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AcademyVIT @yield('title')</title>
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" />

  <link href="{{ asset('lib/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>
  <body id="page-top">
  <div id="wrapper" >

   

    @include('inc.sidebar')

    <!-- contenido -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content" class="bg-contenido">

       @include('inc.navbar')

        <!-- CONTENIDO -->
        @yield('contenido')
        @include('inc.modal.nuevaAula')
      </div>



    </div>

  </div>
  
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


@include('inc.modal.logout')

  <!-- Modal agregar leccion-->
<div class="modal fade bd-example-modal-lg" id="NuevaLeccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <form>
        <div class="modal-body">
          <div class="form-group row">
            <label for="titulo" class="col-sm-2 col-form-label">Título</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="titulo" placeholder="Ingresa un titulo para la leccion">
            </div>
          </div>
          <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Descripción</legend>
              <div class="col-sm-10">
                <textarea class="form-control" id="descripcion" rows="3"></textarea>
              </div>
            </div>
          </fieldset>
          <div class="form-group row">
            <label for="titulo" class="col-sm-2 col-form-label">Fecha de publicación</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="fechaPUblicacion" name="fechaPUblicacion">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Agregar lección</button>
        </div>
      </form>
    </div>
  </div>
</div>

    <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('js/materialize.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('js/waves.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('js/input-file.js') }}"></script>
  <script src="{{ asset('js/sb-admin-2.js')}}"></script>
  <script src="{{ asset('js/main.js')}}"></script>

  </body>
</html>
