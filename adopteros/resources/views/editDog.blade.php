@include('header')
<script>
function borrar(){
    if(confirm("Estás seguro que queres eliminar este perrito?")){
        location.href = '/dog/delete/{{ $dog->id }}';
    }
}
</script>
<div class="container">

<form  class="col-md-6" style="margin-top:80px;margin-left:20%;" method="POST" action="/dog/edit/{{$dog->id}}">
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <span style="color:red">{{ $error }}</span><br>
    @endforeach
@endif
@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre en Adopteros</label>
    <input type="text" name="nombreadopteros" value="{{ $dog->nombreadopteros }}" class="form-control" id="exampleFormControlInput1" placeholder="Panchito">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre en Familia</label>
    <input type="text" name="nombrenuevo" value="{{ $dog->nombrenuevo }}" class="form-control" id="exampleFormControlInput1" placeholder="Panchito">
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
    <textarea class="form-control" name="extra" id="exampleFormControlTextarea1" rows="3">{{ $dog->extra }}</textarea>
  </div>
  <button type="submit" class="btn btn-success mb-2">Actualizar perrito!</button>
  <a href="javascript:void(0);" onclick="borrar()">Eliminar Perro</a>
</form>

</div>
@include('footer')