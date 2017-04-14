<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle;?></title>
    <link rel="stylesheet" href="/templates/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-toggleable-md navbar-inverse sticky-top bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/">Profit PHP-2</a>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-success" href="/admin/">Admin</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="error-template text-center">
            <h1>Oops!</h1>
            <h2>404 Not Found</h2>
            <div class="error-details"><?php echo $msg;?></div>
            <div class="error-actions">
                <img src="/templates/img/404.jpg" alt="404" class="img-fluid rounded mx-auto d-block">
                <a href="/" class="btn btn-primary btn-lg mt-2"></span>На главную</a>
            </div>
        </div>
    </div>
</body>
</html>