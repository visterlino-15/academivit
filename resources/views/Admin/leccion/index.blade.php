@extends('inc.app')
@section('title' ,'| Lecciones')
@section('contenido')
		<div class="container-fluid ">

          <div class="row">
            <div class="col-md-12">
              <a href="#" data-toggle="modal" data-target="#NuevaLeccion">
              <div class="jumbo jumbotron-fluid">
                <div class="container text-center ">
                  <h4 class="font-weight-bold">Agregar nueva lección</h4>
                </div>
              </div>
              </a>
            </div>
            <div class="col-md-12">
              <div class="card shadow mb-4">

                <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between bg-navbar">
                  <h6 class="m-0 font-weight-bold text-white">Nombre lección</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Opciones:</div>
                      <a class="dropdown-item" href="#">Modificar</a>
                      <a class="dropdown-item" href="#">Eliminar</a>
                    </div>
                  </div>
                </div>

                <div class="card-body">Descripción de lección</div>
              </div>
            </div>

          </div>
        </div>
@endsection