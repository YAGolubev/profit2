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
        <div class="row">
            <h1>Редактирование новости</h1>
        </div>
        <form action="/admin/edit/?id=<?php echo $id; ?>" method="post" role="form" class="form-horizontal">
            <div class="form-group" <?php echo !empty($authorError)?'error':''; ?>">
                <label class="col-sm-1" for="inputAuthor">Автор</label>
                <div class="col-sm-5">
                    <input type="text" name="inputAuthor" id="inputAuthor" placeholder="Автор публикации" class="form-control" value="<?php if(!empty($article->author_id)){ echo $article->author->name; } ?>">
                </div>
                <?php if (!empty($authorError)): ?>
                    <span class="help-block"><?php echo $authorError; ?></span>
                <?php endif; ?>
            </div>
    
            <div class="form-group <?php echo !empty($titleError)?'has-error':''; ?>">
                <label class="col-sm-1" for="inputTitle">Заголовок</label>
                <div class="col-sm-5">
                    <input type="text" name="inputTitle" id="inputTitle" placeholder="Заголовок публикации" class="form-control" value="<?php echo $article->title; ?>">
                </div>
                <?php if (!empty($titleError)): ?>
                    <span class="help-block"><?php echo $titleError; ?></span>
                <?php endif; ?>
            </div>
    
            <div class="form-group <?php echo !empty($leadError)?'has-error':''; ?>">
                <label class="col-sm-12" for="textLead">Содержимое статьи</label>
                <div class="col-sm-12">
                    <textarea name="textLead" id="textLead" placeholder="Текст статьи" class="form-control"><?php echo $article->lead; ?></textarea>
                </div>
                <?php if (!empty($leadError)): ?>
                    <span class="help-block"><?php echo $leadError; ?></span>
                <?php endif; ?>
            </div>
    
            <div class="form-group">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-info pull-right">Сохранить</button>
                    <a class="btn pull-right" href="/admin/i">Назад</a>
                </div>
            </div>
        </form>
    </div>
</div> <!-- /container -->
</body>
</html>