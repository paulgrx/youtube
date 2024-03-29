<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    @vite(['resources/sass/add.scss'])

    <title>Document</title>
</head>
<body>
        <div class="container custom-form">
            <form action="{{ route('form') }}" method="post">
                @csrf
            <form>
                <div class="form-group">
                    <input type="url" name="url" class="form-control" id="urlInput" placeholder="Enter URl">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

            @isset($message)
                <div id="output">
                    <p>{{ $message }}</p>
                </div>
            @endisset
        </div>


</body>
</html>
