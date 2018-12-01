@include('header')
<div class="container">

<form  style="margin-top:80px;" method="POST" action="newVaccine">
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <span style="color:red">{{ $error }}</span><br>
    @endforeach
@endif
@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Vacuna</label>
    <input type="text" name="vacuna" value="{{ old('vacuna') }}" class="form-control" id="exampleFormControlInput1" placeholder="1234">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripción</label>
    <textarea class="form-control" name="datos" value="{{ old('datos') }}" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-success mb-2">Agregar Vacuna</button>

</form>
</div>
@include('footer')