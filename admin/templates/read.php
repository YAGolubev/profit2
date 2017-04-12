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
        <h1>Просмотр новости</h1>
        <table class="table table-sm">
            <tbody>
                <tr>
                    <th scope="row">№ п/п</th>
                    <td><?php echo $article->id; ?></td>
                </tr>
                <tr>
                    <th scope="row">Автор</th>
                    <td><?php if(!empty($article->author_id)){ echo $article->author->name; } ?></td>
                </tr>
                <tr>
                    <th scope="row">Заголовок</th>
                    <td><?php echo $article->title; ?></td>
                </tr>
                <tr>
                    <th scope="row">Содержание</th>
                    <td><?php echo $article->lead; ?></td>
                </tr>
            </tbody>
        </table>

        <a class="btn" href="/admin/">Назад</a>
    </div>
</body>
</html>