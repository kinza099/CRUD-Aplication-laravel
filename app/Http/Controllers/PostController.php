<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

class PostController extends Controller
{
    public function displayuser(){
        return view('user');
    }

    public function displayindex(){
        $post=Post::all();
        return view('index',['posts'=>$post]);
    }

    public function displayabout(){
        return view('about');
    }

    public function displaycontact(){
        return view('contact');
    }

    public function edit(Post $post){
        return view('edit', ['posts'=> $post]);
    }

    public function store(Request $request){
        Post::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
    
            ]);
            return redirect()->route('index'); // Assuming 'index' is the name of the route leading to your index page
    }
    public function update(Request $request, Post $post){
        $attributes = $request->only(['name', 'email', 'password', 'phone_number']); // Extract only the relevant attributes from the request
        
        $post->update($attributes); // Update the post with the extracted attributes
        
        return redirect()->route('index'); // Redirect to the index page after updating
    }
    
    
    
    

    public function delete(Post $post){
        $post->delete();
        return redirect()->route('index'); // Assuming 'index' is the route for your records page
    }
    
    
}
