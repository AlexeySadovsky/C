@extends('layouts.admin')

@section('content')

    <div class="grid_3 grid_5">
        <h3 class="head-top">Countries</h3>
        <div class="but_list">
            <div class="col-md-12 page_1">
                <p>Add modifier classes to change the appearance of a badge.</p>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Название страны</th>
                        <th> Cокращенное название</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($countries as $country)
                        <tr>
                            <td>{{$country->id}}--{{$country->name}}--{{$country->abbr}}</td>
                            <td>
                                <a href="{{route('admin.edit_country', ['id' => $country->id ]) }}" class="btn btn-lg btn-info">Редактировать</a>
                                <form method="POST" action="{{route('admin.delete_country', ['id' => $country->id ]) }}">
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
