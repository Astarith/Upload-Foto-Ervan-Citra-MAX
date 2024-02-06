<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 1 Cisarua</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="container mt-4">
            <h2>Login</h2><br>
            <form action="proses-login.php" method="POST">
                <div class="form-outline mb-4 col-4">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control"/>
                </div>

                <div class="form-outline mb-4 col-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control"/>
                </div>

                <div class="form-outline mb-4 col-4">
                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>