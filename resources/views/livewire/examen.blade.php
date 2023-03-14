<div>
    <div class="form-group">
        <label for="semestre" >{{ __('Semestre') }}</label>
            <select wire:model="selectedSemestre" class="form-control" name="semestre_id">
                <option value="" selected>Selectionner le semestre</option>
                @foreach ($semestre as $item)
                <option value="{{$item->id}}">
                    {{$item->semestre}}
                </option>
                @endforeach
            </select>
    </div>

    @if (!is_null($selectedSemestre))
        <div class="form-group">
            <label for="module">{{ __('Module') }}</label>
                <select wire:model="selectedModule" class="form-control" name="module_id">
                    <option value="" selected>Selectioner le module</option>
                    @foreach ($module as $item)
                    <option value="{{$item->id}}">
                        {{$item->nom}}
                    </option>
                    @endforeach
                </select>
        </div>
    @endif

    @if (!is_null($selectedModule))
        <div class="form-group">
            <label for="matiere">{{ __('Matiere') }}</label>
                <select wire:model="selectedMatiere" class="form-control" name="matiere_id">
                    <option value="" selected>Selestioner la matiere</option>
                    @foreach ($matiere as $item)
                    <option value="{{$item->id}}">
                        {{$item->nom}}
                    </option>
                    @endforeach
                </select>
        </div>
    @endif
</div>
