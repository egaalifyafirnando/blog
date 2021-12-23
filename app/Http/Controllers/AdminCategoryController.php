<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories',
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('category-images');
        }

        Category::create($validatedData);
        return redirect('/dashboard/categories')->with('success', 'New category has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $rules = ([
            'name' => 'required|max:255',
            'image' => 'image|file|max:1024'
        ]);

        // jika request slug tidak sama dengan slug yang ada di database, maka buat unik
        if ($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:categories';
        }

        // validasi data request
        $validatedData = $request->validate($rules);

        // jika terdapat request berupa image
        if ($request->file('image')) {
            // jika terdapat image lama
            if ($request->oldImage) {
                // maka delete gambar lama
                Storage::delete($request->oldImage);
            }
            // maka data image yang telah tervalidasi simpan ke folder post-images
            $validatedData['image'] = $request->file('image')->store('category-images');
        }

        Category::where('id', $category->id)->update($validatedData);
        return redirect('dashboard/categories')->with('success', 'Category has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        // jika terdapat image
        if ($category->image) {
            // maka delete image
            Storage::delete($category->image);
        }
        $category = Category::findOrFail($category->id);
        $category->delete();
        return redirect('/dashboard/categories')->with('success', 'Category has been deleted!');
    }

    // sluggable
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->category);
        return response()->json(['slug' => $slug]);
    }
}
