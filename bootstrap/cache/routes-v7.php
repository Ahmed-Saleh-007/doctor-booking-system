<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hghtK7lgJwYOF889',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::huRpDlGVqmcMvrKa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lUniJTaWF1ULg4cs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/forgot' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hwY24LQ7gDfMyN8h',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J3RSIHV128cCt9r8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patientUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6VkKoYbTWYeD606F',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RxiRUIq1Mfsr9MmK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wBPBMQLZxn9zdmpj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/maintenance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KqOApc212BNGC92D',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loginCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forgot/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E0hW8loPt6A08mJt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OwYT3KdVJSVDmXKx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admins' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admins.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admins/destroy/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.destroyAll',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/specialists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'specialists.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'specialists.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/specialists/destroy/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'specialists.destroyAll',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sub-specialists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sub-specialists.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sub-specialists.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sub-specialists/destroy/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subspecialists.destroyAll',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/doctor-degree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor-degree.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'doctor-degree.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/doctor-degree/destroy/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor-degree.destroyAll',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'countries.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'countries.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/countries/destroy/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'countries.destroyAll',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cities/get_cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cities.get_cities',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cities.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cities.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cities/destroy/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cities.destroyAll',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/districts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'districts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'districts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/districts/destroy/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'districts.destroyAll',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/doctor_times' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor_times.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'doctor_times.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/doctor_times/destroy/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor_times.destroyAll',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QcamrfR23FNafpsZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cK7ycYsHqWpHfSzS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/patients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'patients.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'patients.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/patients/destroy/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'patients.destroyAll',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/doctors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctors.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'doctors.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/doctors/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctors.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/doctors/destroy/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctors.destroyAll',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/feedbacks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feedbacks.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'feedbacks.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/feedbacks/destroy/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feedbacks.destroyAll',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/doctor/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor.register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'doctor.registerCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/doctor/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'doctor.loginCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/doctor/forgot/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qk8OFeLjctknTb0n',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0HPS8bdrF2O2cwLC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/doctor/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/doctor/profile/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor.editInfo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/doctor/sub-specialists/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor.addDoctorSubSpecialist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'doctor.storeDoctorSubSpecialist',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/doctor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/doctor/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/lang/([^/]++)(*:21)|/admin/(?|reset/password/([^/]++)(?|(*:64))|admins/([^/]++)(?|(*:90)|/(?|edit(*:105)|update(*:119))|(*:128))|s(?|pecialists/([^/]++)(?|(*:163)|/(?|edit(*:179)|update(*:193))|(*:202))|ub\\-specialists/([^/]++)(?|(*:238)|/(?|edit(*:254)|update(*:268))|(*:277)))|d(?|octor(?|\\-(?|degree/([^/]++)(?|(*:322)|/(?|edit(*:338)|update(*:352))|(*:361))|addresses/(?|create/([^/]++)(?|(*:401))|edit/([^/]++)(?|(*:426))|delete/([^/]++)(*:450)))|_times/([^/]++)(?|(*:478)|/(?|edit(*:494)|update(*:508))|(*:517))|s/([^/]++)(?|(*:539)|/(?|edit(*:555)|update(*:569))|(*:578)))|istricts/([^/]++)(?|(*:608)|/(?|edit(*:624)|update(*:638))|(*:647)))|c(?|ountr(?|ies/([^/]++)(?|(*:684)|/(?|edit(*:700)|update(*:714))|(*:723))|y/([^/]++)/city_name(*:752))|it(?|ies/([^/]++)(?|(*:781)|/(?|edit(*:797)|update(*:811))|(*:820))|y/([^/]++)/district_name(*:853)))|patients/([^/]++)(?|(*:883)|/(?|edit(*:899)|update(*:913))|(*:922))|feedbacks/([^/]++)(?|(*:952)|/edit(*:965)|(*:973)))|/doctor/(?|reset/password/([^/]++)(?|(*:1020))|profile/update/([^/]++)(*:1053)|doctor\\-address/(?|create/([^/]++)(?|(*:1099))|edit/([^/]++)(?|(*:1125))|delete/([^/]++)(*:1150))|sub\\-specialists/delete/([^/]++)(*:1192)))/?$}sDu',
    ),
    3 => 
    array (
      21 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C8UuRt5gE8b5cHtw',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      64 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Aco2KZ32mvdFwsqo',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gmPkLOaRQU3Dfqg1',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      90 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.show',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.edit',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      119 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.update',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      128 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.destroy',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      163 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'specialists.show',
          ),
          1 => 
          array (
            0 => 'specialist',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      179 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'specialists.edit',
          ),
          1 => 
          array (
            0 => 'specialist',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'specialists.update',
          ),
          1 => 
          array (
            0 => 'specialist',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      202 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'specialists.destroy',
          ),
          1 => 
          array (
            0 => 'specialist',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      238 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sub-specialists.show',
          ),
          1 => 
          array (
            0 => 'sub_specialist',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      254 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sub-specialists.edit',
          ),
          1 => 
          array (
            0 => 'sub_specialist',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      268 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subspecialists.update',
          ),
          1 => 
          array (
            0 => 'sub_specialist',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      277 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sub-specialists.destroy',
          ),
          1 => 
          array (
            0 => 'sub_specialist',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      322 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor-degree.show',
          ),
          1 => 
          array (
            0 => 'doctor_degree',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      338 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor-degree.edit',
          ),
          1 => 
          array (
            0 => 'doctor_degree',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      352 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor-degree.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor-degree.destroy',
          ),
          1 => 
          array (
            0 => 'doctor_degree',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      401 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addDoctorAddress',
          ),
          1 => 
          array (
            0 => 'doctor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'storeDoctorAddress',
          ),
          1 => 
          array (
            0 => 'doctor',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      426 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'editDoctorAddress',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'updateDoctorAddress',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      450 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deleteDoctorAddress',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      478 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor_times.show',
          ),
          1 => 
          array (
            0 => 'doctor_time',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      494 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor_times.edit',
          ),
          1 => 
          array (
            0 => 'doctor_time',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      508 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor_times.update',
          ),
          1 => 
          array (
            0 => 'doctor_time',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      517 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor_times.destroy',
          ),
          1 => 
          array (
            0 => 'doctor_time',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      539 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctors.show',
          ),
          1 => 
          array (
            0 => 'doctor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      555 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctors.edit',
          ),
          1 => 
          array (
            0 => 'doctor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      569 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctors.update',
          ),
          1 => 
          array (
            0 => 'doctor',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      578 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctors.destroy',
          ),
          1 => 
          array (
            0 => 'doctor',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      608 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'districts.show',
          ),
          1 => 
          array (
            0 => 'district',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      624 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'districts.edit',
          ),
          1 => 
          array (
            0 => 'district',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      638 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'districts.update',
          ),
          1 => 
          array (
            0 => 'district',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      647 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'districts.destroy',
          ),
          1 => 
          array (
            0 => 'district',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      684 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'countries.show',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      700 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'countries.edit',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      714 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'countries.update',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'countries.destroy',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      752 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vQFBCrvwVa5nDDoC',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      781 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cities.show',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      797 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cities.edit',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      811 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cities.update',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      820 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cities.destroy',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      853 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RC9T0ZoGoJPhZiwb',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      883 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'patients.show',
          ),
          1 => 
          array (
            0 => 'patient',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      899 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'patients.edit',
          ),
          1 => 
          array (
            0 => 'patient',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      913 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'patients.update',
          ),
          1 => 
          array (
            0 => 'patient',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      922 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'patients.destroy',
          ),
          1 => 
          array (
            0 => 'patient',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      952 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feedbacks.show',
          ),
          1 => 
          array (
            0 => 'feedback',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      965 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feedbacks.edit',
          ),
          1 => 
          array (
            0 => 'feedback',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      973 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feedbacks.update',
          ),
          1 => 
          array (
            0 => 'feedback',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'feedbacks.destroy',
          ),
          1 => 
          array (
            0 => 'feedback',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1020 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m596YsV6wq8Kdp13',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mRHYDhXwLkCmHNi3',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1053 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor.updateInfo',
          ),
          1 => 
          array (
            0 => 'doctor',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1099 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor.addDoctorAddress',
          ),
          1 => 
          array (
            0 => 'doctor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'doctor.storeDoctorAddress',
          ),
          1 => 
          array (
            0 => 'doctor',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1125 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor.editDoctorAddress',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'doctor.updateDoctorAddress',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor.deleteDoctorAddress',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1192 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor.deleteDoctorSubSpecialist',
          ),
          1 => 
          array (
            0 => 'subspecialist',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::hghtK7lgJwYOF889' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::hghtK7lgJwYOF889',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::huRpDlGVqmcMvrKa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Patient\\PatientAuthController@register',
        'controller' => 'App\\Http\\Controllers\\API\\Patient\\PatientAuthController@register',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::huRpDlGVqmcMvrKa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Patient\\PatientAuthController@login',
        'controller' => 'App\\Http\\Controllers\\API\\Patient\\PatientAuthController@login',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lUniJTaWF1ULg4cs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Patient\\PatientAuthController@getLogin',
        'controller' => 'App\\Http\\Controllers\\API\\Patient\\PatientAuthController@getLogin',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::lUniJTaWF1ULg4cs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hwY24LQ7gDfMyN8h' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/forgot',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PasswordController@forgot',
        'controller' => 'App\\Http\\Controllers\\API\\PasswordController@forgot',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::hwY24LQ7gDfMyN8h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::J3RSIHV128cCt9r8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\API\\PasswordController@reset',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::J3RSIHV128cCt9r8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6VkKoYbTWYeD606F' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patientUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Patient\\PatientAuthController@patientUser',
        'controller' => 'App\\Http\\Controllers\\API\\Patient\\PatientAuthController@patientUser',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::6VkKoYbTWYeD606F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RxiRUIq1Mfsr9MmK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Patient\\PatientAuthController@logout',
        'controller' => 'App\\Http\\Controllers\\API\\Patient\\PatientAuthController@logout',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RxiRUIq1Mfsr9MmK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wBPBMQLZxn9zdmpj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'maintenance',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":264:{@yW1zZDAQCayrRcLLddPf7pJ9mopPbpwV6aVnVbcqia8=.a:5:{s:3:"use";a:0:{}s:8:"function";s:52:"function () {
        return \\view(\'welcome\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000195b5284000000003b4c7d8d";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::wBPBMQLZxn9zdmpj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KqOApc212BNGC92D' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'maintenance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":360:{@XES70c5BSmFDg1Ux2aiHGrvucmgEQ6bmLfPV1igjiaY=.a:5:{s:3:"use";a:0:{}s:8:"function";s:147:"function () {
    
    if (\\setting()->status == \'open\') {
        return \\redirect(\'/\');
    } else {
        return \\view(\'maintenance\');
    }
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000195b5288000000003b4c7d8d";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::KqOApc212BNGC92D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::C8UuRt5gE8b5cHtw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":399:{@zWrt6As63qJYBZwqL7LQxuff4Z7s58lki9jhL86XCs8=.a:5:{s:3:"use";a:0:{}s:8:"function";s:186:"function ($lang) {
    \\session()->has(\'lang\') ? \\session()->forget(\'lang\') : \'\';
    $lang == \'ar\' ? \\session()->put(\'lang\', \'ar\') : \\session()->put(\'lang\', \'en\');
    return \\back();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000195b5286000000003b4c7d8d";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::C8UuRt5gE8b5cHtw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminAuth@login',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminAuth@login',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loginCheck' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminAuth@loginCheck',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminAuth@loginCheck',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.loginCheck',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::E0hW8loPt6A08mJt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forgot/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminAuth@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminAuth@forgotPassword',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::E0hW8loPt6A08mJt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OwYT3KdVJSVDmXKx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/forgot/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminAuth@forgotPasswordMessage',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminAuth@forgotPasswordMessage',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::OwYT3KdVJSVDmXKx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Aco2KZ32mvdFwsqo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reset/password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminAuth@resetPassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminAuth@resetPassword',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Aco2KZ32mvdFwsqo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gmPkLOaRQU3Dfqg1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reset/password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminAuth@resetPasswordUpdateData',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminAuth@resetPasswordUpdateData',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::gmPkLOaRQU3Dfqg1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admins.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admins',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'admins.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admins.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admins',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'admins.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admins.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admins/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'admins.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admins.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admins/{admin}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'admins.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admins.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admins/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'admins.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admins.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admins/{admin}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admins.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admins.destroyAll' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admins/destroy/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@destroyAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@destroyAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admins.destroyAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'specialists.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/specialists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'specialists.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\SpecialistController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SpecialistController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'specialists.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/specialists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'specialists.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\SpecialistController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SpecialistController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'specialists.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/specialists/{specialist}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'specialists.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\SpecialistController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SpecialistController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'specialists.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/specialists/{specialist}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'specialists.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\SpecialistController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SpecialistController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'specialists.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/specialists/{specialist}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'specialists.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\SpecialistController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SpecialistController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'specialists.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/specialists/{specialist}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SpecialistController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SpecialistController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'specialists.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'specialists.destroyAll' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/specialists/destroy/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SpecialistController@destroyAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\SpecialistController@destroyAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'specialists.destroyAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sub-specialists.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sub-specialists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'sub-specialists.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubSpecialistController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubSpecialistController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sub-specialists.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sub-specialists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'sub-specialists.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubSpecialistController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubSpecialistController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sub-specialists.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sub-specialists/{sub_specialist}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'sub-specialists.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubSpecialistController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubSpecialistController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sub-specialists.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sub-specialists/{sub_specialist}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'sub-specialists.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubSpecialistController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubSpecialistController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sub-specialists.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/sub-specialists/{sub_specialist}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'sub-specialists.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubSpecialistController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubSpecialistController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subspecialists.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sub-specialists/{sub_specialist}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubSpecialistController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubSpecialistController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'subspecialists.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subspecialists.destroyAll' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/sub-specialists/destroy/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubSpecialistController@destroyAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubSpecialistController@destroyAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'subspecialists.destroyAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor-degree.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/doctor-degree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'doctor-degree.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorDegreeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorDegreeController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor-degree.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/doctor-degree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'doctor-degree.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorDegreeController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorDegreeController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor-degree.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/doctor-degree/{doctor_degree}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'doctor-degree.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorDegreeController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorDegreeController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor-degree.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/doctor-degree/{doctor_degree}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'doctor-degree.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorDegreeController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorDegreeController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor-degree.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/doctor-degree/{doctor_degree}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'doctor-degree.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorDegreeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorDegreeController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor-degree.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/doctor-degree/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorDegreeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorDegreeController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'doctor-degree.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor-degree.destroyAll' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/doctor-degree/destroy/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorDegreeController@destroyAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorDegreeController@destroyAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'doctor-degree.destroyAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'countries.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'countries.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'countries.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'countries.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'countries.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/countries/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'countries.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'countries.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/countries/{country}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'countries.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'countries.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/countries/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'countries.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'countries.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/countries/{country}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'countries.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'countries.destroyAll' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/countries/destroy/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@destroyAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@destroyAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'countries.destroyAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vQFBCrvwVa5nDDoC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/country/{country}/city_name',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@getCity',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@getCity',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::vQFBCrvwVa5nDDoC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cities.get_cities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cities/get_cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@get_cities',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@get_cities',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'cities.get_cities',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cities.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'cities.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cities.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'cities.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cities.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'cities.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cities.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cities/{city}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'cities.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cities.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'cities.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cities.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/cities/{city}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'cities.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cities.destroyAll' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/cities/destroy/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@destroyAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@destroyAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'cities.destroyAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RC9T0ZoGoJPhZiwb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/city/{city}/district_name',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@getDistrict',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@getDistrict',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::RC9T0ZoGoJPhZiwb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'districts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/districts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'districts.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\DistrictController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DistrictController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'districts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/districts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'districts.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\DistrictController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DistrictController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'districts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/districts/{district}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'districts.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\DistrictController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\DistrictController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'districts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/districts/{district}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'districts.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\DistrictController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\DistrictController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'districts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/districts/{district}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'districts.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\DistrictController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DistrictController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'districts.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/districts/{district}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DistrictController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DistrictController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'districts.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'districts.destroyAll' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/districts/destroy/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DistrictController@destroyAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\DistrictController@destroyAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'districts.destroyAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor_times.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/doctor_times',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'doctor_times.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorTimeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorTimeController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor_times.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/doctor_times',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'doctor_times.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorTimeController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorTimeController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor_times.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/doctor_times/{doctor_time}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'doctor_times.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorTimeController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorTimeController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor_times.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/doctor_times/{doctor_time}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'doctor_times.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorTimeController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorTimeController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor_times.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/doctor_times/{doctor_time}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'doctor_times.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorTimeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorTimeController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor_times.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/doctor_times/{doctor_time}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorTimeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorTimeController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'doctor_times.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor_times.destroyAll' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/doctor_times/destroy/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorTimeController@destroyAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorTimeController@destroyAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'doctor_times.destroyAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QcamrfR23FNafpsZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@setting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@setting',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::QcamrfR23FNafpsZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cK7ycYsHqWpHfSzS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@settingSave',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@settingSave',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::cK7ycYsHqWpHfSzS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'patients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/patients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'patients.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\PatientController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PatientController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'patients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/patients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'patients.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\PatientController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PatientController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'patients.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/patients/{patient}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'patients.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\PatientController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\PatientController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'patients.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/patients/{patient}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'patients.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\PatientController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\PatientController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'patients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/patients/{patient}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'patients.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\PatientController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\PatientController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'patients.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/patients/{patient}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PatientController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PatientController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'patients.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'patients.destroyAll' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/patients/destroy/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PatientController@destroyAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\PatientController@destroyAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'patients.destroyAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctors.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/doctors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'doctors.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctors.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/doctors/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'doctors.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctors.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/doctors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'doctors.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctors.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/doctors/{doctor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'doctors.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctors.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/doctors/{doctor}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'doctors.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctors.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/doctors/{doctor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'doctors.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctors.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/doctors/{doctor}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'doctors.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctors.destroyAll' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/doctors/destroy/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorController@destroyAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorController@destroyAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'doctors.destroyAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'feedbacks.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feedbacks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'feedbacks.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedbackController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedbackController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'feedbacks.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/feedbacks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'feedbacks.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedbackController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedbackController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'feedbacks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feedbacks/{feedback}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'feedbacks.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedbackController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedbackController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'feedbacks.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feedbacks/{feedback}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'feedbacks.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedbackController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedbackController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'feedbacks.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/feedbacks/{feedback}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'feedbacks.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedbackController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedbackController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'feedbacks.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/feedbacks/{feedback}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'as' => 'feedbacks.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedbackController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedbackController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'feedbacks.destroyAll' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/feedbacks/destroy/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedbackController@destroyAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedbackController@destroyAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'feedbacks.destroyAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'addDoctorAddress' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/doctor-addresses/create/{doctor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorAddressController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorAddressController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'addDoctorAddress',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'storeDoctorAddress' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/doctor-addresses/create/{doctor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorAddressController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorAddressController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'storeDoctorAddress',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'editDoctorAddress' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/doctor-addresses/edit/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorAddressController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorAddressController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'editDoctorAddress',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'updateDoctorAddress' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/doctor-addresses/edit/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorAddressController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorAddressController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'updateDoctorAddress',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'deleteDoctorAddress' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/doctor-addresses/delete/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DoctorAddressController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DoctorAddressController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'deleteDoctorAddress',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":280:{@3WmqY+pPxb5J7w0YHCESE+HVDvdXsypZWbYIGtZAazI=.a:5:{s:3:"use";a:0:{}s:8:"function";s:68:"function () {
            return \\view(\'admin.dashboard\');
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000195b5e89000000003b4c7d8d";}}',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'admin:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminAuth@logout',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminAuth@logout',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'doctor/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorAuth@register',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorAuth@register',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'doctor.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor.registerCheck' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'doctor/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorAuth@registerCheck',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorAuth@registerCheck',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'doctor.registerCheck',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'doctor/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorAuth@login',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorAuth@login',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'doctor.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor.loginCheck' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'doctor/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorAuth@loginCheck',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorAuth@loginCheck',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'doctor.loginCheck',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Qk8OFeLjctknTb0n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'doctor/forgot/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorAuth@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorAuth@forgotPassword',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'generated::Qk8OFeLjctknTb0n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0HPS8bdrF2O2cwLC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'doctor/forgot/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorAuth@forgotPasswordMessage',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorAuth@forgotPasswordMessage',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'generated::0HPS8bdrF2O2cwLC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::m596YsV6wq8Kdp13' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'doctor/reset/password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorAuth@resetPassword',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorAuth@resetPassword',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'generated::m596YsV6wq8Kdp13',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mRHYDhXwLkCmHNi3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'doctor/reset/password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorAuth@resetPasswordUpdateData',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorAuth@resetPasswordUpdateData',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'generated::mRHYDhXwLkCmHNi3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'doctor/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'doctor:doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorController@show',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorController@show',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'doctor.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor.editInfo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'doctor/profile/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'doctor:doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorController@edit',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorController@edit',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'doctor.editInfo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor.updateInfo' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'doctor/profile/update/{doctor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'doctor:doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorController@update',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorController@update',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'doctor.updateInfo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor.addDoctorAddress' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'doctor/doctor-address/create/{doctor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'doctor:doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorAddressController@create',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorAddressController@create',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'doctor.addDoctorAddress',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor.storeDoctorAddress' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'doctor/doctor-address/create/{doctor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'doctor:doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorAddressController@store',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorAddressController@store',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'doctor.storeDoctorAddress',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor.editDoctorAddress' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'doctor/doctor-address/edit/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'doctor:doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorAddressController@edit',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorAddressController@edit',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'doctor.editDoctorAddress',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor.updateDoctorAddress' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'doctor/doctor-address/edit/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'doctor:doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorAddressController@update',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorAddressController@update',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'doctor.updateDoctorAddress',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor.deleteDoctorAddress' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'doctor/doctor-address/delete/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'doctor:doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorAddressController@destroy',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorAddressController@destroy',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'doctor.deleteDoctorAddress',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor.addDoctorSubSpecialist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'doctor/sub-specialists/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'doctor:doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorSubSpecialistController@create',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorSubSpecialistController@create',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'doctor.addDoctorSubSpecialist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor.storeDoctorSubSpecialist' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'doctor/sub-specialists/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'doctor:doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorSubSpecialistController@store',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorSubSpecialistController@store',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'doctor.storeDoctorSubSpecialist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor.deleteDoctorSubSpecialist' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'doctor/sub-specialists/delete/{subspecialist}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'doctor:doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorSubSpecialistController@destroy',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorSubSpecialistController@destroy',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'doctor.deleteDoctorSubSpecialist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'doctor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'doctor:doctor',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":281:{@WKU9NZeYwlhOHGAfPGXTmErWf3+je7K6nMPQvqcnJAE=.a:5:{s:3:"use";a:0:{}s:8:"function";s:69:"function () {
            return \\view(\'doctor.dashboard\');
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000195b5eb0000000003b4c7d8d";}}',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'doctor.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'doctor.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'doctor/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang',
          2 => 'doctor:doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\Doctor\\DoctorAuth@logout',
        'controller' => 'App\\Http\\Controllers\\Doctor\\DoctorAuth@logout',
        'namespace' => NULL,
        'prefix' => '/doctor',
        'where' => 
        array (
        ),
        'as' => 'doctor.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
