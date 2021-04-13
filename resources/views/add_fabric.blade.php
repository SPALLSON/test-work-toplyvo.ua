@extends('layout')

@section('main_content')
@section('title_name') Добавление: @endsection

@foreach($lists as $el)
    <div class="d-flex text-muted pt-3">


        <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
            <div class="d-flex justify-content-between">

                <strong class="text-gray-dark">
                    {{$el->name}}
                </strong>
                <link>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">


                    <a href="delete/fabric/{{$el->id}}" type="button" class="btn btn-primary btn-sm">Удалить</a>
                </div>
            </div>


            <span class="d-block">Сайт производителя: <b><a href=”{{$el->link}}">{{$el->link}}</a></b></span>

        </div>
    </div>
@endforeach
<form method="GET" action="/add/fabric">
    @csrf
    <br><input type="text" name="fabric_name" id="fabric_name" placeholder="Введите название фабрики"
               class="form-control">
    <br><input type="text" name="fabric_link" id="fabric_link" placeholder="Введите ссылку" class="form-control">
    <br>
    <div class="d-grid gap-2">

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $errors)
                        <li>{{$errors}}</li>
                    @endforeach
                </ul>
                >
            </div>
        @endif
        <button type="submit" class="btn btn-primary" type="button">Добавить</button>

    </div>
</form>
@section('main_link') <a href="/" type="button" class="btn btn-outline-primary">Список</a> @endsection
@endsection
