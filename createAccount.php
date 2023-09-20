<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header text-center">
            <h2>Sign Up</h2>
          </div>
          <div class="card-body">
            <form action="register.php" method="POST">
            <div class="mb-3">
                <label for="firstname" class="form-label">First name:</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
              </div>
              <div class="mb-3">
                <label for="lastname" class="form-label">Last name:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
              </div>
              <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
              <a href="login.php">
                <button type="button" class="btn btn-primary btn-block">Back to login</button>
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Include Bootstrap JavaScript (Popper.js and Bootstrap JS) -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
