<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModuleFormRequest;
use App\Models\Module;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|View|Application
    {
        $modules = Module::with(['lessons', 'cour'])->get();
        return view('admin.modules.index', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Factory|View|Application
    {
        return view('admin.modules.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModuleFormRequest $request): RedirectResponse
    {
        try {
            Module::create($request->validated());
            toastr()->success('Votre module a été crée avec succès');
            return redirect()->route('admin.modules.index');
        } catch (\Exception $exception) {
            toastr()->error("Une erreur s'est produite lors de la création de votre module");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module): Factory|View|Application
    {
        return view('admin.modules.show', compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module): Factory|View|Application
    {
        $module->load(['lessons', 'cour']);
        return view('admin.modules.form', compact('module'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModuleFormRequest $request, Module $module): RedirectResponse
    {
        try {
            $module->update($request->validated());
            toastr()->success('Votre module a été modifié avec succès');
            return redirect()->route('admin.modules.index');
        } catch (\Exception $exception) {
            toastr()->error("Une erreur s'est produite lors de la modification de votre module");
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module): RedirectResponse
    {
        try {
            $module->delete();
            toastr()->success('Votre module a été supprimé avec succès');
            return redirect()->route('admin.modules.index');
        } catch (\Exception $exception) {
            toastr()->error("Une erreur s'est produite lors de la suppression de votre module");
            return redirect()->back();
        }
    }
}
