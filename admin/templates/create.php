<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка | Добавление</title>
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
    <div class="container">
        <div class="row">
            <h1>Добавление новости</h1>
        </div>
        <form action="/admin/create.php" method="post" role="form" class="form-horizontal">
            <div class="form-group <?php echo !empty($authorError)?'has-error':''; ?>">
                <label class="col-sm-1" for="inputAuthor">Автор</label>
                <div class="col-sm-5"><input type="text" name="inputAuthor" value="<?php echo $author; ?>" id="inputAuthor" placeholder="Автор публикации" class="form-control"></div>
                <?php if (!empty($authorError)): ?>
                    <span class="help-block"><?php echo $authorError; ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group <?php echo !empty($titleError)?'has-error':''; ?>">
                <label class="col-sm-1" for="inputTitle">Заголовок</label>
                <div class="col-sm-5"><input type="text" name="inputTitle" value="<?php echo $title; ?>" id="inputTitle" placeholder="Заголовок публикации" class="form-control"></div>
                <?php if (!empty($titleError)): ?>
                    <span class="help-block"><?php echo $titleError; ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group <?php echo !empty($leadError)?'has-error':''; ?>">
                <label class="col-sm-12" for="textLead">Содержимое статьи</label>
                <div class="col-sm-6"><textarea name="textLead" id="textLead" value="<?php echo $lead; ?>" placeholder="Текст статьи" class="form-control"></textarea></div>
                <?php if (!empty($leadError)): ?>
                    <span class="help-block"><?php echo $leadError; ?></span>
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