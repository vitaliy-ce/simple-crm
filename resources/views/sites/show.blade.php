@extends('layouts/main')

@section('title')
    {{ $site->domain }}
@endsection

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="{{ route('sites.index') }}">Сайты</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $site->domain }}</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-8 mb-4">
            <h1 class="mb-0">{{ $site->domain }}</h1>
        </div>

        <div class="col-lg-4 text-left text-lg-right mb-4">
            <a href="{{ route('sites.edit', $site->id) }}" class="btn btn-primary">Изменить</a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
           Основная информация
        </div>
        <div class="card-body">
            <p><strong>ID</strong>: {{ $site->id }}</p>
            <p><strong>Домен</strong>: {{ $site->domain }}</p>
            <p><strong>Дата создания</strong>: {{ $site->created_at->format('d.m.Y H:i') }}</p>
            <p><strong>Дата изменения</strong>: {{ $site->updated_at->format('d.m.Y H:i') }}</p>
        </div>
    </div>

@endsection