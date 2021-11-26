@extends('panel.admin.layouts.app' ,['activePage' => 'indice.report'])
@section('title', 'Relatório')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row" style="padding-top: 15px">
                <div class="col-md-12">@include('panel.admin.includes.alerts')</div>
            </div>
            {!! Form::open(['route'=>'indice.result', 'method' => 'get']) !!}
            <div class="row justify-content-center pt-5">
                <div class="col-sm-3">
                    <div class="form-group">
                        <span class="font-weight-light">Escolha uma data de início</span>
                        <input type="date" class="form-control" name="date_start">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <span class="font-weight-light">Escolha uma data final</span>
                        <input type="date" class="form-control" name="date_end">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <button class="btn btn-default btn-block">Gerar</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection