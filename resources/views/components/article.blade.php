<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Pentingnya Pola Tidur yang Sehat</h1>
    @foreach ($articles as $article)
        
    
    <div class="flex">
        <div class="w-1/2">
            <p>{{ $article['teks'] }}</p>
        </div>
    </div>

    @endforeach
</body>
</html>