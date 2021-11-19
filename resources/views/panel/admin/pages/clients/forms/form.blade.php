<div class="row">
    <div class="col-md-5">
        <div class="form-group">
            <label for="">Outorgado</label>
            <input type="text" class="form-control" name="outorgado" value="{{$data->outorgado ??old('outorgado')}}" placeholder="Nome completo">
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="">Data</label>
            <input type="date" class="form-control " name="data" value="{{$data->data ??old('data')}}">
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label for="">Matrícula</label>
            <input type="text" class="form-control" name="matricula" value="{{$data->matricula ??old('matricula')}}">
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label for="">Nº Livro</label>
            <input type="text" class="form-control" name="livro" value="{{$data->livro ??old('livro')}}">
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label for="">FLS</label>
            <input type="text" class="form-control" name="fls" value="{{$data->fls ??old('fls')}}">
        </div>
    </div>
</div>