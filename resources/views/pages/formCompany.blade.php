@extends('main')

@section('scripts')
<script src="/js/companies.js"></script>
@endsection

@section('content')
<div class="container">
    <div class="conrainer-wrapper row">
        <h1>Редактирование компании</h1>
        <form>
            <div class="form-group">
                <label>Компания</label>
                <input type="text" class="form-control" placeholder="Имя" name="name" value="{{ isset($item->name) ? $item->name : '' }}">
            </div>
            <div class="form-group">
                <label>Квота MB</label>
                <input type="text" class="form-control" placeholder="Квота" name="quota" value="{{ isset($item->quota) ? $item->quota : '' }}">
            </div>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </div>
</div>
@endsection