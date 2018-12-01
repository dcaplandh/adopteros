@include('header')
<div class="container">

<form  style="margin-top:80px;" method="POST" action="newAdopter">
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <span style="color:red">{{ $error }}</span><br>
    @endforeach
@endif
@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="text" name="nombre" value="{{ old('nombre') }}" class="form-control" id="exampleFormControlInput1" placeholder="1234">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Apellido</label>
    <input type="text" name="apellido" value="{{ old('apellido') }}" class="form-control" id="exampleFormControlInput1" placeholder="1234">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">DNI</label>
    <input type="text" name="dni" value="{{ old('dni') }}" class="form-control" id="exampleFormControlInput1" placeholder="1234">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Dirección</label>
    <input type="text" name="direccion" value="{{ old('direccion') }}" class="form-control" id="exampleFormControlInput1" placeholder="1234">
  </div>  
  <div class="form-group">
    <label for="exampleFormControlInput1">Teléfono</label>
    <input type="text" name="telefono" value="{{ old('telefono') }}" class="form-control" id="exampleFormControlInput1" placeholder="1234">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Otras observaciones</label>
    <textarea class="form-control" name="datos" value="{{ old('datos') }}" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-success mb-2">Bienvenido adoptante!</button>

</form>
</div>
@include('footer')