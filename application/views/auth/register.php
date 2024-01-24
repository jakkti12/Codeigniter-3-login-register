<div class="container">
	<div class="text-center pt-5 mb-4">
  		<img src="/assets/img/logo.png" class="img-logo-register"/>
	</div>
<!-- form -->
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="card">
          <div class="card-body">
            <form action="/auth/register" method="post">
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
                <button type="submit" class="btn btn-primary button-register">
                  Confirm
                </button>
              </div>
              <div class="text-center pt-2">
                <a href="<?php echo base_url('')?>" class="link-dark">Go back to homepage</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>