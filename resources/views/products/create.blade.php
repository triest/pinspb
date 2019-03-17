@extends('layouts.products', ['title' => "Создать продукт"])


@section('content')
    <form action="{{route('storeProduct')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Название продукта" required>
        </div>
        @if($errors->has('name'))
            <font color="red"><p>  {{$errors->first('name')}}</p></font>
        @endif

        <div class="form-group">
            <label for="art">Артикул:</label>
            <input type="text" class="form-control" id="art" name="art" value="{{ old('art') }}" placeholder="Артикул продукта" min="10"
                   required>
        </div>
        @if($errors->has('art'))
            <font color="red"><p>  {{$errors->first('art')}}</p></font>
        @endif


        <button type="submit" class="btn btn-primary">Создать продукт</button>
        <a href="{{route('products')}}" class="btn btn-secondary">Назад</a>
    </form>
@endsection