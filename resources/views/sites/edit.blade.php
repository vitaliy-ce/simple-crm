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
            <p>Изменено {{ $site->updated_at->format('d.m.Y H:i') }}</p>
        </div>
    </div>

    <form action="{{ route('sites.update', $site->id) }}" method="post">
        @csrf
        @method('PUT')
        
        <div class="card">
            <div class="card-header card-header--with-btn">
                Домен
                <a target="_blank" href="https://{{ $site->domain }}" class="btn btn-secondary"><i data-feather="external-link"></i></a>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="domain" id="domain" class="form-control" value="{{ $site->domain }}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary copy-js" type="button" data-input="#domain"><i data-feather="copy"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header card-header--with-btn">
                Хостинг
                <a target="_blank" href="{{ $site->hosting_host }}" class="btn btn-secondary"><i data-feather="external-link"></i></a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="hosting_host">Cайт</label>
                            <div class="input-group">
                                <input type="text" name="hosting_host" id="hosting_host" class="form-control" value="{{ $site->hosting_host }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary copy-js" type="button" data-input="#hosting_host"><i data-feather="copy"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="hosting_login">Логин</label>
                            <div class="input-group">
                                <input type="text" name="hosting_login" id="hosting_login" class="form-control" value="{{ $site->hosting_login }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary copy-js" type="button" data-input="#hosting_login"><i data-feather="copy"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="hosting_pass">Пароль</label>
                            <div class="input-group">
                                <input type="text" name="hosting_pass" id="hosting_pass" class="form-control" value="{{ $site->hosting_pass }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary copy-js" type="button" data-input="#hosting_pass"><i data-feather="copy"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header card-header--with-btn">
                SSH
                <div>                    
                    <a target="_blank" href="{{ $site->hosting_host }}" class="btn btn-secondary copy-js @if (!$site->getSshStr()) disabled @endif" data-text="{{ $site->getSshStr() }}">SSH</a>
                    <a target="_blank" href="{{ $site->hosting_host }}" class="btn btn-secondary copy-js @if (!$site->getSftpStr()) disabled @endif" data-text="{{ $site->getSftpStr() }}">SFTP</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="ssh_host">Cайт</label>
                            <div class="input-group">
                                <input type="text" name="ssh_host" id="ssh_host" class="form-control" value="{{ $site->ssh_host }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary copy-js" type="button" data-input="#ssh_host"><i data-feather="copy"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="ssh_login">Логин</label>
                            <div class="input-group">
                                <input type="text" name="ssh_login" id="ssh_login" class="form-control" value="{{ $site->ssh_login }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary copy-js" type="button" data-input="#ssh_login"><i data-feather="copy"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="ssh_pass">Пароль</label>
                            <div class="input-group">
                                <input type="text" name="ssh_pass" id="ssh_pass" class="form-control" value="{{ $site->ssh_pass }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary copy-js" type="button" data-input="#ssh_pass"><i data-feather="copy"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header card-header--with-btn">
                FTP
                <a target="_blank" href="{{ $site->hosting_host }}" class="btn btn-secondary copy-js @if (!$site->getFtpStr()) disabled @endif" data-text="{{ $site->getFtpStr() }}">FTP</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="ftp_host">Cайт</label>
                            <div class="input-group">
                                <input type="text" name="ftp_host" id="ftp_host" class="form-control" value="{{ $site->ftp_host }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary copy-js" type="button" data-input="#ftp_host"><i data-feather="copy"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="ftp_login">Логин</label>
                            <div class="input-group">
                                <input type="text" name="ftp_login" id="ftp_login" class="form-control" value="{{ $site->ftp_login }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary copy-js" type="button" data-input="#ftp_login"><i data-feather="copy"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="ftp_pass">Пароль</label>
                            <div class="input-group">
                                <input type="text" name="ftp_pass" id="ftp_pass" class="form-control" value="{{ $site->ftp_pass }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary copy-js" type="button" data-input="#ftp_pass"><i data-feather="copy"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header card-header--with-btn">
                База данных
                <a target="_blank" href="{{ $site->db_host }}" class="btn btn-secondary"><i data-feather="external-link"></i></a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="db_host">Cайт</label>
                            <div class="input-group">
                                <input type="text" name="db_host" id="db_host" class="form-control" value="{{ $site->db_host }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary copy-js" type="button" data-input="#db_host"><i data-feather="copy"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="db_login">Логин</label>
                            <div class="input-group">
                                <input type="text" name="db_login" id="db_login" class="form-control" value="{{ $site->db_login }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary copy-js" type="button" data-input="#db_login"><i data-feather="copy"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="db_pass">Пароль</label>
                            <div class="input-group">
                                <input type="text" name="db_pass" id="db_pass" class="form-control" value="{{ $site->db_pass }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary copy-js" type="button" data-input="#db_pass"><i data-feather="copy"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header card-header--with-btn">
                Панель управления сайтом
                <a target="_blank" href="{{ $site->admin_host }}" class="btn btn-secondary"><i data-feather="external-link"></i></a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="admin_host">Cайт</label>
                            <div class="input-group">
                                <input type="text" name="admin_host" id="admin_host" class="form-control" value="{{ $site->admin_host }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary copy-js" type="button" data-input="#admin_host"><i data-feather="copy"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="admin_login">Логин</label>
                            <div class="input-group">
                                <input type="text" name="admin_login" id="admin_login" class="form-control" value="{{ $site->admin_login }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary copy-js" type="button" data-input="#admin_login"><i data-feather="copy"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="admin_pass">Пароль</label>
                            <div class="input-group">
                                <input type="text" name="admin_pass" id="admin_pass" class="form-control" value="{{ $site->admin_pass }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary copy-js" type="button" data-input="#admin_pass"><i data-feather="copy"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                Дополнительная информация
            </div>
            <div class="card-body">
                <div class="form-group">
                    <textarea name="extra_info" id="extra_info" rows="5" class="form-control">{{ $site->extra_info }}</textarea>
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