@extends('layouts.admin')


@section('content')

    <div class="grid-form1">
        <h3 id="forms-example" class="">Изменение категории</h3>
        <form action="{{ route('category.update', ['category' => $category->id]) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Название</label>
                <input type="text" class="form-control" name="name" value="{{$category}}">
            </div>
            @if($category->img)
                <img src="{{asset($category->img)}}" alt="">
            @endif
            <div class="form-group">
                <label for="exampleInputEmail1">Изображение</label>
                <input type="file" class="form-control" name="image">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Родительская категория</label>
                <select class="form-control" name="parent_id">
                    <option value="0">Нет родителя</option>
                    @foreach($categories as $parentCategory)
                        <option value="{{$parentCategory->id}}" {{$parentCategory->id = $category->id ? :'selected'}}>{{$parentCategory->name}}></option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

@endsection
