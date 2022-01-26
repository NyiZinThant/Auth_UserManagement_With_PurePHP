<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        .warp {
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
        }
    </style>
</head>

<body class="text-center">
    <div class="warp">
        <h1 class="mb-3 h3">Login</h1>
        <?php if (isset($_GET['incorrect'])) : ?>
            <div class="alert alert-warning">
                Incorrect Email or Password
            </div>
        <?php endif ?>
        <form action="_actions/login.php" method="post">
            <input type="text" class="form-control mb-2" name="email" placeholder="Email" required>
            <input type="password" class="form-control mb-2" name="password" placeholder="Password" required>
            <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
            <?php if (isset($_GET['registered'])) : ?>
                <div class="alert alert-success">
                    Account created. Please login.
                </div>
            <?php endif ?>
            <?php if (isset($_GET['suspended'])) : ?>
                <div class="alert alert-danger">
                    Your account is suspended.
                </div>
            <?php endif ?>
        </form>
        <br>
        <a href="register.php">Register</a>
    </div>

</body>

</html>