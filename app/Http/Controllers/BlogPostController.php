<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BlogPostController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('children')->whereNull('parent_id')->get();
        $posts = BlogPost::orderBy('created_at','desc')->paginate(10); //fetch all blog posts from DB

        return view('pages.blog', [
            'posts' => $posts,
            'categories' => $categories,
        ]); //returns the view with posts


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->middleware('auth');
        $categories = Category::with('children')->whereNull('parent_id')->get();
        return view('blog.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->middleware('auth');

    $request->validate([
            'title' => 'required',
            'body' => 'required',
            'metabody' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id'   => 'required|numeric'
        ]
    );
    $image = $request->file('image');
    $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images');
    $image->move($destinationPath, $input['imagename']);
    $newPost = new BlogPost();
    $newPost->title = $request->get('title');
    $newPost->category_id = $request->get('category_id');
    $newPost->body = $request->get('body');
    $newPost->metabody = $request->get('metabody');
    $newPost->user_id = Auth::id();
    $newPost->image = $input['imagename'];
    $newPost->slug = \Str::slug($request->title);
    $newPost->save();

    return redirect()->route('pages.blog.index')->with('status', 'New article has been successfully created!');




        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {
        $categories = Category::with('children')->whereNull('parent_id')->get();
        $posts = BlogPost::orderBy('created_at','desc')->paginate(3); //fetch all blog posts from DB
        $title = $blogPost->title;
        $metabody = $blogPost->metabody;
        $metaimage = $blogPost->image;


        return view('blog.show', [
            'post' => $blogPost,
            'posts' => $posts,
            'categories' => $categories,
            'metabody' => $metabody,
            'metaimage' => "https://fiscalbulletin.com/images/".$metaimage,
        ], compact('title', 'metabody')); //returns the view with the post
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost)
    {
        // $categories = Category::with('children')->whereNull('parent_id')->get();
        $this->middleware('auth');

        return view('blog.edit', [
    'post' => $blogPost,
    ]); //returns the edit view with the post
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        $this->middleware('auth');

        $blogPost->update([
            'title' => $request->title,
            'body' => $request->body,
            'metabody' => $request->metabody,
            // 'image' => $request->image
        ]);

        $post = BlogPost::find($blogPost);


        // if ($image = $request->file('image')) {
        // $image = $request->file('image');
        // $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        // $destinationPath = public_path('/images');
        // $image->move($destinationPath, $input['imagename']);
        // $blogPost->update($input);

        // }


        // $image->move($destinationPath, $input['imagename']);

        // $input['imagename'] = time().'.'.$image->getClientOriginalExtension();



        return redirect('/' . $blogPost->slug);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();

        return redirect('/');
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $posts = BlogPost::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('body', 'LIKE', "%{$search}%")
            ->orderBy('created_at','desc')
            ->get();

        // Return the search view with the resluts compacted
        return view('pages.search', compact('posts'));
    }

}
