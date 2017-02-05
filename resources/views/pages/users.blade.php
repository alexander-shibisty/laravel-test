@extends('main')

@section('scripts')
<script src="/js/companies.js"></script>
@endsection

@section('content')
<div class="container">
    <div class="conrainer-wrapper row">
        <h1>Пользователи</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Имя</th>
                    <th>E-mail</th>
                    <th>Компания</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->company }}</td>
                    <td>
                        <a href="/users/{{ $item->id }}">
                            <button type="button" class="btn btn-info" data-id="">
                                Редактировать
                            </button>
                        </a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger" data-id="">
                            Удалить
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/users/add">
            <button type="button" class="btn btn-success">Добавить</button>
        </a>
    </div>
</div>
@endsection