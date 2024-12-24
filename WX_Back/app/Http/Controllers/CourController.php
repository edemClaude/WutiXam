<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourFormRequest;
use App\Models\Cour;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class CourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cours = Cour::with(['subscriptions', 'lessons', 'modules', 'videos'])->get();
        return view('admin.cours.index', compact('cours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Factory|View|Application
    {
        return view('admin.cours.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourFormRequest $request): RedirectResponse
    {
        try {
            $request->validated();
            toastr()->success('Le cours a bien été ajouté');
            return redirect()->route('cours.index');
        } catch (Exception $exception) {
            toastr()->error("Une erreur est survenue lors de l'ajout du cours");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cour $cour): Factory|View|Application
    {
        return view('admin.cours.show', compact('cour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cour $cour): Factory|View|Application
    {
        return view('admin.cours.form', compact('cour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourFormRequest $request, Cour $cour)
    {
        try{
            $request->validated();
            toastr()->success('Le cours a bien été modifié');
            return redirect()->route('cours.index');
        } catch (Exception $exception) {
            toastr()->error("Une erreur est survenue lors de la modification du cours");
            return redirect()->back();
        }
    }

    public function activate(Cour $cour): RedirectResponse
    {
        try{
            $cour->status = true;
            $cour->save();
            toastr()->success('Le cours a bien été activé');
            return redirect()->back();
        } catch (Exception $exception) {
            toastr()->error("Une erreur est survenue lors de l'activation du cours");
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cour $cour): RedirectResponse
    {
        $cour->delete();
        toastr()->success('Le cours a bien été supprimé');
        return redirect()->route('admin.cours.index');
    }
}
