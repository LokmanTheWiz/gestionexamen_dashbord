@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="display: flex;justify-content: center;">Liste des examens</h1>
@stop

@section('content')
<div class="pull-right" style="display:flex; justify-content: flex-end">
  <a href="{{route('examen.create')}}" class="btn btn-light " style="list-style:none"><i class="fas fa-plus"></i>  </a>
</div>
<table class="table table-striped">
    <thead>
      <tr>
        <th>le nom</th>
        <th>date de examen </th>
        <th>matiere</th>
        <th>action </th>

      </tr>
    </thead>
    <tbody>
      @foreach ($examan as $examen)
      <tr>
        <td>{{$examen ->libelle}}</td>
        <td>{{$examen ->dateexamen}}</td>
        <td>{{$examen ->matiere_id}}</td>
        <td>
            <form action="{{route('examen.destroy', ['examan' => $examen])}}" method="POST">
            {{ csrf_field() }}
            {{method_field('DELETE')}}
            
            <a href="{{ route('examen.edit', ['examan' => $examen]) }}" class="btn btn-warning "><i class="fas fa-edit"></i></a>
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
