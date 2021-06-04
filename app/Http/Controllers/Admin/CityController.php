<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Http\Controllers\Controller;
use App\DataTables\CityDatatable;
use App\Http\Requests\Admin\StoreCityRequest;
use App\Http\Requests\Admin\UpdateCityRequest;

class CityController extends Controller
{

    public function index(CityDatatable $city)
    {
        return $city->render('admin.cities.index', ['title' => 'City Control']);
    }

    public function store(StoreCityRequest $request)
    {
        $data = $request->all();
        City::create($data);
        return response()->json(['success' => trans('admin.record_added')]);
    }

    public function show(City $city)
    {
        return view('admin.cities.ajax.show', compact('city'));
    }


    public function edit(City $city)
    {
        return view('admin.cities.ajax.edit', compact('city'));
    }

    public function update(UpdateCityRequest $request, City $city)
    {
        $data = $request->all();
        $city->update($data);
        return response()->json(['success' => trans('admin.updated_record')]);
    }

    public function destroy(City $city)
    {
        $city->delete();
        return response()->json(['success' => trans('admin.deleted_record')]);
    }

    public function destroyAll()
    {
        City::destroy(request('item'));
        return response()->json(['success' => trans('admin.deleted_record')]);
    }
}