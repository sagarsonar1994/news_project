<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class PublicController extends Controller
{
    public function firstPage() {
        return view('front.index');
    }

    public function categoryPage() {
        $category = Category::where(['publication_status' => 1, 'id' => $id])->first();
		$posts = $category->post()->where(['publication_status' => 1])->orderBy('post_date', 'desc')->paginate(10);
		$popular_posts = $category->post()->where(['publication_status' => 1])->orderBy('view_count', 'desc')->limit(9)->get();
		// return view('web.category', compact('posts', 'popular_posts', 'category'));
        dd($posts);
        return view('front.category_news', compact('posts', 'popular_posts', 'category'));
    }
}
