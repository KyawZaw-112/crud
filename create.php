<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1 class="fs-4 fw-bold">Create Book</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <div class="form-element my-4">
                <input type="text" name="title" class="form-control" placeholder="Book Name">
            </div>
            <div class="form-element my-4">
                <input type="text" name="author" class="form-control" placeholder="Author Name">
            </div>
            <div class="form-element my-4">
                <input type="text" name="publisher" class="form-control" placeholder="Publisher Name">
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" class="btn btn-success" value="Add Book">
            </div>
        </form>
    </div>
</body>

</html>