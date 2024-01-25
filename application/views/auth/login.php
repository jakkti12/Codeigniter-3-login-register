<div class="container">
<div class="text-center mt-5 mb-5">
  <img src="/assets/img/logo.png" class="img-logo-login"/>
</div>
<div class="row justify-content-center">
  <div class="col-md-8 col-lg-6">
  <?php
    $arr = $this->session->flashdata();
    if(!empty($arr['fail_message'])){
        $html = '<div class="alert alert-dismissible fail-change_password" role="alert">';
        $html .= '<i class="fa-solid fa-triangle-exclamation icon-fail-change_password"></i>';
        $html .= '<a class="font-success-change_password">';
        $html .= $arr['fail_message'];
        $html .= '</a>';
        $html .= '</div>';
        echo $html;
    }
    ?>
    <div class="card">
      <div class="card-body">
        <form action="/auth/login" method="post">
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
            <?php echo form_error('email');?>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="d-flex justify-content-between">
            <div class="col-4 mb-3">
              <input class="form-check-input" type="checkbox" value="" id="remember">
              <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <a href="<?php echo base_url('auth/register')?>" class="link-dark">Forgot your password?</a>
          </div>
          <div class="text-center mb-3">
            <input type="submit" value="Login" class="btn btn-primary button-login">
          </div>
          <div class="text-center">
            <a href="<?php echo base_url('')?>" class="link-dark">Go back to homepage</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>