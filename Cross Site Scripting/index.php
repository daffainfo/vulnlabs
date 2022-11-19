<!DOCTYPE html>
<html lang="en">

<head>
    <title>XSS Labs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="jumbotron text-center">
        <h1>XSS Labs</h1>
        <p>Welcome to XSS Labs, there is 15 labs you can try!</p>
        <p>Try to popup <b>document.domain</b>!</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Lab 1</h5>
                        <p class="card-text">Basic XSS - POST</p>
                        <a href="1" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Lab 2</h5>
                        <p class="card-text">Basic XSS - GET</p>
                        <a href="2" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Lab 3</h5>
                        <p class="card-text">alert, prompt, and what?</p>
                        <a href="3" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Lab 4</h5>
                        <p class="card-text">Base64</p>
                        <a href="4" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Lab 5</h5>
                        <p class="card-text">Escape from tag</p>
                        <a href="5" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Lab 6</h5>
                        <p class="card-text">Escape from comment</p>
                        <a href="6" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Lab 7</h5>
                        <p class="card-text">User Agent</p>
                        <a href="7" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Lab 8</h5>
                        <p class="card-text">Escape from &lt;script&gt; tags</p>
                        <a href="8" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Lab 9</h5>
                        <p class="card-text">Escape from JS variable (1)</p>
                        <a href="9" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Lab 10</h5>
                        <p class="card-text">Escape from JS variable (2)</p>
                        <a href="10" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Lab 11</h5>
                        <p class="card-text">Multi reflection in the same line</p>
                        <a href="11" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Lab 12</h5>
                        <p class="card-text">Escape from if condition</p>
                        <a href="12" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Lab 13</h5>
                        <p class="card-text">Backticks variable</p>
                        <a href="13" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Lab 14</h5>
                        <p class="card-text">Bypass email validation</p>
                        <a href="14" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Lab 15</h5>
                        <p class="card-text">Bypass URL validation</p>
                        <a href="15" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>