<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 70px;
        }
    </style>
</head>
<body role="document">
<div class="container">
    <form action="?a=ajouter" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Slug</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Slug" name="slug">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">H1</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="H1" name="h1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Body</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Body" name="body">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Title</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Title" name="title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Img</label>
            <select name="img" id="exampleInputPassword1" class="form-control">
                <?php foreach ($page as $key) : ?>
                    <option value="<?= $key->img ?>"><?= $key->img ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">span_text</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="span_text" name="span_text">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">span_class</label>
            <select name="span_class" id="exampleInputPassword1" class="form-control">
                <?php foreach ($page as $key) : ?>
                    <option value="<?= $key->span_class ?>"><?= $key->span_class ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body>
</html>