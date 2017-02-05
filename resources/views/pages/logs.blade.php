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
                <tr>
                    <td>1</td>
                    <td>User</td>
                    <td>01 Nov 2017 08:40</td>
                    <td>google.com</td>
                    <td>1.00 TB</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection