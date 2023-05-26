<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index () {
        //get category 
        return view('admin.user.list');
    }

    public function create () {
        return view('admin.user.create');
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
