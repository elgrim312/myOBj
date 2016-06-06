<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $details->title ?></title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
<div class="container theme-showcase">
    <h1>ID</h1>
    <p><?= $details->id ?></p>
    <h1>title</h1>
    <p><?= $details->title ?></p>
    <h1>body</h1>
    <p><?= $details->body ?></p>
    <h1>RENDU</h1>
</div>
<br>
<div class="container theme-showcase col-md-4" role="main">
    <div class="jumbotron">
        <h1><?= $details->title ?></h1>
        <p><?= $details->h1 ?></p>
        <span class="label <?= $details->span_class ?>"><?= $details->body ?></span>
    </div>
    <img class="img-thumbnail" alt="Iron Maiden" src="<?= $details->img ?>" data-holder-rendered="true">
</div>
<div style="margin-top: 100px;" class="container theme-showcase" role="main">
    <a href="/PooYann/admin/index.php" class="btn btn-default" style="margin-left: 80px">retour page index</a>
</body>
</html>