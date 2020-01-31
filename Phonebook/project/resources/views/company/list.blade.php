@extends('layouts.app')

@section('content')

@foreach($company as $p)
 <tr>
     <td>{{ $p->id}}</td>
     <td>{{ $p->nom}}</td>
     <td>{{ $p->rue}}</td>
     <td>{{ $p->code}}</td>
     <td>{{ $p->ville}}</td>
     <td>{{ $p->numéro}}</td>
     <td>{{ $p->email}}</td>
     <br>
 </tr>
@endforeach

@endsection

