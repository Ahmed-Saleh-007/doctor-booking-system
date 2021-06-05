<?php

namespace App\Http\Controllers\Admin;
use App\DataTables\FeedbackDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreFeedbackRequest;
use App\Http\Requests\Admin\UpdateFeedbackRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //Show All Feedbacks
    public function index(FeedbackDatatable $feedback)
    {
        return $feedback->render('admin.feedbacks.index', ['title' => 'Feedbacks']);
    }

    //Store New Feedback
    public function store(StoreFeedbackRequest $request)
    {
        $data = $request->all();
        Feedback::create($data);
        return response()->json(['success' => trans('admin.record_added')]);
    }

    //Show Specified Feedback
    public function show(Feedback $feedback)
    {
        return view('admin.feedbacks.ajax.show', compact('feedback'));
    }

    //Edit Specified Feedback
    public function edit(Feedback $feedback)
    {
        return view('admin.feedbacks.ajax.edit', compact('feedback'));
    }

    //Update Specified Feedback
    public function update(UpdateFeedbackRequest $request, $id)
    {
        $feedback = Feedback::find($id);
        if ($feedback) {
            $data = $request->all();
            $feedback->update($data);
            return response()->json(['success' => trans('admin.updated_record')]);
        } else {
            return redirect()->route('feedback.index');
        }
    }

    //Remove Specified Feedback
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return response()->json(['success' => trans('admin.deleted_record')]);
    }

    //Remove All Feedbacks
    public function destroyAll()
    {
        foreach (request('item') as $id) {
            $feedback = Feedback::find($id);
        }
        Feedback::destroy(request('item'));
		return response()->json(['success' => trans('admin.deleted_record')]);
    }
}