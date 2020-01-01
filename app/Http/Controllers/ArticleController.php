<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends FrontendController
{
	public function __construct()
	{
		parent:: __construct();
	}
    public function getListArticle()
    {
    	$articles =Article::simplePaginate(5);
        $articleHot = Article::where('c_hot',Article::HOT)->get();
    	return view('article.index',compact('articles','articleHot'));
    }

    public function getDetailArticle(Request $request)
    {

    	$arrayUrl=$request->segment(2);
     	$arrayUrl=preg_split('/(-)/i',$arrayUrl);
     	$id=array_pop($arrayUrl);//lấy id(phần tử cuối cùng )
     	if($id)
     	{
     		$articleDetail =Article::find($id);
     		$articles =Article::orderBy("id","DESC")->paginate(10);
            $articleHot = Article::where('c_hot',Article::HOT)->get();
     		$viewData =[
              'articles'      => $articles,
              'articleDetail' => $articleDetail,
              'articleHot'    =>$articleHot
  
     		];
    	    return view('article.detail',$viewData);
     	}

     
    	return redirect('/');
    }
}
