<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <form action="{{ route('sendmail') }}" method="post">
                <input type="email" name="mail" placeholder="Mail Address">
                <input type="text" name="title" placeholder="Title">
                <button type="submit">Send a mail</button>
                {{ csrf_field()  }}
            </form>
        </div>
    </body>
</html>
