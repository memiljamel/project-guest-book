<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $page = $request->query('page');
        $search = $request->query('search');

        $guests = Guest::whereDate('created_at', today())
            ->when($search, function (Builder $query, ?string $search) {
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

        return view('home.index', compact('guests', 'search'));
    }
}
