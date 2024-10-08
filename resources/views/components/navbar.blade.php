
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <nav class="bg-blue-400">
        <div class="flex justify-between max-w-7xl mx-auto  p-4 text-white font-bold">
            <div>
                <p>Logo</p>
            </div>
            <div class="flex gap-3" >
                <a href="/">Home</a>
                <a href="/">About</a>
                <a href="/">Contact</a>
                <a href="/">Login</a>
            </div>
        </div>      
    </nav>
    {{ $slot }}
</body>
</html>