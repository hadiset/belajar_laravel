<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar_kategori = \App\Category::paginate(3);

        return view('category.index', ['daftar_kategori' => $daftar_kategori]);
    }

    /**     
     * Action untuk mencari kategori berdasarkan nama
     */
    public function search(Request $request)
    {
        // dapatkan keyword dari query string ?name=keyword
        $keyword = $request->get('name');

        // cari kategori where name == keyword dari querystring
        return \App\Category::where("name", "LIKE", "%$keyword%")->get();
    }

    /**     
     * Action untuk delete kategori berdasarkan id
     */
    public function delete($id)
    {
        $category = \App\Category::findOrFail($id);

        if(!$category->trashed()){
            $category->delete();
            return "Kategori $category->name berhasil dihapus";
        }
    }

    /**     
     * Action untuk restore kategori berdasarkan id
     */
    public function restore($id)
    {
        $category = \App\Category::withTrashed()->findOrFail($id);

        if(!$category->trashed()){
            return "Kategori belum dihapus. Jadi tidak perlu direstore.";
        }
        return "Kategori $category->name berhasil direstore";
    }

    /**     
     * Action untuk permanent delete berdasarkan id
     */
    public function permanentDelete($id)
    {
        $category = \App\Category::withTrashed()->findOrFail($id);
        $category->forceDelete();

        return "Kategori $category->name dihapus permanen.";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->get('nama');
        $category->description = $request->get('description');
        if($category->save()){
            return \Redirect::to('/latihan/kategori/all');
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = \App\Category::find($id);

        // return $kategori->name;
        return view('category.detail', ['kategori' => $kategori]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return \Redirect::to('/latihan/kategori/all');
    }
}
