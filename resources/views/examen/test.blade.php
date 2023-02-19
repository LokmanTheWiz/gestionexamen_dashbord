@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('title', 'Home')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
@section('right-sidebar')
    <p>hELLO</p>
@endsection
<table class="table table-striped">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>johndoe@example.com</td>
      </tr>
      <tr>
        <td>Jane</td>
        <td>Smith</td>
        <td>janesmith@example.com</td>
      </tr>
      <tr>
        <td>Bob</td>
        <td>Johnson</td>
        <td>bobjohnson@example.com</td>
      </tr>
    </tbody>
  </table>
  
@stop
@section('js')
    <script> console.log('Hi!'); </script>
@stop