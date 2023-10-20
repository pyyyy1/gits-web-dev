<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $projects = Project::all();
        return view('project.index')->with('projects', $projects);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::select('id','nama')->get();
        return view('project.create')->with('projects', $projects);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'          => 'required | max:255',
            'link'           => 'required',
            // 'description'   => 'nullable', karena gk butuh validasi
            'image'         => ['nullable','image'] // ini ditulis nullable karena pas validasi image itu pas imagenya dh diisi klo blm maka gk bakal di validasi
         ],
         [
            'nama.required' => 'Nama Project Harus Diisi!',
            'link.required' => 'link harus diisi, contoh : github.com/zhafia/gits-web-dev',
            'image.image'   => 'image harus berektensi .jpg/.jpeg/.png'
         ]
        );

         $input = $request->all();
        
        // sebelum nyimpen data kita harus nyimpen gambarnya
         if($request->has('image')){
            $image = $request->file('image')->store('project/img','public'); // jadi filenya ini akan di simpan di storage/app/public/product bisa juga product/img
            $input['image'] = $image;
         }else{
            unset($input['image']); // 
         }
         Project::create($input);

         session()->flash('success','Project successfully created');
         return redirect('project');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, Request $request)
    {
        //
        // dd($request->id);
        $project = Project::find($request->id);
        return view('project.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project, Request $request)
    {
        $project = Project::find($request->id);
        return view('project.edit')->with('project', $project);
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'nama'          => 'required | max:255',
            'link'           => 'required',
            'image'         => ['nullable','image']
         ]);

        $input = $request->all();

        $project = Project::find($request->id);

        // jika ada image yg dikirim maka update img yg ada di database
        if($request->has('image')){
            // cek datanya ada image gk sebelumnya klo ada maka hapus
            if($project->image != null && Storage::disk('public')->exists($project->image)){ // jadi dia nyari gambarnya di dalam public
                Storage::disk('public')->delete($project->image);
            }

            // Simpan gambarnya
            $image = $request->file('image')->store('project/img','public'); // jadi filenya ini akan di simpan di storage/app/public/project bisa juga project/img
            $input['image'] = $image;
        }else{
            $input['image'] = $project->image; // jika gk ngisi dan masih ada gambarnya maka kirim lokasi project image ke requestnya
        }

        // Update datanya
        $project->update($input);

        session()->flash('success','Project successfully Updated');
        return redirect(route('project.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Project $project)
    {
        $project = Project::find($request->id);
        // cek datanya ada image gk sebelumnya klo ada maka hapus
        if($project->image != null && Storage::disk('public')->exists($project->image)){ // jadi dia nyari gambarnya di dalam public
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();
        
        
        session()->flash('success','Project Deleted Successfully');
        return redirect(route('project.index'));
    }
}
