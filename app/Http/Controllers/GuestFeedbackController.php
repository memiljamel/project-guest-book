<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use App\Models\Feedback;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class GuestFeedbackController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('home.feedback');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeedbackRequest $request): RedirectResponse
    {
        $feedback = new Feedback;
        $feedback->description = $request->input('description');
        $feedback->type_feedback = $request->input('type_feedback');
        $feedback->save();

        return redirect()->route('home.index')
            ->with('message', 'Thank you! Your feedback has been submitted.');
    }
}
