@extends('panel.admin.layouts.app' ,['activePage' => 'client.index'])
@section('title', 'Pesquisar')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row" style="padding-top: 15px">
                <div class="col-md-12">@include('panel.admin.includes.alerts')</div>
            </div>

            <div class="row" style="margin-bottom: 15px;">
                <div class="col-md-5">
                    <form action="{{ route('client.pesquisar') }}" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Pesquisar" name="value">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-info btn-default">Pesquisar</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header border-0">
                            {{-- <h3 class="card-title">Clientes</h3> --}}
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Outorgado</th>
                                        <th>Data</th>
                                        <th>Nº Livro</th>
                                        <th>FLS</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($clients as $item)
                                    <tr>
                                        <td>{{$item->outorgado}}</td>
                                        <td>{{date('d/m/Y', strtotime($item->data))}}</td>
                                        <td>{{$item->livro}}</td>
                                        <td>{{$item->fls}}</td>
                                        <td>
                                            <a href="{{ route('client.edit', ['id'=>$item->id]) }}" title="Editar"><i
                                                    class="fa fa-edit"></i></a>
                                            <a href="{{ route('client.delete', ['id'=>$item->id]) }}" title="Deletar" style="color: red"><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Nenhum registro encontrado.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-12">
                                    {{$clients->links()}}
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
@endsection