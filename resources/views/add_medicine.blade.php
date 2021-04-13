@extends('layout')

@section('main_content')
@section('title_name') Добавление: @endsection

<form method="GET" action="/add/medicine">
    @csrf
    <br><input type="text" name="medicine_name" id="api_name" placeholder="Введите название препарата" class="form-control">
    <br><select name="api_id" class="form-select" aria-label="Default select example">
        <option>Выберите действующие вещество</option>
        @foreach($lists as $el) <option value="{{$el->id}}">{{$el->name}}</option> @endforeach
    </select>
    <br><select name="fabric_id" class="form-select" aria-label="Default select example">
        <option>Выберите производителя</option>
        @foreach($lists2 as $el2) <option value="{{$el2->id}}">{{$el2->name}}</option> @endforeach
    </select>

    <br><input type="text" name="medicine_price" id="api_name" placeholder="Введите цену" class="form-control"><div class="d-grid gap-2">
        <br>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $errors)
                        <li>{{$errors}}</li>
                    @endforeach
                </ul>>
            </div>
            @endif
        <button type="submit" class="btn btn-primary" type="button">Добавить</button>

    </div>
</form>
@section('main_link') <a href="/" type="button" class="btn btn-outline-primary">Список</a> @endsection
@endsection
