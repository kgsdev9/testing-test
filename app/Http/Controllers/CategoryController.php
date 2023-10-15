<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('articles.category');
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
        $inputs = $request->input();

        Validator::make($inputs,[
            'title_cate'=>['required','string','max:255'],
         ])->validate();

       

         $ceate_cate = new Category();
         $ceate_cate->category_name = $request->input('title_cate');
         $ceate_cate->visibilite = $request->input('populaire');
         $ceate_cate->description_cate = $request->input('description_cate');
        //  $ceate_articles->user_id =Auth::id();
         $ceate_cate->save();
            
         return redirect()->route('liste.articles')->with('message', 'Votre categories a été ajouté avec success');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $cate_edit =  Category::find($id);
          
        return view('articles.editcate', compact('cate_edit'));

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
        $update_cate =  Category::find($id);

        $update_cate->category_name  = $request->input('title_cate');
        $update_cate->visibilite = $request->input('populaire');
        $update_cate->description_cate  =  $request->input('description_cate');
        $update_cate->update();
        return redirect()->route('cate.liste')->with('modif_succes' , 'La Categorie a été modifié avec success');


    }                            

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $remove_id =  Category::find($id)->delete();
        return redirect()->route('cate.liste')->with('succes_modi' , 'Votre categoie a été suprimé avec succes');
        
    }

    public function liste_cate() {
        $category = Category::all();
        return view('articles.listecate', compact('category'));
    }
}
