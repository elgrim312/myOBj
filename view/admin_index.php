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
<<<<<<< HEAD
            <td><a href="?a=modifier">m</a> -<a href="?a=ajouter">s</a></td>
        </tr>
        <?php } ?>
    </table>
=======
            <td><a href="?a=modifier&id=<?=$key->id?>">-m</a> -<a href="?a=supprimer&id=<?=$key->id?>">s</a> <a
                    href="?a=details&id=<?=$key->id?>">-v</a></td>
        </tr>
        <?php } ?>
    </table>
    <a href="?a=ajouter">++</a>
>>>>>>> e1f7de0640661a942d7de936d8c543180c9d485c
</div>
</body>
</html>