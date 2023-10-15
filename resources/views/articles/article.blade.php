@extends('dashboard.admin.users.admin.layoutadmin')

@section('admin')

        <div class="container-fluid">
        <br><br><br>
        <p>{{$find_id->description}}</p>

        <p> <strong>{{$find_id->created_at}}</strong>  </p>
        </div>

@endsection