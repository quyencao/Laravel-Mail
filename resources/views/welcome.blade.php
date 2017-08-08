<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="flex-center position-ref full-height">
                @component('components.jumbotron')
                    @slot('title')
                        Welcome to Component
                    @endslot

                    @slot('description')
                        nventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iur
                    @endslot

                    @slot('button')
                        Click Like!
                    @endslot

                    {{-- Fall in default slot -> $slot --}}
                    Other Content
                @endcomponent

                @component('components.jumbotron')
                    @slot('title')
                        Welcome Back
                    @endslot

                    @slot('description')
                        nventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iur
                    @endslot

                    Other Content Back
                @endcomponent

                @component('components.alert')
                    @slot('type')
                       success
                    @endslot

                    @slot('title')
                        SUCCESS
                    @endslot

                    nventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo
                @endcomponent

                @component('components.alert')
                    @slot('type')
                        danger
                    @endslot

                    @slot('title')
                        DANGER
                    @endslot

                    nventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo
                @endcomponent

                @component('components.alert')
                    {{--@slot('type')--}}
                        {{--info--}}
                    {{--@endslot--}}

                    nventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo
                @endcomponent
            </div>
        </div>
    </body>
</html>

