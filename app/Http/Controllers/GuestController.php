<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGuestRequest;
use App\Http\Requests\UpdateGuestRequest;
use App\Models\Guest;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $page = $request->query('page');
        $search = $request->query('search');

        $guests = Guest::when($search, function (Builder $query, ?string $search) {
            $query->where('name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%")
                ->orWhere('phone_number', 'LIKE', "%{$search}%")
                ->orWhere('company', 'LIKE', "%{$search}%")
                ->orWhere('address', 'LIKE', "%{$search}%")
                ->orWhere('purpose', 'LIKE', "%{$search}%");
        })
            ->latest()
            ->paginate()
            ->withQueryString();

        if ($page > $guests->lastPage() && $page > 1) {
            abort(404);
        }

        return view('guests.index', compact('guests', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $staffs = Staff::select(['id', 'name'])
            ->orderBy('name')
            ->get();

        return view('guests.create', compact('staffs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuestRequest $request): RedirectResponse
    {
        $guest = new Guest();
        $guest->name = $request->input('name');
        $guest->gender = $request->input('gender');
        $guest->email = $request->input('email');
        $guest->phone_number = $request->input('phone_number');
        $guest->company = $request->input('company');
        $guest->address = $request->input('address');
        $guest->purpose = $request->input('purpose');
        $guest->staff_id = $request->input('staff_id');
        $guest->save();

        return redirect()->route('guests.index')
            ->with('message', 'The guest has been created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guest $guest): View
    {
        return view('guests.show', compact('guest'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guest $guest): View
    {
        $staffs = Staff::select(['id', 'name'])
            ->orderBy('name')
            ->get();

        return view('guests.edit', compact('guest', 'staffs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuestRequest $request, Guest $guest): RedirectResponse
    {
        $guest->name = $request->input('name');
        $guest->gender = $request->input('gender');
        $guest->email = $request->input('email');
        $guest->phone_number = $request->input('phone_number');
        $guest->company = $request->input('company');
        $guest->address = $request->input('address');
        $guest->purpose = $request->input('purpose');
        $guest->staff_id = $request->input('staff_id');
        $guest->save();

        return redirect()->route('guests.index')
            ->with('message', 'The guest has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guest $guest): RedirectResponse
    {
        $guest->delete();

        return redirect()->route('guests.index')
            ->with('message', 'The guest has been deleted.');
    }
}
