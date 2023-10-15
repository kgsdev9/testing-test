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
        <li><a href="{{ url('/articles/forms') }}"><i class="fa fa-inbox"></i> Publier un article

        <li><a href="{{ url('/categories/forms') }}"><i class="fa fa-envelope-o"></i>Publier une categorie   </a></li>
        <li><a href="{{route('liste.articles') }}"><i class="fa fa-file-text-o"></i>Liste Des Article</a></li>
        <li><a href="{{ route('cate.liste') }}"><i class="fa fa-filter"></i> Liste Des Categories </a>
        </li>

      </ul>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /. box -->
