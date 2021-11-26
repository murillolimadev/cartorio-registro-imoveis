@extends('panel.admin.layouts.app' ,['activePage' => 'indice.create'])
@section('title', 'Endice')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row" style="padding-top: 15px">
                <div class="col-md-12">@include('panel.admin.includes.alerts')</div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-body">
                            {!! Form::open(['route'=>['indice.update', 'id'=>$data]]) !!}
                            @include('panel.admin.pages.indice.forms.form')
                            <button type="submit" class="btn btn-block btn-default">Editar</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection