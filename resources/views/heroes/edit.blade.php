@extends('heroes.layout') <!-- Extiende la plantilla 'heroes.layout' -->

@section('content') <!-- Define la sección 'content' -->

<div class="card">
  <div class="card-header">Contactus Page</div> <!-- Define el encabezado de la tarjeta -->
  <div class="card-body">

      <form action="{{ url('heroes/' .$heroe->id) }}" method="post"> <!-- Define un formulario que envía una solicitud PATCH al servidor -->
        {!! csrf_field() !!} <!-- Genera un campo oculto para proteger el formulario de ataques CSRF -->
        @method("PATCH") <!-- Define que la solicitud es del tipo PATCH -->


        <input type="hidden" name="id" id="id" value="{{$heroe->id}}" id="id" /> <!-- Define un campo oculto que se utiliza para pasar el ID del héroe a actualizar al servidor -->

        <label>Nombre Real</label></br>
        <input type="text" name="Real_name" id="Real_name" value="{{$heroe->Real_name}}" class="form-control"></br> <!-- Define un campo de entrada de texto para el nombre del héroe -->

        <label>Nombre SuperHeroe</label></br>
        <input type="text" name="Super_hero_name" id="Super_hero_name" value="{{$heroe->Super_hero_name}}" class="form-control"></br>

        <label>Informacion adicional</label></br>
        <input type="text" name="Decription" id="Decription" value="{{$heroe->Decription}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br> <!-- Define un botón de envío para actualizar la información -->
    </form>

  </div>
</div>

@stop <!-- Finaliza la sección 'content' -->

