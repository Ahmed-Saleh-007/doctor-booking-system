<?php

namespace App\Http\Controllers\API\Patient;

use App\Models\Book;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBookRequest;
use App\Http\Requests\Admin\UpdateBookRequest;
use App\Models\DoctorAddress;
use Form;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('doctor')->with('patient')->with('address')->with('address.district')->with('address.district.city')->with('address.district.city.country')->get();
        return $books;
    }

    public function store(StoreBookRequest $request)
    {
        return response()->json(['welcome to store function']);

        $data = $request->all();
        $data['confirm'] = isset($data['confirm'])? 1 : 0;
        Book::create($data);
        return response()->json(['success' => trans('admin.record_added')]);
    }

    public function show(Book $book)
    {
        return view('admin.books.ajax.show', compact('book'));
    }


    public function edit(Book $book)
    {
        return view('admin.books.ajax.edit', compact('book'));
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        $data = $request->all();
        $data['confirm'] = isset($data['confirm'])? 1 : 0;
        $book->update($data);
        return response()->json(['success' => trans('admin.updated_record')]);
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json(['success' => trans('admin.deleted_record')]);
    }

    public function destroyAll()
    {
        Book::destroy(request('item'));
        return response()->json(['success' => trans('admin.deleted_record')]);
    }

    public function get_addresses()
    {
        if (request()->ajax()) {
            if (request()->has('doctor_id')) {
                $select=request()->has('select')?request('select'):'';
                return Form::select('address_id', DoctorAddress::where('doctor_id', request('doctor_id'))
                ->pluck('address_'. session('lang'), 'id'), $select, ['class' => 'form-control','placeholder'=>'...']);
            }
        }
    }

}
