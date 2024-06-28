<?php
include("dbcontions.php");

$id = $_GET['id'];
$update_query = "SELECT * FROM resgiter WHERE id='$id'";
$update_run = $conn->query($update_query);

if ($update_run->num_rows > 0) {
    $row = $update_run->fetch_assoc();
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Record</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="code.php" method="POST">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="update_id" value="<?php echo $row['id']; ?>">
                            <label for="firstname" class="form-label">Firstname</label>
                            <input type="text" class="form-control" name="firstname" value="<?php echo $row['fname']; ?>" id="firstname" required>
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Lastname</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $row['lname']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?php echo $row['password']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="phonenumber" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="<?php echo $row['number']; ?>" required>
                        </div>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                        <button type="submit" name="register-btn-update" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
<?php
} else {
    echo "No data found";
}
?>