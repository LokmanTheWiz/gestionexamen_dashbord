@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="display: flex;justify-content: center;">ajout des examen</h1>
@stop

@section('content')

@livewireStyles


<form action="{{ route('examen.store') }}" method="POST">
    
    @csrf
    
    <div class="mb-3">
        <label class="form-label"> le nom  </label>
        <input type="text" class="form-control" name="libelle" placeholder=" nom de examen">
    </div>

    
    @livewire('examen')

{{-- ---------------------------Semester selection----------------------------- --}}
{{-- <div class="mb-3">

    <label class="form-label">Selectionner le semestre</label>
    <br>
    <select class="form-control" name="semestre_id" id="semestre"  >
        @foreach ($semestre as $item)
        <option value="{{$item->id}}">
            {{$item->semestre}}
        </option>
            
        @endforeach
    </select>

    <label class="form-label">module</label>
    <br>
    <select class="form-control" name="module_id" id="module"  >
        <option value="" selected>Choose Module</option>
    </select>
<<<<<<< HEAD
</div> --}}
{{-- ---------------------------matiere selection----------------------------- --}}

</div>

{{-- ---------------------------end selection----------------------------- --}}

<div class="form-group">
    <label> date de examen </label>
    <input type="date" class="form-control" name="dateexamen" placeholder=" date de examen">
</div>
<div class="mb-3" style="display: flex;justify-content: center;">
<input type="submit" class="btn btn-primary"  value="envoyer">
<a href="{{route('examen.index')}}" class="btn btn-warning">go back</a>
</div>

</form>
@livewireScripts

@stop   

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop