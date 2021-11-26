<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }
        .table{
            width: 100%;
        }
        .table tr th{
            background-color: #EEE;
        }
        .table tr td{
            text-align: center;
            font-size: 11px;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header border-0">
                    <span>Período de: <strong>{{date('d/m/Y', strtotime($date_start))}}</strong> à
                        <strong>{{date('d/m/Y', strtotime($date_end))}}</strong></span> <br>
                    <span class="card-title">Total: {{count($data)}}</span>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Outorgado</th>
                                <th>Data</th>
                                <th>Matrícula</th>
                                <th>Nº Livro</th>
                                <th>FLS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->outorgado}}</td>
                                <td>{{date('d/m/Y', strtotime($item->data))}}</td>
                                <td>{{$item->matricula}}</td>
                                <td>{{$item->livro}}</td>
                                <td>{{$item->fls}}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">Nenhum registro encontrado.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</body>

</html>