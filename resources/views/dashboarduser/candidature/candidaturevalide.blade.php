@extends('dashboarduser.apps.app')

@section('document')




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
              <h3 class="box-title">MES CANDIDATURES ACCEPTEES </h3>

       
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
                  <th>Filiere</th>
                  <th>Etat</th>
                  <th>Actions</th>
                </tr>
               
                @foreach ($candidat_valide as $candidature )

                <tr>
                
                  <td> {{$candidature->nom}}  {{$candidature->prenom}}</td>
                  <td> {{$candidature->nationnalite}}  </td>
                  <td> {{$candidature->telephone_1}}</td>
                  <td> {{$candidature->statut}}  </td>
                  <td> {{$candidature->matricule}}  </td>
                  <td> {{$candidature->filiere}}  </td>
                  <td>  <span class="label label-success">{{$candidature->etat}}</span></td>
                  <td>
                    <a href="{{route('detail_candidature', $candidature->id)}}" class="btn btn-dark">Details</a>
                  </td>

                </tr>
                

                @endforeach
              </table>

              <div style="margin-left:5px;">
                {{$candidat_valide->links()}}
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
