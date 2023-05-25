<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $table = 'comments';

    protected $fillable = [
        'content',
        'user_id',
        'post_id'
    ];
}
