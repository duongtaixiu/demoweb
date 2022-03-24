<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function  dasboard(){
        return view('category.dasboard');
    }

    public function  layout_menu(){
        return view('category.layout-menu');
    }

    public function  layout_navar(){
        return view('category.layout-navar');
    }

    public function  layout_container(){
        return view('category.layout-container');
    }

    public function  layout_fluid(){
        return view('category.layout-fluid');
    }

    public function  layout_blank(){
        return view('category.layout-blank');
    }
}
