
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
  <link href="{{ asset('css/login.css') }}" rel="stylesheet">
  </head>
  <body>

      <!-- CONTENIDO -->
      @include('inc.navbar')
      @yield('contenido')


      @include('inc.modal.addAula')

<!-- Modal agregar docente-->
<div class="modal fade" id="loginProfesor" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content px-3 pt-4">
      <form >
        <div class="modal-body ">
          <div class="form-group row">
            <label for="codigo" class="font-weight-bold">Código de invitación</label>
              <input type="password" class="form-control" id="codigo">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary">Vincular</button>
          <button type="button" class="btn btn-success">Registrar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal agregar estudiante-->
<div class="modal fade" id="loginEstudiante" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content px-3 pt-4">
      <form >
        <div class="modal-body ">
          <div class="form-group row">
            <label for="codigo" class="font-weight-bold">Código de invitación</label>
              <input type="password" class="form-control" id="codigo">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary">Vincular</button>
          <button type="button" class="btn btn-success">Registrar</button>
        </div>
      </form>
    </div>
  </div>
</div>

@include('inc.modal.logout')
    <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('js/sb-admin-2.min.js')}}"></script>
  <script src="{{ asset('js/main.js')}}"></script>

  <script>

$(document).ready(function(){
  $('#datosUser-nav').removeAttr('href data-toggle');
  $('#verificar-nav').removeAttr('href data-toggle');

  $('#next_datosUser').click(function(){
    var error = '';
    if($.trim($('#nombreaula').val()).length == 0){
     error = 'Debes llenar este campo';
     $('#validarNombreaula').text(error);
     $('#nombreaula').addClass('is-invalid');
    }else{
       $('#nombreaula').removeClass('is-invalid');
      $('#nombreaula').addClass('is-valid');
       $('#validarNombreaula').text('');
    }
    
    if(error.length == 0){
      $('#datosUser-nav').attr('href', '#datosUser-tab');
      $('#datosUser-nav').attr('data-toggle', 'tab');
      $('#datosUser-nav').addClass('active');
      $('#datosUser-tab').addClass('active');
      $('#datosUser-tab').addClass('show');
      $('#datosCentro-nav').removeAttr('href data-toggle');
      $('#datosCentro-nav').removeClass('active');
      $('#datosCentro-tab').removeClass('active');
      $('#datosCentro-tab').removeClass('show');
    }
  });
  $('#previous_datosUser').click(function(){
    $('#datosCentro-nav').attr('href', '#datosCentro-tab');
    $('#datosCentro-nav').attr('data-toggle', 'tab');
    $('#datosCentro-nav').addClass('active');
    $('#datosCentro-tab').addClass('active');
    $('#datosCentro-tab').addClass('show');
    $('#datosUser-nav').removeAttr('href data-toggle');
    $('#datosUser-nav').removeClass('active');
    $('#datosUser-tab').removeClass('active');
    $('#datosUser-tab').removeClass('show');
  });

  $('#next_Verificar').click(function(){
    var error = '';

    if($.trim($('#email').val()).length == 0){
     error = 'Debes llenar este campo';
     $('#validarEmail').text(error);
     $('#email').addClass('is-invalid');
    }else{
       $('#email').removeClass('is-invalid');
      $('#email').addClass('is-valid');
       $('#validarEmail').text('');
    }

    if($.trim($('#nombreUser').val()).length == 0){
     error = 'Debes llenar este campo';
     $('#validarNombreUser').text(error);
     $('#nombreUser').addClass('is-invalid');
    }else{
       $('#nombreUser').removeClass('is-invalid');
      $('#nombreUser').addClass('is-valid');
       $('#validarNombreUser').text('');
    }

    if($.trim($('#pass').val()).length == 0){
     error = 'Debes llenar este campo';
     $('#validarPass').text(error);
     $('#pass').addClass('is-invalid');
    }else{
       $('#pass').removeClass('is-invalid');
      $('#pass').addClass('is-valid');
       $('#validarPass').text('');
    }

    if($.trim($('#repPass').val()).length == 0){
     error = 'Debes llenar este campo';
     $('#validarRepPass').text(error);
     $('#repPass').addClass('is-invalid');

    }else if ($.trim($('#repPass').val()) != $.trim($('#pass').val())) {
        error = 'Contraseñas no coinciden';
        $('#validarRepPass').text(error);
      $('#repPass').addClass('is-invalid');
     }else{
       $('#repPass').removeClass('is-invalid');
      $('#repPass').addClass('is-valid');
       $('#validarRepPass').text('');
    }

    if(error.length ==0){

      $('#centro-name').text($('#nombreCentro').val());
      $('#user-name').text($('#nombreUser').val()+' '+$('#apellidoUser').val());
      $('#user-email').text($('#email').val());


      $('#verificar-nav').attr('href', '#verificar-tab');
      $('#verificar-nav').attr('data-toggle', 'tab');
      $('#verificar-nav').addClass('active');
      $('#verificar-tab').addClass('active');
      $('#verificar-tab').addClass('show');
      $('#datosUser-nav').removeAttr('href data-toggle');
      $('#datosUser-nav').removeClass('active');
      $('#datosUser-tab').removeClass('active');
      $('#datosUser-tab').removeClass('show');
    }
  });
  $('#previous_verificar').click(function(){
    $('#datosUser-nav').attr('href', '#datosUser-tab');
    $('#datosUser-nav').attr('data-toggle', 'tab');
    $('#datosUser-nav').addClass('active');
    $('#datosUser-tab').addClass('active');
    $('#datosUser-tab').addClass('show');
    $('#verificar-nav').removeAttr('href data-toggle');
    $('#verificar-nav').removeClass('active');
    $('#verificar-tab').removeClass('active');
    $('#verificar-tab').removeClass('show');
  });
});
</script>

  </body>
</html>
