<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreArticleRequest;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        public function news() {
            $article= Article::where('visibilite', 'normale')->take(20)->get();

            return view('publication.news', compact('article'));
        }

        public function home($id) {

            $article = Article::find($id);

            return view('publication.content', compact('article'));

        }

    public function index()
    {
        return view('articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
      return view('administration.gestionarticle.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        $ceate_articles = new Article();
        $ceate_articles->name_article = $request->input('title_article');
        $ceate_articles->category_id = $request->input('cate_id');
        $ceate_articles->visibilite = $request->input('visibilite');
        $ceate_articles->description = $request->input('content_article');
        $ceate_articles->user_id =Auth::id();

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $filename  = $file->getClientOriginalName();
            $img = Image::make($file->getRealPath());
            $img->resize(800, 600);
            $img->save(public_path('uploads/articles/'.$filename));

            $ceate_articles->image = $filename;
         }
        $ceate_articles->save();
         return redirect()->route('liste.articles')->with('message', 'Votre article a été publié avec success');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $find_id= Article::where('id', $id)->first();

       return view('administration.gestionarticle.content', compact('find_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edi_article =  Article::where('id' , $id)->first();

        return view('articles.editarticle', compact('edi_article'));
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
            $update_article =Article::find($id);
            $update_article->name_article = $request->input('title_article');
            $update_article->description =  $request->input('content_article');
            $update_article->visibilite  = $request->input('visibilite');
            $update_article->update();
            return redirect()->route('liste.articles')->with('sucees' , 'Votre Article a été modifié  avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $remove_article =  Article::find($id)->delete();

     return redirect()->route('liste.articles')->with('message'  ,'Votre article a eté supprimé avec succes');
    }

    public function liste(){
        $articles = Article::orderBy('id', 'DESC')->get();
        $category = Category::all();
        return view('administration.gestionarticle.liste', compact('articles', 'category'));

    }


    public function content_article_home($id) {

        $content_article = Article::where('id',  $id)->first();


        return view('home_article.article', compact('content_article'));




      }

}
