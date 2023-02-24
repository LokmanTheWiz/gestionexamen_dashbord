
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="display: flex;justify-content: center;">Liste des professeures</h1>
@stop

@section('content')




<div class="pull-right" style="display:flex; justify-content: flex-end">
  <a href="{{route('professeur.create')}}" class="btn btn-light " style="list-style:none"><i class="fas fa-plus"></i>  </a>
</div>
<table class="table table-striped">
    <thead>
      <tr>
   
        <th>Nom et prénom</th>
        <th>email</th>
        <th>telephone</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($professeur as $professeur)
      <tr>
        <td>{{$professeur->nom.' '.$professeur->prenom}}</td>
        <td>{{$professeur->email}}</td>
        <td>{{$professeur->telephone}}</td>
        <td>
          <form action="{{route('professeur.destroy',['professeur' => $professeur])}}"method="POST">
            {{ csrf_field() }}
            {{method_field('DELETE')}}
            
            <a href="{{ route('professeur.edit', ['professeur' => $professeur]) }}" class="btn btn-warning "><i class="fas fa-edit"></i></a>
            <button type="submit" class="btn btn-danger" style="color:black;"><i class="fas fa-trash"></i></button>
            
        </form>
        </td>
      </tr>
          
      @endforeach
    </tbody>
  </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

