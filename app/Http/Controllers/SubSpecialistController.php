<?php
namespace App\Http\Controllers;
use App\Models\SubSpecialist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\SubSpecialistDatatable;

class SubSpecialistController extends Controller
{
    //Retrieve All SubSpecialists
    public function index(SubSpecialistDatatable $sub_specialist) {

        return $sub_specialist->render('admin.sub_specialists.index', ['title' => 'SubSpecialist Control']);
    }

    //Create New SubSpecialist
    public function store(StoreSubSpecialistRequest $request) {
        $data = $request->all();
        SubSpecialist::create($data);
        return response()->json(['success' => trans('admin.record_added')]);
    }

    //Show a Certain SubSpecialist
    public function show(SubSpecialist $sub_specialist)
    {
        return view('admin.sub_specialists.ajax.show', ['sub_specialist' => $sub_specialist]);
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SubSpecialist $sub_specialist)
    {
        return view('admin.sub_specialists.ajax.edit', compact('sub_specialist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubSpecialistRequest $request, Subspecialist $sub_specialist)
    {
        $data = $request->all();
        $sub_specialist->update($data);
        return response()->json(['success' => trans('admin.updated_record')]);
    }

    //Delete Certain SubSpecialist
    public function destroy(SubSpecialist $sub_specialist)
    {
        $sub_specialist->delete();
        return response()->json(['success' => trans('admin.deleted_record')]);
    }

    //Delete All SubSpecialists
    public function destroyAll()
    {
        foreach (request('item') as $id) {
            $sub_specialist = SubSpecialist::find($id);
        }
        SubSpecialist::destroy(request('item'));
		return response()->json(['success' => trans('admin.deleted_record')]);
    }
}