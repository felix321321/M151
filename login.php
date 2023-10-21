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
            <h2>Login</h2>
          </div>
          <div class="card-body">
            <form action="db_login.php" method="POST">
              <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input pattern='^[A-Za-z0-9]+' type="text" class="form-control" id="username" name="username" maxlenght="40" value='<?php echo htmlspecialchars($username) ?>' required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input pattern='^[A-Za-z0-9]+' type="password" class="form-control" id="password" name="password" maxlength="30" value='<?php echo htmlspecialchars($password) ?>' required>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
              <a href="createAccount.php">
                <button type="button" class="btn btn-primary btn-block">Sign up</button>
              </a>
            </form>
                
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
