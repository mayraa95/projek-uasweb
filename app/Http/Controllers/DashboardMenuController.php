<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use illuminate\Support\Str;

class DashboardMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.menu.index',[
            'menu'=> Menu::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.menu.create', [
            'categories'=> Category::all()
        ]);
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
            'judul_menu' => 'required|max:255',
            'slug' => 'required',
            'category_id' => 'required',
            'isi_menu' => 'required'
        ]);

        $validatedData['excerpt'] = Str::limit(strip_tags($request->isi_menu), 100);

        Menu::create($validatedData);

        return redirect('/dashboard/menu')->with('sukses', 'Menu Baru Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $beritum)
    {
        return view('dashboard.menu.show',[
            'menu'=> $beritum
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $beritum)
    {
        return view('dashboard.menu.edit', [
            'menu'=> $beritum,
            'categories'=> Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $beritum)
    {
        $rules = [
            'judul_menu' => 'required|max:255',
            'category_id' => 'required',
            'isi_menu' => 'required'
        ];

        if($request->slug != $beritum->slug){
            $rules['slug']='required|unique:menus';
        }
        $validatedData = $request->validate($rules);

        $validatedData['excerpt'] = Str::limit(strip_tags($request->isi_menu), 100);

        Menu::where('id', $beritum->id)
            ->update($validatedData);
        
            return redirect('/dashboard/menu')->with('sukses', 'Menu Baru Berhasil Di Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $beritum)
    {
        Menu::destroy($beritum->id);

        return redirect('/dashboard/menu')->with('sukses', 'Menu Berhasil Dihapus !');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Menu::class, 'slug', $request->judul_menu);

        return response()->json(['slug'=>$slug]);
    }
}
