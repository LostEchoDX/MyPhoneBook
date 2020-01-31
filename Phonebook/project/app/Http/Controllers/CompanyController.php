<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Company;

class CompanyController extends Controller
{
    //
	public function create()
	{
		return view('company.create');
	}

	public function list()
        {
                $company = Company::all()->get();
		return view ('company.list')->with($company);
        }

	public function delete($id)
        {
		$company = Company::where('id', '=', $id)->delete();
        }

	public function display($id)
        {
	        $company = Company::where('id', '=', $id)->get();
                return view ('company.list')->with('company', $company);
        }


	public function update($id)
        {
                return view ('company.update')->with('id', $id);
        }

	public function store(Request $request)
	{
		$company = new Company();

		$company->nom = $request->get('nom');
		$company->rue = $request->get('rue');
		$company->code = $request->get('code');
		$company->ville = $request->get('ville');
	        $company->numéro = $request->get('numéro');
	        $company->email = $request->get('email');

		$company->save();
		return redirect()->action("CompanyController@create");
	}

	public function updater(Request $request, $id)
        {
		$company = Company::find($id)->first();

		$company->nom = $request->get('nom');
                $company->rue = $request->get('rue');
                $company->code = $request->get('code');
                $company->ville = $request->get('ville');
                $company->numéro = $request->get('numéro');
                $company->email = $request->get('email');

                $company->save();
        }

}

