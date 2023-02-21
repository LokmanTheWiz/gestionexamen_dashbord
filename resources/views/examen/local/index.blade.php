@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 >Liste des local</h1>
@stop

@section('content')
<div class="pull-right" style="display:flex; justify-content: flex-end">
  <a href="{{route('local.create')}}" class="btn btn-light " style="list-style:none"><i class="fas fa-plus"></i>  </a>
</div>
<table class="table table-striped">
    <thead>
      <tr>

        <th>le nom </th>
        <th>departement</th>
        <th>examen </th>
        <th>action</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($local as $local)
      <tr>
        <td>{{$local ->libelle}}</td>
        <td>{{$local ->departement}}</td>
        <td>{{$local ->examen_id}}</td>
        <td>
          <form action="{{route('local.destroy', ['local' => $local])}}" method="POST">
            {{ csrf_field() }}
            {{method_field('DELETE')}}
            
            <a href="{{ route('local.edit', ['local' => $local]) }}" class="btn btn-warning "><i class="fas fa-edit"></i></a>
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
