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
        <div class="content">
            <div class="content-header">
<!--                button menu + logo + search + sign in-->

<!--                <nav class="navbar fixed-top navbar-expand-lg bg-light navbar-light">
                    <button class="navbar-toggler collapsed border-0" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                        <span class="navbar-toggler-icon"></span>
                        <div class="close-icon py-1">✖</div>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsingNavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                        </ul>
                    </div>
                </nav>-->


                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Your Brand</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="py-3 mb-3">
                    <div class="d-flex align-items-center">
                        <form class="w-100 me-3" role="search">
                            <input type="search" class="form-control" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
            </div>





            <div class="aside">
<!--                menu aside-->
            </div>
            <div class="video-content">
                <div class="tags">tags</div>
                <div class="items">
<!--                    video items-->
                </div>
            </div>
        </div>

        <div class="all-">
            <div class="sidebar">

                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    <span class="fs-4">YouTube</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">
                            <!--                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>-->
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <!--                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>-->
                            Shorts
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <!--                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>-->
                            Subscriptions
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <!--                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>-->
                            You
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <!--                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>-->
                            History
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
<!--                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">-->
                        <strong>mdo</strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>

            </div>
            <div class="all-content">



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

                <div class="video-container">
                    <div class="row">
                        <div class="col-lg-3">1</div>
                        <div class="col-lg-3">2</div>
                        <div class="col-lg-3">3</div>
                        <div class="col-lg-3">4</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">1</div>
                        <div class="col-lg-3">2</div>
                        <div class="col-lg-3">3</div>
                        <div class="col-lg-3">4</div>
                    </div> <div class="row">
                        <div class="col-lg-3">1</div>
                        <div class="col-lg-3">2</div>
                        <div class="col-lg-3">3</div>
                        <div class="col-lg-3">4</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">1</div>
                        <div class="col-lg-3">2</div>
                        <div class="col-lg-3">3</div>
                        <div class="col-lg-3">4</div>
                    </div> <div class="row">
                        <div class="col-lg-3">1</div>
                        <div class="col-lg-3">2</div>
                        <div class="col-lg-3">3</div>
                        <div class="col-lg-3">4</div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn"></script>

