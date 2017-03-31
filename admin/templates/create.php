<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка | Добавление</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Добавление новости</h1>
        </div>
        <form action="/admin/create.php?io=98" method="get" role="form" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-1" for="inputAuthor">Автор</label>
                <div class="col-sm-5"><input type="text" class="form-control" id="inputAuthor" placeholder="Автор публикации"></div>
                <?php if (!empty($authorError)): ?>
                    <span class="help-block"><?php echo $authorError;?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label class="col-sm-1" for="inputTitle">Заголовок</label>
                <div class="col-sm-5"><input type="text" class="form-control" id="inputTitle" placeholder="Заголовок публикации"></div>
                <?php if (!empty($titleError)): ?>
                    <span class="help-block"><?php echo $titleError;?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label class="col-sm-12" for="textLead">Содержимое статьи</label>
                <div class="col-sm-6"><textarea class="form-control" id="textLead" placeholder="Текст статьи"></textarea></div>
                <?php if (!empty($leadError)): ?>
                    <span class="help-block"><?php echo $leadError;?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-info pull-right">Сохранить</button>
                    <a class="btn pull-right" href="/admin/index.php">Назад</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>