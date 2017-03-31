<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка | Статья</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
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
                    <div class="col-lg-10"><?php echo $article->author; ?></div>
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