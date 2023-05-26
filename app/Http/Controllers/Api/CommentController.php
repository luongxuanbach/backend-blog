<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index () {
        //get category 
        return view('admin.category.list');
    }

    public function create () {
        return view('admin.category.create');
    }

    public function store () {
        
    }

    public function edit () {
        
    }

    public function update () {
        
    }

    public function delete () {
        
    }
}
