<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        {{env('APP_NAME')}}
    </title>
</head>

<body>

    <h1>Dashboard</h1>
    
    {{ $slot }}

 


</body>

</html>
