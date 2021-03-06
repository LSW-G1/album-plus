<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    /**
     * Create a new CategoryController instance.
     */
    public function __construct()
    {
        $this->middleware('ajax')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CategoryRequest $request
     * @param *\App\Repositories\CategoryRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request, CategoryRepository $repository)
    {
        $repository->store($request->all());

        return redirect()->route('home')->with('ok', __('La catégorie a bien été enregistrée'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\CategoryRequest $request
     * @param \App\Models\Category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->all());

        return redirect()->route('category.index')->with('ok', __('La catégorie a bien été modifiée'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json();
    }
}
