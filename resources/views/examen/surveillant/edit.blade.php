@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>edit le surveillant</h1>
@stop

@section('content')

<form action="{{route('surveillant.update',['surveillant' => $surveillant])}}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    @csrf


<div class="mb-3">
    <label class="form-label"> Nom </label>
    <input type="text" class="form-control" name="nom" value="{{ $surveillant->nom }}">
</div>
<div class="mb-3">
    <label class="form-label">Prenom</label>
    <input type="text" class="form-control" name="prenom" value="{{ $surveillant->prenom }}">
</div>
<div class="mb-3">
    <label class="form-label">Email</label>
    <input  type="email" class="form-control" name="email" value="{{ $surveillant->email }}">
</div>
<div class="mb-3">
    <label class="form-label">telephone</label>
    <input   class="form-control" name="telephone" value="{{ $surveillant->telephone }}">
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
    <select name="matiere_id" id=""  >
        @foreach ($matiere as $item)
        <option value="{{$item->id}}">
            {{$item->nom}}
        </option>
            
        @endforeach
    </select>

</div>

<div class="mb-3" style="display: flex;justify-content: center;">
<input type="submit" class="btn btn-primary"  value="envoyer">
<a href="{{route('surveillant.index')}}" class="btn btn-warning">go back</a>
</div>

</form>





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop