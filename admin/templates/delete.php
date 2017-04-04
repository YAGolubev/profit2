<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка | Удаление</title>
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
        <div class="span10 offset1">
            <div class="row">
                <h3>Удаление новости</h3>
            </div>
            <form class="form-horizontal" action="/admin/delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <p class="alert alert-error">Точно удалить?</p>
                <div class="form-actions">
                    <button type="submit" class="btn btn-danger">Да</button>
                    <a class="btn" href="/admin/index.php">Нет</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>