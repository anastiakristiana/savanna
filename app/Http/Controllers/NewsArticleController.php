<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class NewsArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $articles = Article::with('category')->get();

        return view('news', ['articles' => $articles, 'categories' => $categories]);
    }

    public function show($locale, $slug)
    {
            // Determine the slug column based on the active locale
        $slugColumn = ($locale === 'id') ? 'slug_id' : 'slug';

        // Retrieve the article based on the slug column and value
        $article = Article::where($slugColumn, $slug)->first();

        // Retrieve related articles based on the same category
        $relatedArticles = Article::where($slugColumn, '!=', $slug)
        ->take(3) // Adjust the number of related articles to display
        ->get();
        // Convert the date to a Carbon instance
        $article->date = Carbon::parse($article->date);

        // If the article is not found, abort with a 404 error
        if (!$article) {
            abort(404);
        }

        // Pass the article data to the view
        return view('detailnews', compact('article', 'relatedArticles'));
    }

    public function filter(Request $request)
    {
        $categoryId = $request->input('category_id');
        
        // Perform the filtering based on the category ID
        $filteredArticles = Article::where('category_id', $categoryId)->get();
        
        // Return the filtered articles as JSON response
        return response()->json($filteredArticles);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
