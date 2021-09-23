@extends('layouts/main')

@section('title')
    Редактирование — {{ $site->domain }}
@endsection

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="{{ route('sites.index') }}">Сайты</a></li>
            <li class="breadcrumb-item"><a href="{{ route('sites.show', $site->id) }}">{{ $site->domain }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Редактирование</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-8 mb-4">
            <h1>Редактирование — {{ $site->domain }}</h1>
        </div>
    </div>

    <form action="{{ route('sites.update', $site->id) }}" method="post">
        @csrf
        @method('PUT')
        
        <div class="card">
            <div class="card-header">
                Домен
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input type="text" name="domain" id="domain" class="form-control" value="{{ $site->domain }}">
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Хостинг
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="hosting_host">Cайт</label>
                            <input type="text" name="hosting_host" id="hosting_host" class="form-control" value="{{ $site->hosting_host }}">
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="hosting_login">Логин</label>
                            <input type="text" name="hosting_login" id="hosting_login" class="form-control" value="{{ $site->hosting_login }}">
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="hosting_pass">Пароль</label>
                            <input type="text" name="hosting_pass" id="hosting_pass" class="form-control" value="{{ $site->hosting_pass }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                SSH
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="ssh_host">Cайт</label>
                            <input type="text" name="ssh_host" id="ssh_host" class="form-control" value="{{ $site->ssh_host }}">
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="ssh_login">Логин</label>
                            <input type="text" name="ssh_login" id="ssh_login" class="form-control" value="{{ $site->ssh_login }}">
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="ssh_pass">Пароль</label>
                            <input type="text" name="ssh_pass" id="ssh_pass" class="form-control" value="{{ $site->ssh_pass }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                FTP
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="ftp_host">Cайт</label>
                            <input type="text" name="ftp_host" id="ftp_host" class="form-control" value="{{ $site->ftp_host }}">
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="ftp_login">Логин</label>
                            <input type="text" name="ftp_login" id="ftp_login" class="form-control" value="{{ $site->ftp_login }}">
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="ftp_pass">Пароль</label>
                            <input type="text" name="ftp_pass" id="ftp_pass" class="form-control" value="{{ $site->ftp_pass }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                База данных
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="db_host">Cайт</label>
                            <input type="text" name="db_host" id="db_host" class="form-control" value="{{ $site->db_host }}">
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="db_login">Логин</label>
                            <input type="text" name="db_login" id="db_login" class="form-control" value="{{ $site->db_login }}">
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="db_pass">Пароль</label>
                            <input type="text" name="db_pass" id="db_pass" class="form-control" value="{{ $site->db_pass }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Панель управления сайтом
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="admin_host">Cайт</label>
                            <input type="text" name="admin_host" id="admin_host" class="form-control" value="{{ $site->admin_host }}">
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="admin_login">Логин</label>
                            <input type="text" name="admin_login" id="admin_login" class="form-control" value="{{ $site->admin_login }}">
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="admin_pass">Пароль</label>
                            <input type="text" name="admin_pass" id="admin_pass" class="form-control" value="{{ $site->admin_pass }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Сохранить</button>
            <a href="{{ route('sites.show', $site->id) }}" class="btn btn-secondary">Отменить</a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-remove">Удалить</button>
        </div>
    </form>

    <div class="modal fade" id="modal-remove" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Удаление</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Вы дейтвительно хотите удалить «{{ $site->domain }}»?</p>
                </div>
                <div class="modal-footer justify-content-start">
                    <form action="{{ route('sites.destroy', $site->id) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <input type="hidden" name="id" value="{{ $site->id }}">
                        
                        <button type="submit" class="btn btn-danger">Удалить</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>   

@endsection