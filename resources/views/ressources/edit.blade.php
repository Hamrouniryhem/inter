@extends('ressources.layout')
@section('content')
<div class="card">
 <div class="my-3 p-3 bg-body rounded shadow-sm">
  <div class="card-body">
      
      <form action="{{ url('ressource/' .$ressources->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$ressources->id}}" id="id" />
        <label>Nom</label></br>
        <input type="text" name="Nom" id="Nom" value="{{$ressources->Nom}}" class="form-control"></br>
        <label>Quantité</label></br>
        <input type="text" name="Quantité" id="Quantité" value="{{$ressources->Quantité}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
