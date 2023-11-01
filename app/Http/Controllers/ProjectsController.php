<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Projects;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Projects::all();
        return view('portfolio.index', compact('projects'));
    }

    public function create()
    {
        return view('portfolio.create');
    }

    public function store(CreateProjectRequest $request)
    {
        $data = $request->all();

        $image = $request->file('image_path');
        $nameImage = Str::uuid().'.'. $image->extension();

        $imageServer = Image::make($image)->fit(192, 256);
        $imagePath = public_path('projects').'/'.$nameImage;
        $imageServer->save($imagePath);
        $data['image_path'] = 'projects/'. $nameImage;
        Projects::create($data);
        return redirect()->route('portfolio.index');
    }

    public function edit(Projects $project)
    {
        return view('portfolio.edit', compact('project'));
    }

    public function update(UpdateProjectRequest $request, Projects $project)
    {
        $validated = $request->all();

        if ($request->file('image_path')){
            $image_path = public_path($project->image_path);
            unlink($image_path);
            $image = $request->file('image_path');
            $nameImage = Str::uuid().'.'. $image->extension();

            $imageServer = Image::make($image)->fit(192, 256);
            $imagePath = public_path('projects').'/'.$nameImage;
            $imageServer->save($imagePath);
            $validated['image_path'] = 'projects/'. $nameImage;
        }

        $project->update($validated);
        return redirect()->route('portfolio.index');
    }

    public function destroy(Projects $project)
    {
        $image_path = public_path($project->image_path);
        $project->delete();

        if (file_exists($image_path)) {
            unlink($image_path);
        }

        return redirect()->route('portfolio.index');
    }
}
