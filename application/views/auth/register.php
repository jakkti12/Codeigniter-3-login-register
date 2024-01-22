<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="text-center mt-5 mb-5">
      <img src="../../../assets/img/logo.png" style="width: 300px;" />
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="card">
          <div class="card-body">
            <form>
              <div class="row mb-3">
                <div class="col-xs-12 col-sm-6">
                  <label for="inputFirstname" class="form-label">Firstname</label>
                  <input type="text" class="form-control" id="inputFirstname" aria-describedby="emailHelp" />
                </div>
                <div class="col-xs-12 col-sm-6">
                  <label for="inputLastname" class="form-label">Lastname</label>
                  <input type="text" class="form-control" id="inputLastname" />
                </div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <div class="mb-3">
                <label for="conf_password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="conf_password" name="conf_password">
              </div>
              <div class="mb-3">
                <input class="form-check-input" type="checkbox" value="" id="remember">
                <label class="form-check-label" for="remember">
                  Inform me about new features and updates.
                </label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">
                  Confirm
                </button>
              </div>
              <div class="text-center mt-3">
                <a href="#" class="link-dark">Go back to homepage</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../../../assets/js/bootstrap.bundle.js"></script>
</body>

</html>