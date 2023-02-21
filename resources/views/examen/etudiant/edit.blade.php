@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="display: flex;justify-content: center;">ajout des étudiant</h1>
@stop

@section('content')

<form  action="{{route('etudiant.update',['etudiant' => $etudiant])}}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    @csrf
<div class="mb-3">
    <label class="form-label">Code Etudiant </label>
    <input type="text" class="form-control" name="codeetudiant" value="{{ $etudiant->codeetudiant }}">
</div>

<div class="mb-3">
    <label class="form-label"> Nom </label>
    <input type="text" class="form-control" name="nom" value="{{ $etudiant->nom }}" >
</div>
<div class="mb-3">
    <label class="form-label">Prenom</label>
    <input type="text" class="form-control" name="prenom" value="{{ $etudiant->prenom }}" >
</div>
<div class="mb-3">
    <label class="form-label">class</label>
    <input  type="text" class="form-control" name="class" value="{{ $etudiant->class }}" >
</div>
<div class="mb-3">
    <label class="form-label">local</label>
    <br>
    <select name="local_id" id=""  >
        @foreach ($local as $item)
        <option value="{{$item->id}}">
            {{$item->libelle}}
        </option>
            
        @endforeach
    </select>

</div>
<div class="mb-3">
    <label class="form-label">examen</label>
    <br>
    <select name="examen_id" id=""  >
        @foreach ($examen as $item)
        <option value="{{$item->id}}">
            {{$item->dateexamen}}
        </option>
            
        @endforeach
    </select>

</div>

<div class="mb-3" style="display: flex;justify-content: center;">
    <input type="submit" class="btn btn-primary"  value="modifier">
</div>

</form>





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop