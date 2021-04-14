<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Технологический стек

HTML, CSS

PHP 8.0, MySQL 8.0

Laravel 8

GitHub

## Процедура развертывания
Скачайте и установите Composer

1. Откройте проект и в терминале введите "composer install"
2. Создайте базу данных MySql (utf8_general_ci) 
3. Отредактируйте файл .env, заполните поля MySql DB_CONNECTION
4. В терминале введите "php artisan migrate"
5. В терминале введите "php artisan key:generate"
6. В терминале введите "php artisan serve"

## Заполнение каталогизатора
1. Добавьте "Действующие вещество".
2. Добавьте "Производителя"
3. Добавьте "Лекарственное средство"

## API
1. Список препаратов:
   <br><b>API URL:</b> /api/medicine/list
   <br><b>Метод запроса:</b> GET
   <br><b>JSON(ответ сервера):</b><code>[
   {
   "id": 4,
   "name": "Импаза",
   "price": 350,
   "api_id": 12,
   "fabric_id": 5
   }
   ]
   </code><br> 
   <b>Код ответа HTTP: 200</b>


2. Информация о препарате по ID:
<br><b>API URL:</b> /api/medicine/list/{id}
<br><b>Метод запроса:</b> GET
<br><b>JSON(ответ сервера):</b>
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
   <br><b>Код ответа HTTP: 200</b><br>
   
3.Удаление препарата по ID:
   <br><b>API URL:</b> /api/medicine/list/delete/{id}
   <br><b>Метод запроса:</b> DELETE
   <br><b>JSON(ответ сервера):</b>
   <code>Запрос /api/medicine/list/4</code>
   <br><b>Код ответа HTTP: 204</b>

<mark>
<br>id - уникальный идентификатор препарата
<br>name - название препарата
<br>price - цена препарата
<br>api_id - уникальный идентификатор действующего вещества
<br>fabric_id уникальный идентификатор производителя</p></mark>
   
Код:
200 - GET: "ПОЛУЧИТЬ". Запрошенный ресурс был найден и передан в теле ответа.<br>
204 - "Нет содержимого". Нет содержимого для ответа на запрос, но заголовки ответа, которые могут быть полезны, присылаются. Клиент может использовать их для обновления кешированных заголовков полученных ранее для этого ресурса.
