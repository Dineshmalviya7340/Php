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
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Firstname</label>
                        <input type="firstname" class="form-control" name="firstname" id="firstname" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Lastname</label>
                        <input type="lastname" class="form-control" id="lastname" name="lastname">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Eamil</label>
                        <input type="lastname" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="lastname" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">phone number</label>
                        <input type="lastname" class="form-control" id="phonenumber" name="phonenumber">
                    </div>
                    <a href="index.php" class="btn btn-danger">cancel</a>
                    <a href="register-edit-html"> <button type="submit" name="ragister-btn" class="btn btn-primary">Submit</button></a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>