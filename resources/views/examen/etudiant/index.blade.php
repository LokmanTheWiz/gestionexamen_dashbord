@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="display: flex;justify-content: center;">Liste des étudiant</h1>
@stop

@section('content')

{{-- @foreach ($etudiant as $etudiant)
<div class="form-group">
                
  <select class="form-select" aria-label="Sélectionner une option">
      @foreach ($etudiant->semestre as $semestre)
      <option value="{{$semestre->id}}">{{$semestre->semestre}} </option>
      @endforeach
    </select>
  </div>
@endforeach --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
{{-- 
<select class="form-select" aria-label="Default select example" name="semestre_id" id="select_semestre" type="select">
  <option value="                            ">
  @foreach($semestre as $semester)
  <option value="{{$semester->id}}" name="semestres">
  {{$semester->semestre}}
  </option> 
  @endforeach
</select> --}}



<form action="{{ route('etudiant.index') }}" method="GET">
  <select name="semestre_id">
      <option value="">All Semestres</option>
      @foreach ($semestres as $semestre)
          <option value="{{ $semestre->id }}" {{ request()->get('semestre_id') == $semestre->id ? 'selected' : '' }}>
              {{ $semestre->semestre }}
          </option>
      @endforeach
  </select>
  <button type="submit">Filter</button>
</form>







<div class="container mt-5">
  <form action="" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" class="form-control">
    <button class="btn btn-info" class="form-controle">upload</button>
  </form>
</div>
<div style="display:flex; justify-content: flex-end">
  <a href="">
    <button class="btn btn-primary">pdf</button>
  </a>
  <a href="">
    <button class="btn btn-success">excel</button>
  </a>
</div>
<br>


<div class="pull-right" style="display:flex; justify-content: flex-end">
  <a href="{{route('etudiant.create')}}" class="btn btn-light " style="list-style:none"><i class="fas fa-plus"></i>  </a>
</div>

<table class="table table-striped" id="Content">

    <thead>
      <tr>
        <th>Code étudiant</th>
        <th>Nom et prénom</th>
        <th>Fillière</th>
        <th>local</th>
        <th> le nom examen</th>
        <th>semestre</th>
        <th>module no validé</th>
        <th>action </th>

      </tr>
    </thead>
    <tbody>
      @foreach ($etudiant as $etudiant)
      <tr>
        <td>{{$etudiant ->codeetudiant}} </td>
        <td>{{$etudiant ->nom.' '.$etudiant->prenom}}</td>
        <td>{{$etudiant ->class}}</td>
        <td>{{$etudiant ->local->libelle}}</td>
        <td>{{$etudiant ->examen->libelle}}</td>
        <td>{{$etudiant ->semestre->semestre}}</td>
        <td>{{$etudiant ->module_no_valider}}</td>
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

  <script type="">
    $('#select_semestre').on('change',function () 
    {
      $value = $(this).val();
      $.ajax({
        type:'get' , 
        url : '{{URL::to('select')}}',
        data : {'value':$value},
        success:function(data)
        {
          console.log(data);
          $('#Content').html(data);
        }
      });
    })
  </script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
