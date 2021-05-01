<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/css/admin.css">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/rep.css">
        <title>admin</title>

    </head>
            
            <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>
