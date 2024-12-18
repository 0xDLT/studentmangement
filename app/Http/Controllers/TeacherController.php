<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\teacher;
use Illuminate\Http\Responce;
use Illuminate\Http\RedirectResponse;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $teachers = teacher::all();
        return view('teachers.index')->with('teachers',$teachers);
    }

    /** 
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        teacher::create($input);
        return redirect('teachers')->with('flash_message','teacher Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): view
    {
        $teacher = teacher::find($id);
        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $teacher = teacher::find($id);
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $teacher = teacher::find($id);
        $input = $request->all();
        $teacher->update($input);
        return view('teachers.update', compact('teacher'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        teacher::destroy($id);
        return redirect('teachers')->with('flash_message','teacher Deleted');
    }
}
