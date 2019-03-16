@extends('layouts.products', ['title' => "Продукты"])


@section('content')
    <div class="card-body" id="productslist">

        <a class="btn btn-primary" href="{{route('create')}}" role="link">Создать продукт</a>
        <br>
        <table class="table">

            @foreach($products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->art}}</td>
                    <td><a class="btn-primary" href="{{route("edit",['id'=>$product->id])}}">Редактировать</a></td>
                </tr>
            @endforeach
        </table>

    </div>
    <br>
    <?php echo $products->render(); ?>

@endsection