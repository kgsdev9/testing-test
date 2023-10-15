@extends('administration.master.index')


@section('admin')
@include('sweetalert::alert')
<div class="content-wrapper">


    <div class="container">



<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

        <h4 class="card-title">ACTION SUR LA CANDIDATURE</h4>


        <br>
          <div class="col-md-11" style="text-transform: uppercase;">
            <form class="forms-sample" action="{{route('after_statut', $edit_user->id)}}" method="post">
              @csrf

              <div class="row">
                  <div class="form-group col-md-12">
                    <label for="exampleInputName1 col-md-6"> L'Id Permanent:</small>  </label>
                    <input type="text" class="form-control" id="exampleInputName1"  name="id_permanent" value="{{$edit_user->id_permanent}}">
                  </div>
                  <div class="form-group  col-md-12">
                    <label for="exampleInputName1 col-md-6">Adresse E-mail </small>  </label>
                    <input type="text" class="form-control" id="exampleInputName1"  name="numero_bts" value="{{$edit_user->numero_bts}}">
                  </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                      <label for="exampleSelectGender">Statut De Candidature :
                            @if($edit_user->etat =='encours')
                        <span class="badge badge-warning">En Attente</span>
                            @elseif($edit_user->etat =='valide')
                            <span class="badge badge-success">Confirmé</span>
                            @elseif($edit_user->etat =='rejet')
                            <span class="badge badge-danger">Rejetée</span>
                            @endif
                        </label>
                        <select class="form-control" id="exampleSelectGender" >
                          <option value="{{$edit_user->id}}">{{$edit_user->etat}}</option>
                        </select>
                      </div>

                      <div class="form-group col-md-6">

                        <label for="exampleSelectGender">Changer le statut  </label>
                                <select name="confirm"  class="form-control">
                                    <option value="encours">Encours</option>
                                    <option value="valide">Validée</option>
                                    <option value="rejet">Rejetté</option>
                                </select>
                        </div>

                  </div>

                  <div class="row">

                    <div class="form-group col-md-12">
                        <label for="exampleSelectGender">Resultat BTS: {{ $edit_user->resultat}} </label>
                          <select class="form-control" id="exampleSelectGender" name="resultat_bts">
                            <option value="">Chosir Le Resultat</option>

                            <option value="Admis">ADMIS</option>
                              <option value="ajourné">AJOURNE</option>

                          </select>
                        </div>


                  </div>



                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <div>
                            <br>
                            <button type="submit" class="btn btn-primary" onclick="return confirm('Etes Vous Surs De Confirmer ?')">Confirmé</button> &nbsp;
                            <button class="btn btn-warning">Annuler</button>

                        </div>

            <br><br>
          </form>

          </div>


      </div>
    </div>
  </div>



    </div>

    </div>

@endsection
