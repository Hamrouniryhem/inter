@extends('contacts.layout')
@section('content')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-2">Les ressources disponibles</h3>
    <div class="container">
       
            
                
                    <div class="card-body">
                        <a href="{{ url('/ressource/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="d-flex justify-content-end" aria-hidden="true"></i> Ajouter une nouvelle intervention
                        </a>
                        <br/>
                        <br/>
                        <div class="mt-2">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Quantité</th>
                
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($ressources as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Nom }}</td>
                                        <td>{{ $item->Quantité }}</td>
                                        
                                        <td>
                                        
                                            <a href="{{ url('/ressource/' . $item->id . '/edit') }}" title="modifier"><button class="btn btn-primary "><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
                                            <form method="POST" action="{{ url('/ressource' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger " title="supprimer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection