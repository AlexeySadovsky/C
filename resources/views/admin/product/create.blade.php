@extends('layouts.admin')


@section('content')
    <div class="grid-form1">
        <h3 id="forms-example" class="">Добавление продукта</h3>
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="exampleInputEmail1">Название продукта</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Описание продукта</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Цена</label>
                <input type="number" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Изображение</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Категория</label>
                <select name="category_id"  class="form-control">
                    <option value="0"> Без категории</option>
                    @foreach($categories as $category)

                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

@endsection
