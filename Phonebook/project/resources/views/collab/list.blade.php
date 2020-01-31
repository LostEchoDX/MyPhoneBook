@extends('layouts.app')

@section('content')

@foreach($collab as $p)
 <tr>
     <td>{{ $p->id}}</td>
     <td>{{ $p->civilite}}</td>
     <td>{{ $p->nom}}</td>
     <td>{{ $p->prenom}}</td>
     <td>{{ $p->rue}}</td>
     <td>{{ $p->code}}</td>
     <td>{{ $p->ville}}</td>
     <td>{{ $p->numéro}}</td>
     <td>{{ $p->email}}</td>
     <td>{{ $p->entreprise}}</td>
     <br>
 </tr>
@endforeach

@endsection

