<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Article;
use Symfony\Component\HttpFoundation\Request;



class ArticlesController extends Controller
{
    public function index() 
    {
        // $article = Article::all();
        $articleList = Article::paginate(5);
        return response()->json($articleList, 200);
    }

    

    public function show($id) 
    {
        $article = Article::find($id);
        if (is_null($article) ){
            return response()->json("data tidak ada", 404);
        }else {
            return response()->json($article, 200);
        }
        
    }

    public function store(Request $request)
    {
        $article = new Article;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->image = $request->image;
        $article->user_id = $request->user_id;
        $article->category_id = $request->category_id;
        $success = $article->save();

        if(!$success)
        {
            return response()->json("Error Saving", 500);
        }else 
        {
            return response()->json("Success", 201);
        }
    }

    public function update(Request $request){
        $article = Article::find($request->id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->image = $request->image;
        $article->user_id = $request->user_id;
        $article->category_id = $request->category_id;

        $success = $article->save();

        if(!$success) {
            return response()->json("Error Saving", 500);
        }else {
            return response()->json("Success", 201);
        }
    }

    public function destroy($id) {
        $article = Article::find($id);

        if (is_null($article))
        {
            return response()->json("data not found", 404);
        }
        
        $success = $article->delete();

        if (!$success){
            return response()->json("Error Delete", 500);
        }else {
            return response()->json("Delete Success", 201);
        }
    }
}
