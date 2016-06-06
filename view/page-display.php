<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $page->title ?></title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body role="document">
    <?= $nav ?>
    <div class="container theme-showcase" role="main">
        <div class="jumbotron">
            <h1><?= $page->title ?></h1>
            <p><?= $page->h1 ?></p>
            <span class="label <?= $page->span_class ?>"><?= $page->body ?></span>
        </div>
        <img class="img-thumbnail" alt="Iron Maiden" src="<?= $page->img ?>" data-holder-rendered="true">
    </div>
</body>
</html>