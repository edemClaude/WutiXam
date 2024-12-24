<?php

namespace App\Http\Controllers;

use App\Http\Requests\LessonFormRequest;
use App\Models\Lesson;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|View|Application
    {
        $lessons = Lesson::with(['cour', 'module', 'videos'])->get();
        return view('admin.lessons.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Factory|View|Application
    {
        return view('admin.lessons.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LessonFormRequest $request): RedirectResponse
    {
        try{
            Lesson::created($request->validated());
            toastr()->success('Votre lesson a été crée avec succès');
            return redirect()->route('admin.lessons.index');
        } catch (\Exception $exception){
            toastr()->error("Une erreur s'est produite lors de la création de votre lesson");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson): Factory|View|Application
    {
        return view('admin.lessons.show', compact('lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lesson $lesson): Factory|View|Application
    {
        return view('admin.lessons.form', compact('lesson'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LessonFormRequest $request, Lesson $lesson): RedirectResponse
    {
        try{
            $lesson->update($request->validated());
            toastr()->success('Votre lesson a été mise à jour avec succès');
            return redirect()->route('admin.lessons.index');
        } catch (\Exception $exception){
            toastr()->error("Une erreur s'est produite lors de la mise à jour de votre lesson");
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson): RedirectResponse
    {
        $lesson->delete();
        toastr()->success('Votre lesson a été supprimé avec succès');
        return redirect()->route('admin.lessons.index');
    }
}
