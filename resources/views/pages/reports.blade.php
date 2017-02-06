@extends('main')

@section('content')
<div class="container">
    <div class="conrainer-wrapper row">
        <h1>Сообщения о превышение</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Компания</th>
                    <th>Использует</th>
                    <th>Доступно</th>
                </tr>
            </thead>
            <tbody>
                @foreach($logs as $log)
                <tr>
                    <td>{{ $log->name }}</td>
                    <td>{{ App\Utils\BytesFormat::mbToBytes($log->total . 'MB') }}</td>
                    <td>{{ App\Utils\BytesFormat::mbToBytes($log->quota . 'MB') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection