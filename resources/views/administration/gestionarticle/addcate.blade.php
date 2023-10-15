@extends('administration.master.index')

@section('admin')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      GESTION DE CATEGORIE

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">article</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="mailbox.html" class="btn btn-primary btn-block margin-bottom">Menu Article</a>

            @include('administration.gestionarticle.slider-bar-article')
          <!-- /. box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->


        <form action="{{route('cate.create')}}" method="POST"  enctype="multipart/form-data">
            @csrf

        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Publier une Categorie </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                    <h5> Titre De la categorie  @error('title_cate')
                        <small  style="color:red;">{{$message}}</small>
                    @enderror</h5>
                <input class="form-control" placeholder="Titre De L'Article"  name="title_cate" value="{{old('title_cate')}}">
              </div>


              <br>

              <div class="form-group">
              <select name="populaire" class="form-control">
                      <option value="">Choisir Une Visibilite Pour la Categorie (Optionnel)</option>
                      <option value="populaire">populaire</option>
                      <option value="normale">normale</option>
                      <option value="visible">visible</option>
                    </select>

              </div>



              <div class="form-group">
              <h5>Description  De la  Categorie (Optionnel)

                 </h5>
                    <textarea id="compose-textarea" class="form-control" style="height: 300px" name="description_cate">

                    </textarea>
              </div>


            <div class="box-footer">
              <div class="pull-right">
              <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Publier La Categorie</button>


              </div>
              <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Annuler</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>

        </form>


        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>




@endsection
