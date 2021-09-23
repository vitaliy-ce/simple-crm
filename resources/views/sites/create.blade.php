@extends('layouts/main')

@section('title')
    Добавление сайта
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-8 mb-4">
            <h1 class="mb-0">Добавление сайта</h1>
        </div>
    </div>

    <form action="{{ route('sites.store') }}" method="post">
        @csrf

        <div class="my-3 p-3 bg-white rounded-lg shadow-sm">
            <div class="form-group">
                <label for="domain">Домен</label>
                <input type="text" name="domain" id="domain" class="form-control" value="">
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Сохранить</button>
            <a href="{{ route('sites.index',) }}" class="btn btn-secondary">Отменить</a>
        </div>
    </form>

@endsection