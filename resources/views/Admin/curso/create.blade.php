@extends('inc.app')
@section('title' ,'Nueva aula')
@section('contenido')
<div class="container-fluid mt-4">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h2 text-gray-800">Registrar una nueva aula</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-md-12 mb-4">
              <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('aula.store') }}" >
                      @csrf
                        <div class="form-group input-field">
                          <label for="nombreAula">Nombre de la aula</label>
                          <input type="text" class="form-control" name="nombreAula" id="nombreAula">
                          <input type="hidden" class="form-control" name="id_centro" value="{{$id_centro}}">
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