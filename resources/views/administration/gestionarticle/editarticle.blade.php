@extends('administration.master.index')

@section('admin')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       EDITION DE L'ARTICLE

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

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Administration</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="mailbox.html"><i class="fa fa-inbox"></i> Publier un article
                  <span class="label label-primary pull-right">12</span></a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i>Publier une categorie   </a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i>Liste Des Article</a></li>
                <li><a href="#"><i class="fa fa-filter"></i> Liste Des Articles <span class="label label-warning pull-right">65</span></a>
                </li>
           
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
     
          <!-- /.box -->
        </div>
        <!-- /.col -->


        <form action="{{route('create.articles')}}" method="POST"  enctype="multipart/form-data">
            @csrf

        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Publier un Article  </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                    <h5> Titre De L'article  @error('title_article')
                        <small  style="color:red;">{{$message}}</small>                        
                    @enderror</h5>
                <input class="form-control" placeholder="Titre De L'Article"  name="title_article" value="{{old('title_article')}}">
              </div>

              <div class="form-group">
              <h5> Selectionner une categorie  @error('cate_id')
                        <small  style="color:red;">{{$message}}</small>                        
                    @enderror</h5>
              <select name="cate_id"  class="form-control">

                      <option value="">Choisir une categorie</option>
                      @foreach ($categories as $category )
                      <option value="{{$category->id}}">{{$category->category_name}}</option>
                      @endforeach
                  
                    </select>
                   
                    
              
              </div>
              <br>

              <div class="form-group">
              <select name="visibilite" class="form-control">
                      <option value="">Choisir Une Visibilite (Optionnel)</option>
                      <option value="populaire">populaire</option>
                      <option value="normale">normale</option>
                      <option value="visible">visible</option>
                    </select>

              </div>



              <div class="form-group">
              <h5> Contenu De L'article  @error('content_article')
                        <small  style="color:red;">{{$message}}</small>                        
                    @enderror</h5>
                    <textarea id="compose-textarea" class="form-control" style="height: 300px" name="content_article">
                      
                    </textarea>
              </div>
              <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Image De L'article Obligatoire
                            @error('image')
                                <small style="color:red;">{{$message}}</small>
                                
                            @enderror
                  <input type="file" name="image">
                </div>
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
              <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Publier L'article</button>
              

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