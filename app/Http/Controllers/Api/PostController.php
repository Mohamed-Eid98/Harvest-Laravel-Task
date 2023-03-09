<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    use PostControllerTrait;
    public function index()
    {
        $posts = Post::with('users')->get();
        return $this->ApiResponse($posts , 'ok' , 200);

    }

}
