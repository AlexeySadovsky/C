@extends('layouts.admin')

@section('content')

    <div class="grid_3 grid_5">
        <h3 class="head-top">Категории товаров</h3>
        <div class="but_list">
            <div class="col-md-12 page_1">
                <p><a href="{{route('category.create')}}" class="btn btn-info">Cоздать</a></p>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Название категории</th>
                        <th> Действие </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}--{{$category->name}}--{{$category->parent_id}}</td>
                            <td>
                                <a href="{{route('category.edit', ['category' => $category->id ]) }}" class="btn btn-lg btn-info">Редактировать</a>
                                <form method="POST" action="{{route('category.destroy', ['category' => $category->id ]) }}">
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
