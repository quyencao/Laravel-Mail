<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Mail</title>
</head>
<body>
    <h1>You got Mail!</h1>
    <p>{{ $title }}</p>
    <p>Here is the image</p>
    <img src="{{ $message->embed('storage/post-sample-image.jpg') }}">
</body>
</html>