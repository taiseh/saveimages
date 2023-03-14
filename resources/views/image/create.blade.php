<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>

<body>
    <div class="top">
        <h1>写真追加</h1>
        <div class="list">
            <a href="{{ url('/') }}">
                写真一覧
            </a>
        </div>

    </div>
    <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data" id="upload">
        @csrf
        <input type="file" name="image_path">
        <input type="submit" value="アップロード">
    </form>
</body>

</html>