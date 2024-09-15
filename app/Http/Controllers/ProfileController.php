<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(): View
    {
        $staff = Auth::user();

        return view('profile.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileRequest $request): RedirectResponse
    {
        $staff = Auth::user();
        $staff->name = $request->input('name');
        $staff->email = $request->input('email');

        if ($request->filled('password')) {
            $staff->password = Hash::make($request->input('password'));
        }

        $staff->save();

        return redirect()->route('profile.edit')
            ->with('message', 'The profile has been updated.');

    }
}
