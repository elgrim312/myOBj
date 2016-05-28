<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body role="document">
<h1 class="text-info" style="text-align: center">ON EST DES ADMINS PUTAIN !!!!!</h1>
<div style="margin-top: 100px;" class="container theme-showcase" role="main">
    <table class="table-bordered table-responsive table">
        <tr>
            <th>ID</th>
            <th>Slug</th>
            <th>Titre</th>
            <th>Action</th>
        </tr>
        <?php foreach ($page as $key) { ?>
        <tr>
            <td><?=$key->id?></td>
            <td><?=$key->title?></td>
            <td><?=$key->slug?></td>
            <td><a href="?a=modifier">m</a> -<a href="?a=ajouter">s</a></td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>