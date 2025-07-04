<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>405 - Error</title>
</head>

<body>
    <div class="container text-center">
        <h1 class="display-4">405 - Method Not Allowed</h1>
        <p>The page you tried to access does not support this method.</p>
        <a href="{{ url()->previous() }}" class="btn btn-primary">Go Back</a>
    </div>
</body>

</html>
