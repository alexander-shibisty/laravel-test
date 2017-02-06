@extends('main')

@section('styles')
<link href="/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
@endsection

@section('scripts')
<script src="/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="/js/users.js"></script>
@endsection

@section('content')
<div class="container">
    <div class="conrainer-wrapper row">
        <h1>Редактирование пользователя</h1>
        <form>
            <div class="form-group">
                <label>Имя</label>
                <input type="text" class="form-control" name="name" placeholder="Имя" value="{{ isset($item->name) ? $item->name : '' }}">
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="E-mail" value="{{ isset($item->email) ? $item->email : '' }}">
            </div>
            <div class="form-group">
                <label>Компания</label>
                <select name="user_id" class="form-control">
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}" {{ isset($item) && $item->company_id === $company->id ? 'selected' : '' }}>
                            {{ $company->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </div>
</div>
@endsection