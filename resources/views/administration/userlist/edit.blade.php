@extends('administration.master.index')


@section('admin')
@include('sweetalert::alert')
<div class="content-wrapper">


    <div class="container">



<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

        @if(session('admin-success'))
        <div class="alert alert-success container">
                {{session('success')}}

        </div>

        @endif


        <h4 class="card-title">MODIFICATION D'UTILISATEUR</h4>


        <br>
          <div class="col-md-11" style="text-transform: uppercase;">
            <form class="forms-sample" action="{{route('update.user' , $edit_user->id)}}" method="POST"  enctype="multipart/form-data">
              @csrf

              <div class="row">
                  <div class="form-group col-md-12">
                    <label for="exampleInputName1 col-md-6">Nom d'utilisateur : @error('name') <small style="color: red">{{$message}}</small> @enderror </label>
                    <input type="text" class="form-control" id="exampleInputName1"  name="name" value="{{old('name') ?? $edit_user->name}}">
                  </div>
                  <div class="form-group  col-md-12">
                    <label for="exampleInputName1 col-md-6">Adresse E-mail : @error('email') <small style="color: red">{{$message}}</small> @enderror </label>
                    <input type="email" class="form-control" id="exampleInputName1"  name="email" value="{{old('email') ??  $edit_user->email}}">
                  </div>
                </div>


                <div class="row">
                  <div class="form-group  col-md-12">
                    <label for="exampleInputName1">Role Acutelle : @if($edit_user->role=='utilisateur')
                        <span>Utilisateur</span>
                        @elseif($edit_user->role=='administrateur')
                        <span>Administrateur</span>
                        @elseif($edit_user->role=='moderateur')
                        <span>Moderateur</span>
                        @endif</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="{{ $edit_user->role }}">
                  </div>

                  <div class="form-group  col-md-12">
                    <label for="exampleInputName1">Changez le role  : @error('lieu_de_naissance') <small style="color: red">{{$message}}</small> @enderror</label>
                        <select name="role" class="form-control">
                            <option value="utilisateur">Utilisateur</option>
                            <option value="moderateur">Moderateur</option>
                            <option value="administrateur" selected>Administrateur</option>

                        </select>
                  </div>
                </div>

                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

            <button type="submit" class="btn btn-primary mr-2">Soumettre</button> &nbsp;
                    <a href="{{route('listes.users')}}" class="btn btn-warning">annuler</a>
            <br><br>
          </form>

          </div>


      </div>
    </div>
  </div>



    </div>

    </div>

@endsection
