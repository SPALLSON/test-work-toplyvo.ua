@extends('layout')

@section('main_content')
@section('title_name') Добавление: @endsection

<form method="GET" action="/add/api">
    @csrf
    <br><input type="text" name="api_name" id="api_name" placeholder="Введите действующее вещество" class="form-control">
    <br><div class="d-grid gap-2">

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
