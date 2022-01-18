<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Psr\Log\LoggerInterface;

class ArticleController extends Controller
{
    public function show($articleId, Request $request, LoggerInterface $logger) 
    { 
        
        $article = Article::findorFail($articleId);

         $user =$request->user();
         $userRepresentation =$user ? "User with id {$user->id}" : "Uknown User";
         $logger->info(
             $userRepresentation . ' accesed ' . "article with {$articleId}",
             ['id' => $articleId,
             'title' =>$article->title],         );

        
        return view('article.article', ['article' => $article]);
    }

    
}
