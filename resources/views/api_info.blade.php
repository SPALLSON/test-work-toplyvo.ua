@extends('layout')

@section('main_content')


@section('title_name') API: @endsection



 <div class="d-flex text-muted pt-3">


    <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">

            <strong class="text-gray-dark">
                Список препаратов:
            </strong>
            <link>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">

            </div>
        </div>
        <span class="d-block">API URL: <a href="api/medicine/list" >/api/medicine/list</a></span>
        <span class="d-block">Метод запроса: <b>GET</b></span>
        <span class="d-block">Метод запроса: <b>GET</b></span>
        <span class="d-block"> <b>JSON(ответ сервера):</b>
            <code>Запрос /api/medicine/list/4</code><br><code>[
            {
            "id": 4,
            "name": "Импаза",
            "price": 350,
            "api_id": 12,
            "fabric_id": 5
            }
            ]
        </code><br>
        <b>Код ответа HTTP: 200</b></span>
    </div>

     <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
         <div class="d-flex justify-content-between">

             <strong class="text-gray-dark">
                 Информация о препарате по ID:
             </strong>
             <link>
             <div class="d-grid gap-2 d-md-flex justify-content-md-end">

             </div>
         </div>
         <span class="d-block">API URL: <a href="api/medicine/list/{id}" >/api/medicine/list/{id}</a></span>
         <span class="d-block">Метод запроса: <b>GET</b></span>
         <span class="d-block"><b>JSON(ответ сервера):</b>
   <code>Запрос /api/medicine/list/4</code><br>
   <code>[
   {
   "id": 4,
   "name": "Импаза",
   "price": 350,
   "api_id": 12,
   "fabric_id": 5
   }
   ]</code>
   <br><b>Код ответа HTTP: 200</b></span>

     </div>

     <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
         <div class="d-flex justify-content-between">

             <strong class="text-gray-dark">
                 Удаление препарата по ID:
             </strong>
             <link>
             <div class="d-grid gap-2 d-md-flex justify-content-md-end">

             </div>
         </div>
         <span class="d-block">API URL: <a href="api/medicine/list/delete/{id}" >/api/medicine/list/delete/{id}</a></span>
         <span class="d-block">Метод запроса: <b>DELETE</b></span>
         <span class="d-block"><b>JSON(ответ сервера):</b>
   <code>Запрос /api/medicine/list/4</code>
   <br><b>Код ответа HTTP: 204</b></b></span>

     </div>

</div>

<mark>
    <br>id - уникальный идентификатор препарата
    <br>name - название препарата
    <br>price - цена препарата
    <br>api_id - уникальный идентификатор действующего вещества
    <br>fabric_id уникальный идентификатор производителя</p></mark>

Код:
200 - GET: "ПОЛУЧИТЬ". Запрошенный ресурс был найден и передан в теле ответа.<br>
204 - "Нет содержимого". Нет содержимого для ответа на запрос, но заголовки ответа, которые могут быть полезны, присылаются. Клиент может использовать их для обновления кешированных заголовков полученных ранее для этого ресурса.


@section('main_link') <a href="/" type="button" class="btn btn-outline-primary">Список</a> @endsection
@endsection
