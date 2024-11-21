<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return response()->json([
            'success' => true,
            'message' =>'List Semua Post',
            'data'    => $posts
        ], 200);
    }
}
