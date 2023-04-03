@extends('contacts.layout')
@section('content')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-2">liste des interventions</h3>
    <div class="container">
       
            
                
                    <div class="card-body">
                        <a href="{{ url('/contact/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="d-flex justify-content-end" aria-hidden="true"></i> Ajouter une nouvelle intervention
                        </a>
                        <br/>
                        <br/>
                        <div class="mt-2">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>N/P Client/Société</th>
                                        <th>Description</th>
                                        <th>Adresse</th>
                                        <th>Numéro</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>
                                            <a href="{{ url('/contact/' . $item->id) }}" title="View Student"><button class="btn btn-info "><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/contact/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary "><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/contact' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger " title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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