@extends('main')

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
                <tr>
                    <td>1</td>
                    <td>Name</td>
                    <td>E-mail</td>
                    <td>Company</td>
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
                <tr>
                    <td>1</td>
                    <td>Name</td>
                    <td>E-mail</td>
                    <td>Company</td>
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
                <tr>
                    <td>1</td>
                    <td>Name</td>
                    <td>E-mail</td>
                    <td>Company</td>
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
                <tr>
                    <td>1</td>
                    <td>Name</td>
                    <td>E-mail</td>
                    <td>Company</td>
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
                <tr>
                    <td>1</td>
                    <td>Name</td>
                    <td>E-mail</td>
                    <td>Company</td>
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