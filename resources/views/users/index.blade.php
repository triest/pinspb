@extends('layouts.products', ['title' => "Продукты"])


@section('content')
    <div class="card-body" id="productslist">


        <br>
        <table>
            <thead>

            </thead>
            <tbody>
            @foreach($users as $user)

            @endforeach
            </tbody>
        </table>
    </div>
    <br>


@endsection