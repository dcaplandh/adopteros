@include('header')
<div class="container" style="margin-top:70px;">
<h3 class="text-center">Perros en adopción</h3>
    <!-- Thumbnails -->

   
    <div class="col-12">
        <div class="thumbnail">
          <img src="/img/{{ $dog->foto }}" alt="" class="img-circle">
          <div class="caption">
            <h4 class="text-center">Chapita: {{ $dog->chapita }}</h4>
            <h3 class="text-center">{{ $dog->nombreadopteros }}</h3>
            <p class="text-center">{{ $dog->extra }}</p>
            <div class="btn-toolbar text-center">
              <a href="/dog/edit/{{ $dog->id }}" role="button" class="btn btn-primary">Editar</a>
            </div>
          </div>
        </div>
        @if(isset($adopter))
        <div class="col-md-12">
          <div class="col-md-3"></div>
          <div class="col-md-6 text-center">
          <h3>Adoptante: {{ $adopter->nombre }} {{ $adopter->apellido}} - {{$adopter->dni}}</h3>
          <h4>{{$adopter->telefono}} - {{$adopter->direccion}}</h4>
          </div>
          <div class="col-md-3"></div>
        </div>
        @endif
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <ul class="list-group">
        @foreach($vaccines as $vaccine)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $vaccine->vacuna}}
            <span class="badge badge-primary badge-pill">Próxima: {{ $vaccine->proxima_fecha}}</span>
            <span class="badge badge-primary badge-pill">Dada: {{ $vaccine->ultima_fecha}}</span>
          </li>
        @endforeach
        </ul>
        </div>
        <div class="col-md-3"></div>
        
        <div class="col-md-12">
          <div class="list-group">
            
            @forelse($dog->followups as $fu)
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$fu->title}}</h5>
                <small class="text-muted">{{$fu->updated_at}}</small>
              </div>
              <p class="mb-1">{{$fu->text}}</p>
              <small class="text-muted">{{$fu->extra}}</small>
            </a>
            @empty
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
              No hay seguimiento.
            </a>
            @endforelse

          </div>
        </div>

        <div class="col-md-12">
        <hr>
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <form method="post" action="/addDogVaccine/{{$dog->id}}">
          @if(count($errors) > 0)
              @foreach($errors->all() as $error)
                  <span style="color:red">{{ $error }}</span><br>
              @endforeach
          @endif
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Agregar Vacuna</label>
              <select name="vaccine_id" class="form-control" id="exampleFormControlSelect2">
              @foreach($morevaccines as $more)
              <option value="{{ $more->id }}">{{ $more->vacuna }}</option>
            @endforeach
              </select>
              <div class="form-group">
                <label for="exampleFormControlInput1">Fecha dada</label>
                <input type="date" name="ultima_fecha" value="" class="form-control" id="exampleFormControlInput1" placeholder="Panchito">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Fecha próxima</label>
                <input type="date" name="proxima_fecha" value="" class="form-control" id="exampleFormControlInput1" placeholder="Panchito">
              </div>
            </div>
            <button type="submit" class="btn btn-success mb-2">Agregar Vacuna</button>
          </form>
        </div>
        <div class="col-md-3"></div>
      </div>
      
      
    </div><!-- End Thumbnails -->

</div>
@include('footer')