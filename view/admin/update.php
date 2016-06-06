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
    <form action="?a=modifier" method="post">
        <input type="hidden" name="id" value="<?= $detail->id ?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Slug</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Slug" name="slug" value="<?= $detail->slug ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">H1</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="H1" name="h1"  value="<?= $detail->h1 ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Body</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Body" name="body"  value="<?= $detail->body ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Title</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Title" name="title"  value="<?= $detail->title ?>">
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
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="span_text" name="span_text"  value="<?= $detail->span_text ?>">
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
        <a href="/PooYann/admin" style="margin-left: 30px" class="btn btn-default">retou au site</a>
    </form>
</div>
</body>
</html>