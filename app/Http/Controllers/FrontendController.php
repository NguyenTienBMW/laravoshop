<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models;
use Illuminate\Http\Request;
 
use Illuminate\Support\Facades\View;

class FrontendController extends Controller
{
    public function  __construct()
    {
      $categories =Category::all();
      View::share('categories',$categories);
    }
}
