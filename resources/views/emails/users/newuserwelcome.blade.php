@component('mail::message')
# Welcome to {{ $user->name }}

Thank for **signing up**. Let us know how we can do more to _please_ you!

@component('mail:panel')
    The email address you signed up with us: {{ $user->email }}
@endcomponent

@component('mail::button', ['url' => 'http://localhost:8000/home', 'color' => 'green'])
Let use our service now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
