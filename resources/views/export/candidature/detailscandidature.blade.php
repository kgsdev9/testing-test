

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="ThemeMarch">
  <!-- Site Title -->
  <title>TELECHARGER LA  CANDIDATURE</title>
  <link rel="stylesheet" href="{{public_path('asset/print/css/style.css')}}">
</head>

<body >
  <div class="cs-container">
    <div class="cs-invoice cs-style1">

            @foreach ($details as  $c )
      <div class="cs-invoice_in" id="download_section" style="text-transform:uppercase;">
        <div class="cs-invoice_head cs-type1 cs-mb25">
          <div class="cs-invoice_left">


            <p class="cs-invoice_number cs-primary_color cs-mb0 cs-f16"><b class="cs-primary_color"> {{$c['nom']}}  {{$c['prenom']}} </b></p>
                    @if($c->etat=="valide")
                        <p style="color:green;">Candidature Validée</p>
                        @elseif($c->etat=="encours")
                        <p style="color:orange;">Candidature en cours</p>
                        @elseif($c->etat=="rejet")
                        <p style="color:red;;">Candidature Refusée</p>
                        @endif

          </div>
          <div class="cs-invoice_right cs-text_right">
            <div class="cs-logo cs-mb5"><img src="{{public_path('uploads/candidature/'.$c['photo'])}}" alt="Logo"  style="height:100px; width:100px; margin-top:-30px;"></div>
          </div>
        </div>
        <div class="cs-invoice_head cs-mb10">
          <div class="cs-invoice_left">
            <b class="cs-primary_color">FICHE DE CANDIDATURE</b>
            <p>
                TELEPHONE :  {{ $c['telephone_1']}} <br>
             EMAIL :{{ $c['email']}} <br>
             SEXE DU CANDIDAT :  {{ $c['sexe']}}
            </p>
          </div>

        </div>
        <div class="cs-table cs-style1">
          <div class="cs-round_border">
            <div class="cs-table_responsive">
              <table>
                <thead>
                  <tr>
                    <th class="cs-width_6 cs-semi_bold cs-primary_color cs-focus_bg cs-f16" colspan="2"><b class="cs-primary_color">Informations Sur La Candidature </b> </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="cs-width_6"><b class="cs-primary_color">NATIONNALITE: </b>{{$c['nationnalite']}}</td>
                    <td class="cs-width_6"><b class="cs-primary_color">DATE DE NAISSANCE: </b>{{$c['date_de_naissance']}}</td>
                  </tr>
                  <tr>
                    <td class="cs-width_6"><b class="cs-primary_color">LIEU DE NAISSANCE: </b>{{$c['lieu_de_naissance']}}</td>
                    <td class="cs-width_6"><b class="cs-primary_color">EXAMEN: </b>{{$c['examen']}}</td>
                  </tr>

                  <tr>
                    <td class="cs-width_6"><b class="cs-primary_color">STATUT: </b>{{$c['statut']}}</td>
                    <td class="cs-width_6"><b class="cs-primary_color">FILIERE: </b>{{$c['filiere']}}</td>
                  </tr>
                </tbody>
              </table>
              <table>
                <thead>
                  <tr>
                    <th class="cs-semi_bold cs-primary_color cs-focus_bg cs-f16 cs-border_top" colspan="4"><b class="cs-primary_color">Informations Complementaires </b></th>
                  </tr>
                  <tr>
                    <td class="cs-width_3 cs-primary_color cs-semi_bold"> <b class="cs-primary_color">ECOLE D'ORIGINE</b></td>
                    <td class="cs-width_3 cs-primary_color cs-semi_bold"><b class="cs-primary_color"> SERIE DU BAC </b></td>
                    <td class="cs-width_3 cs-primary_color cs-semi_bold"><b class="cs-primary_color"> MATRICULE</b></td>
                    <td class="cs-width_3 cs-primary_color cs-semi_bold cs-text_right"><b class="cs-primary_color"> POINT DU BAC</b></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="cs-width_3">{{$c['ecole_d_origine']}}</td>
                    <td class="cs-width_3">{{$c['serie_du_bac']}}</td>
                    <td class="cs-width_3">{{$c['matricule']}}</td>
                    <td class="cs-width_3 cs-text_right">{{$c['points_au_bac']}}</td>
                  </tr>
                </tbody>
              </table>


              <table>
                <thead>
                  <tr>
                    <th class="cs-semi_bold cs-primary_color cs-focus_bg cs-f16 cs-border_top" colspan="4"><b class="cs-primary_color">D'AUTRES INFORMATIONS </b></th>
                  </tr>
                  <tr>
                    <td class="cs-width_3 cs-primary_color cs-semi_bold"> <b class="cs-primary_color">MENTION</b></td>
                    <td class="cs-width_3 cs-primary_color cs-semi_bold"><b class="cs-primary_color"> CENTRE BAC</b></td>
                    <td class="cs-width_3 cs-primary_color cs-semi_bold"><b class="cs-primary_color"> N° TABLE</b></td>
                    <td class="cs-width_3 cs-primary_color cs-semi_bold cs-text_right"><b class="cs-primary_color">VILLE</b></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="cs-width_3">{{$c['mention']}}</td>
                    <td class="cs-width_3">{{$c['centre_de_composition']}}</td>
                    <td class="cs-width_3">{{$c['numero_de_table']}}</td>
                    <td class="cs-width_3 cs-text_right">{{$c['ville']}}</td>
                  </tr>
                </tbody>
              </table>

            </div>

          </div>

        </div>

      </div>

      @endforeach

      <div class="cs-invoice_btns cs-hide_print">
        <p>CANDIDATURE EMISE PAR L'UTILISATEUR {{Auth::user()->name}} à  {{$c['created_at']}}</p>
      </div>
    </div>
  </div>

</body>
</html>
