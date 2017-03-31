<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка | Обновить</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Редактирование новости</h1>
        </div>
        <form action="/admin/update.php?id=<?php echo $id; ?>" method="post" role="form" class="form-horizontal">
            <div class="form-group" <?php echo !empty($authorError)?'error':'';?>">
                <label class="col-sm-1" for="inputAuthor">Автор</label>
                <div class="col-sm-5">
                    <input type="text" name="inputAuthor" id="inputAuthor" placeholder="Автор публикации" class="form-control" value="<?php echo $article->author; ?>">
                </div>
                <?php if (!empty($authorError)): ?>
                    <span class="help-block"><?php echo $authorError;?></span>
                <?php endif; ?>
            </div>
    
            <div class="form-group <?php echo !empty($titleError)?'has-error':'';?>">
                <label class="col-sm-1" for="inputTitle">Заголовок</label>
                <div class="col-sm-5">
                    <input type="text" name="inputTitle" id="inputTitle" placeholder="Заголовок публикации" class="form-control" value="<?php echo $article->title; ?>">
                </div>
                <?php if (!empty($titleError)): ?>
                    <span class="help-block"><?php echo $titleError;?></span>
                <?php endif; ?>
            </div>
    
            <div class="form-group <?php echo !empty($leadError)?'has-error':'';?>">
                <label class="col-sm-12" for="textLead">Содержимое статьи</label>
                <div class="col-sm-6">
                    <textarea name="textLead" id="textLead" placeholder="Текст статьи" class="form-control"><?php echo $article->lead; ?></textarea>
                </div>
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
</div> <!-- /container -->
</body>
</html>