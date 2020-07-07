@extends('inc.app')
@section('title' ,'| Actividades')
@section('contenido')
<div class="container-fluid mt-4">

          <!-- Content Row -->
           <div class="row">
            <div class="col-md-12 mb-4">
              <div class="card">
                <div class="card-body">
                  @include('custom.message')
                    <form method="POST" action="{{ route('actividad.store') }}" >
                      @csrf
                        <div class="form-group input-field">
                          <label for="actividad">Nombre de la actividad</label>
                         <input type="text" class="form-control"  id="name"  placeholder="Name" name="name"
                            >
                        </div>
                    <a href="#" class="btn btn-light text-info btn-sm" role="button" aria-pressed="true">Cancelar</a>
                    <button type="submit" class="btn btn-success btn-lg">Guardar</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
</div>
@endsection


