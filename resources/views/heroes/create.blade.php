@extends('heroes.layout')
@section('content')

<div class="card">
  <div class="card-header">Create Super-hero</div>
  <div class="card-body">

      <form action="{{ url('heroes') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}

    </br>
        <label>Nombre Real</label>
        <input type="text" name="Real_name" id="Real_name" class="form-control" required></br>

    </br>
        <label>Nombre SuperHeroe</label>
        <input type="text" name="Super_hero_name" id="Super_hero_name" class="form-control" required></br>

    </br>
       <label for="photo">Photo</label>
       <input type="file" id="photo" name="photo" required></br>

    </br>
       <label>Informacion adicional</label>
       <input type="text" name="Decription" id="Decription" class="form-control" required></br>

    </br>
        <input type="submit" value="Save" class="btn btn-success" required></br>
    </form>

  </div>
</div>

@stop

