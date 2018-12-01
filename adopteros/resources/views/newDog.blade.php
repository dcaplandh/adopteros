@include('header')
<div class="container">

<form  style="margin-top:80px;" method="POST" action="newDog">
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <span style="color:red">{{ $error }}</span><br>
    @endforeach
@endif
@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Nro de Chapita</label>
    <input type="text" name="chapita" value="{{ old('chapita') }}" class="form-control" id="exampleFormControlInput1" placeholder="1234">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre en Adopteros</label>
    <input type="text" name="nombreadopteros" value="{{ old('nombreadopteros') }}" class="form-control" id="exampleFormControlInput1" placeholder="Panchito">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Fecha de Nacimiento</label>
    <input type="date" name="fecha_nac" value="{{ old('fecha_nac') }}" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Castrado</label>
    <select name="castrado" class="form-control" id="exampleFormControlSelect2">
      <option value="0">NO</option>
      <option value="1">SI</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Otras observaciones</label>
    <textarea class="form-control" name="extra" value="{{ old('extra') }}" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-success mb-2">Bienvenido perrito!</button>

</form>
</div>
@include('footer')