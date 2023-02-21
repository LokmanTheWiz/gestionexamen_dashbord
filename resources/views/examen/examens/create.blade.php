@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="display: flex;justify-content: center;">ajout des examen</h1>
@stop

@section('content')

<form action="{{ route('examen.store') }}" method="POST">
    
    @csrf

    <div class="mb-3">
        <label class="form-label"> le nom  </label>
        <input type="text" class="form-control" name="libelle" placeholder=" nom de examen">
    </div>
<div class="mb-3">
    <label class="form-label"> date de examen </label>
    <input type="date" class="form-control" name="dateexamen" placeholder=" date de examen">
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
<input type="submit" class="btn btn-primary"  value="envoyer">
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