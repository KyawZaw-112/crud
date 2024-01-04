<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1 class="fs-4 fw-bold">Edit Book</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <?php
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            include("connect.php");
            $sql = "SELECT * FROM books WHERE id=$id";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);
            ?>
        <form action="process.php" method="post">
            <div class="form-element my-4">
                <input type="text" name="title" value="<?php echo $row["title"]?>" class="form-control"
                    placeholder="Book Name">
            </div>
            <div class="form-element my-4">
                <input type="text" name="author" value="<?php echo $row["author"]?>" class="form-control"
                    placeholder="Author Name">
            </div>
            <div class="form-element my-4">
                <input type="text" name="publisher" value="<?php echo $row["publisher"]?>" class="form-control"
                    placeholder="Publisher Name">
            </div>
            <input type="hidden" name="id" value='<?php echo $row["id"] ?>'>
            <div class="form-element my-4">
                <input type="submit" name="edit" class="btn btn-success" value="Edit Book">
            </div>
        </form>
        <?php
        }
        ?>

    </div>
</body>

</html>