@include('header')
<script>
function borrar(){
    if(confirm("Estás seguro que queres eliminar esta vacuna?")){
        location.href = '/vaccine/delete/{{ $vaccine->id }}';
    }
}
</script>
<div class="container">

<form  class="col-md-6" style="margin-top:80px;margin-left:20%;" method="POST" action="/vaccine/edit/{{$vaccine->id}}">
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <span style="color:red">{{ $error }}</span><br>
    @endforeach
@endif
@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Vacuna</label>
    <input type="text" name="vacuna" value="{{ $vaccine->vacuna }}" class="form-control" id="exampleFormControlInput1" placeholder="Panchito">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripción</label>
    <textarea class="form-control" name="datos" id="exampleFormControlTextarea1" rows="3">{{ $vaccine->datos }}</textarea>
  </div>
  <button type="submit" class="btn btn-success mb-2">Actualizar vacuna</button>
  <a href="javascript:void(0);" onclick="borrar()">Eliminar Vacuna</a>
</form>

</div>
@include('footer')