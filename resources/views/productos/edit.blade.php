<link rel="stylesheet" href="{{asset('css/app.css')}}">

<style type="text/css">
  h1{
      text-align: center;
  }

</style>  

<div class="container">

    <form action=" {{url('/productos/'. $producto->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}  
        {{ method_field('PATCH') }}   
        @include('productos.form', ['Modo'=>'modificar']);



    
        <!--{{$producto->Foto}} solo la ruta
        <input  type="file" name="Foto" id="Foto" value="">-->

        
    </form>


</div>
