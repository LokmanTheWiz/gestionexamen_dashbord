@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="display: flex;justify-content: center;">Liste des étudiant</h1>
@stop

@section('content')

<select class="form-select" aria-label="Sélectionner une option">
  @foreach ($etudiant->semestre as $item)
  <option value="{{$item->id}}">{{$item->semestre}} </option>
  @endforeach

</select>

<div class="pull-right" style="display:flex; justify-content: flex-end">
  <a href="{{route('etudiant.create')}}" class="btn btn-light " style="list-style:none"><i class="fas fa-plus"></i>  </a>
</div>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Code étudiant</th>
        <th>Nom et prénom</th>
        <th>Fillière</th>
        <th>local</th>
        <th> le nom examen</th>
        <th>semestre</th>
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
        <td>{{$etudiant ->semestre_id}}</</td>
        <td>
          <form action="{{route('etudiant.destroy',['etudiant' => $etudiant])}}"method="POST">
            {{ csrf_field() }}
            {{method_field('DELETE')}}
            
            <a href="{{ route('etudiant.edit', ['etudiant' => $etudiant]) }}" class="btn btn-warning "><i class="fas fa-edit"></i></a>
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
