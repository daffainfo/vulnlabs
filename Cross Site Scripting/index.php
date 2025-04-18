<!DOCTYPE html>
<html lang="en">

<head>
    <title>XSS Labs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Bootstrap JS dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            transition: transform 0.2s ease;
        }

        .card:hover {
            transform: scale(1.03);
        }

        .card-title {
            font-weight: 600;
        }

        .btn-primary {
            background-color: #0056b3;
            border: none;
        }

        .btn-primary:hover {
            background-color: #003f7f;
        }
    </style>
</head>

<body>

    <div class="jumbotron text-center bg-primary text-white mb-5">
        <h1 class="display-4">XSS Labs</h1>
        <p class="lead">Welcome to XSS Labs! There are 12 labs for you to try.</p>
        <p>Try to pop up <strong><code>document.domain</code></strong>!</p>
    </div>

    <div class="container">
        <div class="row">
            <!-- Lab Cards -->
            <!-- You can loop this in a template engine or manually add more cards below -->
            <!-- Start of Lab Cards -->
            <div class="col-md-3 mb-4" >
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Lab 1</h5>
                        <p class="card-text">Basic XSS - POST</p>
                        <a href="1" class="btn btn-primary btn-block">Try Lab</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Lab 2</h5>
                        <p class="card-text">Basic XSS - GET</p>
                        <a href="2" class="btn btn-primary btn-block">Try Lab</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Lab 3</h5>
                        <p class="card-text">Escape from tag</p>
                        <a href="3" class="btn btn-primary btn-block">Try Lab</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Lab 4</h5>
                        <p class="card-text">Escape from comment</p>
                        <a href="4" class="btn btn-primary btn-block">Try Lab</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Lab 5</h5>
                        <p class="card-text">User Agent</p>
                        <a href="5" class="btn btn-primary btn-block">Try Lab</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Lab 6</h5>
                        <p class="card-text">Escape from &lt;script&gt; tags</p>
                        <a href="6" class="btn btn-primary btn-block">Try Lab</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Lab 7</h5>
                        <p class="card-text">Escape from JS variable (1)</p>
                        <a href="7" class="btn btn-primary btn-block">Try Lab</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Lab 8</h5>
                        <p class="card-text">Escape from JS variable (2)</p>
                        <a href="8" class="btn btn-primary btn-block">Try Lab</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Lab 9</h5>
                        <p class="card-text">Multi reflection in the same line</p>
                        <a href="9" class="btn btn-primary btn-block">Try Lab</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Lab 10</h5>
                        <p class="card-text">Backticks variable</p>
                        <a href="10" class="btn btn-primary btn-block">Try Lab</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Lab 11</h5>
                        <p class="card-text">Bypass email validation</p>
                        <a href="11" class="btn btn-primary btn-block">Try Lab</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Lab 12</h5>
                        <p class="card-text">Bypass URL validation</p>
                        <a href="12" class="btn btn-primary btn-block">Try Lab</a>
                    </div>
                </div>
            </div>
            <!-- End of Lab Cards -->
        </div>
    </div>

</body>
</html>
