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
            <h1 class="text-center mb-4 p-4 text-secondary">BelanjaBuku.com</h1>
            <div class="row">


                <div class="card-columns">
                    <div class="card shadow border-0">
                        <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Card image cap">
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
                        <img class="card-img-top" src="https://cdn-images-1.medium.com/max/2400/1*-T8oo_JoKkMxfnPKLt_Ciw.jpeg" alt="Card image cap">
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
                        <img class="card-img" src="https://www.unitedparishbrookline.org/sites/default/files/library%20books.jpg" alt="Card image">
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