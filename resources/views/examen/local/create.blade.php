@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="display: flex;justify-content: center;">ajout des local</h1>
@stop

@section('content')

<form action="{{ route('local.store') }}" method="POST">
    
    @csrf


<div class="mb-3">
    <label class="form-label"> Nom </label>
    <input type="text" class="form-control" name="libelle" placeholder=" nom de local">
</div>
<div class="mb-3">
    <label class="form-label"> departement </label>
    <input type="text" class="form-control" name="departement" placeholder=" departement de local">
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
<a href="{{route('local.index')}}" class="btn btn-warning">go back</a>
</div>

</form>





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop