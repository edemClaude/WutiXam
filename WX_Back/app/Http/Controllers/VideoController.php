<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoFormRequest;
use App\Models\Video;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|View|Application
    {
        $videos = Video::with(['lesson', 'cour'])->get();
        return view('admin.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Factory|View|Application
    {
        return view('admin.videos.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VideoFormRequest $request): RedirectResponse
    {
        try {
            Video::created($request->validated());
            toastr()->success('Video created successfully');
            return redirect()->route('videos.index');
        } catch (\Exception $exception) {
            toastr()->error($exception->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video): Factory|View|Application
    {
        return view('admin.videos.form', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VideoFormRequest $request, Video $video): RedirectResponse
    {
        try {
            $video->update($request->validated());
            toastr()->success('Video updated successfully');
            return redirect()->route('videos.index');
        } catch (\Exception $exception) {
            toastr()->error($exception->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video): RedirectResponse
    {
        try {
            $video->delete();
            toastr()->success('Video deleted successfully');
            return redirect()->route('videos.index');
        } catch (\Exception $exception) {
            toastr()->error($exception->getMessage());
            return redirect()->back();
        }
    }
}
