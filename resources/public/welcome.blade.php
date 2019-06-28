<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('css/stylewelcome.css') }}" rel="stylesheet">

</head>

<body>
    <section class="main">
        <div class="container mt-4">
            <h1 class="text-center mb-4 p-4 text-secondary">From The Blog</h1>
            <div class="row">

                <div class="card-columns">
                    <div class="card shadow border-0">
                        <img class="card-img-top" src="https://4.bp.blogspot.com/-InDD3Hm_bhU/XB4_TK3TT7I/AAAAAAAAAJ4/r5tUeCOqq1MTchFh7D7pWdf582A4qYIIwCEwYBhgL/s1600/Businesswoman-working-at-a-computer-1280x720.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title that wraps to a new line</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <div class="card shadow border-0  p-3">
                        <blockquote class="blockquote mb-0 card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer class="blockquote-footer">
                                <small class="text-muted">
                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                </small>
                            </footer>
                        </blockquote>
                    </div>
                    <div class="card shadow border-0">
                        <img class="card-img-top" src="https://4.bp.blogspot.com/-InDD3Hm_bhU/XB4_TK3TT7I/AAAAAAAAAJ4/r5tUeCOqq1MTchFh7D7pWdf582A4qYIIwCEwYBhgL/s1600/Businesswoman-working-at-a-computer-1280x720.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card shadow border-0 bg-primary text-white text-center p-3">
                        <blockquote class="blockquote mb-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                            <footer class="blockquote-footer">
                                <small>
                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                </small>
                            </footer>
                        </blockquote>
                    </div>
                    <div class="card shadow border-0 text-center">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card shadow border-0">
                        <img class="card-img" src="https://4.bp.blogspot.com/-InDD3Hm_bhU/XB4_TK3TT7I/AAAAAAAAAJ4/r5tUeCOqq1MTchFh7D7pWdf582A4qYIIwCEwYBhgL/s1600/Businesswoman-working-at-a-computer-1280x720.jpg" alt="Card image">
                    </div>
                    <div class="card shadow border-0 p-3 text-right">
                        <blockquote class="blockquote mb-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer class="blockquote-footer">
                                <small class="text-muted">
                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                </small>
                            </footer>
                        </blockquote>
                    </div>
                    <div class="card shadow border-0">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Header -->
    <header class="bg-primary text-center py-5 mb-4">
        <div class="container">
            <h1 class="font-weight-light text-white">Meet the Team</h1>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Team Member 1 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow">
                    <img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Team Member</h5>
                        <div class="card-text text-black-50">Web Developer</div>
                    </div>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow">
                    <img src="https://source.unsplash.com/9UVmlIb0wJU/500x350" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Team Member</h5>
                        <div class="card-text text-black-50">Web Developer</div>
                    </div>
                </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow">
                    <img src="https://source.unsplash.com/sNut2MqSmds/500x350" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Team Member</h5>
                        <div class="card-text text-black-50">Web Developer</div>
                    </div>
                </div>
            </div>
            <!-- Team Member 4 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow">
                    <img src="https://source.unsplash.com/ZI6p3i9SbVU/500x350" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Team Member</h5>
                        <div class="card-text text-black-50">Web Developer</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <blockquote class="blockquote text-center mb-0">
                    <svg class="lnr text-muted quote-icon pull-left">
                        <use xlink:href="#lnr-heart">
                        </use>
                    </svg>
                </blockquote>
            </div>
            <div class="col-md-4">
                <a class="flot-right btn btn-white border-0 rounded shadow post-pager-link p-0 next ml-4" href="">
                    <span class="d-flex h-100">
                        <span class="p-3 d-flex flex-column justify-content-center w-100">
                            <div class="indicator mb-1 text-uppercase text-muted">webublog<i class="fa fa-bars ml-2"></i></div>
                            <p class="f-13">See next awesome themes</p>
                        </span>
                        <span class="bg-primary p-2 d-flex align-items-center text-white">
                            <i class="fa fa-arrow-circle-right"></i>
                        </span>
                    </span>
                </a></div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html> 