<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::get();
        return view('projects.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'kode_barang' => 'required|string',
            'nama_barang' => 'required|string',
            'jumlah_barang' => 'required|integer',
            'satuan_barang' => 'required|string',
        ]);

        $project = new Project();
        $project->kode_barang = $request->kode_barang;
        $project->nama_barang = $request->nama_barang;
        $project->jumlah_barang = $request->jumlah_barang;
        $project->satuan_barang = $request->satuan_barang;
        $project->save();

        return redirect()->route('projects.index')
            ->with('success', 'Barang berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = Project::find($id);

        return view('projects.show', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::find($id);

        return view('projects.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'kode_barang' => 'required|string',
            'nama_barang' => 'required|string',
            'jumlah_barang' => 'required|integer',
            'satuan_barang' => 'required|string',
        ]);

        $project = new Project();
        $project->kode_barang = $request->kode_barang;
        $project->nama_barang = $request->nama_barang;
        $project->jumlah_barang = $request->jumlah_barang;
        $project->satuan_barang = $request->satuan_barang;
        $project->save();

        return redirect()->route('projects.index')
            ->with('success', 'Barang telah diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Project::destroy($id);
        return redirect()->route('projects.index')
            ->with('success', 'Barang telah dihapus!');
    }
}
