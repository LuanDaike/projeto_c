<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;

class MenuProductController extends Controller
{
  public function store(Request $request, Menu $menu)
  {
    $menu->products()->attach($request->get('product_id'));
    return redirect()->route('menu.show', $menu->id);
  }

  public function destroy(Menu $menu, Product $product)
  {
    $menu->products()->detach($product->id);
    return redirect()->route('menu.show', $menu->id);
  }

  public function index()
  {
    $menus = Menu::orderBy('updated_at', 'desc')->paginate();
    return view('menus.index', ['menus' => $menu]);
  }
}
