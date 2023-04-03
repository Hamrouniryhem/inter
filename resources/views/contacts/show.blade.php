@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header"></div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Nom : {{ $contacts->name }}</h5>
        <p class="card-text">Date : {{ $contacts->date }}</p>
        <p class="card-text">Description : {{ $contacts->description }}</p>
        <p class="card-text">Address : {{ $contacts->address }}</p>
        <p class="card-text">Numéro : {{ $contacts->mobile }}</p>
  </div>
      
    </hr>
  
  </div>
</div>