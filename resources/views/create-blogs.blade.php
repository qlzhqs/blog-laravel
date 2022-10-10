
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


</head>
<body>
<div class="container">
    <form action="{{route('store')}}" method="post" enctype="multipart/form-data" style="display: flex; flex-direction: column">
       @csrf
        <input type="text" placeholder="Введите название блога" name="title">
        <textarea placeholder="Введите название блога" name="description"></textarea>
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
        </select>
        <input type="file" placeholder="Выберите картинку" name="image">
        <input type="submit" placeholder="Отправить">
    </form>
    </div>

    </body>
    </html>
