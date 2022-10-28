<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Http\Requests\MenuRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $menus = Menu::where('establishment_id', \Auth::user()->establishment_id)->get();

      return view('menus.index', ['menus'=> $menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $data = $request->all();
     $menu = Menu::create([
        'name' => $data['name'],
        'establishment_id' => \Auth::user()->establishment_id,
        'description' => $data['description'],
        'is_active' => $data['is_active'],
      ]);
      if ($request->hasFile('image')){
        $imageFile = $request->file('image');
        $imagePath = $imageFile->storeAs(
          "images/menus/$menu->id",
          "image.png",
          "public",
        );
        $menu->update(['image_path' => $imagePath]);
      }
      return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
      $addProducts = Product::where('establishment_id', $menu->establishment_id)
       ->whereDoesntHave('menus', function($query) use ($menu) {
         $query->where('menus.id' , $menu->id);
       }) ->get();
      return view('menus.show', ['menu' => $menu, 'addProducts' => $addProducts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
     return view('menus.edit', ['menu' => $menu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
      $data = $request->all();

      $menu->update($data);
      if ($request->hasFile('image')){
        $imageFile = $request->file('image');
        $imagePath = $imageFile->storeAs(
          "images/menus/$menu->id",
          "image.png",
          "public",
        );
        $menu->update(['image_path' => $imagePath]);
      }
      return redirect()->route('menu.show', $menu->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
      $menu->delete();

      return redirect()->route('menu.index');
    }

    public function showPublic(Menu $menu)
    {
     return view('menus.showpublic', ['menu' => $menu]);
    }
}
