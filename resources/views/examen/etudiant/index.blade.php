@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Liste des étudiant</h1>
@stop

@section('content')
<div class="pull-right" style="display:flex; justify-content: flex-end">
  <a href="{{route('etudiant.create')}}" class="btn btn-light " style="list-style:none"><i class="fas fa-plus"></i> cree  nouveau etudiant </a>
</div>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Code étudiant</th>
        <th>Nom et prénom</th>
        <th>Fillière</th>
        <th>local</th>
        <th> le nom examen</th>
        <th>action </th>

      </tr>
    </thead>
    <tbody>
      @foreach ($etudiant as $etudiant)
      <tr>
        <td>{{$etudiant ->codeetudiant}}</td>
        <td>{{$etudiant ->nom.' '.$etudiant->prenom}}</td>
        <td>{{$etudiant ->class}}</td>
        <td>{{$etudiant ->local_id}}</td>
        <td>{{$etudiant ->examen_id}}</td>
        <td>
          <form action="{{route('etudiant.destroy',['etudiant' => $etudiant])}}"method="POST">
            {{ csrf_field() }}
            {{method_field('DELETE')}}
            
            <a href="{{ route('etudiant.edit', ['etudiant' => $etudiant]) }}" class="btn btn-secondary ">edite</a>
            <a href="{{ route('etudiant.show', ['etudiant' => $etudiant]) }}" class="btn btn-light ">afficher </a>

            <input type="submit" class="btn btn-danger " value="suprimer">
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
