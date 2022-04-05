<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('country.index', ['countries' => $countries]);
    }

    public function create()
    {
        return view('country.edit');
    }

    public function store(Request $request)
    {
        Country::created($request);
    }

    public function edit(Request $id)
    {
        $country = Country::findOrFail($id);
        return view('country.edit', compact('country'));
    }

    public function update(Request $request, $id)
    {
        $country = Country::findOrFail($id);
        $country->fill($request->all());
        $country->save();

    }

    public function delete(Request $id)
    {
        $country = Country::findOrFail($id);
        $country->delete();
    }
}
