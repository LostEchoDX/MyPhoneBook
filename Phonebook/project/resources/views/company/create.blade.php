@extends('layouts.app')

@section('content')

<form action="{{action('CompanyController@store')}}", method="POST">

        <div>

                {{ csrf_field() }}

                Nom :
                <input type="string" name='nom'>
                <br>
		Rue:
		<input type="string" name='rue'>
		<br>
		Code Postal:
		<input type="float" name='code'>
		<br>
		Ville:
		<input type="string" name='ville'>
		<br>
		Numéro de téléphone:
		<input type="float" name='numéro'>
		<br>
		Email:
		<input type="email" name='email'>
		<div>
                        <button type="submit">Créer</button>
                </div>
        </div>
</form>

@endsection

