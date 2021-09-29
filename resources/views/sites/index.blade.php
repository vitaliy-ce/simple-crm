@extends('layouts/main')

@section('title')
    Сайты
@endsection

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page">Сайты</li>
        </ol>
    </nav>
@endsection

@section('styles')
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    
    <script type="text/javascript">
        $(function () {          
            var table = $('.sites-datatable').DataTable({
                processing: true,
                serverSide: true,
                language: {
                    "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/ru.json"
                },
                ajax: "{{ route('sites.datatables_data') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'domain', name: 'domain'},
                    {data: 'created_f', name: 'created_at'},
                    {data: 'updated_f', name: 'updated_at'}
                ]
            });
        });
    </script>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-8 mb-4">
            <h1 class="mb-0">Сайты</h1>
        </div>

        <div class="col-lg-4 text-left text-lg-right mb-4">
            <a href="{{ route('sites.create') }}" class="btn btn-primary">Добавить</a>
        </div>
    </div>

    <div class="card">
        <table class="table sites-datatable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th style="width: 70%">Домен</th>
                    <th>Дата&nbsp;создания</th>
                    <th>Дата&nbsp;изменения</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection