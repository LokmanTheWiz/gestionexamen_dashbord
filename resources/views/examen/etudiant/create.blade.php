@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ajout des étudiant</h1>
@stop

@section('content')

<form action="{{ route('etudiant.store') }}" method="POST">
    
    @csrf
<div class="mb-3">
    <label class="form-label">Code Etudiant </label>
    <input type="text" class="form-control" name="codeetudiant" placeholder="le code de etudiant">
</div>

<div class="mb-3">
    <label class="form-label"> Nom </label>
    <input type="text" class="form-control" name="nom" placeholder=" nom de etudiant">
</div>
<div class="mb-3">
    <label class="form-label">Prenom</label>
    <input type="text" class="form-control" name="prenom" placeholder=" prenom de etudiant">
</div>
<div class="mb-3">
    <label class="form-label">class</label>
    <input  type="text" class="form-control" name="class" placeholder=" class de etudiant">
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
    <input type="submit" class="btn btn-primary"  value="envoyer">
    <input type="rest" class=" btn btn-danger"  value="annuler">
</div>

</form>





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop