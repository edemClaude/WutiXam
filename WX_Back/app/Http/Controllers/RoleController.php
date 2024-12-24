<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleFormRequest;
use App\Models\Role;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|View|Application
    {
        return view('admin.roles.index', [
            'roles' => Role::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Factory|View|Application
    {
        return view('admin.roles.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleFormRequest $request): RedirectResponse
    {
        try {
            Role::created($request->validated());
            toastr()->success('Role created successfully');
            return redirect()->route('roles.index');
        } catch (\Exception $exception) {
            toastr()->error($exception->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role): RedirectResponse
    {
        try {
            $role->delete();
            toastr()->success('Role deleted successfully');
            return redirect()->route('roles.index');
        } catch (\Exception $exception) {
            toastr()->error($exception->getMessage());
            return redirect()->back();
        }
    }
}
