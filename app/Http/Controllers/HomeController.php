<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

// class HomeController extends Controller
// {
//     public function index()
//     {
//         $name = "Boshra";
//         $city = "Colchester";
//         $age = "37";
//         //  $posts = [
//         //     "Laravel Basics",
//         //     "Understanding Controllers",
//         //     "Blade Templates"
//         // ];
//         $posts = [
//             ['title' => 'Laravel Intro'],
//             ['title' => 'Routing'],
//             ['title' => 'Controllers']
//         ];

//         // return view('home', [
//         //     'name' => $name,
//         //     'city' => $city
//         // ]);

//         //use compact to automatically creates the array.

//         return view('home',compact('name','city','age','posts'));
//     }
// }
//-------------------------------------------------------------------//
//Blade @foreach Loop
//Send an Array from the Controller
// class HomeController extends Controller
// {
//     public function index()
//     {
//         $posts = [
//             "Laravel Basics",
//             "Understanding Controllers",
//             "Blade Templates"
//         ];

//         return view('home', compact('posts'));
//     }
// }


//-------------------------PASSING ARRAY OF OBJECT ----------------------//

//array of associative arrays

class HomeController extends Controller
{
    // public function index()
    // {
    //     $name = "Boshra";
    //     $city = "Colchester";
    //     $age = 37;

    //     $posts = [
    //         [
    //             'title' => 'Laravel Basics',
    //             'description' => 'Introduction to routes, controllers, and views.'
    //         ],
    //         [
    //             'title' => 'Understanding Controllers',
    //             'description' => 'Learn how controllers handle application logic.'
    //         ],
    //         [
    //             'title' => 'Blade Templates',
    //             'description' => 'Use Blade to display dynamic content.'
    //         ]
    //     ];
        

    //     return view('home', compact('name', 'city', 'age', 'posts'));
    // }

    //**uncomment the above to update index class to get data */
    public function index()
    {
        $posts = Post::all();

        return view('home', compact('posts'));
    }
    public function show($id)
    {
        return "Post ID: " . $id;
    }

    // public function store(Request $request)
    // {
    //     $name = $request->name;
    //     $city = $request->city;

    //     return "Hello $name from $city by Controller";
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'age' => 'required|numeric'
    //     ]);

    //     return "Form submitted successfully!";
    // }

    //***we updated the top with the below for storing data*****//

    // public function store(Request $request)
    // {
    //     Post::create([
    //         'title' => $request->title,
    //         'content' => $request->content
    //     ]);

    //     // return "Post saved successfully!";
    //     return redirect()->route('home');
    // }

    // public function edit($id)
    // {
    //     $post = Post::find($id);

    //     return view('edit', compact('post'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $post = Post::find($id);

    //     $post->update([
    //         'title' => $request->title,
    //         'content' => $request->content
    //     ]);

    //     return redirect()->route('home');
    // }

    // public function destroy($id)
    // {
    //     $post = Post::find($id);
    //     $post->delete();

    //     return redirect()->route('home');
    // }
};