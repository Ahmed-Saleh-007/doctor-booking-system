<?php

namespace App\Http\Controllers\Doctor;

use App\Models\Book;
use App\Http\Controllers\Controller;
use App\DataTables\DoctorAppointmentDatatable;

class DoctorAppointmentController extends Controller
{
    public function index(DoctorAppointmentDatatable $book)
    {

        return $book->render('doctor.doctor_appointments.index',
        ['title' => 'Appointments Control']);
    }

    public function show($book_id)
    {
        $book = Book::find($book_id);
        return view('doctor.doctor_appointments.ajax.show', compact('book'));
    }


    public function confirm($book_id)
    {
        $book = Book::find($book_id);
        $book->update(['confirm' => 1]);
        return response()->json(['success' => trans('admin.confirmed_successfully')]);
    }

    public function destroyAll()
    {
        Book::destroy(request('item'));
        return response()->json(['success' => trans('admin.deleted_record')]);
    }

}
