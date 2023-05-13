<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar/>
    {{$slot}}
    <x-footer/>
</body>
</html>