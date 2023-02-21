@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Liste des professeurs</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('professeur.update',['professeur'=>$professeur])}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                <div class="form-group">
                    <label for="">Nom :</label>
                    <input type="text" name="nom" value="{{$professeur->nom}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Prenom :</label>
                    <input type="text" name="prenom" value="{{$professeur->prenom}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email :</label>
                    <input type="text" name="email" value="{{$professeur->email}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Numero de telephone :</label>
                    <input type="text" name="telephone" value="{{$professeur->telephone}}" class="form-control">
                </div>
                    <br/>
                <div class="form-group">
                    <input type="submit" name="btn-sub" class=" btn btn-warning" value="Modify">
                    <a href="{{route('professeur.index')}}" class="btn btn-success">Go back</a>
                </div>
            </form>
        </div>
    </div>
</div>@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop