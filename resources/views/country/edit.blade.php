@extends('layouts.admin')


@section('content')
    <div class="grid-form1">
        <h3 id="forms-example" class="">Добавление cтраны</h3>
        <form action="{{ route('admin.update_country', ['id' => $country->id]) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Название страны</label>
                <input type="text" class="form-control" name="name" value="{{$country->name}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Международный код</label>
                <input type="text" class="form-control" name="abbr" value="{{$country->abbr}}">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

@endsection
