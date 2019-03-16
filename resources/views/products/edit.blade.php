@extends('layouts.products', ['title' => "Создать продукт"])


@section('content')
    <form action="{{route('storeProduct')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id" id="id" value="{{$product->id}}">

        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" class="form-control" id="name" value="{{$product->name}}" name="name"
                   placeholder="Название продукта" required>
        </div>
        <div class="form-group">
            <label for="art">Имя:</label>
            <input type="text" class="form-control" id="art" name="art" placeholder="Артикул продукта" min="10"
                   required>
        </div>

        <button type="submit" class="btn btn-primary">Создать продукт</button>
        <a href="{{route('products')}}" class="btn btn-secondary">Назад</a>
    </form>
@endsection