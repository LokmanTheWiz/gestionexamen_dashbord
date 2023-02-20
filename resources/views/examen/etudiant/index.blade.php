@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Liste des étudiant</h1>
@stop

@section('content')
<table class="table table-striped">
    <thead>
      <tr>
        <th>Code étudiant</th>
        <th>Nom et prénom</th>
        <th>Fillière</th>
        <th>Semestre</th>
        <th>plasse</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>

      </tr>
      <tr>
        <td>Bob</td>
        <td>Johnson</td>
        <td>bobjohnson@example.com</td>
      </tr>
    </tbody>
  </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
