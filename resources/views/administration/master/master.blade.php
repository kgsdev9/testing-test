@extends('administration.master.index')
@section('admin')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Controle D' Administration

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Administration</li>
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
              <h3>{{count($allcandidature)}}</h3>

              <p>Total Candidature</p>
            </div>
            <div class="icon">

            </div>
            <a href="{{route('all.candidate')}}" class="small-box-footer">Consulter la liste <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{count( $demande)}}</h3>

              <p>  Candidaure Validée</p>
            </div>
            <div class="icon">

            </div>
            <a href="{{route('candit.valide')}}" class="small-box-footer">Consulter  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{count($candidature_encours)}}</h3>

              <p>Candidature En Cours</p>
            </div>
            <div class="icon">

            </div>
            <a href="{{route('candit.encours')}}" class="small-box-footer">Consulter <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>2</h3>

              <p>Candidature Rejetée</p>
            </div>
            <div class="icon">

            </div>
            <a href="{{route('candit.rejet')}}" class="small-box-footer">Consulter <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>


    </section>
    <!-- /.content -->
  </div>



@endsection
