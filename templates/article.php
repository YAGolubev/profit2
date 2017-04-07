<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $this->title; ?></title>
    <link rel="stylesheet" href="http://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-toggleable-md navbar-inverse sticky-top bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/index.php">Profit PHP-2</a>
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
        <h1><?php echo $article->title; ?></h1>
        <p><?php echo $article->lead; ?></p>
        <a href="/">Назад</a>
    </div> <!-- /container -->
</body>
</html>