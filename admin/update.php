<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/" rel="stylesheet">
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
        <input type="hidden" value="<?=$detail->id?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Slug</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Slug" name="slug" value="<?=$detail->slug?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">H1</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="H1" name="h1"  value="<?=$detail->h1?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Body</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Body" name="body"  value="<?=$detail->body?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Title</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Title" name="title"  value="<?=$detail->title?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Img</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Img" name="img"  value="<?=$detail->img?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">span_text</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="span_text" name="span_text"  value="<?=$detail->span_text?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">span_class</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="span_class"
                   name="span_class"  value="<?=$detail->span_class?>">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body>
</html>