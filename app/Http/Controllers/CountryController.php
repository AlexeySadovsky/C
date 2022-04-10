<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('country.index', [
            'countries' => $countries
        ]);
    }

    public function create()
    {
        $countries = Country::all();
        return view('country.edit', ['countries' => $countries]);
    }

    public function store(Request $request)
    {
        Country::created($request);
    }

    public function edit(Request $id)
    {
        $countries = Country::query()->findOrFail($id);
        return view('country.edit', compact('countries'));
    }

    public function update(Request $request, $id)
    {
        $countries = Country::query()->findOrFail($id);
        $countries->fill($request->all());
        $countries->save();

    }

    public function delete(Request $id)
    {
        $countries = Country::query()->findOrFail($id);
        $countries->delete();
    }
}
