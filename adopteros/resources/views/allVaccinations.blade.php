@include('header')
<style>
.container.vaccines{
    margin-top:70px;
}
</style>
<div class="container vaccines">
<h3 class="text-center">Vacunas</h3>
    <!-- Thumbnails -->

    <ul class="list-group">
    @foreach($vaccinations as $vaccine)
    
    <li class="list-group-item d-flex justify-content-between align-items-center">
    {{ $vaccine->vacuna }} - {{ $vaccine->datos }}
    <a href="/vaccine/edit/{{ $vaccine->id }}" role="button" class="btn btn-primary">Editar</a>
    </li>
    
    @endforeach
    </ul>
    <a class="btn btn-primary" href="/newVaccine" role="button">Agregar Vacuna</a>

    </div><!-- End Thumbnails -->

</div>
@include('footer')