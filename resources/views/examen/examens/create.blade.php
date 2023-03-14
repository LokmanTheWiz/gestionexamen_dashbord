@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <h1 style="display: flex;justify-content: center;">ajout des examen</h1>
@stop

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


@livewireStyles


<form action="{{ route('examen.store') }}" method="POST">
    
    @csrf
    
    <div class="mb-3">
        <label class="form-label"> le nom  </label>
        <input type="text" class="form-control" name="libelle" placeholder=" nom de examen">
    </div>
    @livewire('examen') {{--  selection de semestre et des module et des matiere --}}
    <div class="mb-3">
        <label class="form-label"> date de examen </label>
        <input type="date" class="form-control" name="dateexamen" placeholder=" date de examen" min="@php echo date('Y-m-d'); @endphp">
    </div>
    <div class="mb-3">
        <label class="form-label"> temp de examen </label>
        <input type="time" class="form-control" name="tempexamen" placeholder=" date de examen">
    </div>


    <label for="fruits">Selectioner les surveillant:</label>
    <select class="form-control select2" id="surveillants" name="surveillant_id[]" multiple>
        @foreach ($names as $name)
        <option value="{{ $name->prof_name ?? $name->surv_name }}">{{ $name->prof_name ?? $name->surv_name }}</option>
        @endforeach
    </select>
    <label for="fruits">Selectioner les locaus:</label>
    <select class="form-control select2" id="" name="local_id" multiple>
        @foreach ($local as $local)
        <option value="{{$local ->id}}">{{$local->libelle}}</option>
        @endforeach
    </select>
    
    <div id="selected-surv"></div>
    
    <div class="mb-3" style="display: flex;justify-content: center;">
        <input type="submit" class="btn btn-primary"  value="envoyer">
        <a href="{{route('examen.index')}}" class="btn btn-warning">go back</a>
    </div>



</form>




@livewireScripts

@stop   

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
<style>
    #selected-surv {
  margin-top: 10px;
}

#selected-surv div {
  display: inline-block;
  margin-right: 10px;
  padding: 5px;
  background-color: #eee;
  border-radius: 3px;
}

#selected-surv div a {
  color: #999;
  text-decoration: none;
  margin-left: 5px;
}

</style>
    
    
    
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script type="text/javascript">
        $('#surveillants').select2({
            allowClear:true,
        })
</script>
<script>
    $(document).ready(function() {
      // Initialize Select2 plugin
      $('.select2').select2();
    
      // Add event listener for when a new option is selected
      $('#surveillants').on('select2:select', function(e) {
        // Get the selected option value and text
        var value = e.params.data.id;
        var text = e.params.data.text;
    
        // Append the selected option to the list of selected fruits
      });
    
      // Add event listener for when a selected option is removed
      $('#selected-surv').on('click', '.remove', function(e) {
        e.preventDefault();
        var value = $(this).data('value');
        $('#fruits option[value="' + value + '"]').prop('selected', false);
        $(this).parent().remove();
      });
    });
    </script>
@stop