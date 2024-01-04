<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book list</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1 class="fs-4 fw-bold">Book List</h1>
            <div>
                <a href="create.php" class="btn btn-primary">Add New Book</a>
            </div>
        </header>
        <?php
        session_start();
        if(isset($_SESSION["create"])){
            ?>
        <div class="alert alert-success">
            <?php
            echo $_SESSION["create"];
            unset($_SESSION["create"]);
            ?>
        </div>
        <?php
        }
        ?>
        <?php
        if(isset($_SESSION["edit"])){
            ?>
        <div class="alert alert-warning">
            <?php
            echo $_SESSION["edit"];
            unset($_SESSION["edit"]);
            ?>
        </div>
        <?php
        }
        ?>
        <?php
        if(isset($_SESSION["delete"])){
            ?>
        <div class="alert alert-danger">
            <?php
            echo $_SESSION["delete"];
            unset($_SESSION["delete"]);
            ?>
        </div>
        <?php
        }
        ?>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope=" col">Author</th>
                    <th scope="col">Publisher</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connect.php");
                $sql = "SELECT * FROM books";
                $result = mysqli_query($conn,$sql);
                while (
                $row = mysqli_fetch_array($result)
        
                ) {
                    ?>
                <tr>
                    <th scope="row">
                        <?php echo $row["id"];?>
                    </th>
                    <td class="  text-secondary">
                        <?php echo $row["title"];?>
                    </td>
                    <td class="  text-secondary">
                        <?php echo $row["author"];?>
                    </td>
                    <td class=" text-secondary">
                        <?php echo $row["publisher"];?>
                    </td>
                    <td class=" d-flex justify-content-center gap-4">
                        <a href="delete.php?id=<?php echo $row["id"]?>" class=" btn btn-danger">Delete</a>
                        <a href="edit.php?id=<?php echo $row["id"]?>" class="btn btn-info">Edit</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>