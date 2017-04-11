<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>
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
        <div class="span10 offset1">
            <div class="row">
                <h3>Удаление новости</h3>
            </div>
            <form class="form-horizontal" action="/admin/delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $article->id; ?>"/>
                <p class="alert alert-error">Вы собираетесь удалить запись с ID=<?php echo $article->id; ?>, "<?php echo $article->title; ?>", "<?php echo $article->lead; ?>"</p>
                <p class="alert alert-error">Подтверждаете?</p>
                <div class="form-actions">
                    <button type="submit" class="btn btn-danger">Да</button>
                    <a class="btn" href="/admin/">Нет</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>