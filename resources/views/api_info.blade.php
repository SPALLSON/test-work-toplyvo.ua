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


     </div>
</div>

@section('main_link') <a href="/" type="button" class="btn btn-outline-primary">Список</a> @endsection
@endsection
