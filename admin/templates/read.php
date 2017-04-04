<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка | Статья</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index.php">Profit PHP-2</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <p class="navbar-btn">
                        <a href="/admin/" class="btn btn-success">Admin</a>
                    </p>
                </li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron"></div>
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <h3>Просмотр новости</h3>
            </div>
            <div class="form-horizontal">
                <div class="form-group">
                    <div class="col-lg-2">№ п/п</div>
                    <div class="col-lg-10"><?php echo $article->id; ?></div>
                </div>
                <div class="form-group">
                    <div class="col-lg-2">Автор</div>
                    <div class="col-lg-10"><?php echo $article->author->name; ?></div>
                </div>
                <div class="form-group">
                    <div class="col-lg-2">Заголовок</div>
                    <div class="col-lg-10"><?php echo $article->title; ?></div>
                </div>
                <div class="form-group">
                    <div class="col-lg-2">Текст новости</div>
                    <div class="col-lg-10"><?php echo $article->lead; ?></div>
                </div>
                <div class="form-actions">
                    <a class="btn" href="/admin/index.php">Назад</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>