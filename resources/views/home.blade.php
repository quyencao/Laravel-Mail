@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>You are logged in!</p>
                    <a href="{{ route('sendemail') }}" class="btn btn-block btn-primary">Send An Email</a>
                    @if(Auth::user()->notifications)
                        @foreach(Auth::user()->notifications as $notification)
                            {{ $notification->data['name'] }} join with us
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
