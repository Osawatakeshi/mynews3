<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\HTML;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    //


    public function index(Request $request)
  {
      $cond_title = $request->cond_tittle;
      if ($cond_title != '') {
          // 
          $posts = Profile::where('name', $cond_title)->get();
      } else {
          // 
          $posts = Profile::all();
      }
      return view('profile.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
}
