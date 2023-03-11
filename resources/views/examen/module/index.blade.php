@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="display: flex;justify-content: center;">Liste des modules</h1>
@stop

@section('content')
<div class="pull-right" style="display:flex; justify-content: flex-end">
  <a href="{{route('module.create')}}" class="btn btn-light " style="list-style:none"><i class="fas fa-plus"></i>  </a>
</div>
<table class="table table-striped">
    <thead>
      <tr>
        <th>le nom</th>
        <th>semestre </th>
        <th>action </th>

      </tr>
    </thead>
    <tbody>
      @foreach ($module as $module)
      <tr>
        <td>{{$module ->nom}}</td>
        <td>{{$module ->semestre->semestre_id}}</td>
        <td>
            <form action="{{route('module.destroy', ['module' => $module])}}" method="POST">
            {{ csrf_field() }}
            {{method_field('DELETE')}}
            
            <a href="{{ route('module.edit', ['module' => $module]) }}" class="btn btn-warning "><i class="fas fa-edit"></i></a>
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
