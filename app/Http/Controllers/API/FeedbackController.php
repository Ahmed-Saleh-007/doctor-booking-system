<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Http\Requests\Admin\StoreFeedbackRequest;
use App\Http\Requests\Admin\UpdateFeedbackRequest;

class FeedbackController extends Controller
{
    //Get All Feedbacks on Specified Doctor
    public function index($id) {
        $feedbacks = Feedback::where('doc_id','=',$id)->with(['patient', 'doctor'])->get();
        return response()->json($feedbacks);
    }


    // Create Feedback of Patient on Doctor
    public function store(StoreFeedbackRequest $request) {
        $feedback = Feedback::create([
            'doc_id'     => $request->input('doc_id'),
            'patient_id' => $request->input('patient_id'),
            'comment'    => $request->input('comment'),
            'rate'       => $request->input('rate'),
        ]);
        return response()->json([
            "success" => "Feedback Added Successfully",
            "status" => 201,
        ]);
    }

    // // Update Feedback of Patient on Doctor
    // public function update(UpdateFeedbackRequest $request) {
    //     $feedback = Feedback::where('id', $id);
    //     $feedback->([
    //         'comment' => $request->input('comment'),
    //         'rate'    => $request->input('rate'),
    //     ]);
    //     $feedback->save();
    //     return response()->json([
    //         "success"  => "Feedback updated successfully",
    //         "status"   => 200,
    //         "feedback" => $feedback,
    //     ], Response::HTTP_OK);
    // }

    // // Delete Feedback of Patient on Doctor
    // public function destroy($id)
    // {
    //     $feedback = Feedback::where('id', $id);
        
    //     if ($feedback) {
    //         $feedback->destroy;
    //         return response()->json([
    //             "success"  => "Feedback updated successfully",
    //             "status"   => 200,
    //             "feedback" => $feedback,
    //         ], Response::HTTP_NOT_FOUND);
    //     } else {
    //         return response()->json([
    //             "success"  => "Feedback Not Found",
    //             "status"   => 404,
    //         ], Response::HTTP_NOT_FOUND);
    //     }
    // }
}