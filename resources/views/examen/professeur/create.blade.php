@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Liste des Professeures</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('professeur.store')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Nom :</label>
                    <input type="text" name="nom" class="form-control" value="{{ old('nom') }}" autofocus>
                    @error('nom')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Prénom :</label>
                    <input name="prenom"  class="form-control" value="{{ old('prenom') }}">
                    @error('prenom')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">email:</label>
                    <input name="email"   class="form-control" value="{{ old('ville') }}">
                    @error('ville')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Numero de telephone:</label>
                    <input name="telephone"   class="form-control" value="{{ old('telephone') }}">
                    @error('telephone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                    <br/>
                <div class="form-group">
                    <input type="submit" name="btn-sub" class="btn btn-primary float-right" value="Ajouter">
                </div>
            </form>
        </div>
    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop