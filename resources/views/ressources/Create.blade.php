@extends('ressources.layout')
@section('content')
<div class="card">
  <div class="card-header"></div>
  <div class="card-body">
      
      <form action="{{ url('ressource') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom </label></br>
        <input type="text" name="Nom" id="Nom" class="form-control"></br>
        <label>Quantité</label></br>
        <input type="text" name="Quantité" id="Quantité" class="form-control"></br>
        
        <input type="submit" value="Enregistrer" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop