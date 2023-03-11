@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="display: flex;justify-content: center;">ajout des modules</h1>
@stop

@section('content')

<form action="{{ route('module.store') }}" method="POST">
    
    @csrf

    <div class="mb-3">
        <label class="form-label"> le nom  </label>
        <input type="text" class="form-control" name="nom" placeholder=" nom de examen">
    </div>



    <div class="mb-3">
        <label class="form-label">semestre</label>
        <br>
        <select name="semestre_id" id=""  >
            @foreach ($semestre as $item)
            <option value="{{$item->id}}">
                {{$item->semestre}}
            </option>
                
            @endforeach
        </select>
    
    </div>

<div class="mb-3" style="display: flex;justify-content: center;">
<input type="submit" class="btn btn-primary"  value="envoyer">
<a href="{{route('module.index')}}" class="btn btn-warning">go back</a>
</div>

</form>





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop