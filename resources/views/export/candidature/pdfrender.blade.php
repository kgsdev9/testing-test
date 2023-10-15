<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}



#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body style="text-transform: capitalize;"  id="#body">

<h1 >INFORMATIONS SUR LES CANDIDATURES  </h1>

<table id="customers">
  <tr>
    <th>Nom et Prenom</th>
    <th>Telephone</th>
    <th>Nationalite</th>
    <th>Statut</th>
    <th>Matricule</th>
    <th>ID Permanent</th>
    <th>Etat</th>
    <th>Date Soumission</th>
  </tr>

  @foreach ($candidature as $c )
  <tr>
    <td>{{$c->nom}}  {{$c->prenom}}  </td>
    <td>{{$c->telephone_1}}</td>
    <td>{{$c->nationnalite}}</td>
     <td>{{$c->statut}}</td>
     <td>{{$c->matricule}}</td>
     <td>{{$c->id_permanent}}</td>
    <td>
        @if($c->etat=="encours")
        encours
        @elseif($c->etat=="rejet")
        refusée
        @elseif($c->etat=="valide")
        validée
        @endif
    </td>

    <td>{{$c->created_at}}</td>
  </tr>

  @endforeach


</table>

</body>
</html>
