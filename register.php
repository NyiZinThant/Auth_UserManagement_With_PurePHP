<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .wrap {
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
        }
    </style>
</head>

<body class="" text-center>
    <div class="warp">
        <h1 class="h3 mb-3">Register</h1>
        <?php if (isset($_GET['error'])) : ?>
            <div class="alert alert-warning">
                Cannot create acoount. Please try again.
            </div>
        <?php endif ?>
        <form action="_actions/create.php" method="post">
            <input type="text" class="form-control mb-3" name="name" placeholder="Name" required>
            <input type="email" class="form-control mb-3" name="email" placeholder="Email" required>
            <input type="text" class="form-control mb-3" name="phone" placeholder="Phone" require>
            <textarea name="address" class="form-control mb-3" placeholder="Address" required></textarea>
            <input type="password" class="form-control mb-3" name="password" placeholder="Password" required>
            <button type="submit" class="w-100 btn btn-lg btn-primary">
                Register
            </button>
        </form>
        <br>
        <a href="index.php">Login</a>
    </div>
</body>
</html>