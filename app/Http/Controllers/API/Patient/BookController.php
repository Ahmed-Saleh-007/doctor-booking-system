<?php

namespace App\Http\Controllers\API\Patient;

use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('doctor')->with('patient')->with('address')->with('address.district')->with('address.district.city')->with('address.district.city.country')->get();
        return $books;
    }
    
    public function store(Request $request)
    {
        $data = $request->all();
        $data['date'] = now();
        Book::create($data);
        return response()->json([
            "message" => "Reservation Successfully:) ",
            "status"  => 200
            ,
        ],Response::HTTP_CREATED);
    }
}
