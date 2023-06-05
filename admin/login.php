<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login</title>
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
</head>

<body>
  <main>
    <form action="admin.php" method="post" class="login-container d-flex gap-3">
      <div class="logo">
        <img src="./assets/images/admin.png" class="w-25" alt="" />
      </div>
      <div>
        <label for="uname" class="form-label">Username</label>
        <input type="text" class="form-control" name="uname" required placeholder="Enter Username" />
      </div>
      <div>
        <label for="psw" class="form-label">Password</label>
        <input type="password" class="form-control" placeholder="Enter Password" name="psw" required />
      </div>
      <button type="submit" class="btn btn-primary">Login</button>

      </div>
    </form>
  </main>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/jquery-3.6.0.min.js"></script>
</body>

</html>