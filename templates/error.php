<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle;?></title>
    <link rel="stylesheet" href="/templates/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-toggleable-md navbar-inverse sticky-top bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
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
            <h1><?php echo $msg; ?>!</h1>
            <div class="error-actions">
                <img src="/templates/img/wrong.jpg" alt="wrong" class="img-fluid rounded mx-auto d-block">
            </div>
            <h2>Что-то пошло не так, но мы уже работаем над этим...</h2>
        </div>
    </div>
</body>
</html>