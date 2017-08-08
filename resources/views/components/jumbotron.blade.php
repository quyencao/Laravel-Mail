<div class="jumbotron">
    <h1>{{ $title }}</h1> <!-- Title Slot -->
    <p>{{ $description }} <strong>{{ $slot }}</strong></p> <!-- Description Slot And $slot for other content in component -->
    <p><a class="btn btn-primary btn-lg" href="#" role="button">{{ $button or 'Learn More!' }}</a></p>
</div>