@extends('main')

@section('content')
<div class="container">
    <div class="conrainer-wrapper row">
        <h1>Логи</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Пользователь</th>
                    <th>Время</th>
                    <th>Ресурс</th>
                    <th>Передал</th>
                </tr>
            </thead>
            <tbody>
                @foreach($logs as $log)
                <tr>
                    <td>{{ $log->id }}</td>
                    <td>{{ $log->user }}</td>
                    <td>{{ $log->updated_at }}</td>
                    <td>{{ $log->resource }}</td>
                    <td>{{ $log->transferrend }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection