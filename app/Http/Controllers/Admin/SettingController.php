<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingRequest;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function setting() {
		return view('admin.settings', ['title' => trans('admin.settings')]);
	}

	public function settingSave(SettingRequest $request) {

		$data = $request->all();

		if (request()->hasFile('logo')) {
			if (!empty(setting()->logo)) {
                Storage::delete(setting()->logo);
            }
            $data['logo'] = savePhoto('images/settings/', $request->logo);
		}

		if (request()->hasFile('icon')) {
            if (!empty(setting()->icon)) {
                Storage::delete(setting()->icon);
            }
            $data['icon'] = savePhoto('images/settings/', $request->icon);
		}
		setting()->update($data);
		session()->flash('success', trans('admin.updated_record'));
		return redirect(aurl('settings'));
	}
}
