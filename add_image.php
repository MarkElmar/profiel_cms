<!DOCTYPE html>
<html>
<head>
    <title>Add Image - Profile CMS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container mt-3">
    <form action="php/image.php" method="post" enctype="multipart/form-data" class="w-50 mx-auto text-center">
        <div class="form-group">
            <label for="name">Image Name: </label>
            <input id="name" class="form-control" type="text" name="name" placeholder="Name Your Image..">
        </div>
        <div class="form-group">
            <label for="file">Upload Your Image: </label><br/>
            <input type="file" accept="image/jpeg,image/png,image/gif">
        </div>
        <input type="submit" class="btn btn-success" value="Add">
    </form>
    <?php
    echo password_hash("#1Geheim", PASSWORD_DEFAULT);
    ?>
</div>
</body>
</html>