@extends('dashboard.admin.users.admin.layoutadmin')

@section('admin')


  <div class="container">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Modifier L'article</h4>
        <p class="card-description"> Modifier l'article en cas d'erreurs </p>
        <form class="forms-sample" action="{{route('update.article', $edi_article->id)}}" method="POST"  enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="form-group col-md-12">
                  <label for="exampleInputName1 col-md-6">Modifier le titre : @error('title_article') <small style="color: red">{{$message}}</small> @enderror </label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer le nom" name="title_article" value="{{$edi_article->name_article}}">
                </div>

                <div class="form-group col-md-12">
                  <label for="exampleInputName1 col-md-6"> Modifier la Visibilite  :  @error('visibilite') <small style="color: red">{{$message}}</small> @enderror </label>
                    <select name="visibilite"  class="form-control">
                        <option value="{{$edi_article->visibilite}}">{{$edi_article->visibilite}}</option>
                        <option value="populaire">Populaire</option>
                        <option value="normale">Normale</option>
                    </select>
                </div>
    
              </div>

              <div class="row">
                <div class="form-group col-md-12">
                  <label for="exampleInputName1 col-md-6"> Modifier l'image de l'article : @error('image') <small style="color: red">{{$message}}</small> @enderror </label>
                  <input type="file" class="form-control" id="exampleInputName1"  name="image" value="{{old('image')}}">
                </div>
                <div class="form-group  col-md-12">
                  <label for="exampleInputName1">Modifier le  contenu de l'article : @error('content_article') <small style="color: red">{{$message}}</small> @enderror </label>
               <textarea name="content_article" class="form-control"    cols="30" rows="10"  >{{$edi_article->description}}</textarea>

                </div>
              </div>


            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            
          <button type="submit" class="btn btn-warning mr-2">Enregistrer les  l'article</button>
          <button class="btn btn-dark">Annuler</button>
        </form>
      </div>
    </div>
  </div>


</div>

  </div>



@endsection