
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="display: flex;justify-content: center;">Liste des professeures</h1>
@stop

@section('head')
@stop
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<div class="input-group">
  <div class="form-outline">
          <input type="search" id="search" name="search" class="form-control"  />
        </div>
        <div>
        <button type="submit" class="btn btn-primary">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>

      <form action="{{route('professeur.import')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="file" name="file" class="form-control">
          <button class="btn btn-info" class="form-control"> Upload</button>
      </form>
      {{-- <a href="{{route('professeur.pdf')}}">
          <button class='btn btn-primary'>Generate PDF</button>
      </a> --}}
      &nbsp;
      <a href="{{route('professeur.export')}}">
          <button class='btn btn-success'>Excel</button>
      </a>

<div class="pull-right" style="display:flex; justify-content: flex-end">
  <a href="{{route('professeur.create')}}" class="btn btn-light " style="list-style:none"><i class="fas fa-plus"></i> Ajouté un nouveau  </a>
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
    <tbody id="Content">
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


        {{-- <form action="{{url('/professeur/'.$professeur->professeur)}}"method="POST">
          {{ csrf_field() }}
          {{method_field('DELETE')}}
          <a href="{{ url('professeur/'.$professeur->professeur.'/edite') }}" class="btn btn-warning "><i class="fas fa-edit"></i></a>
          <button type="submit" class="btn btn-danger" style="color:black;"><i class="fas fa-trash"></i></button>
      </form>
        </td> --}}
      </tr>
          
      @endforeach
    </tbody>
  </table>

  <script type="">
    $('#search').on('keyup',function () 
    {
      $value = $(this).val();
      $.ajax({
        type:'get' , 
        url : '{{URL::to('search')}}',
        data : {'search':$value},
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

