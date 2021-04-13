@extends('layout')
@section('main_content')
    @section('title_name') Список: @endsection
@foreach($lists as $el)<div class="d-flex text-muted pt-3">


            <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                <div class="d-flex justify-content-between">

                    <strong class="text-gray-dark">
                        {{$el->name}}
                    </strong>
                    <link>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">


                        <a href="delete/{{$el->id}}" type="button" class="btn btn-primary btn-sm">Удалить</a>
                    </div>
                </div>

                <span class="d-block">Основное действующее вещество: <b>{{$el->api->name}}</b></span><span class="d-block">Производитель: <b>{{$el->fabric->name}}</b></span>
                <span class="d-block">Сайт производителя: <b><a href=”{{$el->fabric->link}}" >{{$el->fabric->link}}</a></b></span>
                <span class="d-block">Цена: <b>{{$el->price}} грн</b></span>
            </div>
        </div>
@endforeach
@endsection
