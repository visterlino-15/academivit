@extends('inc.app')
@section('title' ,'| Listado de aulas')
@section('contenido')
<div class="container-fluid mt-4">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class=" mb-0 text-gray-800">Aulas</h3>
            <div class="d-none  d-sm-inline-block">
              <a  href="#" data-toggle="modal" data-target="#nuevoAula" class="btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-lg text-white"></i> Nueva aula</a>
          <a  href="Institucion.html" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-cog fa-lg text-white"></i> Administración</a>
            </div>
            
          </div>

          <!-- Content Row -->
          <div class="row">
            
          </div>
        </div>
        
        @include('inc.modal.nuevoAula')
        
@endsection