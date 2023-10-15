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
              <h3 class="box-title">TOUTES LES CANDIDATURES  REJETEES</h3>


            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover table-bordered">


                <tr>
                  <th>Nom Et Prenom</th>
                  <th>Nationalite</th>
                  <th>Telephone</th>
                  <th>Statut</th>
                  <th>Matricule</th>
                  <th>Telephone</th>
                  <th>User</th>
                  <th>Etat</th>

                  <th>Actions</th>
                </tr>
                <tbody>
                @foreach ($candidat_rejet as $candidature )

                <tr>

                <td> {{$candidature->nom}}  {{$candidature->prenom}}</td>
                <td> {{$candidature->nationnalite}}  </td>
                <td> {{$candidature->telephone_1}}</td>
                <td> {{$candidature->statut}}  </td>
                <td> {{$candidature->matricule}}  </td>
                <td> {{$candidature->telephone_1}}  </td>
                <td> {{$candidature->user->name}}  </td>
                <td>    <span class="label label-danger">{{$candidature->etat}}</span> </td>

                <td>
                <a href="{{route('detail.admin' , $candidature->id)}}" class="btn btn-primary">Details</a>

                </td>


             </tr>

                @endforeach



                </tbody>
              </table>




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

@section('extra-js')

<script>
        $('#search').on('keyup', function(){


                $value = $(this).val();

                $.ajax({

                        type:  'get' ,
                        url : '{{URL::to('search') }}' ,
                        data:{'search' : $value},

                        success:function(data) {
                            console.log(data);
                            $('#Content').html(data);
                        }

                });

        })

  </script>

@endsection
