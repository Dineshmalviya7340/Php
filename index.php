<?php

include("dbcontions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="sec-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 my-5">
                    <div class="card-header">
                        <h3>PHP CRUD
                            <a href="register.php" class="btn btn-primary float-end">Register / ADD</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <?php
                        $register_query = "SELECT * FROM resgiter";
                        $result = mysqli_query($conn, $register_query);
                        if (mysqli_num_rows($result) > 0) {
                        ?>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Phone number</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $row["id"]; ?></th>
                                            <td><?php echo $row["fname"]; ?></td>
                                            <td><?php echo $row["lname"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["password"]; ?></td>
                                            <td><?php echo $row["number"]; ?></td>
                                            <td><a href="register-edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-info">Edit</a></td>
                                            <td>
                                                <form action="code.php" method="POST">
                                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                    <button type="submit" name="delete_button" class="btn btn-danger">DELETE</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        <?php
                        } else {
                            echo "No record found";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>