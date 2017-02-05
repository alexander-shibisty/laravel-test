@extends('main')

@section('content')
<div class="container">
    <div class="conrainer-wrapper row">
        <h1>Список компаний</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Компания</th>
                    <th>Доступно</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Company</td>
                    <td>10.00 TB</td>
                    <td>
                        <button type="button" class="btn btn-info" data-id="">
                            Редактировать
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger" data-id="">
                            Удалить
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="button" class="btn btn-success">Добавить</button>
    </div>
</div>
@endsection