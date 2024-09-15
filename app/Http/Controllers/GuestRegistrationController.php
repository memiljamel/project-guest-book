<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\Guest;
use App\Models\Staff;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class GuestRegistrationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $staffs = Staff::select(['id', 'name'])
            ->orderBy('name')
            ->get();

        return view('home.registration', compact('staffs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegistrationRequest $request): RedirectResponse
    {
        $guest = new Guest;
        $guest->name = $request->input('name');
        $guest->gender = $request->input('gender');
        $guest->email = $request->input('email');
        $guest->phone_number = $request->input('phone_number');
        $guest->company = $request->input('company');
        $guest->address = $request->input('address');
        $guest->purpose = $request->input('purpose');
        $guest->staff_id = $request->input('staff_id');
        $guest->save();

        return redirect()->route('home.index')
            ->with('message', 'The guest has been created.');
    }
}
