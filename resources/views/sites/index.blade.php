@extends('layouts/main')

@section('title')
    Сайты
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

    @if (count($sites))
        <div class="card">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th style="width: 80%">Домен</th>
                        <th>Дата&nbsp;создания</th>
                        <th>Дата&nbsp;изменения</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($sites as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>
                                <a href="{{ route('sites.show', $item->id) }}">{{ $item->domain }}</a>                                
                            </td>
                            <td><span class="badge badge-secondary">{{ $item->created_at->format('d.m.Y H:i') }}</span></td>
                            <td><span class="badge badge-secondary">{{ $item->updated_at->format('d.m.Y H:i')  }}</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="card-footer">
                {{ $sites->links() }}
            </div>
        </div>
    @endif
@endsection