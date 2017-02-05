@extends('main')

@section('content')
<div class="container">
    <div class="conrainer-wrapper row">
        <h1>Сообщения о превышение</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Компания</th>
                    <th>Использует</th>
                    <th>Доступно</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Company</td>
                    <td>10.00 TB</td>
                    <td>1.00 TB</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection