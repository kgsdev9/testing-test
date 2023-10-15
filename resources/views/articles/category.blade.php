@extends('administration.master.index')

@section('admin')

<div class="content-wrapper">


    <div class="container">



<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

        @if(session('success'))
        <div class="alert alert-success container">
                {{session('success')}}

        </div>

        @endif


        <h4 class="card-title">AJOUTER UNE CATEGORIE</h4>


        <br>
          <div class="col-md-11" style="text-transform: uppercase;">
            <form class="forms-sample" action="{{route('cate.create')}}"  method="POST"   enctype="multipart/form-data">
              @csrf

              <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputName1 col-md-6">Nom De La Categorie  : @error('title_cate') <small style="color: red">{{$message}}</small> @enderror </label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer le nom" name="title_cate" value="{{old('title_cate')}}">
                  </div>
                  <div class="form-group  col-md-6">
                    <label for="exampleInputName1">Cette Categories  est t'elle populaire (Optionnel) ? : @error('populaire') <small style="color: red">{{$message}}</small> @enderror </label>
                    <select name="populaire"  class="form-control">
                        <option value="">Choisir un etat </option>
                          <option value="populaire">Populaire</option>
                          <option value="normale">Normale</option>
                          <option value="visible">Visible</option>

                        </select>

                  </div>
                </div>


                <div class="row">
                  <div class="form-group  col-md-12">
                    <label for="exampleInputName1">Description de la categorie : @error('date_de_naissance') <small style="color: red">{{$message}}</small> @enderror</label>
                    <textarea name="description_cate" id="" cols="30" rows="10" class="form-control"></textarea>
                  </div>

                </div>
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

            <button type="submit" class="btn btn-primary mr-2">Soumettre</button> &nbsp;
            <button class="btn btn-dark mr-2" ><a href="{{route('home_dashboard')}}"  class="text-white">Annuler</a></button>
            <br><br>
          </form>

          </div>


      </div>
    </div>
  </div>



    </div>

    </div>

@endsection
