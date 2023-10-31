<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Faker\Core\File;
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

    public function store(Request $request)
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

    public function edit(Projects $projects)
    {
        return view('portfolio.edit');
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
