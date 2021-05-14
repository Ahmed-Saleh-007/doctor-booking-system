<?php

if (!function_exists('aurl')) {
    function aurl($url = null) {
        return url('admin/' . $url);
    }
}

if (!function_exists('admin')) {
    function admin() {
        return auth()->guard('admin');
    }
}

if (!function_exists('lang')) {
    function lang() {
        $lang = session()->has('lang') ? session('lang') : session()->put('lang', 'en');
        return $lang;
    }
}

if (!function_exists('direction')) {
    function direction() {
        $direction = session()->has('lang') ? (session('lang') == 'ar' ? 'rtl' : 'ltr') : 'ltr';
        return $direction;

    }
}
