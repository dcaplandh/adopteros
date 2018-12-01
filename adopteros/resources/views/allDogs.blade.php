@include('header')
<div class="container" style="margin-top:70px;">
<h3 class="text-center">Perros en adopción</h3>
    <!-- Thumbnails -->

    @foreach($dogs as $dog)
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/{{ $dog->foto }}" alt="" class="img-circle">
          <div class="caption">
            <h4 class="text-center">Chapita: {{ $dog->chapita }}</h4>
            <h3 class="text-center">{{ $dog->nombreadopteros }}</h3>
            <p class="text-center">{{ $dog->extra }}</p>
            <div class="btn-toolbar text-center">
              <a href="/dog/{{ $dog->id }}" role="button" class="btn btn-success">Ver más</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
      
    </div><!-- End Thumbnails -->

</div>
@include('footer')