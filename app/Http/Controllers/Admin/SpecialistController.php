<?php
namespace App\Http\Controllers\Admin;
use App\Models\Specialist;
use App\Http\Controllers\Controller;
use App\DataTables\SpecialistDatatable;
use App\Http\Requests\Admin\StoreSpecialistRequest;
use App\Http\Requests\Admin\UpdateSpecialistRequest;

class SpecialistController extends Controller
{
    public function index(SpecialistDatatable $specialist) {
        return $specialist->render('admin.specialists.index', ['title' => 'Specialist Control']);
    }

    public function store(StoreSpecialistRequest $request) {
        $data = $request->all();
        Specialist::create($data);
        return response()->json(['success' => trans('admin.record_added')]);
    }

    public function show(Specialist $specialist) {
        return view('admin.specialists.ajax.show', compact('specialist'));
    }

    public function edit(Specialist $specialist) {
        return view('admin.specialists.ajax.edit', compact('specialist'));
    }

    public function update(UpdateSpecialistRequest $request, Specialist $specialist) {
        $data = $request->all();
        $specialist->update($data);
        return response()->json(['success' => trans('admin.updated_record')]);
    }

    public function destroy(Specialist $specialist) {
        $specialist->delete();
        return response()->json(['success' => trans('admin.deleted_record')]);
    }

    public function destroyAll() {
        Specialist::destroy(request('item'));
		return response()->json(['success' => trans('admin.deleted_record')]);
    }
}
