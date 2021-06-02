<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\DistrictDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDistrictRequest;
use App\Http\Requests\Admin\UpdateDistrictRequest;
use App\Models\District;

class DistrictController extends Controller
{

    public function index(DistrictDatatable $district)
    {
        return $district->render('admin.districts.index', ['title' => 'District Control']);
    }

    public function store(StoreDistrictRequest $request)
    {
        $data = $request->all();
        District::create($data);
        return response()->json(['success' => trans('admin.record_added')]);
    }

    public function show(District $district)
    {
        return view('admin.districts.ajax.show', compact('district'));
    }


    public function edit(District $district)
    {
        return view('admin.districts.ajax.edit', compact('district'));
    }

    public function update(UpdateDistrictRequest $request, District $district)
    {
        $data = $request->all();
        $district->update($data);
        return response()->json(['success' => trans('admin.updated_record')]);
    }

    public function destroy(District $district)
    {
        $district->delete();
        return response()->json(['success' => trans('admin.deleted_record')]);
    }

    public function destroyAll()
    {
        District::destroy(request('item'));
        return response()->json(['success' => trans('admin.deleted_record')]);
    }
}
