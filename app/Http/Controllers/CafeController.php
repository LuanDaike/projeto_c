<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafeController extends Controller
{
  public function helloworld()
  {
  return view('café');
  }
}
