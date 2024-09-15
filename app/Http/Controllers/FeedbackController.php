<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use App\Models\Feedback;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $page = $request->query('page');
        $search = $request->query('search');

        $feedbacks = Feedback::when($search, function (Builder $query, ?string $search) {
            $query->where('description', 'LIKE', "%{$search}%")
                ->orWhere('feedback_type', 'LIKE', "%{$search}%");
        })
            ->latest()
            ->paginate()
            ->withQueryString();

        if ($page > $feedbacks->lastPage() && $page > 1) {
            abort(404);
        }

        return view('feedbacks.index', compact('feedbacks', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('feedbacks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeedbackRequest $request): RedirectResponse
    {
        $feedback = new Feedback();
        $feedback->description = $request->input('description');
        $feedback->type_feedback = $request->input('type_feedback');
        $feedback->save();

        return redirect()->route('feedbacks.index')
            ->with('message', 'The feedback has been created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback): View
    {
        return view('feedbacks.show', compact('feedback'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback): View
    {
        return view('feedbacks.edit', compact('feedback'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeedbackRequest $request, Feedback $feedback)
    {
        $feedback->description = $request->input('description');
        $feedback->type_feedback = $request->input('type_feedback');
        $feedback->save();

        return redirect()->route('feedbacks.index')
            ->with('message', 'The feedback has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback): RedirectResponse
    {
        $feedback->delete();

        return redirect()->route('feedbacks.index')
            ->with('message', 'The feedback has been deleted.');
    }
}
