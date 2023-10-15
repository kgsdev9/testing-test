@extends('dashboard.admin.users.admin.layoutadmin')


@section('admin')
<div class="container">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Modifier la categories</h4>
          <p class="card-description"> Formulaire Modification de  la  Categorie </p>
          <form class="forms-sample" action="{{route('cate.update' , $cate_edit->id)}}" method="POST"  enctype="multipart/form-data">
              @csrf
  
              <div class="row">
                  <div class="form-group col-md-12">
                    <label for="exampleInputName1 col-md-6">Titre de la cateogorie : @error('title_cate') <small style="color: red">{{$message}}</small> @enderror </label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer le nom" name="title_cate" value="{{$cate_edit->category_name}}">
                  </div>
  
                 
                </div>
  
                <div class="row">
                    <div class="form-group  col-md-12">
                
                        <label for="exampleInputName1">Visibilite de la categorie  </label>
                          <select name="populaire"  class="form-control">
                          <option value="{{$cate_edit->visibilite}}"> Etat Acuelle : {{$cate_edit->visibilite}} </option>
                            <option value="populaire">Populaire</option>
                            <option value="normale">Normale</option>
                            <option value="visible">Visible</option>
                        
                          </select>
                      </div>
                    
                  <div class="form-group  col-md-12">
                    <label for="exampleInputName1">Description de la categorie : @error('content_article') <small style="color: red">{{$message}}</small> @enderror </label>
                 <textarea name="description_cate" class="form-control"  cols="30" rows="10">{{$cate_edit->description_cate}}</textarea>
  
                  </div>
                </div>
  
  
              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
               
  
    
            <button type="submit" class="btn btn-dark mr-2">Enregistrer les modfications</button>
            <button class="btn btn-danger">Annuler</button>
          </form>
        </div>
      </div>
    </div>
  
  
  </div>
  
    </div>



@endsection