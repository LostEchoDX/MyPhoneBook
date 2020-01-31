@extends('layouts.app')

@section('content')

<form action="{{action('CollabController@updater', [$id])}}", method="POST">

        <div>

                {{ csrf_field() }}

                Civilité :
                <input type="string" name='civilite'>
                <br>
                Nom :
                <input type="string" name='nom'>
                <br>
		Prénom :
                <input type="string" name='prenom'>
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
                <input type="float" name='numero'>
                <br>
		Email:
                <input type="email" name='email'>
                <br>
		Entreprise :
                <input type="string" name='entreprise'>
                @method("PUT")
		<div>
                        <button type="submit">Update</button>
                </div>
        </div>
</form>

@endsection

