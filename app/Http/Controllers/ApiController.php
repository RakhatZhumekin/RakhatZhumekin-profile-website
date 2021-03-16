<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class ApiController extends Controller
{
    /*
        This function returns the information about all posts
    */
    public function index(Request $request) {
        $posts = Post::all();

        return response($posts, 200);
    }

    /*
        This function returns the information about a specific post
    */
    public function get_post(Request $request) {
        $post = Post::find($request->post_id);

        if ($post == null) {
            return response(['message' => 'Such post does not exist.'], 404);
        }

        return response($post, 200);
    }
}
