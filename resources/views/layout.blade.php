<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Offcanvas navbar template · Bootstrap v5.0</title>


    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Упрощенный каталогизатор</a>
        <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="offcanvas"
                aria-label="Toggle navigation">

        </button>


    </div>
</nav>


<div class="nav-scroller bg-body shadow-sm">

</div>

<main class="container">


    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <br>
        <br><h6 class="border-bottom pb-2 mb-0">@yield('title_name')</h6>


        @yield('main_content')


        <small class="d-block text-end mt-3">

            <a href="/api_info" type="button" class="btn btn-outline-primary">API</a>@yield('main_link')
            <h5>Добавить в каталог:</h5>
            <a href="/add_api" type="button"
               class="btn btn-outline-primary">
                Действующее вещество</a>

            <a href="/add_fabric" type="button"
               class="btn btn-outline-primary">
                Производителя</a>

            <a href="/add_medicine" type="button"
               class="btn btn-outline-primary">
                Лекарственное средство</a>
        </small>
    </div>
</main>


</body>
</html>
