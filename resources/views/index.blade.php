<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        @vite(['resources/sass/app.scss'])

        <title>YouTube</title>
    </head>

    <body>
        <header class="py-3 mb-3">

                <div class="d-flex align-items-center">
                    <form class="w-100 me-3" role="search">
                        <input type="search" class="form-control" placeholder="Search" aria-label="Search">
                    </form>
                </div>
        </header>
        <div class="content">
<!--            <button class="dynamic-button" onclick="alert('Button 1 clicked')">Button 1</button>
            <button class="dynamic-button" onclick="alert('Button 2 clicked')">Button 2</button>-->
            <button type="button" class="btn btn-outline-primary">Primary</button>
            <button type="button" class="btn btn-outline-secondary">Secondary</button>
            <button type="button" class="btn btn-outline-success">Success</button>
            <button type="button" class="btn btn-outline-danger">Danger</button>
            <button type="button" class="btn btn-outline-warning">Warning</button>
            <button type="button" class="btn btn-outline-info">Info</button>
            <button type="button" class="btn btn-outline-light">Light</button>
            <button type="button" class="btn btn-outline-dark">Dark</button>


        </div>


    </body>
</html>
