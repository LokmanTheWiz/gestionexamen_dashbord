@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="display: flex;justify-content: center;">Liste des examens</h1>
@stop

@section('content')
<style>
  table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    text-align: center;
    border: 1px solid black;
    padding: 8px;
  }

  th {
    background-color: #ffffff;
    color: rgb(0, 0, 0);
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
</style>
</head>
<body>

<main>
  <table>
    <thead>
      <tr>
        <th>Heures</th>
        <th>Lundi</th>
        <th>Mardi</th>
        <th>Mercredi</th>
        <th>Jeudi</th>
        <th>Vendredi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>8h00 - 9h00</td>
        <td>Mathématiques</td>
        <td>Histoire</td>
        <td>Anglais</td>
        <td>Physique</td>
        <td>Chimie</td>
      </tr>
      <tr>
        <td>9h00 - 10h00</td>
        <td>Français</td>
        <td>Anglais</td>
        <td>Mathématiques</td>
        <td>Histoire</td>
        <td>Physique</td>
      </tr>
      <tr>
        <td>10h00 - 11h00</td>
        <td>Physique</td>
        <td>Chimie</td>
        <td>Histoire</td>
        <td>Anglais</td>
        <td>Français</td>
      </tr>
      <tr>
        <td>11h00 - 12h00</td>
        <td>Chimie</td>
        <td>Mathématiques</td>
        <td>Français</td>
        <td>Physique</td>
        <td>Histoire</td>
      </tr>
      <tr>
        <td>14h00 - 15h00</td>
        <td>EPS</td>
        <td>Arts Plastiques</td>
        <td>SVT</td>
        <td>Anglais</td>
        <td>Physique</td>
      </tr>
      <tr>
        <td>15h00 - 16h00</td>
        <td>Anglais</td>
        <td>Français</td>
        <td>Mathématiques</td>
        <td>EPS</td>
        <td>Chimie</td>
      </tr>
      <tr>
        <td>16h00 - 17h00</td>
        <td>Mathématiques</td>
        <td>EPS</td>
        <td>SVT</td>
        <td>Chimie</td>
        <td>Français</td>
      </tr>
      <tr>
        <td>17h00 - 18h00</td>
                  <td>Mathématiques</td>
        <td>EPS</td>
        <td>SVT</td>
        <td>Chimie</td>
        <td>Français</td>
      </tr>

    </tbody>
  </table>
</main>
</body>





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
        <td>{{$examen ->matiere->nom}}</td>
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
