@include('header')
<script>
function borrar(){
    if(confirm("Estás seguro que queres eliminar este adoptante?")){
        location.href = '/adopter/delete/{{ $adopter->id }}';
    }
}
</script>
<div class="container">

<form  class="col-md-6" style="margin-top:80px;margin-left:20%;" method="POST" action="/adopter/edit/{{$adopter->id}}">
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <span style="color:red">{{ $error }}</span><br>
    @endforeach
@endif
@csrf
<div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="text" name="nombre" value="{{ $adopter->nombre }}" class="form-control" id="exampleFormControlInput1" placeholder="1234">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Apellido</label>
    <input type="text" name="apellido" value="{{ $adopter->apellido }}" class="form-control" id="exampleFormControlInput1" placeholder="1234">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">DNI</label>
    <input type="text" name="dni" value="{{ $adopter->dni }}" class="form-control" id="exampleFormControlInput1" placeholder="1234">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Dirección</label>
    <input type="text" name="direccion" value="{{ $adopter->direccion }}" class="form-control" id="exampleFormControlInput1" placeholder="1234">
  </div>  
  <div class="form-group">
    <label for="exampleFormControlInput1">Teléfono</label>
    <input type="text" name="telefono" value="{{ $adopter->telefono }}" class="form-control" id="exampleFormControlInput1" placeholder="1234">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Otras observaciones</label>
    <textarea class="form-control" name="datos" id="exampleFormControlTextarea1" rows="3">{{ $adopter->datos }}</textarea>
  </div>
  <button type="submit" class="btn btn-success mb-2">Actualizar datos</button>
  <a href="javascript:void(0);" onclick="borrar()">Eliminar Adoptante</a>
</form>

</div>
@include('footer')