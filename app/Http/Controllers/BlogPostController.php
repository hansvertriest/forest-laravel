<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{
	public function getBlogPost($slug)
    {
		$blog_post = BlogPost::where('slug', $slug)->first() ?? [];
		return view('pages/blogPost', $blog_post);
	}

	public function getBlogPostOverview()
    {
		$blog_posts = BlogPost::orderBy('created_at', 'desc')->get() ?? [];
		return view('pages/blogPostOverview', ['blog_posts' => $blog_posts]);
	}

	public function getEdit($slug)
    {
		$blog_post = BlogPost::where('slug', $slug)->first() ?? [];
		return view('pages/blogPostEdit', $blog_post);
	}

	public function saveBlogPost(Request $r, $slug)
    {
		$input = $r->input();

		// image upload 

		$r->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$r->image->getClientOriginalExtension();
		request()->image->move(public_path('image-uploads'), $imageName);
		// save blog

		$blog_post = BlogPost::where('slug', $slug)->first();

		if ($blog_post) {
			$blog_post->title = $input['title'];
			$blog_post->intro = $input['intro'];
			$blog_post->text = $input['text'];
			$blog_post->slug = Str::slug($input['title'], '-');
			$blog_post->imagename = $imageName;
			$blog_post->save();
		} else {
			$new_blog_post = new BlogPost();
			$new_blog_post->title = $input['title'];
			$new_blog_post->intro = $input['intro'];
			$new_blog_post->text = $input['text'];
			$new_blog_post->slug = Str::slug($input['title'], '-');
			$new_blog_post->imagename = $imageName;
			$new_blog_post->save();
			$blog_post = $new_blog_post;
		}

		$slug = Str::slug($input['title'], '-');

		return redirect(route('blogPost.get', $slug));
	}
}
