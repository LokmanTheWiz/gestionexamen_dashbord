@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="display: flex;justify-content: center;">ajout des étudiant</h1>
@stop


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

        <form action="{{ route('etudiant.store') }}" method="POST">
            @csrf

                <div class="form-group">
                    <label class="form-label">Code Etudiant </label>
                    <input type="text" class="form-control" name="codeetudiant" placeholder="le code de etudiant">
                </div>
                <div class="form-group">
                    <label class="form-label"> Nom </label>
                    <input type="text" class="form-control" name="nom" placeholder=" nom de etudiant">
                </div>
                <div class="form-group">
                    <label class="form-label">Prenom</label>
                    <input type="text" class="form-control" name="prenom" placeholder=" prenom de etudiant">
                </div>
                <div class="form-group">
                    <label class="form-label">class</label>
                    <input  type="text" class="form-control" name="class" placeholder=" class de etudiant">
                </div>
                <div class="form-group">
                    <label class="form-label">local</label>
                    <br>
                    <select   class="form-select" aria-label="Default select example" name="local_id" id=""  >
                        
                        @foreach ($local as $item)
                        <option value="{{$item->id}}">
                            {{$item->libelle}}
                        </option>
                            
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">examen</label>
                    <br>
                    <select class="form-select form-select-lg mb-3" name="examen_id" id=""  >
                        @foreach ($examen as $item)
                        <option value="{{$item->id}}">
                            {{$item->dateexamen}}
                        </option>
                            
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">semestre</label>
                    <br>
                    <select class="form-select form-select-lg mb-3" name="semestre_id" id=""  >
                        @foreach ($semestre as $item)
                        <option value="{{$item->id}}">
                            {{$item->semestre}}
                        </option>
                            
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">model no validé </label>
                    <input type="text" class="form-control" name="module_no_valider" >
                </div>
                <div class="form-group" style="display: flex;justify-content: center;">
                <input type="submit" class="btn btn-primary"  value="envoyer">
                <a href="{{route('etudiant.index')}}" class="btn btn-warning">go back</a>
                </div>
               
                </form>
            </div>
        </div>
    </div>
    
    @stop
    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop
    
    @section('js')
    <script> console.log('Hi!'); </script>
    @stop