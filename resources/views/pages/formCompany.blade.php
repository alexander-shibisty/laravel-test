@extends('main')

@section('content')
<div class="container">
    <div class="conrainer-wrapper row">
        <h1>Редактирование компании</h1>
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Компания</label>
                <input type="text" class="form-control" placeholder="Имя" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Квота</label>
                <input type="text" class="form-control" placeholder="Квота" name="quota">
            </div>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </div>
</div>
@endsection