@extends('layouts.admin')

@section('content')
    <div class="grid_3 grid_5">
        <h3 class="head-top">Продукты</h3>
        <div class="but_list">
            <div class="col-md-12 page_1">
                <p><a href="{{route('product.create')}}" class="btn btn-info">Создать</a></p>
                <p>Add modifier classes to change the appearance of a badge.</p>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Название Продукта</th>
                        <th> Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>
                                <a href="{{route('product.edit', ['product' => $product->id ]) }}" class="btn btn-lg btn-info">Редактировать</a>
                                <form method="POST" action="{{route('product.destroy', ['product' => $product->id ]) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-lg btn-danger">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

@endsection
