
<link rel="stylesheet" href="{{asset('css/app.css')}}">

<style type="text/css">
  h1{
      text-align: center;
  }

</style>  
@section('content')

<div class="container">

    <form action="{{url('/productos')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
    {{ csrf_field() }}   
    @include('productos.form', ['Modo'=>'crear']);
    
    </form>

</div>