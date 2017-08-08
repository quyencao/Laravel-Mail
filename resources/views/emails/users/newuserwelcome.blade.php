@component('mail::message')
# Welcome to my laravel app

Thank for **signing up**. Let us know how we can do more to _please_ you!

@component('mail::button', ['url' => 'http://localhost:8000/home', 'color' => 'green'])
Let use our service now
@endcomponent

@component('mail::panel')
    This is the panel content.
@endcomponent

@component('mail::table')
    | Laravel       | Table         | Example  |
    | ------------- |:-------------:| --------:|
    | Col 2 is      | Centered      | $10      |
    | Col 3 is      | Right-Aligned | $20      |
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
