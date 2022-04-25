@extends('layouts.admin')


@section('content')

    <div class="grid-form1">
        <h3 id="forms-example" class="">Добавление страны</h3>
        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Название</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Изображение</label>
                <input type="file" class="form-control" name="image">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Родительская категория</label>
                <select class="form-control" name="parent_id">
                    <option value="0">Нет родителя</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

@endsection
