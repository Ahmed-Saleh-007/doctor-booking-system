<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use App\Http\Controllers\Controller;
use App\DataTables\CountryDatatable;
use App\Http\Requests\Admin\StoreCountryRequest;
use App\Http\Requests\Admin\UpdateCountryRequest;

class CountryController extends Controller
{

    public function index(CountryDatatable $country)
    {
        return $country->render('admin.countries.index', ['title' => 'Country Control']);
    }

    public function store(StoreCountryRequest $request)
    {
        $data = $request->all();
        Country::create($data);
        return response()->json(['success' => trans('admin.record_added')]);
    }

    public function show(Country $country)
    {
        return view('admin.countries.ajax.show', compact('country'));
    }


    public function edit(Country $country)
    {
        return view('admin.countries.ajax.edit', compact('country'));
    }

    public function update(UpdateCountryRequest $request, Country $country)
    {
        $data = $request->all();
        $country->update($data);
        return response()->json(['success' => trans('admin.updated_record')]);
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return response()->json(['success' => trans('admin.deleted_record')]);
    }

    public function destroyAll()
    {
        Country::destroy(request('item'));
        return response()->json(['success' => trans('admin.deleted_record')]);
    }
}
