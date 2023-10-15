@extends('administration.master.index')
@section('admin')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
      <div class="row">


      </div>
      <!-- /.row -->
      <div class="row">


        <div class="col-xs-12">

          <div class="box">


            <div class="box-header">
              <h3 class="box-title">LISTE DES UTILISATEURS   </h3>






            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover table-bordered" id="Code">
                <tr>

                  <th>Nom D'utilisateur</th>
                  <th>E-mail</th>
                  <th>Role </th>
                  <th>Date De Creation</th>
                  <th>Actions</th>

                </tr>

                @foreach (  $users as $candidature )

                <tr>

                  <td> {{$candidature->name}} </td>
                  <td> {{$candidature->email}}  </td>
                  <td> {{$candidature->role}}</td>
                  <td> {{$candidature->created_at}}  </td>
                  <td>
                    <a href="{{ route('edit.user', $candidature->id) }}" class="btn btn-primary">Editer</a>
                    
                  </td>

                </tr>


                @endforeach
              </table>

              <div style="margin-left:5px;">
                    {{ $users->links() }}
              </div>


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

      </div>
    </section>




    <!-- /.content -->
  </div>

@endsection
