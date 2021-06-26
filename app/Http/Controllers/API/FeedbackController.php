<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
// use App\Http\Requests\Admin\StoreFeedbackResquest;
use App\Http\Requests\Admin\UpdateFeedbackRequest;

class FeedbackController extends Controller
{
    //Get All Feedbacks on Specified Doctor
    public function index($id) {
        $feedbacks = Feedback::where('doc_id','=',$id)->with(['patient', 'doctor'])->get();
        return response()->json($feedbacks);
    }

    // Create Feedback of Patient on Doctor
    public function store( StoreFeedbackRequest $request) {
        $feedback = Feedback::create([
            'doc_id'     => $request->input('doc_id'),
            'patient_id' => $request->input('patient_id'),
            'comment'    => $request->input('comment'),
            'rate'       => $request->input('rate'),
        ]);
        if ($feedback){
            return response()->json([
                "success" => "Feedback Added Successfully",
                "status" => 201,
            ]);
        }else{
            return response()->json([
                "error" => "Something Went Wrong!!",
                "status" => 400,
            ]);
        }
        
    }
    
}