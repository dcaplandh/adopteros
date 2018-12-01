@include('header')
<div class="container" style="margin-top:70px;">
<h3 class="text-center">Adoptantes</h3>
    <!-- Thumbnails -->

    @foreach($adopters as $adopter)
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <div class="caption">
            <h4 class="text-center">{{ $adopter->nombre }} {{ $adopter->apellido }}</h4>
            <h3 class="text-center">{{ $adopter->dni }}</h3>
            <p class="text-center">{{ $adopter->datos }}</p>
            <p class="text-center">{{ $adopter->nombrenuevo }} 
                <img style="width:50px;height:50px;" src="/img/{{$adopter->foto}}"/>
            </p>
            <div class="btn-toolbar text-center">
              <a href="/adopter/edit/{{ $adopter->id }}" role="button" class="btn btn-success">Editar</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
      
    </div><!-- End Thumbnails -->

</div>
@include('footer')