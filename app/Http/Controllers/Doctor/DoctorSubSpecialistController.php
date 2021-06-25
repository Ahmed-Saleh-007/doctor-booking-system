<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Specialist;
use App\Models\SubSpecialist;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Auth;

class DoctorSubSpecialistController extends Controller
{
    //Route to Create New SubSpecialist to Doctor Page
    public function create()
    {
    	//Get Doctor ID
		$doctor = Doctor::find(doctor()->id());
		
		//Get All SubSpecialists
    	$subspecialists = SubSpecialist::where('spec_id',$doctor->spec_id)->get();

    	//Get The SubSpecialists that the Doctor dosen`t have
    	$subspecialists = $subspecialists->diff($doctor->subspecialists);
    	return view('doctor.subspecialist.create', compact('doctor', 'subspecialists'));
    }

	//Route to Create New SubSpecialist to Doctor By Admin
    public function createByAdmin($id)
    {
    	//Get Doctor ID
		$doctor = Doctor::find($id);
		
		//Get All SubSpecialists
    	$subspecialists = SubSpecialist::where('spec_id',$doctor->spec_id)->get();

    	//Get The SubSpecialists that the Doctor dosen`t have
    	$subspecialists = $subspecialists->diff($doctor->subspecialists);

    	return view('admin.doctor.create_subspec', compact('doctor', 'subspecialists'));
    }
	
	//Store New SubSpecialist to Doctor
	public function storeByAdmin($id, Request $request)
	{
		$request->validate(['subspecialist_id']);
		$doctor = Doctor::find($id);
		$doctor->subspecialists()->attach($request->subspecialist_id);
		session()->flash('success', trans('admin.record_added'));
		return view('admin.doctor.show', compact('doctor')); 
	}

	//Store New SubSpecialist to Doctor
    public function store(Request $request)
    {
    	$request->validate(['subspecialist_id']);
    	$doctor = Doctor::find(doctor()->id());
		$doctor->subspecialists()->attach($request->subspecialist_id);
    	session()->flash('success', trans('admin.record_added'));
    	return redirect()->route('doctor.profile'); 
    }

	//Destroy Specialist
    public function destroy(SubSpecialist $subspecialist)
    {
    	$doctor = Doctor::find(doctor()->id());
		$doctor->subspecialists()->detach($subspecialist);
    	return redirect()->route('doctor.profile');
    }

	//Destroy Subspecialist for Doctor By Admin 
	public function destroyByAdmin($id, SubSpecialist $subspecialist)
	{
		$doctor = Doctor::find($id);
		$doctor->subspecialists()->detach($subspecialist);
		session()->flash('success', trans('admin.deleted_record'));
    	return back();
	}

	//Destroy All Subspecialists for Doctor By Admin 
	public function destroyAllByAdmin($id)
	{
		$doctor = Doctor::find($id);
		$doctor->subspecialists()->wherePivot('doc_id', '=', $doctor->id)->detach();
        session()->flash('success', trans('admin.deleted_record'));
		return  back();
	}

	//Destroy all SubSpecialist of Doctor
	public function destroyAll()
	{		
		$doctor = Doctor::find($id);
		$doctor->subspecialists()->wherePivot('doc_id', '=', $doctor->id)->detach();
		return redirect()->route('doctor.profile');
	}
}