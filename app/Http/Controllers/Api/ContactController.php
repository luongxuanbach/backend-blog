<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index () {
        //get contact 
        return view('admin.contact.list');
    }

    public function create () {
        return view('admin.contact.create');
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
