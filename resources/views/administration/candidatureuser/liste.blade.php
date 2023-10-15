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
              <h3 class="box-title">TOUTES LES CANDIDATURES </h3>

              <div class="box-tools">
                <div class="input-group input-group-sm search" style="width: 150px;">
                <input type="text" name="search" id="searchproducts"  placeholder="rechercher.." class="form-control">



                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover table-bordered">


                <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Nationalite</th>
                  <th>Telephone</th>
                  <th>Statut</th>
                  <th>Matricule</th>
                  <th>User</th>
                  <th>Etat</th>

                  <th>Actions</th>
                </tr>
                <tbody>
                @foreach ($allcandidature as $candidature )

                <tr>

                <td> {{$candidature->nom}}  </td>
                <td> {{$candidature->prenom}}  </td>
                <td> {{$candidature->nationnalite}}  </td>
                <td> {{$candidature->telephone_1}}</td>
                <td> {{$candidature->statut}}  </td>
                <td> {{$candidature->matricule}}  </td>
                <td> {{$candidature->user->name}}  </td>
                <td>
                  @if($candidature->etat =='encours')
                  <span class="label label-warning">En Cours</span>
                  @elseif($candidature->etat =='valide')
                  <span class="label label-success">Approuvée</span>
                  @elseif($candidature->etat =='rejet')
                  <span class="label label-danger">Rejetée</span>
                  @endif

                </td>

                <td>
                <a  href="{{route('detail.admin', $candidature->id)}}" class="btn btn-primary">Details</a>
                <a href="{{route('admin.reserve', $candidature->id)}}"class="btn btn-warning">Changer l'etat</a>

                </td>


             </tr>

                @endforeach
                </tbody>
                <tbody  id="Content" class="searchdata"></tbody>
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



