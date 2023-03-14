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
        <h1>一覧画面</h1>
        <div class="list">
            <a href="{{ url('/create') }}">
                写真追加
            </a>
        </div>

    </div>
    <div class="container">
        @foreach ($images as $image)
        <div class="item">
            {{-- <img src="{{ url($image->image_path) }}"> --}}
            <a src="{{Storage::url($image->image_path) }}">
            </a>
        </div>
        @endforeach
    </div>

</body>
<?php
    $jsonAr = json_encode($images);
?>
<script>
    const images = <?php echo $jsonAr; ?>;
    let i = 0;
    //console.log(images[i]);
    const items = document.getElementsByClassName('item');
    // console.log(items);
    console.log("{{asset('/storage')}}" + "/" + images[i]["image_path"]);
    for (const item of items) {
        item.style.backgroundImage = "url({{asset('/storage')}}" + "/" + images[i]["image_path"] + ")";
        // console.log("{{asset('/storage')}}" + "/" + images[i]["image_path"]);
        // console.log(i);
        i++;
    }
</script>

</html>