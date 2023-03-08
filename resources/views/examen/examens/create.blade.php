@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="display: flex;justify-content: center;">ajout des examen</h1>
@stop

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<form action="{{ route('examen.store') }}" method="POST">
    
    @csrf

    <div class="mb-3">
        <label class="form-label"> le nom  </label>
        <input type="text" class="form-control" name="libelle" placeholder=" nom de examen">
    </div>


{{-- ---------------------------Semester selection----------------------------- --}}
<div class="mb-3">
    <label class="form-label">Selectionner le semestre</label>
    <br>
    <select class="form-control" name="semestre_id" id="semestre"  >
        @foreach ($semestre as $item)
        <option value="{{$item->id}}">
            {{$item->semestre}}
        </option>
            
        @endforeach
    </select>
</div>
{{-- ---------------------------module selection----------------------------- --}}

<div class="mb-3 d-none">
    <label class="form-label">module</label>
    <br>
    <select class="form-control" name="module_id" id="module"  >
        <option value="" selected>Choose Module</option>
    </select>
</div>
{{-- ---------------------------matiere selection----------------------------- --}}

<div class="mb-3 d-none">
    <label class="form-label">matiere</label>
    <br>
    <select class="form-control" name="matiere_id" id="matiere"  >
        <option value="" selected>Choose matiere</option>

    </select>
</div>

{{-- ---------------------------end selection----------------------------- --}}

<div class="mb-3">
    <label class="form-label"> date de examen </label>
    <input type="date" class="form-control" name="dateexamen" placeholder=" date de examen">
</div>
<div class="mb-3" style="display: flex;justify-content: center;">
<input type="submit" class="btn btn-primary"  value="envoyer">
<a href="{{route('examen.index')}}" class="btn btn-warning">go back</a>
</div>

</form>


<script type="">
        $(document).ready(function () {
            $('#semestre').change(function () {
                var $module = $('#module');
                $.ajax({
                    url: "{{ route('module.index') }}",
                    data: {
                        semestre: $(this).val()
                    },
                    success: function (data) {
                        $module.html('<option value="" selected>Choose Module</option>');
                        $.each(data, function (id, value) {
                            $module.append('<option value="' + id + '">' + value + '</option>');
                        });
                    }
                });
                // $('#module, #matiere').val("");
                $('#module').removeClass('d-none');
            });
            // $('#module').change(function () {
            //     var $matiere = $('#matiere');
            //     $.ajax({
            //         url: "{{ route('matiere.index') }}",
            //         data: {
            //             module: $(this).val()
            //         },
            //         success: function (data) {
            //             $matiere.html('<option value="" selected>Choose matiere</option>');
            //             $.each(data, function (id, value) {
            //                 $matiere.append('<option value="' + id + '">' + value + '</option>');
            //             });
            //         }
            //     });
            //     $('#matiere').removeClass('d-none');
            // });
        });
  </script>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop