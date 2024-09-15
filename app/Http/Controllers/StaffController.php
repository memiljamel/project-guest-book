<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Models\Department;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $page = $request->query('page');
        $search = $request->query('search');

        $staffs = Staff::when($search, function (Builder $query, ?string $search) {
            $query->where('staff_number', 'LIKE', "%{$search}%")
                ->orWhere('name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%")
                ->orWhere('phone_number', 'LIKE', "%{$search}%")
                ->orWhere('job_title', 'LIKE', "%{$search}%");
        })
            ->latest()
            ->paginate()
            ->withQueryString();

        if ($page > $staffs->lastPage() && $page > 1) {
            abort(404);
        }

        return view('staffs.index', compact('staffs', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $departments = Department::select(['id', 'name'])
            ->orderBy('name')
            ->get();

        return view('staffs.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStaffRequest $request): RedirectResponse
    {
        $staff = new Staff();
        $staff->staff_number = $request->input('staff_number');
        $staff->name = $request->input('name');
        $staff->gender = $request->input('gender');
        $staff->email = $request->input('email');
        $staff->phone_number = $request->input('phone_number');
        $staff->job_title = $request->input('job_title');
        $staff->department_id = $request->input('department_id');
        $staff->save();

        return redirect()->route('staffs.index')
            ->with('message', 'The staff has been created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff): View
    {
        return view('staffs.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff): View
    {
        $departments = Department::select(['id', 'name'])
            ->orderBy('name')
            ->get();

        return view('staffs.edit', compact('staff', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStaffRequest $request, Staff $staff): RedirectResponse
    {
        $staff->staff_number = $request->input('staff_number');
        $staff->name = $request->input('name');
        $staff->gender = $request->input('gender');
        $staff->email = $request->input('email');
        $staff->phone_number = $request->input('phone_number');
        $staff->job_title = $request->input('job_title');
        $staff->department_id = $request->input('department_id');
        $staff->save();

        return redirect()->route('staffs.index')
            ->with('message', 'The staff has been created.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff): RedirectResponse
    {
        $staff->delete();

        return redirect()->route('staffs.index')
            ->with('message', 'The staff has been deleted.');
    }
}
