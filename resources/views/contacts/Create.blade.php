@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <label>Date</label></br>
        <input type="text" name="date" id="name" class="form-control"></br>
        <label>N/P Client/Société</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="name" class="form-control"></br>
        <label>Addresse</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Numéro</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop