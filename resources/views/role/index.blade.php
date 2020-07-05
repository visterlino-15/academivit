@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h4">Listado de <b>ROLES</b> <a class="btn  btn-secondary float-right" href="{{ route('role.create') }}">Crear</a></div>

                <div class="card-body">
                  @include('custom.message')
                    <table class="table">
                        <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Slug</th>
                          <th scope="col">Description</th>
                          <th scope="col">Full Access</th>
                          <th colspan="3"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                        <tr>
                          <th scope="row">{{ $role->id }}</th>
                          <td>{{ $role->name }}</td>
                          <td>{{ $role->slug }}</td>
                          <td>{{ $role->description }}</td>
                          <td>{{ $role['full-access'] }}</td>
                          <td>
                          @can('haveaccess','role.show')
                            <a class="btn btn-secondary" href="{{ route('role.show',$role->id)}}">Ver</a> 
                          @endcan
                          </td>  
                          <td> 
                          @can('haveaccess','role.edit')
                            <a class="btn btn-secondary" href="{{ route('role.edit',$role->id)}}">Editar</a> 
                          @endcan
                          </td>  
                          <td> 
                          @can('haveaccess','role.destroy')
                            <form action="{{ route('role.destroy',$role->id)}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-secondary">Eliminar</button>
                            </form>
                          @endcan
                          </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $roles->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
