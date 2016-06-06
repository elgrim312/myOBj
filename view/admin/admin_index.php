<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body role="document">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="">Back Office</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="">Pages</a></li>
            </ul>
        </div>
    </div>
</nav>
<div style="margin-top: 100px;" class="container theme-showcase" role="main">
    <table class="table-bordered table-responsive table">
        <tr>
            <th>ID</th>
            <th>Slug</th>
            <th>Titre</th>
            <th>Action</th>
        </tr>

            <?php
                if (count($page) == 0) : ?>
                    <tr>
                        <td>il n'y a pas de page</td>
                    </tr>
            <?php endif;
            foreach ($page as $key) : ?>
                <tr>
                    <td><?= $key->id ?></td>
                    <td><?= $key->title ?></td>
                    <td><?= $key->slug ?></td>
                    <td>
                        <a href="?a=modifier&id=<?= $key->id ?>" class="btn btn-default">-m</a>
                        <a href="?a=supprimer&id=<?= $key->id ?>" class="btn btn-default">-s</a>
                        <a href="?a=details&id=<?= $key->id ?>" class="btn btn-default">-v</a>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>
    <a href="?a=ajouter" class="btn btn-default">ajouter</a>
    <a href="http://localhost:8888/PooYann?p=<?= $key->title ?>" style="margin-left: 30px" class="btn btn-default">retou au site</a>
</div>
</body>
</html>