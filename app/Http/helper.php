<?php

if (!function_exists('setting')) {
	function setting() {
		return \App\Models\Setting::orderBy('id', 'desc')->first();
	}
}

if (!function_exists('aurl')) {
    function aurl($url = null) {
        return url('admin/' . $url);
    }
}

if (!function_exists('durl')) {
    function durl($url = null) {
        return url('doctor/' . $url);
    }
}


if (!function_exists('admin')) {
    function admin() {
        return auth()->guard('admin');
    }
}

if (!function_exists('doctor')) {
    function doctor() {
        return auth()->guard('doctor');
    }
}

if (!function_exists('lang')) {
    function lang() {
        $lang = session()->has('lang') ? session('lang') : session()->put('lang', setting()->main_lang);
        return $lang;
    }
}

if (!function_exists('direction')) {
    function direction() {
        $direction = session()->has('lang') ? (session('lang') == 'en' ? 'ltr' : 'rtl') : (setting()->main_lang == 'en' ? 'ltr' : 'rtl');
        return $direction;
    }
}

if (!function_exists('datatableLang')) {
    function datatableLang() {
        return [
            'sProcessing'     => trans('admin.sProcessing'),
            'sLengthMenu'     => trans('admin.sLengthMenu'),
            'sZeroRecords'    => trans('admin.sZeroRecords'),
            'sEmptyTable'     => trans('admin.sEmptyTable'),
            'sInfo'           => trans('admin.sInfo'),
            'sInfoEmpty'      => trans('admin.sInfoEmpty'),
            'sInfoFiltered'   => trans('admin.sInfoFiltered'),
            'sInfoPostFix'    => trans('admin.sInfoPostFix'),
            'sSearch'         => trans('admin.sSearch'),
            'sUrl'            => trans('admin.sUrl'),
            'sInfoThousands'  => trans('admin.sInfoThousands'),
            'sLoadingRecords' => trans('admin.sLoadingRecords'),
            'oPaginate'       => [
                'sFirst'         => trans('admin.sFirst'),
                'sLast'          => trans('admin.sLast'),
                'sNext'          => trans('admin.sNext'),
                'sPrevious'      => trans('admin.sPrevious'),
            ],
            'oAria'            => [
                'sSortAscending'  => trans('admin.sSortAscending'),
                'sSortDescending' => trans('admin.sSortDescending'),
            ],

        ];
    }
}

if (!function_exists('savePhoto')) {

    function savePhoto($path, $image)
    {
        $fullPath = $path . date('Y') . '/' . date('m') . '/' . date('d');
        $newName = time() . '-' . rand(0, 9999) . '.' . $image->getClientOriginalExtension();
        return $image->storeAs($fullPath , $newName);
    }
}

if (!function_exists('savePatientPhoto')) {

    function savePatientPhoto($path, $image)
    {
        $newName = time() . '.' . $image->getClientOriginalExtension();
        return $image->storeAs($path , $newName);
    }
}