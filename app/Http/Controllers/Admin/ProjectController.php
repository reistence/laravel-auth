<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view("admin.projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.projects.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        // dd($request->validated());
        $data = $request->validated();
        $data["slug"] = Project::generateSlug($data["title"]);
        // $project = new Project();
        // $project->fill($data);
        // $project->save();
        if ($request->hasFile("cover_image")) {
            $path = Storage::put("project_images", $request->cover_image);
            $data["cover_image"] = $path;
        }
        $project = Project::create($data);
        // dd($project);
        return redirect()->route("admin.projects.index")->with("message", "Your Project has been successfully added.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view("admin.projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view("admin.projects.edit", compact("project"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data = $request->validated();
        $data["slug"] = Project::generateSlug($data["title"]);

        if ($request->hasFile("cover_image")){
            if($project->cover_image) Storage::delete("project_images", $request->cover_image);
            $path = Storage::put("project_images", $request->cover_image);
            $data["cover_image"] = $path;
        }

        $project->update($data);
        return redirect()->route("admin.projects.index")->with("message","$project->title has been successfully edited." );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route("admin.projects.index")->with("message", "$project->title has been deleted");
    }
}
