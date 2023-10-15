@extends('administration.master.index')

@section('admin')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Liste Des Articles

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Accueil</a></li>
        <li class="active">Article</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="#" class="btn btn-primary btn-block margin-bottom">Menu Article</a>

            @include('administration.gestionarticle.slider-bar-article')

          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Liste Des Articles</h3>




                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>

                <!-- /.pull-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                            @foreach (  $articles as $article )
                 <tr>
                            <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>

                    <td class="mailbox-subject"><b> <a href="{{route('content.article', $article->id)}}"> {{$article->name_article}}</a></b>  {{Str::limit( $article->description, 30)}}
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">{{$article->created_at}}</td>
                  </tr>
                            @endforeach


















                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>






@endsection
