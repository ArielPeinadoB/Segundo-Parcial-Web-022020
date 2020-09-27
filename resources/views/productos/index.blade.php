<link rel="stylesheet" href="{{asset('css/app.css')}}">
    
<style type="text/css">
  h1{
      text-align: center;
  }

</style>  
@section('content')

<div>

    <div class="container">
            @if(Session::has('Mensaje'))

        <div class="alert alert-success" role="alert">
            {{
                Session::get('Mensaje')
            }}    
        </div>
        
            @endif

        <a href="{{url('productos/create')}}" class="btn btn-success">Agregar Producto</a>

        <nav class="navbar navbar-light float-right">
            <form class="form-inline">
                <input name="buscar" class="form-control mr-sm-2" type="search" placeholder="Ingrese coincidencia" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </nav>

    <table class="table table-light table-hover">
        
        <thead>
            <th>#</th>
            <th>Foto</th>
            <th>Descripcion</th>
            <th>Marca</th>
            <th>Acciones</th>

        </thead>

        <tbody>

        @foreach($productos as $producto)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                    <img src="{{ asset('storage').'/'.$producto->Foto}}" alt="" width="100" height="100" class="img-thumbnail img-fluid">
                
                </td>
                <td>{{$producto->Descripcion}}</td>
                <td>{{$producto->Marca}}</td>
                <td>
                    
                
                <a href="{{url('/productos/'.$producto->id.'/edit')}}" class="btn btn-warning">Editar</a> 
                
                <form method="post" action="{{url('/productos/'.$producto->id)}}" style="display:inline">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" onclick="return confirm('Esta seguro de eliminar el producto');" class="btn btn-danger">Eliminar</button>
                </form>
            
            
                </td>
            </tr>
        @endforeach    
        </tbody>
    </table>

    {{$productos->links() }}



</div>    
   