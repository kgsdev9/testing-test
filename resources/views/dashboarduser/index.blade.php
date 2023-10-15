@extends('dashboarduser.apps.app')

@section('document')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Bienvenue
        <small>{{Auth::user()->name}}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Tableau de bord</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ count($candidatures)}}</h3>

              <p>Total Candidature</p>
            </div>
            <div class="icon">

            </div>
            <a href="{{route('liste_candidature')}}" class="small-box-footer">Consulter <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{count($candidat_accept)}}</h3>

              <p>Candidature Acceptée</p>
            </div>
            <div class="icon">

            </div>
            <a href="{{route('candidature.valide')}}" class="small-box-footer">Consulter <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{count($candidat_encours)}}</h3>

              <p>Candidature En Cours</p>
            </div>
            <div class="icon">

            </div>
            <a href="{{route('candidature.encours')}}" class="small-box-footer">Consulter <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{count($candidat_rejet)}}</h3>

              <p>Candidature Refusée</p>
            </div>
            <div class="icon">

            </div>
            <a href="{{route('candidature.rejet')}}" class="small-box-footer">Consulter <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">


                  <h3 class="box-title">Mes Candidatures</h3>

                  <div class="box-tools">

                  </div>
                </div>
                <!-- /.box-header -->

                  @if($cand_take_cinq->count()> 0)
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

                      @foreach ($cand_take_cinq as  $candidature )
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
                          <span class="label label-danger">rejetée</span>
                          @endif

                        </td>
                        <td>
                          <a href="{{route('detail_candidature', $candidature->id)}}" class="btn btn-dark">Details</a>
                        </td>

                      </tr>
                        @endforeach
                    </table>
                  </div>
                  @else
                  <span style="margin-left: 10px;"> Vous n'avez aucune candidature Pour L'instant ! </span>
                  @endif


                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>



        </section>
        <!-- /.Left col -->


      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Tous Droits Reservés </b>
    </div>
    <strong> Insititut Roosvelt une ecole d'excellence</strong>
  </footer>




</div>
<!-- ./wrapper -->


@endsection
