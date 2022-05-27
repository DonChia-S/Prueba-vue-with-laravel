<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Santiago Chia</title>
        <link rel="icon" href="{{asset('images/logo.png')}}">
        <link href="{{asset('css/app.css')}}" rel="stylesheet"> 
    <body>
            <div id="app" class="content">
                <pm-index></pm-index>
            </div>
        <script src="{{asset('js/app.js')}}"></script> 
    </body>
</html>