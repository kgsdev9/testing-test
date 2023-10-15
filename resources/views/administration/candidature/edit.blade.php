@extends('administration.master.index')



@section('admin')

<div class="content-wrapper" >
    <div class="row">

      @if ($message=Session::get('success'))
      <div class="col-10 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">   </h4>


            <p class="card-description alert alert-success" >
              {{$message}}
            </p>


          </div>
        </div>
      </div>
      @endif
      <div class="col-md-11"  style="margin-left:50px;">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Modifier  candidature  admin</h4>
            <hr>
            <p class="card-description">

            </p>
            @foreach ($candidat as  $c)


            <form class="forms-sample" method="POST"  action="{{route('admin.update', $c['id'])}}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputName1 col-md-6">Nom  : @error('nom') <small style="color: red">{{$message}}</small> @enderror </label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer le nom" name="nom" value="{{$c['nom']}}">
                </div>
                <div class="form-group  col-md-6">
                  <label for="exampleInputName1">Prénom : @error('prenom') <small style="color: red">{{$message}}</small> @enderror </label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer le prénom" name="prenom" value="{{$c['prenom']}}">
                </div>
              </div>

              <div class="row">
                <div class="form-group  col-md-6">
                  <label for="exampleInputName1">Date de naissance : @error('date_de_naissance') <small style="color: red">{{$message}}</small> @enderror</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="JJ/MM/AA" name="date_de_naissance" value="{{$c['date_de_naissance']}}">
                </div>
                <div class="form-group  col-md-6">
                  <label for="exampleInputName1">Lieu de naissance : @error('lieu_de_naissance') <small style="color: red">{{$message}}</small> @enderror</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer le lieu de naissance" name="lieu_de_naissance" value="{{$c['lieu_de_naissance']}}">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleSelectGender">Sexe :  @error('sexe') <small style="color: red">{{$message}}</small> @enderror</label>
                    <select class="form-control" id="exampleSelectGender" name="sexe" >
                      <option value="{{$c['sexe']}}" >{{$c['sexe']}}</option>
                      <option value="M">Masculin</option>
                      <option value="F">Feminin</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleSelectGender">Type de candidature :  @error('statut') <small style="color: red">{{$message}}</small> @enderror</label>
                      <select class="form-control" id="exampleSelectGender" name="statut" >
                        <option value="{{$c['statut']}}">{{$c['statut']}}</option>
                        <option value="libre">Libre</option>
                        <option value="officielle">Officielle</option>
                      </select>
                    </div>

              </div>

              <div class="row">
              <div class="form-group  col-md-6">
                <label for="exampleInputCity1">Nationalité :  @error('nationnalite') <small style="color: red">{{$message}}</small> @enderror</label>
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Entrer votre nationalité" name="nationnalite" value="{{$c['nationnalite']}}">
              </div>
              <div class="form-group col-md-6">
                <label for="exampleInputCity1">Numéro de téléphone:  @error('telephone_1') <small style="color: red">{{$message}}</small> @enderror </label>
                <input type="number" class="form-control" id="exampleInputCity1" placeholder="Entrer votre numéro  de telephone" name="telephone_1" value="{{$c['telephone_1']}}">
              </div>
              </div>


              <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleSelectGender">Examen: @error('examen') <small style="color: red">{{$message}}</small> @enderror</label>
                    <select class="form-control" id="exampleSelectGender" name="examen" ">
                      <option value="{{$c['examen']}}">{{$c['examen']}}</option>

                      <option value="bts">BTS</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleSelectGender">Filière :  @error('filiere') <small style="color: red">{{$message}}</small> @enderror </label>
                      <select class="form-control" id="exampleSelectGender" name="filiere" ">
                        <option value="{{$c['filiere']}}">{{$c['filiere']}}</option>
                        <option value="AUTRE">Veuillez choisir une option </option>
                        <option value="ATPV">ATPV/AGRICULTURE TROPICALE OPTION PRODUCTION VEGETALE</option>
                        <option value="ATPA">ATPA/AGRICULTURE TROPICALE OPTION PRODUCTION ANIMALE</option>
                        <option value="AACV">AACV/ARTS ET AMENAGEMENT DU CADRE DE VIE</option>
                        <option value="ADt">AD/ASSISTANAT DE DIRECTION</option>
                        <option value="CJPI">CJPI/CARRIERES JURIDIQUES ET PROFESSIONS IMMOBILIERES</option>
                        <option value="CV">CV/COMMUNICATION VISUELLE</option>
                        <option value="COS">COS/COSMETOLOGIE</option>
                        <option value="ELT">ELT/ELECTROTECHNIQUE</option>
                        <option value="FA">FA/FINANCES ASSURANCES</option>
                        <option value="FCGE">FCGE/FINANCES COMPTABILITE ET GESTION DES ENTREPRISES</option>
                        <option value="GBAT">GBAT/GENIE CIVIL OPTION BATIMENT</option>
                        <option value="GGT">GGT/GENIE CIVIL OPTION GEOMETRE TOPOGRAPHE</option>
                        <option value="GTP">GTP/GENIE CIVIL OPTION TRAVAUX PUBLICS</option>
                        <option value="GEE">GEE/GENIE ENERGETIQUE ET ENVIRONNEMENT</option>
                        <option value="GEC">GEC/GESTION COMMERCIALE</option>
                        <option value="GERN">GERN/GESTION DE L'ENVIRONNEMENT ET DES RESSOURCES NATURELLES</option>
                        <option value="GCT">GCT/GESTION DES COLLECTIVITES TERRITORIALES</option>
                        <option value="HST">HST/HYGIENE ET SECURITE DU TRAVAIL</option>
                        <option value="IACC">IACC/INDUSTRIES AGRO-ALIMENTAIRES ET CHIMIQUES OPTION CONTROLE</option>
                         <option value="IACP">IACP/INDUSTRIES AGRO-ALIMENTAIRES ET CHIMIQUES OPTION PRODUCTION</option>
                         <option value="IDA">IDA/INFORMATIQUE DEVELOPPEUR D'APPLICATIONS</option>
                         <option value="LOG">LOG/LOGISTIQUE</option>
                         <option value="MSP">MSP/MAINTENANCE DES SYSTEMES DE PRODUCTION</option>
                         <option value="MGP">MGP/MINES GEOLOGIE ET PETROLE</option>
                         <option value="2MA">2MA/Moteur et Mécanique Automobile</option>
                         <option value="OPL">OPL/OPTIQUE LUNETTERIE</option>
                         <option value="RIT">RIT/RESEAUX INFORMATIQUES ET TELECOMMUNICATIONS</option>
                         <option value="RHC">RHC/RESSOURCES HUMAINES ET COMMUNICATION</option>
                         <option value="SIN">SIN/SCIENCES DE L'INFORMATION</option>
                         <option value="SIP">SIP/SECURITE INCENDIE ET PREVENTION</option>
                         <option value="SEI">SEI/SYSTEMES ELECTRONIQUES ET INFORMATIQUES</option>
                         <option value="TH">TH/TOURISME HOTELLERIE</option>
                         <option value="URBA">URBA/URBANISME</option>

                      </select>
                    </div>

              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputName1 col-md-6">Ecole d'origine :  @error('ecole_d_origine') <small style="color: red">{{$message}}</small> @enderror </label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer l'école d'origine" name="ecole_d_origine" value="{{$c['ecole_d_origine']}}">
                </div>
                <div class="form-group  col-md-6">
                  <label for="exampleInputName1">Matricule:  @error('matricule') <small style="color: red">{{$message}}</small> @enderror  </label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer le matricule" name="matricule" value="{{$c['matricule']}}">
                </div>
              </div>



              <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleSelectGender">Série du  bac :  @error('serie_du_bac') <small style="color: red">{{$message}}</small> @enderror </label>
                    <select class="form-control" id="exampleSelectGender" name="serie_du_bac" >
                      <option value="{{$c['serie_du_bac']}}">{{$c['serie_du_bac']}} </option>

                      <option value="A2">A2</option>
                        <option value="A1">A1</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="G1">G1</option>
                        <option value="G2">G2</option>
                        <option value="B">B</option>
                        <option value="BT">BT</option>
                        <option value="H1">H1</option>
                        <option value="H2">H2</option>
                        <option value="H3">H3</option>
                        <option value="F1">F1</option>
                        <option value="F2">F2</option>
                        <option value="F3">F3</option>
                        <option value="F4">F4</option>
                         <option value="F7">F7</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleSelectGender">Mention : @error('mention') <small style="color: red">{{$message}}</small> @enderror </label>
                      <select class="form-control" id="exampleSelectGender" name="mention" >
                        <option value="{{$c['mention']}}">{{$c['mention']}}</option>
                        <option value="PASSABLE">PASSABLE</option>
                        <option value="ASSEZ-BIEN">ASSEZ-BIEN</option>
                        <option value="BIEN">BIEN</option>
                        <option value="TRES BIEN">TRES BIEN</option>
                      </select>
                    </div>

              </div>


              <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputName1 col-md-6">Nombre de points au bac : @error('points_au_bac') <small style="color: red">{{$message}}</small> @enderror </label>
                  <input type="number" class="form-control" id="exampleInputName1" placeholder="Entrer le nombre de points au bac" name="points_au_bac" value="{{$c['points_au_bac']}}">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputName1 col-md-6">Numero de table  @error('numero_de_table') <small style="color: red">{{$message}}</small> @enderror </label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer le numero de table" name="numero_de_table" value="{{$c['numero_de_table']}}">
                </div>

              </div>

              <div class="row">
                <div class="form-group  col-md-6">
                  <label for="exampleInputName1">ville de composition :  @error('ville') <small style="color: red">{{$message}}</small> @enderror </label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer la ville  de composiition" name="ville" value="{{$c['ville']}}">
                </div>

                <div class="form-group  col-md-6">
                  <label for="exampleInputName1">Centre de composition :  @error('centre_de_composition') <small style="color: red">{{$message}}</small> @enderror </label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer le centre de composition" name="centre_de_composition" value="{{$c['centre_de_composition']}}">
                </div>
              </div>

              <div class="row">
                <div class="form-group  col-md-6">
                  <label for="exampleInputName1">Email : @error('email') <small style="color: red">{{$message}}</small> @enderror  </label>
                  <input type="email" class="form-control" id="exampleInputName1" placeholder="Entrer votre adresse email" name="email" value="{{$c['email']}}">
                </div>

                <div class="form-group col-md-6">
                  <label for="exampleInputCity1">Ajouter une photo : </label>
                  <input type="file" class="form-control" id="exampleInputCity1" placeholder="Location" name="photo">
                </div>
              </div>





            </div>


              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <input type="hidden" name="id_candidature" value="{{$c['id']}}">
              <button type="submit" class="btn btn-primary mr-2">Modifier</button>
              <a href="{{route('home.admin')}}"  class="btn btn-warning">Annuler</a>
            </form>


            @endforeach
          </div>
        </div>
      </div>

    </div>
  </div>


@endsection
