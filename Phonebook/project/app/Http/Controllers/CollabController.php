<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Collab;

class CollabController extends Controller
{
    //
	public function create()
	{
		return view('collab.create');
	}

	public function list()
        {
                $collab = Collab::all()->get();
		return view ('collab.list')->with('collab', $collab);
        }

	public function delete($id)
        {
		$collab = Collab::where('id', '=', $id)->delete();
        }

	public function display($id)
        {
	        $collab = Collab::where('id', '=', $id)->get();
                return view ('collab.list')->with('collab', $collab);
        }


	public function update($id)
        {
                return view ('collab.update')->with('id', $id);
        }

	public function store(Request $request)
	{
		$collab = new Collab();

		$collab->civilite = $request->get('civilite');
		$collab->nom = $request->get('nom');
		$collab->prenom = $request->get('prenom');
		$collab->rue = $request->get('rue');
	        $collab->code = $request->get('code');
	        $collab->ville = $request->get('ville');
		$collab->numero = $request->get('numero');
		$collab->email = $request->get('email');
		$collab->entreprise = $request->get('entreprise');

		$collab->save();
		return redirect()->action("CollabController@create");
	}

	public function updater(Request $request, $id)
        {
		$collab = Collab::find($id)->first();

		$collab->civilite = $request->get('civilite');
                $collab->nom = $request->get('nom');
                $collab->prenom = $request->get('prenom');
                $collab->rue = $request->get('rue');
                $collab->code = $request->get('code');
                $collab->ville = $request->get('ville');
                $collab->numero = $request->get('numero');
                $collab->email = $request->get('email');
                $collab->entreprise = $request->get('entreprise');

                $collab->save();
        }

}


