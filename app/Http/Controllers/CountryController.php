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
        return view('country.create');
    }

    public function store(Request $request)
    {
        Country::query()->create($request->all());
    }

    public function edit(Request $request, $id)
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

    public function delete($id)
    {
        $countries = Country::query()->findOrFail($id);
        $countries->delete();
    }
}
