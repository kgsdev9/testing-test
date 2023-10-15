@extends('administration.master.index')

@section('admin')





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="#" class="btn btn-primary btn-block margin-bottom">Administration Article</a>

            @include('administration.gestionarticle.slider-bar-article')
          <!-- /. box -->

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{$find_id->name_article}}</h3>

              <div class="box-tools pull-right">
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3>Categorie De L'articles  {{$find_id->category->category_name}}</h3>
                <h5>Visibilite de la categorie  {{$find_id->visibilite}}
                  <span class="mailbox-read-time pull-right"> date de publicication : {{$find_id->created_at}}</span></h5>
              </div>
              <!-- /.mailbox-read-info -->

                <!-- /.btn-group -->


              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">

                <p>{{$find_id->description}}</p>




              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->

            <!-- /.box-footer -->
            <div class="box-footer">

              <a href="{{route('destroy.article' , $find_id->id)}}" class="btn btn-danger" onclick="return confirm('Voulez vous supprimer Cet article ?')">Supprimer l'article</a>

            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->





@endsection
