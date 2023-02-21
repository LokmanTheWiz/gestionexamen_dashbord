@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ajout des examen</h1>
@stop

@section('content')

<form  action="{{route('examen.update',['examen' => $examen])}}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    @csrf
    <div class="mb-3">
        <label class="form-label"> nom </label>
        <input type="text" class="form-control" name="libelle"  value="{{ $examen->libelle }}" >
    </div>

<div class="mb-3">
    <label class="form-label"> date de examen </label>
    <input type="date" class="form-control" name="dateexamen"  value="{{ $examen->dateexamen }}" >
</div>


<div class="mb-3">
    <label class="form-label">matiere</label>
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
<input type="submit" class="btn btn-primary"  value="save">
<a href="{{route('examen.index')}}" class="btn btn-warning">go back</a>
</div>

</form>





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop