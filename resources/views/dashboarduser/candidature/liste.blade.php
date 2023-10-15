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

        @if($candidatures->count()>0)
        <div class="col-xs-12">

          <div class="box">


            <div class="box-header">
              <h3 class="box-title">MES CANDIDATURES   </h3>


             
             


            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover table-bordered" id="Code">
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
               
                @foreach ($candidatures as $candidature )

                <tr>
                
                  <td> {{$candidature->nom}}  {{$candidature->prenom}}</td>
                  <td> {{$candidature->nationnalite}}  </td>
                  <td> {{$candidature->telephone_1}}</td>
                  <td> {{$candidature->statut}}  </td>
                  <td> {{$candidature->matricule}}  </td>
                  <td> {{$candidature->filiere}}  </td>
                  <td>
                    @if($candidature->etat =='encours')
                    <span class="label label-warning">En Cours</span>
                    @elseif($candidature->etat =='valide')
                    <span class="label label-success">Approuvée</span>
                    @elseif($candidature->etat =='rejet')
                    <button class="btn btn-danger">Rejetée</button>
                    @endif
                    
                  </td>
                  <td>
                    <a href="{{route('detail_candidature', $candidature->id)}}" class="btn btn-dark">Details</a>
                  </td>

                </tr>
                

                @endforeach
              </table>

              <div style="margin-left:5px;">
                {{ $candidatures->links()}}
              </div>
            

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        @else
        <H3 style='text-align: center; text-transform:capitalize'> {{Auth::user()->name}}  Vous N'avez Aucune Candidature Pour Le Moment !</H3>
          @endif
      </div>
    </section>
 



    <!-- /.content -->
  </div>
  
  

@endsection

