<?php
namespace App\Http\Controllers\Admin;
use App\Models\SubSpecialist;
use App\Http\Controllers\Controller;
use App\DataTables\SubSpecialistDatatable;
use App\Http\Requests\Admin\StoreSubSpecialistRequest;
use App\Http\Requests\Admin\UpdateSubSpecialistRequest;
use App\Models\Specialist;
use Form;
class SubSpecialistController extends Controller
{
    //Retrieve All SubSpecialists
    public function index(SubSpecialistDatatable $sub_specialist) {
        return $sub_specialist->render('admin.sub_specialists.index', ['title' => 'SubSpecialist Control']);
    }

    public function get_subSpecialists()
    {
        if (request()->ajax()) {
            if (request()->has('spec_id')) {
                $select=request()->has('select')?request('select'):'';
                return Form::select('subspec_id', SubSpecialist::where('spec_id', request('spec_id'))
                ->pluck('name_'. session('lang'), 'id'), $select, ['class' => '','placeholder'=>'...']);
            }
        }
    }

    //Create New SubSpecialist
    public function store(StoreSubSpecialistRequest $request) {
        $data = $request->all();
        SubSpecialist::create($data);
        return response()->json(['success' => trans('admin.record_added')]);
    }

    //Show a Specified SubSpecialist
    public function show(SubSpecialist $sub_specialist) {
        return view('admin.sub_specialists.ajax.show', ['sub_specialist' => $sub_specialist]);
    }

    //Edit Form for a Specified Specialist
    public function edit(SubSpecialist $sub_specialist) {
        return view('admin.sub_specialists.ajax.edit', compact('sub_specialist'));
    }

    //Update a Specified SubSpecialist
    public function update(UpdateSubSpecialistRequest $request, SubSpecialist $sub_specialist) {
        $data = $request->all();
        $sub_specialist->update($data);
        return response()->json(['success' => trans('admin.updated_record')]);
    }

    //Delete Specified SubSpecialist
    public function destroy(SubSpecialist $sub_specialist) {
        $sub_specialist->delete();
        return response()->json(['success' => trans('admin.deleted_record')]);
    }

    //Delete All SubSpecialists
    public function destroyAll() {
        foreach (request('item') as $id) {
            $sub_specialist = SubSpecialist::find($id);
        }
        SubSpecialist::destroy(request('item'));
		return response()->json(['success' => trans('admin.deleted_record')]);
    }
}