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
            <button type="button" class="btn mr-2">All</button>
            <button type="button" class="btn">New</button>
            <button type="button" class="btn">Music</button>
            <button type="button" class="btn">Gaming</button>
            <button type="button" class="btn">News</button>
            <button type="button" class="btn">Deep House</button>
            <button type="button" class="btn">Christmas Music</button>
            <button type="button" class="btn">Trailers</button>
        </div>


    </body>
</html>
