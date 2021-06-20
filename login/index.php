<?php include "../env.php" ?>
<?php include "../config.php" ?>
<?php include "../profile.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../head.php" ?>
</head>

<body>
    <?php include "../navbar.php" ?>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="card w-50" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">
                <div class="card-header text-center">
                    Login
                </div>
                <div class="card-body">
                    <form action="login.php" method="POST" class="was-validated">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" name="login">login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>